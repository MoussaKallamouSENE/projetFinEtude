<x-office.layout :menuLayout=$menu>

    @push('styles')
      <link rel="stylesheet" href="{{ asset('assets/css/office/list/styleListe.css') }}">      
    @endpush

      <x-slot:pageTitle>liste Produit</x-slot:pageTitle>

    <div class="page">
       @if ($message = Session::get('success'))
        <div class="bg-red"><p>{{ $message }}</p> </div>
      @endif
        <div class="page-header">
            <span class="page-title">Liste des produits</span>
            <a class="add-redirector" href="{{ route('create-product') }}">Ajout produits</a>
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
                @foreach ($products as $product)
                  
                  <tr>
                    <td><div>{{ $product->name }}</div></td>
                    <td><div>{{ $product->quantity }}</div></td>
                    <td><div>{{ $product->price }}</div></td>
                    <td><div>{{ $product->description }}</div></td>
                     <td class="actions">
                      <div>
                        <button class="bg-yellow"><a href="{{ route('edit-product',$product->id, '/edit') }}">Editer</a></button>
                        <form action="{{ route('destroy-product',$product->id) }}" method="post">
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
          {{ $products->links() }}
      </div>
    </div>
        
</x-office.layout>