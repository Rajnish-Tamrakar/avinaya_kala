@extends('layouts.app')

@section('title', 'Shopping Cart - Handmade Home Decor')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="h2 mb-4">Shopping Cart</h1>
        </div>
    </div>

    @if(empty($cartItems))
    <div class="text-center py-5">
        <i class="bi bi-cart-x display-1 text-muted"></i>
        <h3 class="mt-3">Your cart is empty</h3>
        <p class="text-muted">Add some beautiful handcrafted items to your cart!</p>
        <a href="{{ route('products.index') }}" class="btn btn-primary">
            <i class="bi bi-shop"></i> Continue Shopping
        </a>
    </div>
    @else
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    @foreach($cartItems as $item)
                    <div class="row align-items-center py-3 @if(!$loop->last) border-bottom @endif">
                        <div class="col-md-2">
                            <img
                                src="{{ $item['product']->image
            ? asset('storage/'.$item['product']->image)
            : asset('images/placeholder.jpg') }}"
                                alt="{{ $item['product']->title }}"
                                class="img-fluid rounded"
                                style="height:80px;object-fit:cover;">

                        </div>
                        <div class="col-md-4">
                            <h6 class="mb-1">{{ $item['product']->title }}</h6>
                            <small class="text-muted">${{ number_format($item['product']->price, 2) }} each</small>
                        </div>
                        <div class="col-md-3">
                            <form action="{{ route('cart.update', $item['product']->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('PATCH')
                                <div class="input-group" style="width: 120px;">
                                    <input type="number" name="quantity" value="{{ $item['quantity'] }}"
                                        min="1" max="{{ $item['product']->stock }}" class="form-control form-control-sm">
                                    <button type="submit" class="btn btn-outline-secondary btn-sm">
                                        <i class="bi bi-arrow-clockwise"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-2">
                            <strong>${{ number_format($item['subtotal'], 2) }}</strong>
                        </div>
                        <div class="col-md-1">
                            <form action="{{ route('cart.remove', $item['product']->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm"
                                    onclick="return confirm('Remove this item from cart?')">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="mt-3">
                <form action="{{ route('cart.clear') }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger"
                        onclick="return confirm('Clear entire cart?')">
                        <i class="bi bi-trash"></i> Clear Cart
                    </button>
                </form>
                <a href="{{ route('products.index') }}" class="btn btn-outline-primary ms-2">
                    <i class="bi bi-arrow-left"></i> Continue Shopping
                </a>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Order Summary</h5>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                        <span>Subtotal:</span>
                        <strong>${{ number_format($total, 2) }}</strong>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <span>Shipping:</span>
                        <span class="text-success">Free</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between mb-3">
                        <strong>Total:</strong>
                        <strong class="text-primary">${{ number_format($total, 2) }}</strong>
                    </div>
                    <a href="{{ route('checkout.index') }}" class="btn btn-primary w-100">
                        <i class="bi bi-credit-card"></i> Proceed to Checkout
                    </a>
                    <div class="text-center mt-3">
                        <small class="text-muted">
                            <i class="bi bi-shield-check"></i> Secure checkout with Cash on Delivery
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection