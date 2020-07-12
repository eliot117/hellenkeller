@extends('layouts.app')

@section('content')
  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/1.jpeg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h2>Colegio Hellen Keller</h2>
            <span class="subheading">Un niño feliz adulto excelente</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="col-lg-8 col-md-10 mx-auto">
        <div class="row">
            @foreach($posts as $post)
            <div class="col-md-4">
                <img class="img-thumbnail mt-5" width="100%" src="{{ asset('/storage/notice_images/'.$post['image_url']) }}" alt="post_image">
            </div>
            <div class="col-lg-8">
            <div class="post-preview">
                <a href="/home/{{$post['id']}}">
                <h2 class="post-title">
                {{ $post->title }}
                </h2>
                <h3 class="post-subtitle">
                {!! getShorterString($post['content'], 100) !!}
                </h3>
            </a>
            <p class="post-meta">Creado por
                <a href="#">{{ $post->user['name'] }}</a>
                {{ $post->created_at }}</p>
            </div>

        </div>
            <hr>
            @endforeach
        </div>
        {{ $posts->links() }}
    </div>
  </div>
  <hr>
@endsection
