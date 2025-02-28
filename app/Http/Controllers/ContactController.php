<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        // Fetch data or pass data to the view
   $customerdata = Customer::all();
        return view('front.contact-manager.contact-dashboard',compact('customerdata')); // Adjust view path as needed
    }
}
