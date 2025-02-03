<?php

namespace App\Http\Controllers;

use Razorpay\Api\Api;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class RazorpayController extends Controller
{


    public function checkout(Request $request)
    {
        $totalAmount = $request->totalAmount * 100;
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
        $order = $api->order->create([
            'receipt' => 'order_rcptid_11',
            'amount' => $totalAmount, // Convert amount to paise
            'currency' => 'INR',
        ]);

        return response()->json([
            'order_id' => $order['id'],
            'amount' => $order['amount'],
            'currency' => $order['currency'],
        ]);
    }

    public function verifyPayment(Request $request)
    {

        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

        try {
            $attributes = [
                'razorpay_order_id' => $request->razorpay_order_id,
                'razorpay_payment_id' => $request->razorpay_payment_id,
                'razorpay_signature' => $request->razorpay_signature,
            ];

            $api->utility->verifyPaymentSignature($attributes);

            // Payment is successful
            return response()->json(['message' => 'Payment verified successfully!']);
        } catch (\Exception $e) {
            Log::error('Payment verification failed: ' . $e->getMessage());
            return response()->json(['message' => 'Payment verification failed!'], 400);
        }
    }
}
