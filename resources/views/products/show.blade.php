@extends('layouts.app')

@section('title', $product->title . ' - Handmade Home Decor')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Products</a></li>
            <li class="breadcrumb-item active">{{ $product->title }}</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-lg-6">
            <!-- Product Images -->
            <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ $product->image
                                ? asset('storage/' . $product->image)
                                : asset('images/placeholder.jpg') }}"
                            class="d-block w-100 rounded" alt="{{ $product->title }}" style="height: 400px; object-fit: cover;">

                    </div>
                    <div class="carousel-item">
                        <img src="{{ $product->image
                                ? asset('storage/' . $product->image)
                                : asset('images/placeholder.jpg') }}"
                            class="d-block w-100 rounded" alt="{{ $product->title }}" style="height: 400px; object-fit: cover;">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="ps-lg-4">
                <h1 class="h2 mb-3">{{ $product->title }}</h1>

                <div class="mb-3">
                    <span class="h3 text-primary">₹{{ number_format($product->price, 2) }}</span>
                </div>

                <div class="mb-4">
                    @if($product->stock > 0)
                    <span class="badge bg-success fs-6">
                        <i class="bi bi-check-circle"></i> In Stock ({{ $product->stock }} available)
                    </span>
                    @else
                    <span class="badge bg-danger fs-6">
                        <i class="bi bi-x-circle"></i> Out of Stock
                    </span>
                    @endif
                </div>

                <div class="mb-4">
                    <h5>Description</h5>
                    <p class="text-muted">{{ $product->description }}</p>
                </div>

                @if($product->stock > 0)
                <form action="{{ route('cart.add', $product) }}" method="POST" class="mb-4">
                    @csrf
                    <div class="row g-3 align-items-end">
                        <div class="col-auto">
                            <label for="quantity" class="form-label">Quantity</label>
                            <select name="quantity" id="quantity" class="form-select" style="width: 80px;">
                                @for($i = 1; $i <= min($product->stock, 10); $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                            </select>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="bi bi-cart-plus"></i> Add to Cart
                            </button>
                        </div>
                    </div>
                </form>
                @endif

                <div class="border-top pt-4">
                    <h6 class="mb-3">Product Features</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i> Handmade with care</li>
                        <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i> Unique design</li>
                        <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i> High-quality materials</li>
                        <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i> Cash on delivery available</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Related Products -->
    <div class="row mt-5">
        <div class="col-12">
            <h3 class="mb-4">You might also like</h3>
            <div class="text-center py-4">
                <a href="{{ route('products.index') }}" class="btn btn-outline-primary">
                    View All Products <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection