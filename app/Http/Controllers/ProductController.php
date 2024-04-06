<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function show()
    {
        $products = Product::all();
        return view('products' , ['products' => $products]);
    }

    public function show_product($slug)
    {
        $categorys = Category::where('slug', $slug)->first();
        $products = Product::where('category_id', $categorys->id)->get();
        return view('products' , ['products' => $products]);
    }
    
}
