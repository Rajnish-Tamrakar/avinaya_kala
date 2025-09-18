@extends('layouts.app')

@section('title', 'Home - Handmade Home Decor')

@section('content')
<div class="container">
    <!-- Hero Section -->
    <div class="row align-items-center mb-4 mb-lg-5 py-3 py-lg-4">
        <div class="col-12 col-lg-6 order-2 order-lg-1">
            <h1 class="display-5 fw-bold text-primary mb-3">Beautiful Handcrafted Home Decor</h1>
            <p class="lead text-muted mb-4">
                Transform your living space with our unique collection of handmade home decoration items.
                Each piece is carefully crafted with love and attention to detail.
            </p>
            <div class="d-flex flex-wrap gap-3 mb-3 mb-lg-4">
                <a href="{{ route('products.index') }}" class="btn btn-primary btn-lg px-3 px-md-4">
                    <i class="bi bi-shop me-1"></i> Shop Now
                </a>
                <a href="https://instagram.com" target="_blank" class="btn btn-outline-primary btn-lg px-3 px-md-4">
                    <i class="bi bi-instagram me-1"></i> Follow Us
                </a>
            </div>
        </div>
        <div class="col-12 col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
            <div class="ratio ratio-16x9 rounded overflow-hidden shadow">
                <img 
                    src="https://images.pexels.com/photos/1571460/pexels-photo-1571460.jpeg?auto=compress&cs=tinysrgb&w=1200"
                    alt="Handmade Home Decor" 
                    class="img-fluid"
                    style="object-fit: cover;">
            </div>
        </div>
    </div>

    <!-- Featured Products -->
    <div class="row mb-4 mb-lg-5">
        <div class="col-12">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4">
                <h2 class="h3 mb-3 mb-md-0">Featured Products</h2>
                <a href="{{ route('products.index') }}" class="btn btn-outline-primary">
                    View All <i class="bi bi-arrow-right ms-1"></i>
                </a>
            </div>
        </div>
    </div>

    @if($featuredProducts->count() > 0)
    <div class="row g-3 g-md-4">
        @foreach($featuredProducts as $product)
        <div class="col-12 col-sm-6 col-lg-4">
            <div class="card product-card h-100 shadow-sm border-0">
                <div class="position-relative" style="padding-top: 75%;">
                    <img 
                        src="{{ $product->image ? asset('storage/' . $product->image) : asset('images/placeholder.jpg') }}"
                        class="position-absolute top-0 start-0 w-100 h-100" 
                        alt="{{ $product->title }}" 
                        style="object-fit: cover;">
                </div>
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $product->title }}</h5>
                    <p class="card-text text-muted flex-grow-1">{{ Str::limit($product->description, 100) }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="h5 text-primary mb-0">${{ number_format($product->price, 2) }}</span>
                        @if($product->stock > 0)
                        <span class="badge bg-success">In Stock ({{ $product->stock }})</span>
                        @else
                        <span class="badge bg-danger">Out of Stock</span>
                        @endif
                    </div>
                    <a href="{{ route('products.show', $product->slug) }}" class="btn btn-primary mt-3">
                        View Details
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <div class="text-center py-5">
        <i class="bi bi-box-seam display-1 text-muted"></i>
        <h3 class="mt-3">No Products Available</h3>
        <p class="text-muted">Check back soon for our beautiful handcrafted items!</p>
    </div>
    @endif

    <!-- About Section -->
    <div class="row mt-5 py-5 bg-light rounded">
        <div class="col-lg-8 mx-auto text-center">
            <h2 class="h3 mb-4">Why Choose Our Handmade Items?</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <i class="bi bi-heart display-4 text-primary"></i>
                    <h5 class="mt-3">Made with Love</h5>
                    <p class="text-muted">Each item is carefully handcrafted with passion and attention to detail.</p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-gem display-4 text-primary"></i>
                    <h5 class="mt-3">Unique Designs</h5>
                    <p class="text-muted">One-of-a-kind pieces that you won't find anywhere else.</p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-truck display-4 text-primary"></i>
                    <h5 class="mt-3">Cash on Delivery</h5>
                    <p class="text-muted">Pay when you receive your order. Safe and convenient.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection