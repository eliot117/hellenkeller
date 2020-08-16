@extends('layouts.app')

@section('content')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('{{ asset('img/1.jpeg') }}')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
            <span class="subheading"> Un niño feliz adulto excelente</span>
            </div>
        </div>
        </div>
    </div>
    </header>

    <!-- Main Content -->
    <div class="container">
    <div class="row">
        <div class="col-lg-10 col-md-12 mx-auto">
            <h1 style="text-align: center;"> {{ $post['title'] }}</h1>
            <img src="{{ asset('/storage/notice_images/'.$post['image_url']) }}" width="600px" height="400px" style="display:block; margin:auto;"><br><br>
            <p>{!! $post['content']!!}</p>
        </div>
    </div>
    </div>

    <hr>

@endsection
