<x-office.layout :menuLayout=$menu>
    
    @push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/office/manager/create-employee.css') }}">       
@endpush

<x-slot:pageTitle>Ajout Table</x-slot:pageTitle>
<div class="register-form-box">
    <form action="{{ route('create-product') }}" method="POST" class="register-form">
        @csrf

        <div class="input-box">
            <label for="name">Nom Produit :</label>
            <input type="text" name="name" id="name" placeholder="ex: huile" value="{{ old('name') }}">
            @error('name')
                <small class="error-message">{{ $message }}</small>
            @enderror
        </div>

        <div class="input-box">
            <label for="price">Prix Produit :</label>
            <input type="number" name="price" id="price" placeholder="ex: 200" value="{{ old('price') }}">
            @error('price')
                <small class="error-message">{{ $message }}</small>
            @enderror
        </div>

        <div class="input-box">
            <label for="quantity">Quantité Produit :</label>
            <input type="number" name="quantity" id="quantity" placeholder="ex: 12" value="{{ old('quantity') }}">
            @error('quantity')
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