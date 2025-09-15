@extends('layouts.app')

@section('title', 'Contact Us - Handmade Home Decor')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <h1 class="h2 mb-4">Contact Us</h1>

            <div class="row">
                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Get in Touch</h5>
                            <p class="card-text text-muted">
                                We'd love to hear from you! Whether you have questions about our products,
                                need help with an order, or want to discuss custom pieces, we're here to help.
                            </p>

                            <div class="mb-3">
                                <i class="bi bi-envelope text-primary me-2"></i>
                                <strong>Email:</strong> info@avinayakala.com
                            </div>

                            <div class="mb-3">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <strong>Phone:</strong> +1 (555) 123-4567
                            </div>

                            <div class="mb-3">
                                <i class="bi bi-clock text-primary me-2"></i>
                                <strong>Business Hours:</strong><br>
                                Monday - Friday: 9:00 AM - 6:00 PM<br>
                                Saturday: 10:00 AM - 4:00 PM<br>
                                Sunday: Closed
                            </div>

                            <div class="mb-3">
                                <i class="bi bi-instagram text-primary me-2"></i>
                                <a href="https://instagram.com" target="_blank" class="text-decoration-none">
                                    Follow us on Instagram
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Send us a Message</h5>
                            <form>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" required>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>

                                <div class="mb-3">
                                    <label for="subject" class="form-label">Subject</label>
                                    <select class="form-select" id="subject" required>
                                        <option value="">Choose a subject</option>
                                        <option value="general">General Inquiry</option>
                                        <option value="order">Order Question</option>
                                        <option value="custom">Custom Order</option>
                                        <option value="support">Support</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control" id="message" rows="4" required></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary w-100">
                                    <i class="bi bi-send"></i> Send Message
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <div class="bg-light rounded p-4">
                    <h4 class="mb-3">Frequently Asked Questions</h4>

                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    Do you offer custom orders?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes! We love creating custom pieces. Contact us with your ideas and we'll work with you to create something unique for your home.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    How long does shipping take?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We typically process orders within 2-3 business days. Delivery time depends on your location, usually 3-7 business days.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    What is your return policy?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We want you to love your purchase! If you're not satisfied, you can return items within 30 days of delivery for a full refund.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection