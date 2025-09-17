@extends('layouts.app')

@section('title', 'Order Confirmation - Handmade Home Decor')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="text-center mb-5">
                <i class="bi bi-check-circle-fill text-success" style="font-size: 4rem;"></i>
                <h1 class="h2 mt-3 mb-3">Order Placed Successfully!</h1>
                <p class="lead text-muted">Thank you for your order. We'll process it shortly.</p>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Order Details</h5>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h6>Order Number</h6>
                            <p class="text-primary fw-bold">{{ $order->order_number }}</p>
                        </div>
                        <div class="col-md-6">
                            <h6>Order Date</h6>
                            <p>{{ $order->created_at->format('F j, Y \a\t g:i A') }}</p>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h6>Customer Information</h6>
                            <p class="mb-1"><strong>{{ $order->customer_name }}</strong></p>
                            <p class="mb-1">{{ $order->phone }}</p>
                            @if($order->email)
                            <p class="mb-0">{{ $order->email }}</p>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <h6>Shipping Address</h6>
                            <p class="mb-1">{{ $order->shipping_address['address_line_1'] }}</p>
                            @if($order->shipping_address['address_line_2'])
                            <p class="mb-1">{{ $order->shipping_address['address_line_2'] }}</p>
                            @endif
                            <p class="mb-0">
                                {{ $order->shipping_address['city'] }}, {{ $order->shipping_address['state'] }} {{ $order->shipping_address['postal_code'] }}
                            </p>
                        </div>
                    </div>

                    <h6>Order Items</h6>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($order->orderItems as $item)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img
                                                src="{{ $item['product']->image
            ? asset('storage/'.$item['product']->image)
            : 'https://images.pexels.com/photos/1571460/pexels-photo-1571460.jpeg?auto=compress&cs=tinysrgb&w=100' }}"
                                                alt="{{ $item['product']->title }}"
                                                class="img-fluid rounded"
                                                style="height:80px;object-fit:cover;">

                                            {{ $item['product']->title }}
                                        </div>
                                    </td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>${{ number_format($item->price, 2) }}</td>
                                    <td>${{ number_format($item->subtotal, 2) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="3">Total</th>
                                    <th class="text-primary">${{ number_format($order->total, 2) }}</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <div class="alert alert-info">
                        <i class="bi bi-info-circle"></i>
                        <strong>Payment Method:</strong> Cash on Delivery<br>
                        <strong>Status:</strong> {{ ucfirst($order->status) }}
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <p class="text-muted mb-3">
                    We'll contact you soon to confirm your order and arrange delivery.
                </p>
                <div class="d-flex gap-3 justify-content-center">
                    <a href="{{ route('home') }}" class="btn btn-primary">
                        <i class="bi bi-house"></i> Back to Home
                    </a>
                    <a href="{{ route('products.index') }}" class="btn btn-outline-primary">
                        <i class="bi bi-shop"></i> Continue Shopping
                    </a>
                    <a href="{{ route('orders.show', $order->id) }}" class="btn btn-outline-success">
                        <i class="bi bi-receipt"></i> View Order
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection