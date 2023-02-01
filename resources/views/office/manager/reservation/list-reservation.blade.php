<x-office.layout :menuLayout=$menu>

    @push('styles')
      <link rel="stylesheet" href="{{ asset('assets/css/office/list/styleListe.css') }}">      
    @endpush

      <x-slot:pageTitle>liste Reservations</x-slot:pageTitle>

    <div class="page">
       @if ($message = Session::get('success'))
        <div class="bg-red"><p>{{ $message }}</p> </div>
      @endif
        <div class="page-header">
            <span class="page-title">Liste des reservations</span>
            <a class="add-redirector" href="{{ route('create-reservation') }}">Ajout reservations</a>
        </div>

        <div class="table-container">
            <table class="table">
              <thead>
                <tr class="table-row">
                    <th>Nom</th>
                    <th>Quantité</th>
                    <th>Prix Unitaire</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
              </thead>

              <tbody>
                  
                  <tr>
                    <td><div>moussa</div></td>
                    <td><div>sene</div></td>
                    <td><div>uadb</div></td>
                    <td><div>ooooo</div></td>
                    <td class="actions">
                    <div>
                        <button class="bg-yellow"><a href="#">Editer</a></button>
                        <form action="#" method="post">
                          @csrf
                          @method('DELETE')
                          <button class="bg-red">Desactiver</button>
                        </form>
                        
                        {{-- <button class="bg-green">Activer</button> --}}
                      </div>
                    </td>
                  </tr>
                
                
              </tbody>
            </table>
        </div>

        <div class="pagination-side">
          {{ $reservations->links() }}
      </div>
    </div>
        
</x-office.layout>