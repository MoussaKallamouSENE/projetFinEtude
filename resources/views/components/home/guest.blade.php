<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/site/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontAwesome/css/all.min.css') }}">
    <script src="{{ asset('assets/fontAwesome/js/all.min.js') }}"></script>
    @stack('styles')
    <title>RestoSAF</title>
</head>

<body style="background-color: #fff">
    <div class="main-site">

        //le component du navbar
        <x-home.nav-bar></x-home.nav-bar>

        //le components du header cad=>le slider
        <x-home.header></x-home.header>
        
            {{ $slot }}

        //le component du footer
        <x-home.footer></x-home.footer>
    </div>
</body>

</html>
