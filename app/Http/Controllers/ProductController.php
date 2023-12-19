<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        // Validation

    Product::create([
    'name' => $request->input('name'),
    'amount' => $request->input('amount'),
        ]);

        return redirect('/')->with('success', 'Product created successfully.');
    }
}
