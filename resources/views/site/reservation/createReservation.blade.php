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
    <link rel="stylesheet" href="{{ asset('assets/css/office/manager/create-employee.css') }}">       

    <script src="{{ asset('assets/fontAwesome/js/all.min.js') }}"></script>
    @stack('styles')     
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
                <div class="register-form-box">
                    <form action="{{ route('table-reservation') }}" method="POST" class="register-form">
                        @csrf
                
                        <div class="input-box">
                            <label for="first_name"> Votre Prenom:</label>
                            <input type="text" name="first_name" id="first_name" placeholder="ex: administrateur" value="{{ old('first_name') }}">
                            @error('first_name')
                                <small class="error-message">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="input-box">
                            <label for="last_name"> Votre Nom:</label>
                            <input type="text" name="last_name" id="last_name" placeholder="ex: administrateur" value="{{ old('last_name') }}">
                            @error('last_name')
                                <small class="error-message">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="input-box">
                            <label for="email"> Votre Email:</label>
                            <input type="text" name="email" id="email" placeholder="ex: administrateur" value="{{ old('email') }}">
                            @error('email')
                                <small class="error-message">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="input-box">
                            <label for="tel_number"> Votre Telephone:</label>
                            <input type="text" name="tel_number" id="tel_number" placeholder="ex: +221 77 777 77 77" value="{{ old('tel_number') }}">
                            @error('tel_number')
                                <small class="error-message">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="input-box">
                            <label for="res_date"> Date de reservation:</label>
                            <input type="datetime-local" id="res_date" name="res_date"
                                         min="{{ $min_date->format('Y-m-d\TH:i:s') }}"
                                            max="{{ $max_date->format('Y-m-d\TH:i:s') }}"
                                            value="{{ $reservation ? $reservation->res_date->format('Y-m-d\TH:i:s') : '' }}"
                            />
                            @error('res_date')
                                <small class="error-message">{{ $message }}</small>
                            @enderror
                        </div>
                                 
                        <div class="input-box">
                            <input type="submit" value="suivant" class="submit-btn bg-blue">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   
   
</body>
</html>