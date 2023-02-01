<x-office.layout>
    
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/css/office/manager/create-employee.css') }}">       
    @endpush

<x-slot:pageTitle>Ajout Table</x-slot:pageTitle>
<div class="register-form-box">
    <form action="{{ route('create-table') }}" method="POST" class="register-form">
        @csrf

        <div class="input-box">
            <label for="name">Nom Table :</label>
            <input type="text" name="name" id="name" placeholder="ex: administrateur" value="{{ old('name') }}">
            @error('name')
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
    
</x-office.layout>