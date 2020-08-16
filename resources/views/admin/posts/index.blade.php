@extends('admin.layouts.dashboard')

@section('titulo_page')
Bienvenido a Lista de Noticias
@endsection

@section('titulo')
<div class="row py-lg-2">
    <div class="col-md-6">
        <h4><ion-icon name="newspaper-outline"></ion-icon> Lista de Noticias</h4>
    </div>
    <div class="col-md-6">
        <a href="{{ route('posts.create') }}" class="btn btn-success float-md-right" role="button" aria-pressed="true">Crear Nueva Noticia</a>
    </div>
</div>
@endsection

@section('content')
<div class="table-responsive-md">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Id</th>
          <th>Titulo</th>
          <th>Contenido</th>
          <th>Imagen</th>
          <th>User</th>
          <th>Editar</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>Id</th>
          <th>Titulo</th>
          <th>Contenido</th>
          <th>Imagen</th>
          <th>User</th>
          <th>Editar</th>
        </tr>
      </tfoot>
      <tbody>
        @foreach($posts as $post)
        <tr>
          <td>{{ $post->id }}</td>
          <td>{{ $post->title }}</td>
          <td>{!! getShorterString($post['content'], 50) !!}</td>
          <td><img src="{{ asset('/storage/notice_images/'.$post['image_url']) }}" alt="{{ $post['image_url'] }}" width="100"></td>
          <td>{{ str_replace(array('[' ,']' ,'"'),' ', $post->user()->pluck('name')) }}</td>
          <td>
            <a href="{{ route('posts.edit',$post->id) }}"><i class="fa fa-edit"></i></a>
            <a href="#"  data-toggle="modal" data-target="#deleteModal" data-postid="{{ $post->id }}"><i class="fas fa-trash-alt"></i></a>
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
        <h5 class="modal-title" id="exampleModalLabel">¿Estás seguro de que quieres eliminar esto?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        </div>
        <div class="modal-body">Seleccione "eliminar" si realmente desea eliminar esta publicación.</div>
        <div class="modal-footer">
        <button class="btn btn-primary" type="button" data-dismiss="modal">Cancelar</button>
        @if(empty($post))
            unset($post);
        @else
        <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
            @method('DELETE')
            @csrf
            <input type="hidden" id="post_id" name="post_id" value="">
            <a style="color: white;" class="btn btn-danger" onclick="$(this).closest('form').submit();">Eliminar</a>
        </form>
        @endif
        </div>
    </div>
  </div>
@endsection


@section('js_post_page')
<script>
    $('#deleteModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var post_id = button.data('postid')

            var modal = $(this)
            modal.find('.modal-footer #post_id').val(post_id)
        })
</script>
@endsection
