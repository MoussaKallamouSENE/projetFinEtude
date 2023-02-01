<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/office/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/office/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/office/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontAwesome/css/all.min.css') }}">
    <script src="{{ asset('assets/fontAwesome/js/all.min.js') }}"></script>
    @stack('styles')
    <title>RestoSAF - {{ $pageTitle ?? 'office' }}</title>
</head>
<body>
    <div class="main">
        
        <div class="main-sidebar">
            <x-office.sidebar :menu=$menuLayout></x-office.sidebar>
        </div>

        <div class="main-principal">
        
            <div class="main-navbar">
                <x-office.navbar></x-office.navbar>
            </div>

            <div class="main-content">
                {{ $slot }}
            </div>
        </div>        
    </div>
   
</body>
</html>