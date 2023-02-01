<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/office/auth.css') }}">
    <title>RestoSAF - {{ $pageTitle ?? 'connexion' }}</title>
</head>
<body>
    <div class="main-auth">
        <div class="main-auth-box">
            <div class="auth-box-title">
                <h4>{{ $authTitle ?? 'Connexion' }}</h4>
            </div>

            <div class="auth-box-content">
                {{ $slot }}
            </div>

            <div class="auth-box-end">
                Veillez-vous connecté sur RestoSAF 
            </div>
            
        </div>
        
    </div>
</body>
</html>