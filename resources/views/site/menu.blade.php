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
        <x-home.nav-bar></x-home.nav-bar>
        <div class="home-content">
            <div class="home-category">
                <h4 class="home-category-title">Plats Sénégalais</h4>

                <div class="home-category-content">
                    @foreach ($assietes as $assiete)
                    <div class="card-category bg-blue">
                        <div class="img">
                            <img src="{{ url('/storage/uploads',$assiete->image ) }}" alt="">
                        </div>  
                        <div class="card-category-details">
                                            
                            <h5>{{ $assiete->name }}</h5>
                            <p>
                                {{ $assiete->detail }}
                            </p>
                            <div class="details-action">
                                <span>{{ $assiete->price }} fCFA</span>
                                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
        {{-- le footer =>pied de page --}}
        <x-home.footer></x-home.footer>
    </div>
</body>
</html>