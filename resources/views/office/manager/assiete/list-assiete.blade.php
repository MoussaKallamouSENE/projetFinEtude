<x-office.layout :menuLayout=$menu>

    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/css/office/list/styleListe.css') }}">       
    @endpush

      <x-slot:pageTitle>liste des Assiete</x-slot:pageTitle>

    <div class="page">
       @if ($message = Session::get('success'))
        <div class="bg-red"><p>{{ $message }}</p> </div>
      @endif
        <div class="page-header">
            <span class="page-title">Liste des Assietes</span>
            <a class="add-redirector" href="{{ route('create-assiete') }}">Ajout Assiete</a>
        </div>

        <div class="table-container">
            <table class="table">
              <thead>
                <tr class="table-row">
                    <th>Image</th>
                    <th>Nom</th>
                    <th>Details</th>
                    <th>Prix</th>
                    <th>Categorie</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
              </thead>

              <tbody>
                @foreach ($assietes as $assiete)
                  
                  <tr>
                    <td>
                      <div>
                        {{-- {{ $assiete->image }} --}}
                        <img src="{{ url('/storage/uploads',$assiete->image ) }}" style="height: 50px; width: 50px; border-radius: 15%">
                      </div>
                    </td>
                    <td><div>{{ $assiete->name }}</div></td>
                    <td><div>{{ $assiete->detail }}</div></td>
                    <td><div>{{ $assiete->price }}</div></td>
                    <td><div>{{ $assiete->name }}</div></td>
                    <td class="actions"><div> @if($assiete->status == 1)
                      <button class="bg-red"><a href="{{ route('assiete-inactive', ['id'=>$assiete->id]) }}">Indisponible</a></button>
                    @else
                      <button class="bg-green"><a href="{{ route('assiete-active', ['id'=>$assiete->id]) }}">Disponible</a></button>
                    @endif</div></td>
                    </td>
                    <td class="actions">
                     
                      <div>
                       
                        <button class="bg-yellow"><a href="{{ route('edit-assiete',$assiete->id, '/edit') }}">Editer</a></button>
                        <form method="post" action="{{ route('destroy-assiete',$assiete->id) }}">
                          @csrf
                          @method('DELETE')
                          <button class="bg-red">Supprimer</button>
                        </form>
                        {{-- <button class="bg-green">Metre ajour</button> --}}
                      </div>
                    </td>
                  </tr>
                @endforeach
                
              </tbody>
            </table>
        </div>

        <div class="pagination-side">
          {{ $assietes->links() }}
      </div>
    </div>
        
</x-office.layout>