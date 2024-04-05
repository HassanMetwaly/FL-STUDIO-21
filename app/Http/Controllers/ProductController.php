<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function show()
    {
        $products = Product::all();
        return view('products' , ['products' => $products]);
    }
    
}
