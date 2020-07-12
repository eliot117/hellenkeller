@extends('admin.layouts.dashboard')

@section('content')
<h1>Editar una Noticia</h1>

@if($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('posts.update',$post->id) }}" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="title">Titulo</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Ingrese un titulo" value="{{ $post->title }}">
    </div>
    <label for="image">Seleccionar Imagen</label>
    <input type="file" name="image_url" class="form-control-file" id="profile-img" value="{{ $post->image_url }}">
    <div class="row">
        <img src="{{ asset('/storage/notice_images/'.$post['image_url']) }}" id="profile-img-tag" class="img-thumbnail mx-auto" alt="{{ $post->image_url }}" width="250" >
    </div>
    <div class="form-group">
        <label for="content">Insertar Contenido</label>
        <textarea name="content" id="content">{{ $post->content }}</textarea>
    </div>

    <div class="form-group pt-2">
        <input class="btn btn-success" type="submit" value="Guardar">
        <a href="{{ route('posts.index') }}" class="btn btn-danger">Regresar</a>
    </div>
</form>

<script>
    CKEDITOR.replace( 'content' );
</script>
@endsection
