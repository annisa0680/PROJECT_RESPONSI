<?php $__env->startSection('content'); ?>
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
        background-color: #f5f7ff;
        font-family: system-ui, -apple-system, 'Segoe UI', Roboto, sans-serif;
    }

    .container {
        display: flex;
        width: 1000px;
        max-width: 100%;
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        margin: 20px;
    }

    .left {
        flex: 1;
        background: rgb(249, 249, 249);
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 40px;
    }

    .left img {
        max-width: 100%;
        height: auto;
    }

    .right {
        flex: 1;
        padding: 48px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .right h1 {
        font-size: 30px;
        font-weight: 600;
        color: #1a1a1a;
        margin: 0 0 8px 0;
    }

    .right p {
        font-size: 16px;
        color: #666;
        margin: 0 0 32px 0;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-control {
        width: 100%;
        padding: 12px 16px;
        border: 1px solid #e1e1e1;
        border-radius: 8px;
        font-size: 15px;
        transition: border-color 0.2s;
        box-sizing: border-box;
    }

    .form-control:focus {
        outline: none;
        border-color: #4285f4;
        box-shadow: 0 0 0 4px rgba(66, 133, 244, 0.1);
    }

    .btn {
        width: 100%;
        padding: 12px;
        background-color: #4285f4;
        color: white;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        font-weight: 500;
        cursor: pointer;
        transition: background-color 0.2s;
        margin-bottom: 24px;
    }

    .btn:hover {
        background-color: #3367d6;
    }

    .auth-links {
        text-align: center;
        font-size: 15px;
        color: #666;
    }

    .auth-links a {
        color: #4285f4;
        text-decoration: none;
        font-weight: 500;
    }

    .auth-links a:hover {
        text-decoration: underline;
    }

    .back-link {
        text-align: left;
        margin-bottom: 20px;
    }

    .back-link a {
        font-size: 14px;
        color: #4285f4;
        text-decoration: none;
    }

    .back-link a:hover {
        text-decoration: underline;
    }
</style>

<div class="container">
    <div class="left">
        <img src="/images/logo.png" alt="Illustration" />
    </div>
    <div class="right">
        <div class="back-link">
            <a href="<?php echo e(route('login')); ?>">&larr; Back to login</a>
        </div>
        <h1>Forgot your password?</h1>
        <p>Don't worry, happens to all of us. Enter your email below to recover your password</p>
        
        <form method="POST" action="<?php echo e(route('password.email')); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                    name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus 
                    placeholder="E-Mail">
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <button type="submit" class="btn">Submit</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cafe_saya\resources\views/auth/passwords/email.blade.php ENDPATH**/ ?>