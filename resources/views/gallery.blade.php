@extends('layouts.app')

@section('content')
<div class="gallery-page py-5">
    <div class="container">
        <!-- Gallery Header -->
        <div class="gallery-header text-center mb-5">
            <h1 class="display-4">Our Recycling Process</h1>
            <div class="divider mx-auto"></div>
            <p class="lead">Key stages of our eco-friendly waste management</p>
        </div>

        <!-- 2×2 Gallery Grid -->
        <div class="row g-4">
            @foreach([
                ['num' => 1, 'title' => 'Waste Collection', 'desc' => 'Efficient collection from businesses and households'],
                ['num' => 2, 'title' => 'Initial Sorting', 'desc' => 'Manual separation of materials'],
                ['num' => 3, 'title' => 'E-Waste Processing', 'desc' => 'Safe dismantling of electronics'],
                ['num' => 4, 'title' => 'Plastic Separation', 'desc' => 'Sorting by polymer type'],
                ['num' => 5, 'title' => 'Metal Recovery', 'desc' => 'Extracting valuable metals'],
                ['num' => 6, 'title' => 'Shredding', 'desc' => 'Size reduction for processing'],
                ['num' => 7, 'title' => 'Quality Control', 'desc' => 'Ensuring material purity'],
                ['num' => 8, 'title' => 'Baling', 'desc' => 'Compacting materials for transport'],
                ['num' => 9, 'title' => 'Storage', 'desc' => 'Secure holding of materials'],
                ['num' => 10, 'title' => 'Dispatch', 'desc' => 'Shipping to manufacturers'],
                ['num' => 11, 'title' => 'Recycled Products', 'desc' => 'New products from recycled materials'],
                ['num' => 12, 'title' => 'Sustainability', 'desc' => 'Completing the circular economy']
            ] as $item)
            <div class="col-md-6">
                <div class="gallery-card h-100">
                    <div class="gallery-img-container ratio ratio-1x1"> <!-- Perfect square -->
                        <img src="{{ asset('images/gallery/gallery-'.$item['num'].'.jpg') }}" 
                             alt="{{ $item['title'] }}" 
                             class="gallery-img"
                             loading="lazy">
                    </div>
                    <div class="gallery-overlay">
                        <div class="overlay-content">
                            <h3>{{ $item['title'] }}</h3>
                            <p>{{ $item['desc'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
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
    }

    /* Gallery Styles */
    .gallery-page {
        background-color: #f9f9f9;
    }

    /* Header */
    .gallery-header h1 {
        color: var(--soraza-dark);
        font-weight: 700;
    }

    .gallery-header .divider {
        width: 80px;
        height: 3px;
        background: var(--soraza-green);
        margin: 1rem auto;
    }

    .gallery-header .lead {
        color: #666;
        font-size: 1.25rem;
    }

    /* Gallery Card */
    .gallery-card {
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
    }

    .gallery-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.2);
    }

    .gallery-img-container {
        position: relative;
    }

    .gallery-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .gallery-card:hover .gallery-img {
        transform: scale(1.05);
    }

    .gallery-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(44, 120, 108, 0.8);
        opacity: 0;
        transition: opacity 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 20px;
    }

    .gallery-card:hover .gallery-overlay {
        opacity: 1;
    }

    .overlay-content {
        color: white;
        transform: translateY(20px);
        transition: transform 0.3s ease;
    }

    .gallery-card:hover .overlay-content {
        transform: translateY(0);
    }

    .overlay-content h3 {
        font-size: 1.5rem;
        margin-bottom: 10px;
    }

    .overlay-content p {
        font-size: 0.9rem;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .gallery-header h1 {
            font-size: 2rem;
        }
        
        .overlay-content h3 {
            font-size: 1.2rem;
        }
    }
</style>
@endpush