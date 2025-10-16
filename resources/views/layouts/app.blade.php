<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'BioMahasiswa' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: url("{{ asset('images/bg_web.jpg') }}") no-repeat center center fixed;
            background-size: cover;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .navbar { 
            background-color: #1B3C53 !important; 
        }
        .navbar-brand {
            font-weight: bold;
            color: #A5BFCC !important;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.6);
        }
        .navbar .btn {
            background-color: #A5BFCC;
            color: #1B3C53;           
            border: none;
        }
        .footer {
            background-color: #1B3C53;
            color: #A5BFCC;
            margin-top: auto;
        }
    </style>
</head>
<body>
    {{-- Navbar --}}
    @include('components.navbar')

    {{-- Content --}}
    <main class="container mt-4">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>