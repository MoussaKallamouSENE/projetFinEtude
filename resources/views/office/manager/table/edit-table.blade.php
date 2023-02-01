<x-office.layout :menuLayout=$menu>
    @push('styles')
      <link rel="stylesheet" href="{{ asset('assets/css/office/list/styleListe.css') }}">              
    @endpush

    <div class="page">
        <h1>page de modification des Tables</h1>

        <div class="register-form-box">
            <form action="{{ route('update-table', $table->id) }}" method="POST" class="register-form" enctype="multipart/form-data">
                @method('patch')
                @csrf
                

                <div class="input-box">
                    <label for="name">Nom table :</label>
                    <input type="text" name="name" id="name" value="{{ $table->name }}">
                </div>

                <div class="input-box">
                    <label for="places">Nombre de Place:</label>
                    <input type="text" name="places" id="places" value="{{ $table->places }}">
                </div>

                <div class="input-box">
                    <label for="status">Statut table :</label>
                    <input type="text" name="status" id="status" value="{{ $table->status }}">
                </div>


                <div class="input-box">
                    <input type="submit" value="modifier" class="submit-btn bg-blue">
                </div>
            </form>
        </div>
    </div>
</x-office.layout>