@extends('layouts.app')

@section('title', 'My Orders - Handmade Home Decor')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="h2 mb-3">My Orders</h1>
            <p class="text-muted">Here you can see all the orders you have placed.</p>
        </div>
    </div>

    @if($orders->count() > 0)
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Date</th>
                        <th>Order Number</th>
                        <th>Qty</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->created_at->format('d M Y') }}</td>
                        <td>{{ $order->order_number }}</td>
                        <td>{{ $order->orderItems->sum('quantity') }}</td>
                        <td>${{ number_format($order->total, 2) }}</td>
                        <td>
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
                            <span class="badge bg-{{ $badge }}">
                                {{ ucfirst($order->status) }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('orders.show', $order->id) }}" class="btn btn-sm btn-outline-primary">
                                View Details
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        
    @else
        <div class="text-center py-5">
            <i class="bi bi-receipt display-1 text-muted"></i>
            <h3 class="mt-3">No Orders Found</h3>
            <p class="text-muted">You haven’t placed any orders yet.</p>
            <a href="{{ route('products.index') }}" class="btn btn-primary">
                Start Shopping
            </a>
        </div>
    @endif
</div>
@endsection
