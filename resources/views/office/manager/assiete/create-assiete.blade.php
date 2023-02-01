<x-office.layout :menuLayout=$menu>
    
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/css/office/manager/create-employee.css') }}">       
    @endpush

<x-slot:pageTitle>Nouvel Employe</x-slot:pageTitle>
<div class="register-form-box">
    <form action="{{ route('store-assiete') }}" method="POST" class="register-form" enctype="multipart/form-data">
        @csrf
        <div class="input-box">
            <label for="name">Nom Assiete :</label>
            <input type="text" name="name" id="name" placeholder="ex: riz au poulet" value="{{ old('name') }}">
            @error('name')
                <small class="error-message">{{ $message }}</small>
            @enderror
        </div>

        <div class="input-box">
            <label for="categorie">Categorie :</label>
            <select name="categorie_id" id="categorie" class="select">
                <option value="">---choisir Categorie----</option>
                @foreach ($categories as $categorie )

                    <option value="{{ $categorie->id }}">{{ $categorie ->name }}</option>
                @endforeach
              
            </select>
            @error('categorie_id')
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
            <label for="price">Prix Assiete :</label>
            <input type="text" name="price" id="price" placeholder="ex: 700" value="{{ old('price') }}">
            @error('price')
                <small class="error-message">{{ $message }}</small>
            @enderror
        </div>

        <div class="input-box">
            <label for="detail">Detail :</label>
            <textarea  name="detail" id="detail"  value="{{ old('detail') }}"></textarea>
            @error('detail')
                <small class="error-message">{{ $message }}</small>
            @enderror
        </div>
    
        <div class="input-box">
            <input type="submit" value="Valider" class="submit-btn bg-blue">
        </div>
    </form>
</div>
    
</x-office.layout>