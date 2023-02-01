<x-office.layout :menuLayout=$menu>

    @push('styles')
      <link rel="stylesheet" href="{{ asset('assets/css/office/list/styleListe.css') }}">       
    @endpush

      <x-slot:pageTitle>liste Tables</x-slot:pageTitle>

    <div class="page">
       @if ($message = Session::get('success'))
        <div class="bg-red"><p>{{ $message }}</p> </div>
      @endif
        <div class="page-header">
            <span class="page-title">Liste des tables</span>
            <a class="add-redirector" href="{{ route('create-table') }}">Ajout table</a>
        </div>

        <div class="table-container">
            <table class="table">
              <thead>
                <tr class="table-row">
                    <th>Nom</th>
                    <th>Nombre de Place</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
              </thead>

              <tbody>
                @foreach ($tables as $table)
                  
                  <tr>
                    <td><div>{{ $table->name }}</div></td>
                    <td><div>{{ $table->places }}</div></td>
                    <td><div>{{ $table->status }}</div></td>
                    <td class="actions">
                      <div>
                        <button class="bg-yellow"><a href="{{ route('edit-table',$table->id, '/edit') }}">Editer</a></button>
                        <form action="{{ route('destroy-table',$table->id) }}" method="post">
                          @csrf
                          @method('DELETE')
                          <button class="bg-red">Desactiver</button>
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
          {{ $tables->links() }}
        </div>

        @push('styles')
          <link rel="stylesheet" href="{{ asset('assets/css/office/manager/create-employee.css') }}">       
        @endpush
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
    </div>
        
</x-office.layout>