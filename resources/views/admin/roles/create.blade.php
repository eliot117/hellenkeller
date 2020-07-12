@extends('admin.layouts.dashboard')

@section('content')
<h1>Crear un Rol de Usuario</h1>

@if($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('roles.store') }}">
    @csrf
    <div class="form-group">
        <label for="name">Nombre del Rol</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Ingrese nombre del rol " value="{{ old('name') }}">
    </div>
    <div class="form-group pt-2">
        <input class="btn btn-success" type="submit" value="Guardar">
        <a href="{{ route('roles.index') }}" class="btn btn-danger">Regresar</a>
    </div>
</form>
@endsection
