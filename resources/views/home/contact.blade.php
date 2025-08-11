@extends('layouts.app')

@section('title', 'Contact Us - Online Store')

@section('content')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="text-center mb-5">
                <h1 class="display-4">Contact Us</h1>
                <p class="lead">We'd love to hear from you. Get in touch with us!</p>
            </div>
            
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center">
                        <div class="card-body">
                            <i class="fas fa-envelope fa-3x text-primary mb-3"></i>
                            <h5 class="card-title">Email</h5>
                            <p class="card-text">
                                <a href="mailto:info@onlinestore.com" class="text-decoration-none">
                                    info@onlinestore.com
                                </a>
                            </p>
                            <p class="card-text">
                                <a href="mailto:support@onlinestore.com" class="text-decoration-none">
                                    support@onlinestore.com
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center">
                        <div class="card-body">
                            <i class="fas fa-map-marker-alt fa-3x text-primary mb-3"></i>
                            <h5 class="card-title">Address</h5>
                            <p class="card-text">
                                123 Oriental Avenue<br>
                                Shopping District<br>
                                United States
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center">
                        <div class="card-body">
                            <i class="fas fa-phone fa-3x text-primary mb-3"></i>
                            <h5 class="card-title">Phone</h5>
                            <p class="card-text">
                                <a href="tel:+15551234567" class="text-decoration-none">
                                    +57 - 1234-5678
                                </a>
                            </p>
                            <p class="card-text">
                                <strong>Hours:</strong><br>
                                Mon-Fri: 9:00 AM - 6:00 PM<br>
                                Sat-Sun: 10:00 AM - 4:00 PM
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection