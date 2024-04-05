<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{


    public function index()
    {
        $categories = Category::all();

        return view('index' , ['categories' => $categories]);
    }

    public function login()
    {

        return view('auth.login');
    }

}
