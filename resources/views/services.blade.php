@extends('layouts.app')

@section('content')
<div class="services-page">
    <div class="container">
        <!-- Hero Header -->
        <div class="services-header text-center mb-5">
            <h1 class="display-4">Our Services</h1>
            <div class="divider mx-auto"></div>
            <p class="lead">Comprehensive waste management solutions for a sustainable future</p>
        </div>

        <!-- Main PRO Section -->
        <div class="pro-capability card mb-5 border-0 shadow">
            <div class="card-body p-4 p-md-5">
                <div class="pro-badge mb-3">PRO SERVICE</div>
                <h2 class="mb-4">Capacity And Capability</h2>
                <p class="pro-description">SORAZA RECYCLING offers scalable and efficient waste management solutions with state-of-the-art technology and a skilled workforce. Our advanced facility ensures high-capacity processing, while our flexible services cater to both small and large-scale needs. We comply with all regulatory standards and provide reliable logistics for timely waste collection and disposal. Trust us for professional, sustainable, and efficient waste management.</p>
            </div>
        </div>

        <!-- Services Grid -->
        <h2 class="section-title mb-4">Our Core Services</h2>
        <div class="row services-grid">
            @foreach([
                [
                    'title' => 'Electronic Waste Recycling',
                    'desc' => 'We specialize in the safe and efficient recycling of electronic waste (e-waste). Our process ensures that all electronic devices, including computers, mobiles, and household electronics, are responsibly processed to recover valuable materials and minimize harmful environmental impact.',
                    'icon' => 'fas fa-laptop'
                ],
                [
                    'title' => 'Non-Biodegradable Waste',
                    'desc' => 'Comprehensive management solutions for non-biodegradable materials to ensure minimal environmental impact.',
                    'icon' => 'fas fa-trash-alt'
                ],
                [
                    'title' => 'Waste Collection & Segregation',
                    'desc' => 'Efficient collection systems with proper segregation at source for optimal recycling outcomes.',
                    'icon' => 'fas fa-truck-loading'
                ],
                [
                    'title' => 'Sustainable Disposal Solutions',
                    'desc' => 'Environmentally responsible disposal methods that comply with all regulatory requirements.',
                    'icon' => 'fas fa-recycle'
                ],
                [
                    'title' => 'Consultation & Awareness',
                    'desc' => 'Educational programs and expert consultation to improve waste management practices.',
                    'icon' => 'fas fa-chalkboard-teacher'
                ],
                [
                    'title' => 'Custom Business Solutions',
                    'desc' => 'Tailored waste management programs designed for your specific business needs.',
                    'icon' => 'fas fa-briefcase'
                ]
            ] as $service)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-card card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="service-icon mb-3">
                            <i class="{{ $service['icon'] }}"></i>
                        </div>
                        <h3 class="card-title">{{ $service['title'] }}</h3>
                        <p class="card-text">{{ $service['desc'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- PRO Process -->
        <div class="pro-process card mt-5 border-0 shadow">
            <div class="card-body p-4 p-md-5">
                <h2 class="mb-4">PRO Process</h2>
                <div class="process-steps">
                    <div class="process-step">
                        <div class="step-header">
                            <span class="step-number">1</span>
                            <h4>LIFERING</h4>
                        </div>
                        <ul class="step-details">
                            <li>C</li>
                            <li>Product resources for operation</li>
                            <li>Reporting and auditing collection</li>
                            <li>Collection and storage layer, Dealer & Retailer Take back/</li>
                        </ul>
                    </div>
                    
                    <div class="process-step">
                        <div class="step-header">
                            <span class="step-number">2</span>
                            <h4>Enspiring</h4>
                        </div>
                        <ul class="step-details">
                            <li>EPR Compliance Aggregating Reports</li>
                            <li>Integration of informal sector for setting up e-waste collection system</li>
                            <li>Integration of internal sector for setting up e-waste collection system</li>
                        </ul>
                    </div>
                    
                    <div class="process-step">
                        <div class="step-header">
                            <span class="step-number">3</span>
                            <h4>PRO</h4>
                        </div>
                        <ul class="step-details">
                            <li>Reporting and auditing collection</li>
                            <li>Collection and storage layer, Dealer & Retailer Take back/</li>
                        </ul>
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
    .services-page {
        padding: 4rem 0;
        background-color:rgb(250, 245, 245);
    }

    /* Header Styles */
    .services-header h1 {
        color: var(--soraza-dark);
        font-weight: 700;
        margin-bottom: 1rem;
    }

    .services-header .divider {
        width: 80px;
        height: 3px;
        background: var(--soraza-green);
        margin: 1rem auto;
    }

    .services-header .lead {
        color: #666;
        font-size: 1.25rem;
    }

    /* PRO Capability Section */
    .pro-capability {
        background-color: white;
        border-radius: 8px;
    }

    .pro-badge {
        display: inline-block;
        background-color: var(--soraza-green);
        color: white;
        padding: 0.25rem 1rem;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
        letter-spacing: 1px;
    }

    .pro-capability h2 {
        color: var(--soraza-dark);
        font-weight: 600;
    }

    .pro-description {
        font-size: 1.1rem;
        line-height: 1.7;
        color: #555;
    }

    /* Services Grid */
    .section-title {
        color: var(--soraza-dark);
        font-weight: 600;
        position: relative;
        padding-bottom: 10px;
    }

    .section-title:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 60px;
        height: 3px;
        background: var(--soraza-green);
    }

    .service-card {
        transition: all 0.3s ease;
        border-radius: 8px;
        overflow: hidden;
    }

    .service-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
    }

    .service-icon {
        font-size: 2rem;
        color: var(--soraza-green);
    }

    .service-card h3 {
        color: var(--soraza-dark);
        font-size: 1.25rem;
        margin-bottom: 1rem;
    }

    .service-card p {
        color: #666;
        line-height: 1.6;
    }

    /* PRO Process */
    .pro-process {
        background-color: white;
        border-radius: 8px;
    }

    .process-steps {
        margin-top: 2rem;
    }

    .process-step {
        margin-bottom: 2rem;
        padding-bottom: 2rem;
        border-bottom: 1px solid #eee;
    }

    .process-step:last-child {
        border-bottom: none;
        margin-bottom: 0;
        padding-bottom: 0;
    }

    .step-header {
        display: flex;
        align-items: center;
        margin-bottom: 1rem;
    }

    .step-number {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 30px;
        height: 30px;
        background-color: var(--soraza-green);
        color: white;
        border-radius: 50%;
        font-weight: bold;
        margin-right: 15px;
    }

    .step-header h4 {
        margin: 0;
        color: var(--soraza-dark);
    }

    .step-details {
        padding-left: 45px;
        list-style-type: none;
    }

    .step-details li {
        position: relative;
        padding-left: 20px;
        margin-bottom: 0.5rem;
        color: #555;
    }

    .step-details li:before {
        content: '•';
        position: absolute;
        left: 0;
        color: var(--soraza-green);
        font-weight: bold;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .services-page {
            padding: 2rem 0;
        }
        
        .services-header h1 {
            font-size: 2rem;
        }
        
        .pro-capability, .pro-process {
            padding: 2rem !important;
        }
    }
</style>
@endpush

@push('scripts')
<!-- If you need any JavaScript -->
@endpush