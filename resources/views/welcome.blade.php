@extends('layouts.app')

@section('content')
  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/1.jpeg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-10 mx-auto">
          <div class="site-heading">
            <h2>Colegio Hellen Keller</h2>
            <span class="subheading">Un niño feliz adulto excelente</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="col-lg-8 col-md-10 mx-auto">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
    </ol>
    
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="carousel/presscolar.jpg" class="d-block w-100" alt="...">
        <!--<div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>-->
      </div>
      <div class="carousel-item">
        <img src="carousel/primaria.jpeg" class="d-block w-100" alt="...">
        <!--<div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>-->
      </div>
      <div class="carousel-item">
        <img src="carousel/secundaria.jpeg" class="d-block w-100" alt="...">
        <!--<div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>-->
      </div>
      <div class="carousel-item">
        <img src="carousel/guarderia.jpeg" class="d-block w-100" alt="...">
        <!--<div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>-->
      </div>
      
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<br><br>
  <!-- Main Content -->
  <div class="container">
    <div class="col-lg-8 col-md-10 mx-auto">
        <div class="row">
            @foreach($posts as $post)
            <div class="col-md-4">
                <img class="img-thumbnail mt-5" width="200%" src="{{ asset('/storage/notice_images/'.$post['image_url']) }}" alt="post_image">
            </div> 
            <div class="col-lg-8">
            <div class="post-preview">
                <a href="/home/{{$post['id']}}">
                <h2 class="post-title">
                {{ $post->title }}
                </h2>
                <p class="post-subtitle">
                {!! getShorterString($post['content'], 100) !!}
                </p>
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
