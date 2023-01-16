<x-office.layout>
    
    @push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/office/manager/create-employee.css') }}">       
@endpush

<x-slot:pageTitle>Nouvel Employe</x-slot:pageTitle>
<div class="register-form-box">
    <form action="{{ route('create-role') }}" method="POST" class="register-form">
        @csrf
        <div class="input-box">
            <label for="label">Libellé :</label>
            <input type="text" name="label" id="label" placeholder="ex: administrateur" value="{{ old('label') }}">
            @error('label')
                <small class="error-message">{{ $message }}</small>
            @enderror
        </div>
    
        <div class="input-box">
            <input type="submit" value="Valider" class="submit-btn bg-blue">
        </div>
    </form>
</div>
    
</x-office.layout>