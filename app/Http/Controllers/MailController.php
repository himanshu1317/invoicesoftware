<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function index()
    {
        // Fetch data or pass data to the view

        return view('front.mail-manager.mail-manager'); // Adjust view path as needed
    }
}
