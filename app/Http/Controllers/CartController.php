<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::where('user_id', Auth::id())
                         ->with('product:id,name,price') // Optimalkan relasi
                         ->get();

        return view('cart.index', compact('cartItems'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $existingCartItem = Cart::where('product_id', $validated['product_id'])
                                ->where('user_id', Auth::id())
                                ->first();

        if ($existingCartItem) {
            $existingCartItem->quantity += $validated['quantity'];
            $existingCartItem->save();
        } else {
            Cart::create([
                'product_id' => $validated['product_id'],
                'quantity' => $validated['quantity'],
                'user_id' => Auth::id(),
            ]);
        }

        return redirect()->route('cart.index')->with('success', 'Product added to cart!');
    }
    
    public function add(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        // Validasi jumlah
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        // Tambahkan produk ke keranjang (contoh sederhana)
        Cart::create([
            'product_id' => $product->id,
            'quantity' => $request->quantity,
            'user_id' => auth()->id(), // Jika user login
        ]);

        return redirect()->route('cart.index')->with('success', 'Product added to cart!');
    }

    public function update(Request $request, $id)
    {
        $cartItem = Cart::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $cartItem->update(['quantity' => $request->quantity]);

        return redirect()->route('cart.index')->with('success', 'Cart updated successfully.');
    }

    public function destroy($id)
    {
        $cartItem = Cart::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $cartItem->delete();

        return redirect()->route('cart.index')->with('success', 'Item removed from cart.');
    }

    public function clear()
    {
        Cart::where('user_id', Auth::id())->delete();
        return redirect()->route('cart.index')->with('success', 'All items removed from cart.');
    }
}



