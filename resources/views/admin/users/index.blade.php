@extends('admin.layouts.dashboard')

@section('content')
<!-- DataTables Example -->
<div class="row py-lg-2">
    <div class="col-md-6">
        <h2>Lista de Usuarios</h2>
    </div>
    <div class="col-md-6">
        <a href="{{ route('users.create') }}" class="btn btn-primary float-md-right" role="button" aria-pressed="true">Crear Usuario</a>
    </div>
</div>

<div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Lista de Usuarios</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Id</th>
              <th>Nombres</th>
              <th>Apellidos</th>
              <th>Correo</th>
              <th>Rol</th>
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
    </div>
  </div>
@endsection
