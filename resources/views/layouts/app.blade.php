<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soraza Recycling - @yield('title')</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    @include('partials.header')
    
    <main class="container py-4">
        @yield('content')
    </main>
    
    @include('partials.footer')
    
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

