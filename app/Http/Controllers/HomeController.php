<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Ambil semua data produk
        $products = Product::all();

        // Ambil semua data kategori
        $categories = Category::all();

        // Jika user login, ambil jumlah item di keranjang
        $cartCount = 0;
        if (Auth::check()) {
            $cartCount = Cart::where('user_id', Auth::id())->count();
        }

        // Kirim data ke view home
        return view('home', [
            'products' => $products,
            'categories' => $categories,
            'cartCount' => $cartCount,
        ]);
    }
}



