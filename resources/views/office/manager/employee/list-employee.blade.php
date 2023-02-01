<x-office.layout :menuLayout=$menu>

    @push('styles')
      <link rel="stylesheet" href="{{ asset('assets/css/office/list/styleListe.css') }}">       
    @endpush

      <x-slot:pageTitle>liste des Employées</x-slot:pageTitle>

    <div class="page">
       @if ($message = Session::get('success'))

            <div class="bg-red">
                <p>{{ $message }}</p>
            </div>

        @endif
        <div class="page-header">
            <span class="page-title">Liste des employés</span>
            <a class="add-redirector" href="{{ route('create-employee') }}">Nouvel employé</a>
        </div>

        <div class="table-container">
            <table class="table">
              <thead>
                <tr class="table-row">
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Téléphone</th>
                    <th>Email</th>
                    <th>Adresse</th>
                    <th>Roles</th>
                    <th>Actions</th>
                </tr>
              </thead>

              <tbody>
                @foreach ($employes as $employe)
                  
                  <tr>
                    <td><div>{{ $employe->prename }}</div></td>
                    <td><div>{{ $employe->name }}</div></td>
                    <td><div>{{ $employe->phone }}</div></td>
                    <td><div>{{ $employe->email }}</div></td>
                    <td><div>{{ $employe->address }}</div></td>
                    <td>
                      <div>
                        @foreach ($employe->roles as $role)
                          {{ $role->label }}  
                        @endforeach
                      </div>
                    </td>
                    <td class="actions">
                      <div>
                        @if($employe->status == true)
                          <button class="bg-red"><a href="{{ route('employe-inactive', ['id'=>$employe->id]) }}">Desactiver</a></button>
                        @else
                          <button class="bg-green"><a href="{{ route('employe-active', ['id'=>$employe->id]) }}">Activer</a></button>
                        @endif
                        <button class="bg-yellow"><a href="{{ route('edit-employee',$employe->id,'/edit') }}">Editer</a></button>
                        {{-- <form method="post" action="{{ route('destroy-employe', $employe->id) }}">
                          @csrf
                          @method('DELETE')
                          <button class="bg-red">Desactiver</button>
                        </form> --}}
                        {{--  <button class="bg-green">Activer</button>  --}}
                      </div>
                    </td>
                  </tr>
                @endforeach
                
              </tbody>
            </table>
        </div>

        <div class="pagination-side">
            {{ $employes->links() }}
        </div>
    </div>
        
</x-office.layout>