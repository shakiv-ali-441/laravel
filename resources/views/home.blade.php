@extends('layouts.app')

@section('content')
<!-- <div class="hero-section" style="background-image: url(public/images/gallery/gallery-10.jpg);">
    <div class="container text-center py-5">
        <h1 class="display-4">Waste Less Live More</h1>
        <p class="lead">The Eco Way</p>
        <a href="{{ route('services') }}" class="btn btn-primary btn-lg mt-3">Our Services</a>
    </div>
</div> -->
<!-- <section class="video-hero">
    <div class="video-container">
        <video autoplay muted loop playsinline>
            <source src="{{ asset('videos/recycling-hero.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="video-overlay">
            <div class="container">
                <h1>Waste Less, Live More</h1>
                <p class="lead">The Eco Way</p>
                <a href="{{ route('services') }}" class="btn btn-primary btn-lg mt-3">Our Services</a>
            </div>
        </div>
    </div>
</section> -->
<section class="video-hero">
    <div class="video-wrapper">
        <!-- Video Element -->
        <video class="responsive-video" autoplay muted loop playsinline poster="{{ asset('images/video-poster.jpg') }}">
            <source src="{{ asset('videos/recycling-hero.mp4') }}" type="video/mp4">
            <source src="{{ asset('videos/recycling-hero.webm') }}" type="video/webm">
            Your browser does not support HTML5 video.
        </video>
        
        <!-- Video Overlay Content -->
        <div class="video-content">
            <div class="container">
                <h1 class="video-title">Waste Less, Live More....designed by shakiv-ali</h1>
                <p class="video-subtitle">The Eco Way</p>
                <a href="{{ route('services') }}" class="btn btn-primary btn-lg mt-3">Our Services</a>
            </div>
        </div>
    </div>
</section>

<div class="container my-5">
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h3 class="card-title">About Us</h3>
                    <p class="card-text">SORAZA RECYCLING PRIVATE LIMITED is a trusted name in eco-friendly waste management solutions...</p>
                    <a href="{{ route('about') }}" class="btn btn-outline-primary">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h3 class="card-title">Mission & Vision</h3>
                    <p class="card-text">To be India's most trusted and innovative partner in transforming waste into resources...</p>
                    <a href="{{ route('mission') }}" class="btn btn-outline-primary">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h3 class="card-title">Our Services</h3>
                    <p class="card-text">We specialize in safe collection, recycling, and disposal of electronic and non-biodegradable waste...</p>
                    <a href="{{ route('services') }}" class="btn btn-outline-primary">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
@include('partials.gallery')

@endsection