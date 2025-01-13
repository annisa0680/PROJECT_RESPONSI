@extends('layouts.app')

@section('content')

<div class="container py-5">
    <div class="product-show">
        <!-- Gambar Produk -->
        <div class="product-images">
            <div class="grid">
                <img src="{{ $item->image ?? asset('images/ft2.png') }}" alt="{{ $product->name }}" class="grid-item">
                <img src="{{ $item->image ?? asset('images/ft3.png') }}" alt="{{ $product->name }}" class="grid-item">
                <img src="{{ $item->image ?? asset('images/bg1.png') }}" alt="{{ $product->name }}" class="grid-item">
                <img src="{{ $item->image ?? asset('images/ft2.png') }}" alt="{{ $product->name }}" class="grid-item">
            </div>
        </div>

        <!-- Detail Produk -->
        <div class="product-details">
            <h1 class="product-name">{{ $product->name }}</h1>
            <p class="product-description">{{ $product->description }}</p>
            <p class="product-price">${{ number_format($product->price, 2) }}</p>

            <form action="{{ route('cart.store', ['id' => $product->id]) }}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">

                <div class="quantity-control">
                    <label for="quantity">Quantity</label>
                    <button type="button" class="quantity-btn" onclick="decrement()">-</button>
                    <input type="number" id="quantity" name="quantity" value="1" min="1" onchange="updateTotal()">
                    <button type="button" class="quantity-btn" onclick="increment()">+</button>
                </div>

                <button type="submit" class="btn-add-to-cart">
                    Add to Cart - $<span id="total">{{ number_format($product->price, 2) }}</span>
                    
                </button>
            </form>
        </div>
    </div>
</div>


<style>
    .container {
        
        max-width: 900px;
        margin: 0 auto;
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .product-show {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .product-images {
        flex: 1;
    }

    .grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
    }

    .grid-item {
        width: 300px;
        height: 250px;
        border-radius: 5px;
        object-fit: cover;
        background-color:rgb(245, 245, 245);
    }

    .product-details {
        margin-left:50px;
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 5px;
    }

    .product-name {
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .product-description {
        font-size: 1rem;
        color: #555;
        margin-bottom: 10px;
    }

    .product-price {
        font-size: 1.5rem;
        font-weight: bold;
        color: #333;
    }

    .quantity-control {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .quantity-btn {
        background-color: #ddd;
        border: none;
        padding: 5px 10px;
        font-size: 1rem;
        cursor: pointer;
    }

    .quantity-btn:hover {
        background-color: #bbb;
    }

    #quantity {
        width: 50px;
        text-align: center;
        font-size: 1rem;
        border: 1px solid #ddd;
    }

    .btn-add-to-cart {
        margin-top: 50px;
        background-color: black;
        color: white;
        font-size: 1rem;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
    }

    .btn-add-to-cart:hover {
        background-color: #333;
    }
</style>

<script>
    let quantity = document.getElementById('quantity');
    let total = document.getElementById('total');
    let price = {{ $product->price }};

    function increment() {
        quantity.value = parseInt(quantity.value) + 1;
        updateTotal();
    }

    function decrement() {
        if (quantity.value > 1) {
            quantity.value = parseInt(quantity.value) - 1;
            updateTotal();
        }
    }

    function updateTotal() {
        total.textContent = (quantity.value * price).toFixed(2);
    }
</script>
@endsection
