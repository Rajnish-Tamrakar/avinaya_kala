@extends('layouts.app')

@section('title', 'About Us - Handmade Home Decor')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <h1 class="h2 mb-4">About Us</h1>

            <div class="row align-items-center mb-5">
                <div class="col-md-6">
                    <img src="https://images.pexels.com/photos/1571460/pexels-photo-1571460.jpeg?auto=compress&cs=tinysrgb&w=600"
                        alt="Our Workshop" class="img-fluid rounded shadow">
                </div>
                <div class="col-md-6">
                    <h3>Our Story</h3>
                    <p class="text-muted">
                        Welcome to Avinaya Kala, where passion meets craftsmanship. We are a small family business
                        dedicated to creating beautiful, unique home decoration items that bring warmth and
                        personality to your living spaces.
                    </p>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-12">
                    <h3 class="mb-4">What Makes Us Special</h3>
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="text-center">
                                <i class="bi bi-heart-fill text-primary display-4"></i>
                                <h5 class="mt-3">Handcrafted with Love</h5>
                                <p class="text-muted">Every piece is carefully handmade with attention to detail and passion for quality.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center">
                                <i class="bi bi-gem text-primary display-4"></i>
                                <h5 class="mt-3">Unique Designs</h5>
                                <p class="text-muted">Our designs are original and one-of-a-kind, ensuring your home stands out.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center">
                                <i class="bi bi-leaf text-primary display-4"></i>
                                <h5 class="mt-3">Sustainable Materials</h5>
                                <p class="text-muted">We use eco-friendly and sustainable materials whenever possible.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-light rounded p-4 mb-5">
                <h3 class="mb-3">Our Mission</h3>
                <p class="text-muted mb-0">
                    To create beautiful, handcrafted home decoration items that inspire and delight our customers.
                    We believe that every home deserves unique touches that reflect the personality and style of
                    its inhabitants. Through our carefully crafted pieces, we aim to help you create spaces that
                    feel truly yours.
                </p>
            </div>

            <div class="text-center">
                <h3 class="mb-3">Get in Touch</h3>
                <p class="text-muted mb-4">
                    We'd love to hear from you! Whether you have questions about our products or want to
                    discuss custom orders, don't hesitate to reach out.
                </p>
                <div class="d-flex gap-3 justify-content-center">
                    <a href="{{ route('pages.contact') }}" class="btn btn-primary">
                        <i class="bi bi-envelope"></i> Contact Us
                    </a>
                    <a href="https://instagram.com" target="_blank" class="btn btn-outline-primary">
                        <i class="bi bi-instagram"></i> Follow Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection