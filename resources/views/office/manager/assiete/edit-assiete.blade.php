<x-office.layout :menuLayout=$menu>
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/css/office/list/styleListe.css') }}">  
        <link rel="stylesheet" href="{{ asset('assets/css/office/manager/create-employee.css') }}">       
            
    @endpush

    <div class="page">
        <h1>page de modification des Assietes</h1>

        <div class="register-form-box">
            <form action="{{ route('update-assiete', $assiete->id) }}" method="POST" class="register-form" enctype="multipart/form-data">
                @method('patch')
                @csrf
                

                <div class="input-box">
                    <label for="name">Nom assiete :</label>
                    <input type="text" name="name" id="name" value="{{ $assiete->name }}">
                </div>

                <div class="input-box">
                    <label for="image">Image Assiete:</label>
                    <img src="{{ url('/storage/uploads',$assiete->image ) }}" style="height: 90px; width: 90px; border-radius: 15%">
                    <input type="file" name="image" id="image" value="{{ $assiete->image }}" accept="image/*">
                </div>               

                <div class="input-box">
                    <label for="price">Price:</label>
                    <input type="number" name="price" id="price" value="{{ $assiete->price }}">
                </div>

                <div class="input-box">
                    <label for="status">Statut assiete :</label>
                    <input type="number" name="status" id="status" value="{{ $assiete->status }}">
                </div>

                <div class="input-box">
                    <label for="detail">Detail:</label>
                    <textarea  name="detail" id="detail"  value="#">{{ $assiete->detail }}</textarea>
                </div>                

                <div class="input-box">
                    <input type="submit" value="modifier" class="submit-btn bg-blue">
                </div>
            </form>
        </div>
    </div>
</x-office.layout>