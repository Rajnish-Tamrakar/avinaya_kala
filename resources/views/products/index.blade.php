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
    <div class="row g-4">
        @foreach($products as $product)
        <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="card product-card h-100 shadow-sm">
                <img
                    src="{{ $product->image
                                ? asset('storage/' . $product->image)
                                : asset('images/placeholder.jpg') }}"
                    alt="{{ $product->title }}"
                    class="card-img-top"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $product->title }}</h5>
                    <p class="card-text text-muted flex-grow-1">{{ Str::limit($product->description, 80) }}</p>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="h5 text-primary mb-0">${{ number_format($product->price, 2) }}</span>
                        @if($product->stock > 0)
                        <span class="badge bg-success">{{ $product->stock }} left</span>
                        @else
                        <span class="badge bg-danger">Out of Stock</span>
                        @endif
                    </div>
                    <a href="{{ route('products.show', $product->slug) }}" class="btn btn-primary">
                        View Details
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-5">
        {{ $products->links() }}
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