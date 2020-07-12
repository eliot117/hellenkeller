@extends('admin.layouts.dashboard')

@section('content')

<h1>Crear una nueva Noticia</h1>

@if($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="title">Titulo</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Ingrese un titulo" value="{{ old('title') }}">
    </div>
    <div class="form-group">
        <label for="image">Seleccionar Imagen</label>
        <input type="file" name="image_url" class="form-control-file" id="image">
    </div>
    <div class="form-group">
        <label for="content">Insertar Contenido</label>
        <textarea name="content" id="content">{{ old('content') }}</textarea>
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
