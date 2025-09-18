@extends('layouts.app')

@section('title', 'Products - Handmade Home Decor')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="h2 mb-3">Our Products</h1>
            <p class="text-muted">Discover our beautiful collection of handmade home decoration items.</p>
        </div>
    </div>

    @if($products->count() > 0)
    <div class="row g-3 g-md-4">
        @foreach($products as $product)
        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
            <div class="card product-card h-100 shadow-sm border-0">
                <div class="position-relative" style="padding-top: 75%;">
                    <img 
                        src="{{ $product->image ? asset('storage/' . $product->image) : asset('images/placeholder.jpg') }}"
                        class="position-absolute top-0 start-0 w-100 h-100" 
                        alt="{{ $product->title }}" 
                        style="object-fit: cover;">
                </div>
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fs-5">{{ $product->title }}</h5>
                    <p class="card-text text-muted small mb-3">{{ Str::limit($product->description, 80) }}</p>
                    <div class="mt-auto">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="h5 text-primary mb-0">₹{{ number_format($product->price, 2) }}</span>
                            @if($product->stock > 0)
                                @if($product->stock < 10)
                                <span class="badge bg-warning text-dark">Only {{ $product->stock }} left</span>
                                @else
                                <span class="badge bg-success">{{ $product->stock }} in stock</span>
                                @endif
                            @else
                                <span class="badge bg-danger">Out of Stock</span>
                            @endif
                        </div>
                        <a href="{{ route('products.show', $product->slug) }}" class="btn btn-primary w-100">
                            View Details
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-4 mt-md-5">
        <nav aria-label="Products pagination">
            {{ $products->onEachSide(1)->links('pagination::bootstrap-5') }}
        </nav>
    </div>
    @else
    <div class="text-center py-5">
        <i class="bi bi-box-seam display-1 text-muted"></i>
        <h3 class="mt-3">No Products Available</h3>
        <p class="text-muted">Check back soon for our beautiful handcrafted items!</p>
        <a href="{{ route('home') }}" class="btn btn-primary">Back to Home</a>
    </div>
    @endif
</div>
@endsection