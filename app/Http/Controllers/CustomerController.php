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
            'email' => 'required|email|unique:customers',
            'phone' => 'nullable',
            'address' => 'nullable',
        ]);

        Customer::create($request->all());

     
        return redirect()->route('customer.page')->with('success', 'Customer added successfully!');
    }
   
    

}
