<x-office.layout-auth>

    <x-slot:pageTitle>Login</x-slot:pageTitle>  

    <form action="{{ route('office-login') }}" method="post" class="login-from">
        @csrf
        @error('login-error')
            <small class="error-message">{{ $message }}</small>
        @enderror
        <div class="input-box">
            <label for="email">Votre email: </label>
            <input type="email" id="email" name="email" placeholder="exemple@exemple.com" value="{{ old('email') }}">
            @error('email')
                <small class="error-message">{{ $message }}</small>
            @enderror
        </div>

        <div class="input-box">
            <label for="password">Votre Mot de Passe: </label>
            <input type="password" id="password" name="password" placeholder="exemple@exemple.com" value="{{ old('password') }}">
            @error('password')
                <small class="error-message">{{ $message }}</small>
            @enderror
        </div> 

        <div class="input-box">
                <input type="submit" value="Valider" class="submit-btn bg-green">
        </div>  
    </form>
</x-office.layout-auth>