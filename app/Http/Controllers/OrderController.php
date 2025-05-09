<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the user's orders.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::where('user_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->get();
            
        return view('public.pages.orders', compact('orders'));
    }

    /**
     * Display the specified order.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        // Make sure the user can only view their own orders
        if ($order->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }
        
        // Load the order items with their related jasa
        $order->load('orderItems.jasa');
        
        return view('public.pages.order-detail', compact('order'));
    }
}