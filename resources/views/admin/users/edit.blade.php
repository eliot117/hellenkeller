@extends('admin.layouts.dashboard')

@section('titulo_page')
    Editar Perfil Usuario
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
<form class="form-horizontal form-material" method="POST" action="{{ route('users.update',$users->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label class="col-md-12">Nombres:</label>
        <div class="col-md-12">
            <input type="text" name="name" class="form-control form-control-line" value="{{ $users->name }}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-12">Apellidos:</label>
        <div class="col-md-12">
            <input type="text" name="lastname" class="form-control form-control-line" value="{{ $users->lastname }}">
        </div>
    </div>
    <div class="form-group">
        <label for="example-email" class="col-md-12">Correo Electrónico</label>
        <div class="col-md-12">
            <input type="email" class="form-control form-control-line" name="email" value="{{ $users->email }}" >
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-12">Rol:</label>
        <div class="col-md-12">
        <select name="rol" class="form-control form-control-line">
            <option selected disabled>Elige un rol para este usuario</option>
            @foreach($roles as $role)
                @if ($role->name == str_replace(array('["', '"]'), '', $users->tieneRol()))
                    <option value="{{ $role->id }}" selected>{{ $role->name }}</option>
                @else
                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                @endif
            @endforeach
        </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-12">Agregar Imagen de Perfil</label>
        <input type="file" class="form-control form-control-line" name="avatar">
    </div>

    <div class="form-group">
        <label class="col-md-12">Contraseña: <span class="small">(Opcional)</span> </label>
        <div class="col-md-12">
            <input type="password" name="password" class="form-control form-control-line" placeholder="Ingrese password">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-12">Confirmar Contraseña: <span class="small">(Opcional)</span></label>
        <div class="col-md-12">
            <input type="password" name="password_confirmation" class="form-control form-control-line" placeholder="Ingrese password">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12">
            <button class="btn btn-success" type="submit" value="Guardar">Actualizar Perfil</button>
            <a href="{{ route('users.index') }}" class="btn btn-info">Regresar</a>
        </div>
    </div>
</form>
@endsection


@section('titulo2')

@endsection

@section('content2')

@endsection


