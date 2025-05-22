<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Jasa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display the user's cart.
     *
     * @return \Illuminate\Http\Response
     */
        public function uploadDocument(Request $request)
    {
        // Validasi file dokumen
        $request->validate([
            'document' => 'required|mimes:pdf,doc,docx,jpg,png|max:2048',
        ]);

        // Proses upload dokumen
        $document = $request->file('document');
        $path = $document->store('documents', 'public');

        // Simpan path dokumen ke session atau database
        session(['uploaded_document' => $path]);

        // Redirect ke halaman checkout
        return redirect()->route('checkout')->with('success', 'Dokumen berhasil diupload!');
    }
    
     public function index()
    {
        $cartItems = Cart::where('user_id', Auth::id())
            ->with('jasa')
            ->get();
            
        $total = $cartItems->sum(function($item) {
            return $item->price * $item->quantity;
        });
        
        return view('public.pages.cart', compact('cartItems', 'total'));
    }

    /**
     * Add an item to the cart.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'jasa_id' => 'required|exists:jasas,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $jasa = Jasa::findOrFail($request->jasa_id);
        
        // Check if the item already exists in the cart
        $existingItem = Cart::where('user_id', Auth::id())
            ->where('jasa_id', $request->jasa_id)
            ->first();
            
        if ($existingItem) {
            // Update quantity if item already exists
            $existingItem->quantity += $request->quantity;
            $existingItem->save();
        } else {
            // Create new cart item
            Cart::create([
                'user_id' => Auth::id(),
                'jasa_id' => $request->jasa_id,
                'quantity' => $request->quantity,
                'price' => $jasa->harga,
            ]);
        }
        
        return redirect()->route('cart.index')->with('success', 'Layanan berhasil ditambahkan ke keranjang');
    }

    /**
     * Update the specified cart item.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $cartItem = Cart::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();
            
        $cartItem->quantity = $request->quantity;
        $cartItem->save();
        
        return redirect()->route('cart.index')->with('success', 'Keranjang berhasil diperbarui');
    }

    /**
     * Remove the specified cart item.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Cari item di keranjang berdasarkan ID dan user login
        $cartItem = Cart::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        // Hapus item dari keranjang
        $cartItem->delete();

        // Hitung ulang total pembayaran sisa item di keranjang
        $newTotal = Cart::where('user_id', Auth::id())
            ->sum(\DB::raw('price * quantity'));

        // Jika request berasal dari AJAX, kembalikan response JSON
        if (request()->expectsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Item berhasil dihapus dari keranjang',
                'new_total' => number_format($newTotal, 0, ',', '.'),
            ]);
        }

        return redirect()->route('cart.index')->with('success', 'Item berhasil dihapus dari keranjang');
    }
}