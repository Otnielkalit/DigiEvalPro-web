<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    /**
     * Display the checkout page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartItems = Cart::where('user_id', Auth::id())
            ->with('jasa')
            ->get();
            
        $total = $cartItems->sum(function($item) {
            return $item->price * $item->quantity;
        });
        
        if ($cartItems->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'Keranjang belanja Anda kosong');
        }
        
        $title = 'Checkout'; // Define the title variable for the view
        
        return view('public.pages.checkout', compact('cartItems', 'total', 'title'));
    }
    
    /**
     * Process the checkout.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function process(Request $request)
    {
        // Get cart items
        $cartItems = Cart::where('user_id', Auth::id())
            ->with('jasa')
            ->get();
        
        if ($cartItems->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'Keranjang belanja Anda kosong');
        }
        
        // Calculate total
        $total = $cartItems->sum(function($item) {
            return $item->price * $item->quantity;
        });
        
        // Create order
        $order = Order::create([
            'user_id' => Auth::id(),
            'total' => $total,
            'status' => 'Pending',
        ]);
        
        // Create order items
        foreach ($cartItems as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'jasa_id' => $item->jasa_id,
                'quantity' => $item->quantity,
                'price' => $item->price,
            ]);
        }
        
        // Clear the cart
        Cart::where('user_id', Auth::id())->delete();
        
        // Redirect to orders page
        return redirect()->route('orders.index')->with('success', 'Pesanan Anda berhasil diproses. Terima kasih telah berbelanja!');
    }
}