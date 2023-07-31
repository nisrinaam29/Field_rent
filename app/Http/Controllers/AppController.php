<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AppController extends Controller
{
    public function index()
    {   
     
        return view('home'); // Pass the variable as an array to the compact() function
    }
}

