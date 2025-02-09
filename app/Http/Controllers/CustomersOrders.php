<?php

namespace App\Http\Controllers;

use App\Models\Foods;
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

    public function viewOrder(String $id)
    {
        $order = Order::with('foodslist.image')->with('userData')->where('id', $id)->first();
        return view('admin.view_order', compact('order'));
    }


    public function cancelOrders(Request $request)
    {

        foreach ($request->itemsList as $key => $item) {
            $food = Foods::find($item);
            $food->delete();
            // echo $item;
        }

        return ;


        if ($food) {
            return response()->json([
                'status' => true,
                'message' => 'Order cancelled successful',
            ], 200);
        }

        return response()->json([
            'status' => false,
            'message' => 'Please try again',
        ], 404);
    }
}
