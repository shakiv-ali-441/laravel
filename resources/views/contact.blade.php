@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Contact Us</h1>
    
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h3 class="card-title">Our Location</h3>
                    <p class="card-text">
                        KHASRA NO 373, VILLAGE RAVALI, DHAULANA,<br>
                        Hapur, Hapur, Uttar Pradesh, 245301
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h3 class="card-title">Contact Information</h3>
                    <p class="card-text">
                        <strong>Phone:</strong> +91 8630656076<br>
                        <strong>Email:</strong> info@xyz.com
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="card">
        <div class="card-body">
            <h2>Send us a Message</h2>
            <form>
                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="form-group mb-3">
                    <label for="phone">Phone</label>
                    <input type="tel" class="form-control" id="phone">
                </div>
                <div class="form-group mb-3">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection