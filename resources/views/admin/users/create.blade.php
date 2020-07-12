@extends('admin.layouts.dashboard')

@section('content')
<h1 style="text-align: center;">Crear un nuevo Usuario</h1>

@if($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('users.store') }}">
    @csrf

    <div class="form-group">
        <label for="name">Nombres:</label>
        <input type="text" name="name" class="form-control" placeholder="Escriba su nombre" value="{{ old('name') }}">
    </div>

    <div class="form-group">
        <label for="lastname">Apellidos:</label>
        <input type="text" name="lastname" class="form-control" placeholder="Escriba sus apellidos" value="{{ old('lastname') }}">
    </div>

    <div class="form-group">
        <label for="email">Correo:</label>
        <input type="text" name="email" class="form-control" placeholder="Escriba su correo" value="{{ old('email') }}">
    </div>

    <div class="form-group">
        <label for="rol">Rol:</label>
        <select name="rol" class="form-control">
            <option selected disabled>Elige un rol para este usuario</option>
            @foreach($roles as $role)
                <option value="{{ $role->id }}">{{ $role->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="password">Contraseña:</label>
        <input type="password" name="password" class="form-control" placeholder="Ingrese una contraseña">
    </div>

    <div class="form-group">
        <label for="password-confirm">Confirmar Contraseña:</label>
        <input type="password" name="password_confirmation" class="form-control" placeholder="Ingrese una contraseña">
    </div>

    <div class="form-group pt-2">
        <input class="btn btn-success" type="submit" value="Guardar">
        <a href="{{ route('users.index') }}" class="btn btn-danger">Regresar</a>
    </div>
</form>
@endsection
