@extends('layouts.app')

@section('content')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('{{ asset('/storage/notice_images/'.$post['image_url']) }}')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
            <h2>{{$post['title']}}</h2>
            <span class="subheading">By {{ $post->user['name'] }}</span>
            </div>
        </div>
        </div>
    </div>
    </header>

    <!-- Main Content -->
    <div class="container">
    <div class="row">
        <div class="col-lg-10 col-md-12 mx-auto">
        <p>{!!$post['content']!!}</p>
        </div>
    </div>
    </div>

    <hr>

@endsection
