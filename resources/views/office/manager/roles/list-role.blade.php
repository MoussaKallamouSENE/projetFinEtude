<x-office.layout :menuLayout=$menu>

    @push('styles')
      <link rel="stylesheet" href="{{ asset('assets/css/office/manager/separer/styleListe.css') }}">       
    @endpush

      <x-slot:pageTitle>gestion Roles</x-slot:pageTitle>

    <div class="page">
      @if ($message = Session::get('success'))
            <div class="bg-red">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="page-header">
            <span class="page-title">gestion des Roles</span>
            {{-- <a class="add-redirector" href="{{ route('create-role') }}">Ajout Role</a> --}}
        </div>

        <div class="table-container">
            <table class="table">
              <thead>
                <tr class="table-row">
                    <th>Libellé</th>                    
                    <th>Actions</th>
                </tr>
              </thead>

              <tbody>
                @foreach ($roles as $role)
                  
                  <tr>
                    <td><div>{{ $role->label }}</div></td>                  
                     <td class="actions">
                      <div>
                        <button class="bg-yellow"><a href="{{ route('edit-role',$role->id, '/edit') }}">Editer</a></button>
                        <form method="post" action="{{ route('destroy-role',$role->id) }}">
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
          {{ $roles->links() }}
        </div>

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
      
    </div>
        
</x-office.layout>