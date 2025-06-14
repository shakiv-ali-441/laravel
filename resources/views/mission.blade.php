@extends('layouts.app')

@section('content')
<div class="mission-page">
    <div class="container">
        <!-- Page Header -->
        <div class="mission-header text-center mb-5">
            <h1 class="display-4">Our Mission & Vision</h1>
            <div class="divider mx-auto"></div>
            <p class="lead">Guiding principles for sustainable waste management</p>
        </div>

        <!-- Mission Section -->
        <div class="mission-card card mb-5 border-0 shadow-sm">
            <div class="card-body p-4 p-md-5">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-center mb-4 mb-lg-0">
                        <div class="mission-icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mission-badge">OUR MISSION</div>
                        <h2 class="mb-4">Leading Responsible Waste Management</h2>
                        <p class="mission-text">To lead in responsible waste management by providing efficient, eco-friendly recycling solutions that safeguard the environment and support a sustainable future. We are committed to transforming waste into valuable resources through innovative technologies and ethical practices.</p>
                        <ul class="mission-points">
                            <li><i class="fas fa-check-circle"></i> Eco-friendly recycling solutions</li>
                            <li><i class="fas fa-check-circle"></i> Environment safeguarding</li>
                            <li><i class="fas fa-check-circle"></i> Sustainable future focus</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Vision Section -->
        <div class="vision-card card mb-5 border-0 shadow-sm">
            <div class="card-body p-4 p-md-5">
                <div class="row align-items-center flex-lg-row-reverse">
                    <div class="col-lg-4 text-center mb-4 mb-lg-0">
                        <div class="vision-icon">
                            <i class="fas fa-binoculars"></i>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="vision-badge">OUR VISION</div>
                        <h2 class="mb-4">India's Most Trusted Recycling Partner</h2>
                        <p class="vision-text">To be India's most trusted and innovative partner in transforming waste into resources through sustainable and ethical practices. We envision a future where zero waste goes to landfill and every material finds new life through our circular economy approach.</p>
                        <ul class="vision-points">
                            <li><i class="fas fa-star"></i> Trusted industry leader</li>
                            <li><i class="fas fa-star"></i> Waste-to-resource innovation</li>
                            <li><i class="fas fa-star"></i> Circular economy focus</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Values Section -->
        <div class="values-section">
            <h2 class="section-title text-center mb-5">Our Core Values</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="value-card card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="value-icon mb-3">
                                <i class="fas fa-leaf"></i>
                            </div>
                            <h3>Sustainability</h3>
                            <p>Commitment to environmental preservation through every operation</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="value-card card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="value-icon mb-3">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <h3>Innovation</h3>
                            <p>Continuous improvement through technology and creative solutions</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="value-card card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="value-icon mb-3">
                                <i class="fas fa-hands-helping"></i>
                            </div>
                            <h3>Integrity</h3>
                            <p>Ethical practices and transparency in all our dealings</p>
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
    .mission-page {
        padding: 4rem 0;
        background-color: #f9f9f9;
    }

    /* Header Styles */
    .mission-header h1 {
        color: var(--soraza-dark);
        font-weight: 700;
        margin-bottom: 1rem;
    }

    .mission-header .divider {
        width: 80px;
        height: 3px;
        background: var(--soraza-green);
        margin: 1rem auto;
    }

    .mission-header .lead {
        color: #666;
        font-size: 1.25rem;
    }

    /* Mission Card */
    .mission-card {
        background-color: white;
        border-radius: 8px;
        border-left: 5px solid var(--soraza-green);
    }

    .mission-badge {
        display: inline-block;
        background-color: var(--soraza-green);
        color: white;
        padding: 0.25rem 1rem;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
        letter-spacing: 1px;
        margin-bottom: 1rem;
    }

    .mission-icon {
        font-size: 5rem;
        color: var(--soraza-green);
        opacity: 0.2;
    }

    .mission-text {
        font-size: 1.1rem;
        line-height: 1.7;
        color: #555;
        margin-bottom: 1.5rem;
    }

    .mission-points {
        list-style: none;
        padding-left: 0;
    }

    .mission-points li {
        position: relative;
        padding-left: 30px;
        margin-bottom: 0.5rem;
        color: #555;
    }

    .mission-points i {
        position: absolute;
        left: 0;
        color: var(--soraza-green);
    }

    /* Vision Card */
    .vision-card {
        background-color: white;
        border-radius: 8px;
        border-right: 5px solid var(--soraza-dark);
    }

    .vision-badge {
        display: inline-block;
        background-color: var(--soraza-dark);
        color: white;
        padding: 0.25rem 1rem;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
        letter-spacing: 1px;
        margin-bottom: 1rem;
    }

    .vision-icon {
        font-size: 5rem;
        color: var(--soraza-dark);
        opacity: 0.2;
    }

    .vision-text {
        font-size: 1.1rem;
        line-height: 1.7;
        color: #555;
        margin-bottom: 1.5rem;
    }

    .vision-points {
        list-style: none;
        padding-left: 0;
    }

    .vision-points li {
        position: relative;
        padding-left: 30px;
        margin-bottom: 0.5rem;
        color: #555;
    }

    .vision-points i {
        position: absolute;
        left: 0;
        color: var(--soraza-dark);
    }

    /* Values Section */
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

    .value-card {
        transition: all 0.3s ease;
        border-radius: 8px;
    }

    .value-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
    }

    .value-icon {
        font-size: 2.5rem;
        color: var(--soraza-green);
    }

    .value-card h3 {
        color: var(--soraza-dark);
        margin-bottom: 1rem;
    }

    .value-card p {
        color: #666;
        line-height: 1.6;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .mission-page {
            padding: 2rem 0;
        }
        
        .mission-header h1 {
            font-size: 2rem;
        }
        
        .mission-icon, .vision-icon {
            font-size: 3rem;
        }
    }
</style>
@endpush