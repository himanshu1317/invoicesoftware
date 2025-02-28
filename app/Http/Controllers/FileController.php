<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index()
    {
        // Fetch data or pass data to the view

        return view('front.file-manager.file-manager'); // Adjust view path as needed
    }
}
