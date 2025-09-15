@extends('layouts.app')

@section('title', 'Terms of Service - Handmade Home Decor')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <h1 class="h2 mb-4">Terms of Service</h1>
            <p class="text-muted mb-4">Last updated: {{ date('F j, Y') }}</p>

            <div class="card">
                <div class="card-body">
                    <h3>Acceptance of Terms</h3>
                    <p>By accessing and using this website, you accept and agree to be bound by the terms and provision of this agreement.</p>

                    <h3 class="mt-4">Products and Services</h3>
                    <p>All products sold on this website are handmade items. Due to the handcrafted nature:</p>
                    <ul>
                        <li>Each item is unique and may vary slightly from photos</li>
                        <li>Colors may appear different due to monitor settings</li>
                        <li>Minor imperfections are part of the handmade charm</li>
                    </ul>

                    <h3 class="mt-4">Orders and Payment</h3>
                    <ul>
                        <li>All orders are subject to availability</li>
                        <li>We accept Cash on Delivery (COD) payments only</li>
                        <li>Prices are subject to change without notice</li>
                        <li>We reserve the right to refuse or cancel any order</li>
                    </ul>

                    <h3 class="mt-4">Shipping and Delivery</h3>
                    <ul>
                        <li>We ship to addresses provided by customers</li>
                        <li>Delivery times are estimates and not guaranteed</li>
                        <li>Risk of loss passes to customer upon delivery</li>
                        <li>Customers must inspect items upon delivery</li>
                    </ul>

                    <h3 class="mt-4">Returns and Refunds</h3>
                    <ul>
                        <li>Items can be returned within 30 days of delivery</li>
                        <li>Items must be in original condition</li>
                        <li>Customer is responsible for return shipping costs</li>
                        <li>Refunds will be processed within 7-10 business days</li>
                    </ul>

                    <h3 class="mt-4">Intellectual Property</h3>
                    <p>All content on this website, including designs, images, and text, is protected by copyright and other intellectual property laws.</p>

                    <h3 class="mt-4">Limitation of Liability</h3>
                    <p>We shall not be liable for any indirect, incidental, special, consequential, or punitive damages resulting from your use of our products or services.</p>

                    <h3 class="mt-4">Privacy</h3>
                    <p>Your privacy is important to us. Please review our Privacy Policy, which also governs your use of the website.</p>

                    <h3 class="mt-4">Changes to Terms</h3>
                    <p>We reserve the right to modify these terms at any time. Changes will be effective immediately upon posting on the website.</p>

                    <h3 class="mt-4">Contact Information</h3>
                    <p>If you have any questions about these Terms of Service, please contact us:</p>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-envelope me-2"></i> Email: legal@avinayakala.com</li>
                        <li><i class="bi bi-telephone me-2"></i> Phone: +1 (555) 123-4567</li>
                    </ul>

                    <div class="alert alert-warning mt-4">
                        <i class="bi bi-exclamation-triangle me-2"></i>
                        By using this website, you acknowledge that you have read and understood these terms and agree to be bound by them.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection