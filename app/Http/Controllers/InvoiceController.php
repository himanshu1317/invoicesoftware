<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use App\Models\Payment;
use Illuminate\Http\Request;
// use Illuminate\Http\DB;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    public function index()
    {
        // Fetch data or pass data to the view
        $invoices = Invoice::all();
        return view('front.blade-page.invoice', compact('invoices')); // Adjust view path as needed
    }

    public function create()
    {
        // Fetch the last invoice
        $lastInvoice = Invoice::latest('id')->first();

        // Generate a new invoice ID
        if ($lastInvoice) {
            $inv_data = 'INV' . str_pad($lastInvoice->id + 1, 6, '0', STR_PAD_LEFT); // Example: INV000002
        } else {
            $inv_data = 'INV000001'; // First invoice ID
        }

        // Fetch data or pass data to the view
        $formdata = Customer::all();
        return view('front.form.new-invoice-form', compact('formdata', 'inv_data')); // Adjust view path as needed
    }






    public function showForm(Request $request, $customer_id = null)
    {
        if ($request->isMethod('post')) {
            return $this->handleInvoiceSubmission($request);
        }

        // GET Request: Show Form with Customer Data (if applicable)
        $customer = $customer_id ? Customer::find($customer_id) : null;
        return view('front.blade-page.invoice-page', compact('customer'));
    }

    private function handleInvoiceSubmission(Request $request)
    {

        // dd($request->all());
        // ✅ Step 1: Validate Request Data
        $validator = Validator::make($request->all(), [
            'customer_id' => 'required|numeric|exists:customers,id',
            'invoice_number' => 'required|string',
            'invoice_date' => 'required|date',
            'due_date' => 'required|date',
            'organization'=> 'required|string',
            'email'=> 'required|email',
            'product_name' => 'required|array|min:1',
            'product_name.*' => 'required|string|max:255',
            'quantity' => 'required|array|min:1',
            'quantity.*' => 'required|integer|min:1',
            'unit_price' => 'required|array|min:1',
            'unit_price.*' => 'required|numeric|min:0',
            'itemdiscount.*' => 'nullable|numeric|min:0',
            'amount' => 'required|array|min:1',
            'amount.*' => 'required|numeric|min:0',
            'total_amount' => 'required|numeric|min:0',
            'status' => 'required|in:paid,unpaid,partial',
            'paid' => 'required|numeric|min:0',
            'balance' => 'required|numeric|min:0',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        try {
            DB::beginTransaction(); // Start database transaction
    
            // ✅ Step 2: Calculate Due Balance
            $customerid = $request->customer_id;
            $paidBalance = $request->paid ?? 0;
            $dueBalance = $request->total_amount - $paidBalance;
    
            // ✅ Step 3: Create Invoice
            $invoice = Invoice::create([
                'customer_id' => $customerid,
                'invoice_number' => $request->invoice_number,
                'invoice_date' => $request->invoice_date,
                'due_date' => $request->due_date,
                'status' => $request->status,
                'total_amount' => $request->total_amount,
                'paid_amount' => $paidBalance,
                'due_amount' => $dueBalance,
                'payment_method' => $request->payment_method,
                'transaction_id' => $request->transaction_id,
                'customer_note' => $request->customer_note,
                'termsConditions' => $request->termsConditions,
            ]);
    
            // ✅ Step 4: Insert Invoice Items Efficiently (Bulk Insert)
            $invoiceItems = [];
            foreach ($request->product_name as $index => $productName) {
                $invoiceItems[] = [
                    'invoice_id' => $invoice->id,
                    'product_id' => $request->product_id[$index] ?? null,
                    'customer_id' => $invoice->customer_id,
                    'product_name' => $productName,
                    'quantity' => $request->quantity[$index],
                    'unit_price' => $request->unit_price[$index],
                    'itemdiscount' => $request->itemdiscount[$index] ?? 0,
                    'itemdiscounttype' => $request->itemdiscounttype[$index] ?? null,
                    'amount' => $request->amount[$index],
                    'created_at' => now(),
                    'updated_at' => now()
                ];
            }
    
            if (!empty($invoiceItems)) {
                // dd($invoiceItems);
                InvoiceItem::insert($invoiceItems); // Bulk Insert for performance
            }
    
            DB::commit(); // Commit transaction
    
           $invoices = Invoice::where('customer_id', $customerid)->latest()->get();
            $invoice->load('items');
    
            return view('front.blade-page.invoice-page', compact('invoices', 'invoice'));
    
        } catch (\Exception $e) {
            DB::rollBack(); // Rollback transaction if an error occurs
            return redirect()->back()->with('error', 'Something went wrong! ' . $e->getMessage());
        }
    }
    
    // Handle the invoice form submissionnamespace App\Http\Controllers;


    // create invoice start

    public function createform()
    {
        $lastInvoice = Invoice::latest('id')->first();

        // Generate a new invoice ID
        if ($lastInvoice) {
            $inv_data = 'INV' . str_pad($lastInvoice->id + 1, 6, '0', STR_PAD_LEFT); // Example: INV000002
        } else {
            $inv_data = 'INV000001'; // First invoice ID
        }

        // Fetch data or pass data to the view
        $formdata = Customer::all();
        return view('front.form.create-invoice', compact('formdata', 'inv_data')); // Adjust view path as needed



    }
}
