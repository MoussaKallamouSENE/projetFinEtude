<x-office.layout :menuLayout=$menu>
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/css/office/list/styleListe.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/office/manager/create-employee.css') }}">       
              
    @endpush

    <div class="page">
        <h1>page de modification des produit en magasin</h1>

        <div class="register-form-box">
            <form action="{{ route('update-product', $product->id) }}" method="POST" class="register-form" enctype="multipart/form-data">
                @method('patch')
                @csrf
                

                <div class="input-box">
                    <label for="name">Nom Produit :</label>
                    <input type="text" name="name" id="name" value="{{ $product->name }}">
                </div>

                <div class="input-box">
                    <label for="quantity">Quantité Produit :</label>
                    <input type="number" name="quantity" id="quantity" value="{{ $product->quantity }}">
                </div>

                <div class="input-box">
                    <label for="price">Prix unitaire Produit :</label>
                    <input type="number" name="price" id="price" value="{{ $product->price }}">
                </div>

                <div class="input-box">
                    <label for="description">Description Produit :</label>
                    <textarea  name="description" id="description"  value="{{ $product->description }}"></textarea>
                </div>


                <div class="input-box">
                    <input type="submit" value="modifier" class="submit-btn bg-blue">
                </div>
            </form>
        </div>
    </div>
</x-office.layout>