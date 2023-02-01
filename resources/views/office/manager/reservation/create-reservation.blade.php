<x-office.layout :menuLayout=$menu>
    
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/css/office/manager/create-employee.css') }}">       
    @endpush

<x-slot:pageTitle>Ajout Table</x-slot:pageTitle>
<div class="register-form-box">
    <form action="{{ route('create-reservation') }}" method="POST" class="register-form">
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
            <input type="datetime-local" id="res_date" name="res_date"/>
            @error('res_date')
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
            <label for="status">Table disponible</label>
                <select id="table_id" name="table_id" class="select">
                    {{-- @foreach ($tables as $table)
                        <option value="{{ $table->id }}">{{ $table->name }}
                            ({{ $table->guest_number }} Guests)
                        </option>
                    @endforeach --}}
                    <option value="table1">table 1</option>
                    <option value="table2">table 2</option>
                    <option value="table3">table 3</option>
                </select>
        
            @error('table_id')
                <div class="text-sm text-red-400">{{ $message }}</div>
            @enderror
        </div>
                 
        <div class="input-box">
            <input type="submit" value="suivant" class="submit-btn bg-blue">
        </div>
    </form>
</div>
    
</x-office.layout>