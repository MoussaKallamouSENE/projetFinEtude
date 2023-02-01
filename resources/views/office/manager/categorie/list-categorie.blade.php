<x-office.layout :menuLayout=$menu>

    @push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/office/list/styleListe.css') }}">>       
    @endpush

      <x-slot:pageTitle>GestionCatégories</x-slot:pageTitle>

    <div class="page">
      @if ($message = Session::get('success'))
        <div class="bg-red"><p>{{ $message }}</p> </div>
      @endif
        <div class="page-header">
            <span class="page-title">Gestion des categorie</span>
            <a class="add-redirector" href="{{ route('create-categorie') }}">Ajout categorie</a>
        </div>

        <div class="table-container">
            <table class="table">
              <thead>
                <tr class="table-row">
                    <th>Image</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
              </thead>

              <tbody>
                @foreach ($categories as $categorie)
                  
                  <tr>
                    <td>
                      <div>
                        {{-- {{ $categorie->image }} --}}
                         <img src="{{ url('/storage/uploads',$categorie->image ) }}" style="height: 50px; width: 50px; border-radius: 15%">
                      </div>
                    </td>
                    <td><div>{{ $categorie->name }}</div></td>
                    <td><div>{{ $categorie->description }}</div></td>
                    <td class="actions">
                      <div>
                        <button class="bg-yellow"><a href="{{ route('edit-categorie',$categorie->id, '/edit') }}">Editer</a></button>
                        <form action="{{ route('destroy-categorie',$categorie->id) }}" method="post">
                          @csrf
                          @method('DELETE')
                          <button class="bg-red">Supprimer</button>
                        </form>
                        
                        {{-- <button class="bg-green">Activer</button> --}}
                      </div>
                    </td>
                  </tr>
                @endforeach
                
              </tbody>
            </table>
        </div>

        <div class="pagination-side">
          {{ $categories->links() }}
        </div>

        @push('styles')
          <link rel="stylesheet" href="{{ asset('assets/css/office/manager/create-employee.css') }}">       
        @endpush

        <div class="register-form-box">
            <form action="{{ route('create-categorie') }}" method="POST" class="register-form" enctype="multipart/form-data">
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
    </div>
        
</x-office.layout>