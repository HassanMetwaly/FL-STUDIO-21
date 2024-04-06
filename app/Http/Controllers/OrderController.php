<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store()
    {
        $attretubtes = request()->validate([
            'first_name' => 'required',
            'middle_name' => 'nullable',
            'mobile' => 'required',
            'user_roplox' => 'nullable',
            'id_product' => 'required'
        ]);

        Order::create($attretubtes);
        return redirect('/products');
    }
}
