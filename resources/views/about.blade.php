@extends('layouts.app')

@section('content')
<div class="about-page">
    <div class="container">
        <!-- Page Header -->
        <div class="about-header text-center mb-5">
            <h1 class="display-4">About Soraza Recycling</h1>
            <div class="divider mx-auto"></div>
            <p class="lead">Pioneers in eco-friendly waste management solutions</p>
        </div>

        <!-- Company Overview -->
        <div class="company-card card mb-5 border-0 shadow-sm">
            <div class="card-body p-4 p-md-5">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h2 class="mb-4">Our Story</h2>
                        <p class="company-description">SORAZA RECYCLING PRIVATE LIMITED is a trusted name in eco-friendly waste management solutions. Based in Hapur, Uttar Pradesh, we specialize in the safe collection, recycling, and disposal of electronic and non-biodegradable waste. Our mission is to promote sustainability and environmental responsibility through reliable and innovative practices.</p>
                    </div>
                    <div class="col-lg-4 text-center">
                        <img src="{{ asset('images/01.png') }}" alt="Soraza Recycling" class="img-fluid company-logo">
                    </div>
                </div>
            </div>
        </div>

        <!-- Leadership Section -->
        <div class="leadership-section">
            <h2 class="section-title text-center mb-5">Our Leadership Team</h2>
            
            <div class="row justify-content-center">
                <!-- Founder -->
                <div class="col-lg-5 col-md-6 mb-4">
                    <div class="leader-card card h-100 border-0 shadow-sm">
                        <div class="leader-image-container">
                            <img src="{{ asset('images/01.png') }}" class="card-img-top leader-image" alt="Mr. Rasid Malik">
                            <div class="leader-overlay"></div>
                        </div>
                        <div class="card-body text-center">
                            <h3 class="card-title mb-1">Mr. RASID MALIK</h3>
                            <p class="leader-position">FOUNDER & DIRECTOR</p>
                            <div class="leader-divider mx-auto my-3"></div>
                            <p class="card-text leader-bio">Visionary entrepreneur with 15+ years experience in waste management. Committed to sustainable solutions for India's e-waste challenges.</p>
                            <div class="leader-social mt-3">
                                <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="social-icon"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Co-Founder -->
                <div class="col-lg-5 col-md-6 mb-4">
                    <div class="leader-card card h-100 border-0 shadow-sm">
                        <div class="leader-image-container">
                            <img src="{{ asset('images/01.png') }}" class="card-img-top leader-image" alt="Mr. Mohd Sonu">
                            <div class="leader-overlay"></div>
                        </div>
                        <div class="card-body text-center">
                            <h3 class="card-title mb-1">Mr. MOHD SONU</h3>
                            <p class="leader-position">CO-FOUNDER & DIRECTOR</p>
                            <div class="leader-divider mx-auto my-3"></div>
                            <p class="card-text leader-bio">Operations expert specializing in logistics and process optimization for large-scale recycling operations across North India.</p>
                            <div class="leader-social mt-3">
                                <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="social-icon"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    /* Color Variables */
    :root {
        --soraza-green: #2c786c;
        --soraza-light: #f8f9fa;
        --soraza-dark: #1a3d38;
        --soraza-accent: #57b894;
    }

    /* Base Styles */
    .about-page {
        padding: 4rem 0;
        background-color: #f9f9f9;
    }

    /* Header Styles */
    .about-header h1 {
        color: var(--soraza-dark);
        font-weight: 700;
        margin-bottom: 1rem;
    }

    .about-header .divider {
        width: 80px;
        height: 3px;
        background: var(--soraza-green);
        margin: 1rem auto;
    }

    .about-header .lead {
        color: #666;
        font-size: 1.25rem;
    }

    /* Company Card */
    .company-card {
        background-color: white;
        border-radius: 8px;
    }

    .company-description {
        font-size: 1.1rem;
        line-height: 1.7;
        color: #555;
    }

    .company-logo {
        max-height: 200px;
        width: auto;
    }

    /* Leadership Section */
    .section-title {
        color: var(--soraza-dark);
        font-weight: 600;
        position: relative;
    }

    .section-title:after {
        content: '';
        position: absolute;
        bottom: -15px;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 3px;
        background: var(--soraza-green);
    }

    .leader-card {
        transition: all 0.3s ease;
        border-radius: 8px;
        overflow: hidden;
    }

    .leader-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
    }

    .leader-image-container {
        position: relative;
        height: 300px;
        overflow: hidden;
    }

    .leader-image {
        height: 100%;
        width: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .leader-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(to bottom, rgba(0,0,0,0.1) 0%, rgba(44,120,108,0.7) 100%);
    }

    .leader-card:hover .leader-image {
        transform: scale(1.05);
    }

    .leader-position {
        color: var(--soraza-green);
        font-weight: 600;
        letter-spacing: 1px;
        font-size: 0.9rem;
        text-transform: uppercase;
    }

    .leader-divider {
        width: 40px;
        height: 2px;
        background: var(--soraza-green);
    }

    .leader-bio {
        color: #666;
        font-size: 0.95rem;
        line-height: 1.6;
    }

    .leader-social {
        font-size: 1.2rem;
    }

    .social-icon {
        color: var(--soraza-dark);
        margin: 0 8px;
        transition: color 0.3s ease;
    }

    .social-icon:hover {
        color: var(--soraza-green);
    }

    /* Responsive Adjustments */
    @media (max-width: 992px) {
        .leader-image-container {
            height: 250px;
        }
        
        .company-logo {
            max-height: 150px;
            margin-top: 20px;
        }
    }

    @media (max-width: 768px) {
        .about-page {
            padding: 2rem 0;
        }
        
        .about-header h1 {
            font-size: 2rem;
        }
        
        .leader-image-container {
            height: 200px;
        }
    }
</style>
@endpush