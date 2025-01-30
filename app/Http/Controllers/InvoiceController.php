<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class InvoiceController extends Controller
{
    public function index()
    {
        // Fetch data or pass data to the view
      $invoice = Invoice::all();
        return view('front.blade-page.invoice',compact('invoice')); // Adjust view path as needed
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
        return view('front.form.new-invoice-form',compact('formdata','inv_data')); // Adjust view path as needed
    }

  

    
        // Display the invoice form with customers
        public function showForm()
        {
            // Fetch all customers for dropdown
            $formdata = Customer::all();
            $inv_data = Invoice::generateInvoiceNumber(); // Assume you have this logic in your Invoice model
    
            return view('invoice.form', compact('formdata', 'inv_data'));
        }
    
        // Handle the invoice form submissionnamespace App\Http\Controllers;


// create invoice start

public function createform()
{
    $formdata = Customer::all();
    
        return view('front.form.create-invoice', compact('formdata')); // Create a Blade file for this form
}






}

        
        
    
    


