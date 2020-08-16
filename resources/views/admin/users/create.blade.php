@extends('admin.layouts.dashboard')

@section('titulo_page')
Crear un nuevo Usuario
@endsection

@section('titulo')
    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection

@section('content')
<form method="POST" action="{{ route('users.store') }}">
    @csrf

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="name"><ion-icon name="person-add"></ion-icon> Nombres:</label>
                <input type="text" name="name" class="form-control" placeholder="Escriba su nombre" value="{{ old('name') }}">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="lastname"><ion-icon name="person-add"></ion-icon> Apellidos:</label>
                <input type="text" name="lastname" class="form-control" placeholder="Escriba sus apellidos" value="{{ old('lastname') }}">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="email"><ion-icon name="mail"></ion-icon> Correo:</label>
                <input type="text" name="email" class="form-control" placeholder="Escriba su correo" value="{{ old('email') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="rol"><ion-icon name="key"></ion-icon> Rol:</label>
                <select name="rol" class="form-control">
                    <option selected disabled>Elige un rol para este usuario</option>
                    @foreach($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="password"><ion-icon name="lock-closed"></ion-icon> Contraseña:</label>
                <input type="password" name="password" class="form-control" placeholder="Ingrese una contraseña">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="password-confirm"><ion-icon name="lock-closed"></ion-icon> Confirmar Contraseña:</label>
                <input type="password" name="password_confirmation" class="form-control" placeholder="Ingrese una contraseña">
            </div>
        </div>
    </div>

    <div class="form-group pt-2">
        <input class="btn btn-success" type="submit" value="Guardar">
        <a href="{{ route('users.index') }}" class="btn btn-danger">Regresar</a>
    </div>
</form>
@endsection
