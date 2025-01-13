

<?php $__env->startSection('content'); ?>

<div class="container py-5">
    <div class="product-show">
        <!-- Gambar Produk -->
        <div class="product-images">
            <div class="grid">
                <img src="<?php echo e($item->image ?? asset('images/ft2.png')); ?>" alt="<?php echo e($product->name); ?>" class="grid-item">
                <img src="<?php echo e($item->image ?? asset('images/ft3.png')); ?>" alt="<?php echo e($product->name); ?>" class="grid-item">
                <img src="<?php echo e($item->image ?? asset('images/bg1.png')); ?>" alt="<?php echo e($product->name); ?>" class="grid-item">
                <img src="<?php echo e($item->image ?? asset('images/ft2.png')); ?>" alt="<?php echo e($product->name); ?>" class="grid-item">
            </div>
        </div>

        <!-- Detail Produk -->
        <div class="product-details">
            <h1 class="product-name"><?php echo e($product->name); ?></h1>
            <p class="product-description"><?php echo e($product->description); ?></p>
            <p class="product-price">$<?php echo e(number_format($product->price, 2)); ?></p>

            <form action="<?php echo e(route('cart.store', ['id' => $product->id])); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">

                <div class="quantity-control">
                    <label for="quantity">Quantity</label>
                    <button type="button" class="quantity-btn" onclick="decrement()">-</button>
                    <input type="number" id="quantity" name="quantity" value="1" min="1" onchange="updateTotal()">
                    <button type="button" class="quantity-btn" onclick="increment()">+</button>
                </div>

                <button type="submit" class="btn-add-to-cart">
                    Add to Cart - $<span id="total"><?php echo e(number_format($product->price, 2)); ?></span>
                    
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
    let price = <?php echo e($product->price); ?>;

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cafe_saya\resources\views/products/show.blade.php ENDPATH**/ ?>