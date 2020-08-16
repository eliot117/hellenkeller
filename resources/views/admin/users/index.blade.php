@extends('admin.layouts.dashboard')

@section('titulo_page')
Bienvenido a Lista de Usuarios
@endsection

@section('titulo')
<div class="row">
    <div class="col-md-6">
        <h4><ion-icon name="people"></ion-icon> Registro de Usuarios</h4>
    </div>
    <div class="col-md-6">
        <a href="{{ route('users.create') }}" class="btn btn-success btn-neutral float-md-right">Crear Usuario</a>
    </div>
</div>
@endsection

@section('content')
<div class="table-responsive-md">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nombres</th>
          <th>Apellidos</th>
          <th>Correo</th>
          <th>Rol</th>
          <th>Imagen</th>
          <th>Editar</th>
          <th>Eliminar</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>Id</th>
          <th>Nombre</th>
          <th>Apellidos</th>
          <th>Correo</th>
          <th>Rol</th>
          <th>Imagen</th>
          <th>Editar</th>
          <th>Eliminar</th>
        </tr>
      </tfoot>
      <tbody>
        @foreach($users as $user)
        <tr>
          <td>{{ $user->id }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->lastname }}</td>
          <td>{{ $user->email }}</td>
          <td>
              @foreach($user->roles as $role)
              {{ $role->name }}
              @endforeach
          </td>
          <td><img src="{{ asset('/storage/avatar/'.$user['avatar']) }}" alt="{{ $user['avatar'] }}" width="100"></td>
          <td>
            <a href="{{ route('users.edit', $user->id) }}">
                <button class="btn btn-primary btn-sm">
                    <i class="fa fa-edit"></i>
                </button>
            </a>
          </td>
          <td>
            <form method="POST" action="{{ route('users.destroy', $user->id) }}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm" type="submit">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>
@endsection
