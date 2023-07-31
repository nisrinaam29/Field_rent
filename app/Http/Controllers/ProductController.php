<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showAllproduct()
    {
        $products = Product::all();
        return view('products/index', compact('products'));
    }

    public function index()
    {
        $products = Product::all(); // Fetch data from the database using your Product model
        // dd($products);

        return view('basketball', compact('products')); // Pass the variable as an array to the compact() function
    }
    public function product()
    {
        $products = Product::all(); // Fetch data from the database using your Product model


        return view('product', compact('products')); // Pass the variable as an array to the compact() function
    }

    public function add()
    {
        return view('products/add');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:15|max:255',
            'image_url' => 'required|string|min:15|max:255',
            'price' => 'required|numeric|max:800',
            'description' => 'required|string|min:15|max:500',
            'open_hours' => 'required|string|min:10|max:50',
            'category' => 'required|string|min:5|max:255',
            'location' => 'required|string|min:15|max:255',
            'contact' => 'required|numeric'
        ]);

        Product::create([
            'name' => $request->name,
            'image_url' => $request->image_url,
            'price' => $request->price,
            'description' => $request->description,
            'open_hours' => $request->open_hours,
            'category' => $request->category,
            'location' => $request->location,
            'contact' => $request->contact
        ]);
        return redirect('products/manage')->with('status_sukses', 'produk berhasil di tambahkan');
    }
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products/edit', compact('product'));
        dd($product);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|min:15|max:255',
            'image_url' => 'required|string|min:15|max:255',
            'price' => 'required|numeric|max:800',
            'description' => 'required|string|min:15|max:500',
            'open_hours' => 'required|string|min:10|max:50',
            'category' => 'required|string|min:5|max:255',
            'location' => 'required|string|min:15|max:255',
            'contact' => 'required|numeric'
        ]);

        $product = Product::findOrFail($id);
        $product->update([

            'name' => $request->name,
            'image_url' => $request->image_url,
            'price' => $request->price,
            'description' => $request->description,
            'open_hours' => $request->open_hours,
            'category' => $request->category,
            'location' => $request->location,
            'contact' => $request->contact
        ]); 
        return redirect('products/manage')->with('status_sukses', 'produk berhasil di tambahkan');
    }

    public function destroy($id)
    {
      
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('/products/manage')->with('status_sukses', 'Lapangan berhasil dihapus');
    }
    public function products($id)
    {
        $product = Product::find($id);
    
        if (!$product) {
            // Product with the given ID not found, you can handle this case as needed.
            abort(404);
        }
    
        return view('product', compact('product'));
    }
    
    
}
