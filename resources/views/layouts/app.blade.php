<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title', 'Handmade Home Decor - Beautiful Handcrafted Items')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        /* Base Typography */
        :root {
            --font-size-base: 1rem;
            --font-size-lg: 1.25rem;
            --font-size-sm: 0.875rem;
        }
        
        /* Responsive Base Font Size */
        html {
            font-size: 16px;
        }
        
        @media (max-width: 768px) {
            html {
                font-size: 15px;
            }
        }
        
        @media (max-width: 480px) {
            html {
                font-size: 14px;
            }
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
        }
        
        /* Responsive Headings */
        h1 { font-size: 2.25rem; }
        h2 { font-size: 1.8rem; }
        h3 { font-size: 1.5rem; }
        h4 { font-size: 1.25rem; }
        
        @media (max-width: 768px) {
            h1 { font-size: 2rem; }
            h2 { font-size: 1.6rem; }
            h3 { font-size: 1.4rem; }
        }
        
        @media (max-width: 480px) {
            h1 { font-size: 1.75rem; }
            h2 { font-size: 1.5rem; }
            h3 { font-size: 1.3rem; }
            .btn { padding: 0.5rem 1rem; }
        }

        .product-card {
            transition: transform 0.2s, box-shadow 0.2s;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
        }

        .product-card .card-img-container {
            height: 200px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa;
        }

        .product-card .card-img-top {
            width: 100%;
            height: 100%;
            object-fit: contain;
            padding: 1rem;
        }

        .product-card .card-body {
            display: flex;
            flex-direction: column;
            padding: 1.25rem;
        }

        .product-card .card-title {
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
        }

        .product-card .card-text {
            flex-grow: 1;
            margin-bottom: 1rem;
            font-size: 0.9rem;
        }

        /* Pagination styles */
        .pagination {
            margin: 2rem 0;
            justify-content: center;
        }

        .pagination .page-link {
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 38px;
            height: 38px;
            padding: 0 12px;
            color: #0d6efd;
            border: 1px solid #dee2e6;
            margin: 0 2px;
            border-radius: 4px;
            font-size: 0.9rem;
        }

        .pagination .page-item.active .page-link {
            background-color: #0d6efd;
            border-color: #0d6efd;
            color: white;
        }

        .pagination .page-link:hover {
            background-color: #e9ecef;
            color: #0a58ca;
        }

        .pagination .page-item.disabled .page-link {
            color: #6c757d;
            pointer-events: none;
            background-color: #fff;
            border-color: #dee2e6;
        }

        .pagination .page-link svg {
            width: 1em;
            height: 1em;
            vertical-align: middle;
        }
        
        /* Responsive adjustments */
        @media (max-width: 767.98px) {
            /* Adjust fixed navbar height */
            body {
                padding-top: 56px; /* Height of fixed navbar */
            }
            
            /* Improve touch targets */
            .btn, .form-control, .form-select {
                min-height: 44px; /* Minimum touch target size */
            }
            
            /* Adjust card spacing */
            .card {
                margin-bottom: 1rem;
            }
            
            /* Improve form elements */
            .form-control, .form-select {
                font-size: 1rem; /* Prevent zoom on focus in iOS */
            }
            
            /* Adjust typography */
            .display-5 {
                font-size: 1.8rem;
            }
            
            .lead {
                font-size: 1.1rem;
            }
        }
        
        /* Prevent long words from breaking layout */
        .card-title, .card-text, p, h1, h2, h3, h4, h5, h6 {
            word-wrap: break-word;
            overflow-wrap: break-word;
        }
        
        /* Responsive images */
        img {
            max-width: 100%;
            height: auto;
        }
        
        /* Ensure buttons are touch-friendly on mobile */
        .btn {
            padding: 0.5rem 1rem;
            font-size: 1rem;
        }
        
        .btn-lg {
            padding: 0.75rem 1.5rem;
            font-size: 1.1rem;
        }

        .cart-badge {
            position: absolute;
            top: -8px;
            right: -8px;
            background: #dc3545;
            color: white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            font-size: 0.75rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        footer {
            background-color: #f8f9fa;
            margin-top: auto;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand text-primary fw-bold" href="{{ route('home') }}">
                <i class="bi bi-house-heart me-1"></i> Avinaya Kala
            </a>

            <button class="navbar-toggler border-0 p-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link px-3 px-lg-2 py-2 py-lg-1" href="{{ route('home') }}">
                            <i class="bi bi-house d-lg-none me-2"></i>Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 px-lg-2 py-2 py-lg-1" href="{{ route('products.index') }}">
                            <i class="bi bi-grid d-lg-none me-2"></i>Products
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 px-lg-2 py-2 py-lg-1" href="{{ route('orders.index') }}">
                            <i class="bi bi-receipt d-lg-none me-2"></i>Orders
                        </a>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link px-3 px-lg-2 py-2 py-lg-1" href="{{ route('pages.about') }}">About</a>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link px-3 px-lg-2 py-2 py-lg-1" href="{{ route('pages.contact') }}">Contact</a>
                    </li>
                </ul>

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="{{ route('cart.index') }}">
                            <i class="bi bi-cart3"></i> Cart
                            @if(session('cart') && count(session('cart')) > 0)
                            <span class="cart-badge">{{ array_sum(array_column(session('cart'), 'quantity')) }}</span>
                            @endif
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="py-4">
        @if(session('success'))
        <div class="container">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        </div>
        @endif

        @if(session('error'))
        <div class="container">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        </div>
        @endif

        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="text-primary">
                        <i class="bi bi-house-heart"></i> Avinaya Kala
                    </h5>
                    <p class="text-muted">Beautiful handcrafted home decoration items made with love and care.</p>
                    <a href="https://instagram.com" target="_blank" class="btn btn-outline-primary btn-sm">
                        <i class="bi bi-instagram"></i> Follow us on Instagram
                    </a>
                </div>
                <div class="col-md-3">
                    <h6>Quick Links</h6>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('home') }}" class="text-decoration-none">Home</a></li>
                        <li><a href="{{ route('products.index') }}" class="text-decoration-none">Products</a></li>
                        <li><a href="{{ route('orders.index') }}" class="text-decoration-none">Orders</a></li>
                        <li><a href="{{ route('pages.about') }}" class="text-decoration-none">About Us</a></li>
                        <li><a href="{{ route('pages.contact') }}" class="text-decoration-none">Contact</a></li>
                        
                    </ul>
                </div>
                <div class="col-md-3">
                    <h6>Legal</h6>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('pages.privacy') }}" class="text-decoration-none">Privacy Policy</a></li>
                        <li><a href="{{ route('pages.terms') }}" class="text-decoration-none">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="text-center text-muted">
                <p>&copy; {{ date('Y') }} Avinaya Kala. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>