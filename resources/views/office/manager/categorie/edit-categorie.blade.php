<x-office.layout :menuLayout=$menu>
    @push('styles')
      <link rel="stylesheet" href="{{ asset('assets/css/office/list/styleListe.css') }}">              
    @endpush

    <div class="page">
        <h1>page de modification des categories</h1>

        <div class="register-form-box">
            <form action="{{ route('update-categorie', $categorie->id) }}" method="POST" class="register-form" enctype="multipart/form-data">
                @method('patch')
                @csrf
                

                <div class="input-box">
                    <label for="name">Nom Categorie :</label>
                    <input type="text" name="name" id="name" value="{{ $categorie->name }}">
                </div>

                <div class="input-box">
                    <label for="image">Image Categorie :</label>
                    <img src="{{ url('/storage/uploads',$categorie->image ) }}" style="height: 90px; width: 90px; border-radius: 15%">
                    <input type="file" name="image" id="image" value="{{ $categorie->image }}">
                </div>

                <div class="input-box">
                    <label for="description">Description Categorie :</label>
                    <input type="text" name="description" id="description" value="{{ $categorie->description }}">
                </div>


                <div class="input-box">
                    <input type="submit" value="modifier" class="submit-btn bg-blue">
                </div>
            </form>
        </div>
    </div>
</x-office.layout>