<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
        // Fetch data or pass data to the view
        $customers = Customer::all();
        return view('front.blade-page.customer-list',compact('customers')); // Adjust view path as needed
    }
    public function create()
    {
        // Fetch data or pass data to the view
        return view('front.blade-page.add-customer-form'); // Adjust view path as needed
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'nullable',
            'address' => 'nullable',
        ]);
    
        // Insert data into the customers table
        Customer::create($request->all());
    
        // Return the same view with a success message
        return back()->with('success', 'Customer added successfully!');
    }
    
    public function getCustomerDetails($id)
    {
        $customer = Customer::find($id); // Fetch customer by ID
    
        if ($customer) {
            return response()->json([
                'email' => $customer->email,
                'phone' => $customer->phone,
                'address' => $customer->address,
                'school_company_name'=>$customer->company_school_name,
            ]);
        }
    
        return response()->json(['error' => 'Customer not found'], 404);
    }
    
    

}
