<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Handmade Home Decor - Beautiful Handcrafted Items')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
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
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand text-primary" href="{{ route('home') }}">
                <i class="bi bi-house-heart"></i> Avinaya Kala
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.index') }}">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('orders.index') }}">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pages.about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pages.contact') }}">Contact</a>
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