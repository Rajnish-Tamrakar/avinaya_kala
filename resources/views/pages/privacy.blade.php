@extends('layouts.app')

@section('title', 'Privacy Policy - Handmade Home Decor')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <h1 class="h2 mb-4">Privacy Policy</h1>
            <p class="text-muted mb-4">Last updated: {{ date('F j, Y') }}</p>

            <div class="card">
                <div class="card-body">
                    <h3>Information We Collect</h3>
                    <p>When you place an order with us, we collect the following information:</p>
                    <ul>
                        <li>Name and contact information (phone number, email address)</li>
                        <li>Shipping address</li>
                        <li>Order details and purchase history</li>
                    </ul>

                    <h3 class="mt-4">How We Use Your Information</h3>
                    <p>We use your information to:</p>
                    <ul>
                        <li>Process and fulfill your orders</li>
                        <li>Communicate with you about your orders</li>
                        <li>Provide customer support</li>
                        <li>Improve our products and services</li>
                    </ul>

                    <h3 class="mt-4">Information Sharing</h3>
                    <p>We do not sell, trade, or otherwise transfer your personal information to third parties except:</p>
                    <ul>
                        <li>To fulfill your orders (shipping companies)</li>
                        <li>When required by law</li>
                        <li>To protect our rights and safety</li>
                    </ul>

                    <h3 class="mt-4">Data Security</h3>
                    <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction.</p>

                    <h3 class="mt-4">Cookies</h3>
                    <p>We use cookies to enhance your browsing experience and remember your shopping cart contents. You can disable cookies in your browser settings if you prefer.</p>

                    <h3 class="mt-4">Your Rights</h3>
                    <p>You have the right to:</p>
                    <ul>
                        <li>Access your personal information</li>
                        <li>Correct inaccurate information</li>
                        <li>Request deletion of your information</li>
                        <li>Opt out of marketing communications</li>
                    </ul>

                    <h3 class="mt-4">Contact Us</h3>
                    <p>If you have any questions about this Privacy Policy, please contact us:</p>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-envelope me-2"></i> Email: privacy@avinayakala.com</li>
                        <li><i class="bi bi-telephone me-2"></i> Phone: +1 (555) 123-4567</li>
                    </ul>

                    <div class="alert alert-info mt-4">
                        <i class="bi bi-info-circle me-2"></i>
                        We may update this Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection