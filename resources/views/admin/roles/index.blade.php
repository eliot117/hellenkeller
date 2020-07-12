@extends('admin.layouts.dashboard')

@section('content')

<div class="row py-lg-2">
    <div class="col-md-6">
        <h2>Lista de Roles</h2>
    </div>
    <div class="col-md-6">
        <a href="{{ route('roles.create') }}" class="btn btn-primary float-md-right" role="button" aria-pressed="true">Crear Rol Usuario</a>
    </div>
</div>

<div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Roles</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Id</th>
              <th>Nombre</th>
              <th>Office</th>
              <th>Age</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Id</th>
              <th>Nombre</th>
              <th>Office</th>
              <th>Age</th>
            </tr>
          </tfoot>
          <tbody>
          @foreach($roles as $role)
            <tr>
              <td>{{ $role->id }}</td>
              <td>{{ $role->name }}</td>
              <td></td>
              <td></td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
