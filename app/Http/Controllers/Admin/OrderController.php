<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    /**
     * Display a listing of all orders.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::with(['user', 'orderItems.jasa'])
            ->orderBy('created_at', 'desc')
            ->paginate(10);
            
        return view('admin.pages.orders.index', [
            'orders' => $orders,
            'title' => 'Daftar Pesanan'
        ]);
    }
    
    /**
     * Display the specified order.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        $order->load(['user', 'orderItems.jasa']);
        
        return view('admin.pages.orders.show', [
            'order' => $order,
            'title' => 'Detail Pesanan #' . $order->id
        ]);
    }
    
    /**
     * Update the order status.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function updateStatus(Request $request, Order $order)
    {
        $request->validate([
            'status' => 'required|in:Pending,Processing,Completed,Cancelled',
        ]);
        
        $order->status = $request->status;
        $order->save();
        
        return redirect()->route('admin.orders.show', $order)
            ->with('success', 'Status pesanan berhasil diperbarui');
    }
    
    /**
     * Update the order analysis.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function updateAnalysis(Request $request, Order $order)
    {
        $order->analysis = $request->analysis;
        
        // Automatically update status to Processing when analysis is added
        if (!empty($request->analysis) && $order->status == 'Pending') {
            $order->status = 'Processing';
        }
        
        if ($request->hasFile('attachment')) {
            // Delete old attachment if exists
            if ($order->attachment_path) {
                Storage::delete($order->attachment_path);
            }
            
            // Store new attachment
            $path = $request->file('attachment')->store('order-attachments', 'public');
            $order->attachment_path = 'storage/' . $path;
        }
        
        $order->save();
        
        return redirect()->route('admin.orders.show', $order)
            ->with('success', 'Analisis pesanan berhasil disimpan dan status diperbarui');
    }
    
    /**
     * Mark an order as completed.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function complete(Order $order)
    {
        $order->status = 'Completed';
        $order->save();
        
        return redirect()->route('admin.orders.index')
            ->with('success', 'Pesanan berhasil diselesaikan');
    }
}