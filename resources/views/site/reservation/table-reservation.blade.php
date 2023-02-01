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
                    <form action="#" method="POST" class="register-form">
                        @csrf
                
                        <div class="input-box">
                            <label for="prename"> Table Disponible:</label>
                            <input type="text" name="prename" id="prename" placeholder="ex: administrateur" value="{{ old('prename') }}">
                            @error('prename')
                                <small class="error-message">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="input-box">
                            <label for="places">Nombre de Place :</label>
                            <input type="number" name="places" id="places" placeholder="ex: administrateur" value="{{ old('places') }}">
                            @error('places')
                                <small class="error-message">{{ $message }}</small>
                            @enderror
                        </div>
                
                    
                        <div class="input-box">
                            <input type="submit" value="Valider" class="submit-btn bg-blue">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   
   
</body>
</html>