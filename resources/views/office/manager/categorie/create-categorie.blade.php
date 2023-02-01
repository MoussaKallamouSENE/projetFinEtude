<x-office.layout>
    
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/css/office/manager/create-employee.css') }}">       
    @endpush

<x-slot:pageTitle>Nouvel Employe</x-slot:pageTitle>
<div class="register-form-box">
    <form action="{{ route('creer-categorie') }}" method="POST" class="register-form" enctype="multipart/form-data">
        @csrf
        <div class="input-box">
            <label for="name">Nom Categorie :</label>
            <input type="text" name="name" id="name" placeholder="ex: fash food" value="{{ old('name') }}">
            @error('name')
                <small class="error-message">{{ $message }}</small>
            @enderror
        </div>

        <div class="input-box">
            <label for="image">Image :</label>
            <input type="file" name="image" id="image"  value="{{ old('image') }}">
            @error('image')
                <small class="error-message">{{ $message }}</small>
            @enderror
        </div>

        <div class="input-box">
            <label for="description">Description :</label>
            <textarea  name="description" id="description"  value="{{ old('description') }}"></textarea>
            @error('description')
                <small class="error-message">{{ $message }}</small>
            @enderror
        </div>
    
        <div class="input-box">
            <input type="submit" value="Valider" class="submit-btn bg-blue">
        </div>
    </form>
</div>
    
</x-office.layout>