<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CatController extends Controller
{
    public function index()
    {   
        $products = Product::all(); // Fetch data from the database using your Product model
        // dd($products);
     
        return view('basketball', compact('products')); // Pass the variable as an array to the compact() function
    }
}
