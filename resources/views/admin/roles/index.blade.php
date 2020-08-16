@extends('admin.layouts.dashboard')

@section('titulo_page')
Bienvenido a Roles de Usuarios
@endsection

@section('titulo')
<div class="row py-lg-2">
    <div class="col-md-6">
        <h4><ion-icon name="key-outline"></ion-icon> Lista de Roles</h4>
    </div>
    <div class="col-md-6">
        <a href="{{ route('roles.create') }}" class="btn btn-success float-md-right" role="button" aria-pressed="true">Crear Rol Usuario</a>
    </div>
</div>
@endsection

@section('content')
<div class="table-responsive-md">
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nombre</th>
          <th>Eliminar</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>Id</th>
          <th>Nombre</th>
          <th>Eliminar</th>
        </tr>
      </tfoot>
      <tbody>
      @foreach($roles as $role)
        <tr>
          <td>{{ $role->id }}</td>
          <td>{{ $role->name }}</td>
          <td>
            <a href="#"  data-toggle="modal" data-target="#deleteModal" data-roleid="{{ $role->id }}"><i class="fa fa-trash"></i></a>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>

   <!-- delete Modal-->
   <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">¿Seguro que quieres eliminar este Rol de usuario?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        </div>
        <div class="modal-body">Seleccione "Eliminar".<br>
            Nota: Asegurese de que no sean ninguno de los dos roles principales.</div>
        <div class="modal-footer">
        <button class="btn btn-primary" type="button" data-dismiss="modal">Cancelar</button>
        @if(empty($role))
            unset($role);
        @else
        <form method="POST" action="{{ route('roles.destroy', $role->id) }}">
            @method('DELETE')
            @csrf
            <input type="hidden" id="role_id" name="role_id" value="">
            <a style="color: white;" class="btn btn-danger" onclick="$(this).closest('form').submit();">Eliminar</a>
        </form>
        @endif
        </div>
    </div>
  </div>
@endsection
