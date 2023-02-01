<x-office.layout :menuLayout=$menu>
    @push('styles')
      <link rel="stylesheet" href="{{ asset('assets/css/office/list/styleListe.css') }}">              
    @endpush

    <div class="page">
        <h1>page de modification des roles</h1>

        <div class="register-form-box">
            <form action="{{ route('update-role', $role->id) }}" method="POST" class="register-form" enctype="multipart/form-data">
                @method('patch')
                @csrf
                

                <div class="input-box">
                    <label for="label">Libelle :</label>
                    <input type="text" name="label" id="label" value="{{ $role->label }}">
                </div>


                <div class="input-box">
                    <input type="submit" value="modifier" class="submit-btn bg-blue">
                </div>
            </form>
        </div>
    </div>
</x-office.layout>