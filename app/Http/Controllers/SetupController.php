<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class SetupController extends Controller
{
    /**
     * Display a listing of the companies.
     */
    public function index()
    {
        // $companies = Company::all();
        return view('front.form.set-up');
    }

    
    public function store(Request $request)
    {


        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string',
            'gst_number' => 'nullable|string|max:50',
            'website' => 'nullable|string|max:100',
            'alt_number' => 'nullable|string|max:100',
            'registration_no' => 'nullable|string|max:100',
            'financial_year' => 'nullable|string|max:100',
            // 'website' => 'nullable|string|max:100'
                ]);

        Company::create($validated);
        return redirect(route('register'));

    }


}