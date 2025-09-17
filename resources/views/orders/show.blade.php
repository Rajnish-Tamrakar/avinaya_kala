@extends('layouts.app')

@section('title', 'Order #'.$order->id.' - Handmade Home Decor')

@section('content')
<div class="container">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('orders.index') }}">My Orders</a></li>
            <li class="breadcrumb-item active">Order #{{ $order->id }}</li>
        </ol>
    </nav>

    <!-- Order summary -->
    <div class="card mb-4 shadow-sm">
        <div class="card-body">
            <div class="row g-4">
                <div class="col-md-2">
                    <h6 class="text-muted">Date</h6>
                    <p class="mb-0">{{ $order->created_at->format('d M Y' . ' g:i A') }}</p>
                </div>
                
                <div class="col-md-2">
                    <h6 class="text-muted">Order Number</h6>
                    <p class="mb-0 fw-bold">#{{ $order->order_number }}</p>
                </div>
                <div class="col-md-2">
                    <h6 class="text-muted">Qty</h6>
                    <p class="mb-0 fw-bold">{{ @$order->orderItems->sum('quantity') }}</p>
                </div>
                
                <div class="col-md-2">
                    <h6 class="text-muted">Status</h6>
                    @php
                        $badge = match($order->status) {
                            'pending'   => 'warning',
                            'confirmed' => 'warning',
                            'delivered' => 'success',
                            'shipped'   => 'info',
                            'cancelled' => 'danger',
                            default     => 'secondary',
                        };
                    @endphp
                    <span class="badge bg-{{ $badge }} fs-6">{{ ucfirst($order->status) }}</span>
                </div>
                <div class="col-md-2">
                    <h6 class="text-muted">Total</h6>
                    <p class="mb-0 fw-bold">{{ $order->formatted_total }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Customer info -->
    <div class="card mb-4">
        <div class="card-header">
            <h5 class="mb-0">Shipping Information</h5>
        </div>
        <div class="card-body">
            <p class="mb-1"><strong>Name:</strong> {{ $order->customer_name }}</p>
            <p class="mb-1"><strong>Phone:</strong> {{ $order->phone }}</p>
            @if($order->email)
                <p class="mb-1"><strong>Email:</strong> {{ $order->email }}</p>
            @endif
            <p class="mb-0"><strong>Address:</strong> {{ $order->formatted_address }}</p>
        </div>
    </div>

    <!-- Order items -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Items in this Order</h5>
        </div>
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Image</th>
                        <th>Product</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Qty</th>
                        <th class="text-end">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($order->orderItems as $item)
                        <tr>
                            <td style="width:80px">
                                <img
                                    src="{{ $item->product->image
                                        ? asset('storage/' . $item->product->image)
                                        : asset('images/placeholder.jpg') }}"
                                    alt="{{ $item->product->title }}"
                                    class="img-thumbnail"
                                    style="max-width:70px;">
                            </td>
                            <td>
                                <a href="{{ route('products.show', $item->product->slug) }}" class="text-decoration-none">
                                    {{ $item->product->title }}
                                </a>
                            </td>
                            <td class="text-center">₹{{ number_format($item->price, 2) }}</td>
                            <td class="text-center">{{ $item->quantity }}</td>
                            <td class="text-end">₹{{ number_format($item->price * $item->quantity, 2) }}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot class="table-light">
                    <tr>
                        <th colspan="4" class="text-end">Total</th>
                        <th class="text-end">{{ $order->formatted_total }}</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <!-- Back button -->
    <div class="mt-4">
        <a href="{{ route('orders.index') }}" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left"></i> Back to Orders
        </a>
    </div>
</div>
@endsection
