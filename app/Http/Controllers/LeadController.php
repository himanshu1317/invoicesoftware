<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function index()
    {
        // Fetch data or pass data to the view
   
        return view('front.lead-manager.lead-dashboard'); // Adjust view path as needed
    }
}
