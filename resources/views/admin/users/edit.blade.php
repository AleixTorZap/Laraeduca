@extends('adminlte::page')

@section('title', '{ DEV / }')

@section('content_header')
    <h1>Assign role</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <p class="h5">Name</p>
            <p class="form-control">{{ $user->name }}</p>

            <h2 class="h5">Role list</h2>
            {!! Form::model($user, [
                'route' => ['admin.users.update', $user],
                'method' => 'put',
                'enctype' => 'multipart/form-data',
            ]) !!}
            @foreach ($roles as $role)
                <div>
                    <label>
                        {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                        {{ $role->name }}
                    </label>
                </div>
            @endforeach

            {{-- Agregar el campo para cargar la foto --}}
            <div class="form-group">
                <label for="photo">Foto de perfil</label>
                <input type="file" class="form-control-file" id="photo" name="photo" accept="image/*">
                @if ($user->photo)
                    <div>
                        <img id="picture" src="{{ Storage::url($user->photo) }}" alt="">
                    </div>
                @else
                    <img src="{{ asset('assets/images/default-profile-image.jpg') }}" alt="Foto de perfil por defecto"
                        class="rounded-full">
                @endif
            </div>



            {!! Form::submit('Role assign', ['class' => 'btn btn-primary mt-3']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>
    <script>
        document.getElementById("photo").addEventListener('change', cambiarImagen);

        function cambiarImagen(event) {
            var file = event.target.files[0];
            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result);
            };
            reader.readAsDataURL(file);
        }
    </script>
@stop
