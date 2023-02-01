<x-office.layout :menuLayout=$menu>

     @push('styles')
      <link rel="stylesheet" href="{{ asset('assets/css/office/list/styleListe.css') }}">              
      {{-- <link rel="stylesheet" href="{{ asset('assets/css/office/manager/seperer/create-employee.css') }}">     --}}
    @endpush
    <div class="page">
        <div class="register-form-box">
            <form action="{{ route('update-employe',$employe->id) }}" method="post" class="register-form" enctype="multipart/form-data">
                @method('put')
                @csrf
                

                <div class="input-box">
                    <label for="prename">Prenom :</label>
                    <input type="text" name="prename" id="prename" value="{{ $employe->prename }}">
                </div>

                <div class="input-box">
                    <label for="name">Nom :</label>
                    <input type="text" name="name" id="name" value="{{ $employe->name }}">
                </div>

                <div class="input-box">
                    <label for="phone">Telephone :</label>
                    <input type="tel" name="phone" id="phone" value="{{ $employe->phone }}">
                </div>

                <div class="input-box">
                    <label for="email">Email :</label>
                    <input type="email" name="email" id="email" value="{{ $employe->email }}">
                </div>

                {{-- <div class="input-box">
                    <label for="password">Mot de passe :</label>
                    <input type="password" name="password" id="password" value="{{ $employe->password }}">
                </div> --}}

                <div class="input-box">
                    @foreach ($employe->roles as $role)
                    <label for="role">Role :</label>
                    <input type="text" name="label" id="role" value="{{  $role->label }}"/>
                     @endforeach 
                </div>

                <div class="input-box">
                    <input type="submit" value="modifier" class="submit-btn bg-blue">
                </div>
            </form>
        </div>
    </div>
    


</x-office.layout>