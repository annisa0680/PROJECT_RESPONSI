<?php $__env->startSection('styles'); ?>
<style>
    
    /* Reset & Base Styles */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Inter', sans-serif;
        color: #4A4A4A;
    }

    /* Navigation */
    .dropdown {
    position: relative;
    display: inline-block;
}

    .dropdown-menu {
        display: none;
        position: absolute;
        right: 0;
        background-color: #fff;
        min-width: 50px; /* Ubah ukuran sesuai keinginan */
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
        border-radius: 8px;
        overflow: hidden;
        z-index: 1;
        padding: 8px 0;
    }

    .dropdown:hover .dropdown-menu {
        display: block;
    }

    .dropdown-item {
        padding: 8px 12px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #333;
        text-decoration: none;
        font-size: 18px;
        transition: background-color 0.2s;
    }

    .dropdown-item:hover {
        background-color: #f0f0f0;
    }

    .dropdown-item i {
        font-size: 20px;
        color: #333;
    }
    .nav-container {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(5px);
        z-index: 1000;
        padding: 1rem 5%;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .nav-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 1400px;
        margin: 0 auto;
        height: 60px;
    }

    .nav-logo {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        text-decoration: none;
    }

    .nav-logo img {
        height: 40px;
        width: auto;
    }

    .nav-logo span {
        font-size: 1.2rem;
        font-weight: 700;
        color: #4A4A4A;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .nav-links {
        display: flex;
        gap: 2.5rem;
        list-style: none;
        margin: 0 2rem;
    }

    .nav-link {
        text-decoration: none;
        color: #4A4A4A;
        font-weight: 500;
        font-size: 0.95rem;
        transition: color 0.3s ease;
        padding: 0.5rem;
        position: relative;
    }

    .nav-link::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 2px;
        background: #B8860B;
        transition: width 0.3s ease;
    }

    .nav-link:hover::after,
    .nav-link.active::after {
        width: 100%;
    }

    .nav-link:hover {
        color: #B8860B;
    }

    .nav-icons {
        display: flex;
        gap: 1.5rem;
        align-items: center;
    }

    .nav-icon {
        color: #4A4A4A;
        font-size: 1.25rem;
        cursor: pointer;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .nav-icon:hover {
        color: #B8860B;
        transform: scale(1.1);
    }

    /* Hero Section */
    .hero {
        height: 100vh;
        background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)),
                url('/images/bg1.png') center/cover;
        display: flex;
        align-items: center;
        padding: 0 5%;
        margin-top: 60px;
    }

    .hero-content {
        background: rgba(255, 255, 255, 0.95);
        padding: 3rem;
        border-radius: 15px;
        max-width: 500px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 1s ease forwards;
    }

    .new-arrival {
        color: #B8860B;
        font-size: 1rem;
        font-weight: 600;
        margin-bottom: 1rem;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .hero-title {
        font-size: 3rem;
        color: #4A4A4A;
        margin-bottom: 1.5rem;
        line-height: 1.2;
    }

    .hero-text {
        color: #666;
        margin-bottom: 2rem;
        line-height: 1.6;
    }

    .btn-primary {
        background: #B8860B;
        color: white;
        padding: 1rem 2.5rem;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
    }

    .btn-primary:hover {
        background: #986c07;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(184,134,11,0.3);
    }

    /* Menu Section */
    .menu-section {
        padding: 6rem 5%;
        text-align: center;
        background: #FFF8E7;
    }

    .section-title {
        font-size: 2.5rem;
        color: #4A4A4A;
        margin-bottom: 1rem;
        opacity: 0;
        transform: translateY(20px);
    }

    .section-subtitle {
        color: #666;
        margin-bottom: 4rem;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
        opacity: 0;
        transform: translateY(20px);
    }

    .menu-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        max-width: 1400px;
        margin: 0 auto;
    }

    .menu-card {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: transform 0.3s ease;
        opacity: 0;
        transform: translateY(20px);
    }

    .menu-card:hover {
        transform: translateY(-10px);
    }

    .menu-image {
        position: relative;
        padding-top: 75%;
    }

    .menu-image img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .menu-badge {
        position: absolute;
        top: 1rem;
        right: 1rem;
        background: #B8860B;
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 25px;
        font-size: 0.875rem;
        font-weight: 500;
    }

    .menu-info {
        padding: 1.5rem;
        text-align: left;
    }

    .menu-name {
        font-size: 1.25rem;
        color: #4A4A4A;
        margin-bottom: 0.5rem;
    }

    .menu-price {
        color: #B8860B;
        font-weight: 600;
        font-size: 1.125rem;
    }

    /* Story Section */
    .story-section {
        padding: 6rem 5%;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 4rem;
        align-items: center;
        max-width: 1400px;
        margin: 0 auto;
    }

    .story-content {
        opacity: 0;
        transform: translateX(-20px);
    }

    .story-images {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1rem;
        opacity: 0;
        transform: translateX(20px);
    }

    .story-image {
        border-radius: 15px;
        overflow: hidden;
    }

    .story-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .story-image:hover img {
        transform: scale(1.05);
    }

    /* Instagram Section */
    .instagram-section {
        padding: 6rem 5%;
        text-align: center;
        background: #FFF8E7;
    }

    .instagram-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 1rem;
        max-width: 1400px;
        margin: 0 auto;
    }

    .instagram-item {
        position: relative;
        padding-top: 100%;
        border-radius: 15px;
        overflow: hidden;
        opacity: 0;
        transform: scale(0.9);
    }

    .instagram-item img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .instagram-item:hover img {
        transform: scale(1.05);
    }

    /* Footer */
    .footer {
        background: #4A4A4A;
        color: white;
        padding: 4rem 5%;
    }

    .footer-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 2rem;
        max-width: 1400px;
        margin: 0 auto;
    }

    .footer-column h3 {
        color: #B8860B;
        margin-bottom: 1.5rem;
        font-size: 1.25rem;
    }

    .footer-links {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
    }

    .footer-link {
        color: #DDD;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .footer-link:hover {
        color: #B8860B;
    }

    .newsletter-input {
        background: rgba(255,255,255,0.1);
        border: 1px solid rgba(255,255,255,0.2);
        padding: 0.75rem;
        border-radius: 8px;
        color: white;
        margin-bottom: 1rem;
        width: 100%;
    }

    .newsletter-input::placeholder {
        color: rgba(255,255,255,0.5);
    }
    
    .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 60px;
        }

        .header h1 {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .header p {
            color: #666;
            max-width: 600px;
            margin: 0 auto 30px;
        }

        .categories-shop-btn {
            display: inline-block;
            padding: 12px 40px;
            border: 2px solid #000;
            background: transparent;
            color: #000;
            text-decoration: none;
            margin: 0 auto;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .categories-shop-btn:hover {
            background: #000;
            color: #fff;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }
        .products-grid2 {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
        }

        .product-card {
            display: flex;
            flex-direction: column;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-10px);
        }

        .product-card:active {
            transform: translateY(2px);
        }

        .product-image {
            aspect-ratio: 1;
            background-size: cover;
            background-position: center;
            margin-bottom: 20px;
            border-radius: 4px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: box-shadow 0.3s ease;
        }

        .product-card:hover .product-image {
            box-shadow: 0 10px 15px rgba(0,0,0,0.2);
        }

        .product-name {
            font-size: 18px;
            font-weight: 500;
            margin-bottom: 8px;
        }

        .product-price {
            font-size: 16px;
        }

        
    /* Animations */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInLeft {
        from {
            opacity: 0;
            transform: translateX(-20px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeInRight {
        from {
            opacity: 0;
            transform: translateX(20px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes scaleIn {
        from {
            opacity: 0;
            transform: scale(0.9);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
        .nav-links {
            display: none;
        }

        .story-section {
            grid-template-columns: 1fr;
        }

        .story-images {
            order: -1;
        }
    }

    @media (max-width: 768px) {
        .hero-content {
            padding: 2rem;
            margin: 0 1rem;
        }

        .hero-title {
            font-size: 2rem;
        }

        .section-title {
            font-size: 2rem;
        }

        .menu-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('icons'); ?>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Navigation -->
<nav class="nav-container">
    <div class="nav-content">
        <a href="/" class="nav-logo">
            <img src="<?php echo e(asset('images/logo2.png')); ?>" alt="EXCoffee Corner">
            <span>EXCoffee Corner</span>
        </a>
        <ul class="nav-links">
            <li><a href="/" class="nav-link active">Home</a></li>
            <li><a href="#menu" class="nav-link">Menu</a></li>
            <li><a href="#categories" class="nav-link">Categories</a></li>
            <li><a href="#order" class="nav-link">Order Now</a></li>
        </ul>
        <div class="nav-icons">
            <?php if(auth()->guard()->check()): ?>
            <!-- Cart Icon -->
            <a href="<?php echo e(route('cart.index')); ?>" class="nav-link">
                <i class='bx bx-cart-alt'></i>
                <span class="cart-count"><?php echo e($cartCount); ?></span> <!-- Menampilkan jumlah item di keranjang -->
            </a>
            <div class="dropdown">
                <i class="bx bx-user nav-icon dropdown-toggle" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false"></i>
                <ul class="dropdown-menu" aria-labelledby="userDropdown">
                    <li>
                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                        </a>
                    </li>
                </ul>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo csrf_field(); ?>
                </form>
            </div>
            <?php else: ?>
            <a href="<?php echo e(route('login')); ?>" class="nav-link">Login</a>
            <a href="<?php echo e(route('register')); ?>" class="nav-link">Sign Up</a>
            <?php endif; ?>
        </div>  
    </div>
</nav>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <p class="new-arrival">New Arrival</p>
        <h1 class="hero-title">Discover Our New Coffee Collection</h1>
        <p class="hero-text">Nikmati pengalaman kopi terbaik dengan koleksi biji kopi pilihan kami yang baru saja dipanggang.</p>
        <a href="#menu" class="btn-primary">Pesan Sekarang</a>
    </div>
</section>

<!-- Menu Section -->
<section id="menu" class="products-section">
    <div class="container">
        <header class="header">
            <h1>Our Menu</h1>
        </header>
        <div class="products-grid2">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="product-card">
                    <div class="product-image" style="background-image: url('<?php echo e($product->image); ?>')"></div>
                    <h2 class="product-name"><?php echo e($product->name); ?></h2>
                    <p class="product-price">$<?php echo e($product->price); ?></p>
                    <a href="<?php echo e(route('products.show', $product->id)); ?>" class="btn-primary">View Details</a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<!-- Categories Section -->
<section id="categories" class="categories-section">
    <div class="container">
        <header class="header">
            <h1>Categories</h1>
        </header>
        <div class="categories-grid">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="category-card">
                    <h2 class="category-name"><?php echo e($category->name); ?></h2>
                    <a href="<?php echo e(route('categories.show', $category->id)); ?>" class="btn-primary">View Products</a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="footer-grid">
        <div class="footer-column">
            <h3>EXCoffee Corner</h3>
            <p>Jl. Kopi Nikmat No. 123<br>Jakarta Selatan, Indonesia</p>
        </div>
        <div class="footer-column">
            <h3>Category</h3>
            <div class="footer-links">
                <a href="#" class="footer-link">Kopi</a>
                <a href="#" class="footer-link">Makanan</a>
                <a href="#" class="footer-link">Merchandise</a>
                <a href="#" class="footer-link">Promo</a>
            </div>
        </div>
        <div class="footer-column">
            <h3>Bantuan</h3>
            <div class="footer-links">
                <a href="#" class="footer-link">Cara Pemesanan</a>
                <a href="#" class="footer-link">Pengiriman</a>
                <a href="#" class="footer-link">Kebijakan Privasi</a>
            </div>
        </div>
        <div class="footer-column">
            <h3>Newsletter</h3>
            <form class="newsletter-form">
                <input type="email" placeholder="Masukkan email Anda" class="newsletter-input">
                <button type="submit" class="btn-primary">Berlangganan</button>
            </form>
        </div>
        <!-- Footer links and newsletter form -->
    </div>
</footer>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Intersection Observer for fade-in animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                if (entry.target.classList.contains('section-title') || 
                    entry.target.classList.contains('section-subtitle')) {
                    entry.target.style.animation = 'fadeInUp 1s ease forwards';
                } else if (entry.target.classList.contains('menu-card')) {
                    entry.target.style.animation = 'fadeInUp 1s ease forwards';
                } else if (entry.target.classList.contains('story-content')) {
                    entry.target.style.animation = 'fadeInLeft 1s ease forwards';
                } else if (entry.target.classList.contains('story-images')) {
                    entry.target.style.animation = 'fadeInRight 1s ease forwards';
                } else if (entry.target.classList.contains('instagram-item')) {
                    entry.target.style.animation = 'scaleIn 1s ease forwards';
                }
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe elements
    document.querySelectorAll('.section-title, .section-subtitle, .menu-card, .story-content, .story-images, .instagram-item')
        .forEach(el => observer.observe(el));

    // Smooth scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });

    // Navigation active state
    const sections = document.querySelectorAll('section[id]');
    window.addEventListener('scroll', () => {
        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (pageYOffset >= (sectionTop - sectionHeight / 3)) {
                current = section.getAttribute('id');
            }
        });

        document.querySelectorAll('.nav-link').forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href').includes(current)) {
                link.classList.add('active');
            }
        });
    });

    // Navigation scroll effect
    let lastScroll = 0;
    const nav = document.querySelector('.nav-container');

    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset;

        if (currentScroll <= 0) {
            nav.style.background = 'rgba(255,255,255,0.95)';
        } else {
            nav.style.background = 'rgba(255,255,255,1)';
        }

        if (currentScroll > lastScroll && currentScroll > 100) {
            nav.style.transform = 'translateY(-100%)';
        } else {
            nav.style.transform = 'translateY(0)';
        }

        lastScroll = currentScroll;
    });

    // Newsletter form
    const newsletterForm = document.querySelector('.newsletter-form');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const input = this.querySelector('input');
            if (input.value) {
                alert('Terima kasih telah berlangganan newsletter kami!');
                input.value = '';
            }
        });
    }
});
 // Add animation for cards when they come into view
 const cards = document.querySelectorAll('.product-card');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '0.7';
                }
            });
        }, {
            threshold: 0.1
        });

        cards.forEach(card => {
            card.style.opacity = '0';
            observer.observe(card);
        });

        // Add hover effect for entire grid
        const productsGrid = document.querySelector('.products-grid');
        
        productsGrid.addEventListener('mouseover', (e) => {
            const card = e.target.closest('.product-card');
            if (card) {
                cards.forEach(c => {
                    if (c !== card) {
                        c.style.opacity = '0.5';
                    }
                });
            }
        });

        productsGrid.addEventListener('mouseout', () => {
            cards.forEach(card => {
                card.style.opacity = '0.7';
            });
        });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cafe_saya\resources\views/home.blade.php ENDPATH**/ ?>