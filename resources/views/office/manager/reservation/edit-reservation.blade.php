<x-office.layout :menuLayout=$menu>
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/css/office/list/styleListe.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/office/manager/create-employee.css') }}">       
              
    @endpush

    <div class="page">

        <div class="register-form-box">
            <form action="#" method="POST" class="register-form" enctype="multipart/form-data">
                @method('patch')
                @csrf
                

                <div class="input-box">
                    <label for="name">Nom Produit :</label>
                    <input type="text" name="name" id="name" >
                </div>

                <div class="input-box">
                    <input type="submit" value="modifier" class="submit-btn bg-blue">
                </div>
            </form>
        </div>
    </div>
</x-office.layout>