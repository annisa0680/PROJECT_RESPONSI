<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    // Halaman checkout
    public function index()
    {
        $cartItems = Cart::where('user_id', Auth::id())->with('product')->get();
        $totalPrice = $cartItems->sum(function ($item) {
            return $item->product->price * $item->quantity;
        });

        return view('orders.index', compact('cartItems', 'totalPrice'));
    }

    // Menyimpan order dan shipping information
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'zipcode' => 'required|string|max:20',
        ]);

        $cartItems = Cart::where('user_id', Auth::id())->get();
        if ($cartItems->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty.');
        }

        $totalPrice = $cartItems->sum(function ($item) {
            return $item->product->price * $item->quantity;
        });

        $order = Order::create([
            'user_id' => Auth::id(),
            'total_price' => $totalPrice,
            'status' => 'pending',
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country,
            'zipcode' => $request->zipcode,
            'notes' => $request->notes,
        ]);

        // Tambahkan detail produk ke dalam order jika diperlukan
        foreach ($cartItems as $item) {
            $order->products()->attach($item->product_id, [
                'quantity' => $item->quantity,
                'price' => $item->product->price,
            ]);
        }

        // Hapus semua item di cart setelah order dibuat
        Cart::where('user_id', Auth::id())->delete();

        return redirect()->route('orders.index')->with('success', 'Order placed successfully.');
    }

    // Menampilkan detail order
    public function show($id)
    {
        $order = Order::where('id', $id)
            ->where('user_id', Auth::id())
            ->with('products')
            ->firstOrFail();

        return view('orders.show', compact('order'));
    }
}
