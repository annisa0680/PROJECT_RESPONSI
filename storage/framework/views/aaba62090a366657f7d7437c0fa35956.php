

<?php $__env->startSection('content'); ?>
<div class="container py-5">
    <h1 class="mb-4">Checkout</h1>

    <div class="row">
        <!-- Shipping Information -->
        <div class="col-md-7">
            <h4>Shipping Information</h4>
            <form action="<?php echo e(route('orders.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>
                <div class="mb-3">
                    <label for="apartment" class="form-label">Apartment, suite, etc (optional)</label>
                    <input type="text" class="form-control" id="apartment" name="apartment">
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" name="city" required>
                    </div>
                    <div class="col-md-6">
                        <label for="country" class="form-label">Country</label>
                        <select class="form-control" id="country" name="country" required>
                            <option value="USA">USA</option>
                            <option value="Canada">Canada</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="zipcode" class="form-label">Zipcode</label>
                        <input type="text" class="form-control" id="zipcode" name="zipcode" required>
                    </div>
                    <div class="col-md-6">
                        <label for="notes" class="form-label">Notes (optional)</label>
                        <textarea class="form-control" id="notes" name="notes" rows="1"></textarea>
                    </div>
                </div>
                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" id="save_contact" name="save_contact">
                    <label class="form-check-label" for="save_contact">
                        Save contact information
                    </label>
                </div>
                <button type="submit" class="btn btn-dark w-100">Continue to shipping</button>
            </form>
        </div>

        <!-- Cart Summary -->
        <div class="col-md-5">
            <h4>Your Cart</h4>
            <div class="cart-items">
                <?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex align-items-center">
                        <img src="<?php echo e($item->product->image); ?>" alt="<?php echo e($item->product->name); ?>" class="img-thumbnail me-3" style="width: 80px;">
                        <div>
                            <h6 class="mb-0"><?php echo e($item->product->name); ?></h6>
                            <small>Size: <?php echo e($item->product->size); ?></small><br>
                            <small>Quantity: <?php echo e($item->quantity); ?></small><br>
                            <small>by <?php echo e($item->product->vendor); ?></small>
                        </div>
                    </div>
                    <div>
                        <p class="mb-0">$<?php echo e(number_format($item->product->price * $item->quantity, 2)); ?></p>
                        <a href="<?php echo e(route('cart.destroy', $item->id)); ?>" class="text-danger">Remove</a>
                    </div>
                </div>
                <hr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <!-- Order Summary -->
            <div class="mt-4">
                <h6>Order Summary</h6>
                <div class="d-flex justify-content-between">
                    <p>Subtotal</p>
                    <p>$<?php echo e(number_format($totalPrice, 2)); ?></p>
                </div>
                <div class="d-flex justify-content-between">
                    <p>Shipping</p>
                    <p>Calculated at the next step</p>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <h6>Total</h6>
                    <h6>$<?php echo e(number_format($totalPrice, 2)); ?></h6>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cafe_saya\resources\views/orders/index.blade.php ENDPATH**/ ?>