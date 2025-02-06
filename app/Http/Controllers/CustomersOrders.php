<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class CustomersOrders extends Controller
{
    //

    public function viewOrders()
    {
        $customers = User::where('role', 'customer')->get();
        $orders = Order::with('foodslist.image')->with('userData')->get();
        return view('admin.view_orders', compact('orders'));
    }
}
