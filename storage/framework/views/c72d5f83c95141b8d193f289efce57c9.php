

<?php $__env->startSection('content'); ?>
<div class="cart-container">
    <h1 class="cart-title">Your cart</h1>
    <p class="cart-subtitle">Not ready to checkout? <a href="<?php echo e(route('products.index')); ?>">Continue Shopping</a></p>

    <div class="cart-items">
        <?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="cart-item">
            <div class="cart-item-image">
                <img src="<?php echo e($item->product->image); ?>" alt="<?php echo e($item->product->name); ?>" />
            </div>
            <div class="cart-item-details">
                <h2 class="cart-item-name"><?php echo e($item->product->name); ?></h2>
                <p class="cart-item-quantity">Quantity: <?php echo e($item->quantity); ?></p>
                <p class="cart-item-price">$<?php echo e(number_format($item->product->price, 2)); ?></p>
                <div class="cart-item-actions">
                <form action="<?php echo e(route('cart.destroy', ['id' => $item->id])); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger">Remove</button>
                </form>

                <a href="<?php echo e(route('orders.index', $item->id)); ?>" class="btn-action">
                <button type="submit" class="btn btn-danger">Checkout</button>
                </a>
            </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<style>
    body {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        background-color: #f8f9fa;
        color: #333;
        line-height: 1.6;
        margin: 0;
        padding: 0;
    }

    .cart-container {
        max-width: 1000px;
        margin: 0 auto;
        padding: 40px 20px;
        background-color:rgb(240, 198, 135);
    }

    .cart-title {
        font-size: 48px;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .cart-subtitle {
        font-size: 16px;
        margin-bottom: 40px;
        color: #666;
    }

    .cart-subtitle a {
        color: #333;
        text-decoration: none;
    }

    .cart-subtitle a:hover {
        text-decoration: underline;
    }

    .cart-items {
        display: flex;
        flex-direction: column;
    }

    .cart-item {
        display: flex;
        align-items: flex-start;
        padding: 30px 0;
        border-top: 5px solid #e0e0e0;
    }

    .cart-item-image {
        width: 150px;
        height: 200px;
        background-color: #e0e0e0;
        margin-right: 30px;
    }

    .cart-item-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .cart-item-details {
        flex: 1;
    }

    .cart-item-name {
        font-size: 24px;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .cart-item-quantity,
    .cart-item-price {
        font-size: 16px;
        margin: 5px 0;
        color: #666;
    }

    .cart-item-actions {
        display : flex;
        gap: 10px; 
        margin-top: 15px;
    }

    .btn-action {
        color: #333;
        text-decoration: none;
        font-size: 14px;
        margin-right: 20px;
    }

    .btn-action:hover {
        text-decoration: underline;
    }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cafe_saya\resources\views/cart/index.blade.php ENDPATH**/ ?>