<x-office.layout>

    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/css/office/manager/create-employee.css') }}">       
    @endpush

    <x-slot:pageTitle>Nouvel Employe</x-slot:pageTitle>
    <div class="register-form-box">
        <form action="{{ route('create-employee') }}" method="POST" class="register-form">
            @csrf
            <div class="input-box">
                <label for="prename">Prenom :</label>
                <input type="text" name="prename" id="prename" placeholder="ex: Mor Codou" value="{{ old('prename') }}">
                @error('prename')
                    <small class="error-message">{{ $message }}</small>
                @enderror
            </div>
                

            <div class="input-box">
                <label for="name">Nom :</label>
                <input type="text" name="name" id="name" placeholder="ex: SECK" value="{{ old('name') }}">
                @error('name')
                    <small class="error-message">{{ $message }}</small>
                @enderror
            </div>

            <div class="input-box">
                <label for="phone">Telephone :</label>
                <input type="tel" name="phone" id="phone" placeholder="ex:+221 77 790 88 99" value="{{ old('phone') }}">
                @error("phone")
                    <small class="error-message">{{ $message }}</small>
                @enderror
            </div>
            
            <div class="input-box">
                <label for="email">Email :</label>
                <input type="email" name="email" id="email" placeholder="ex: seckmor@gamil.com" value="{{ old('email') }}">
                @error("email")
                    <small class="error-message">{{ $message }}</small>
                @enderror
            </div>

            <div class="input-box">
                <label for="address">Adresse :</label>
                <input type="text" name="address" id="address" placeholder="ex: dakar" value="{{ old('address') }}">
                @error("address")
                    <small class="error-message">{{ $message }}</small>
                @enderror
            </div>

            <div class="input-box">
                <label for="role">Role :</label>
                <select name="role" id="role" class="select">
                    <option value="">Choisir un Role</option>
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}">
                            {{ $role->label }}
                        </option>
                          
                    @endforeach
                  
                </select>
                @error("role")
                    <small class="error-message">{{ $message }}</small>
                @enderror
            </div>

            

            <div class="input-box">
                <input type="submit" value="Valider" class="submit-btn bg-blue">
            </div>
        </form>
    </div>

</x-office.layout>