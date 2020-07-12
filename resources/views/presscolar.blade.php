@extends('layouts.app')

@section('content')
 <!-- Page Header -->
 <header class="masthead" style="background-image: url('img/1.jpeg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-md-12 mx-auto">
          <div class="page-heading">
            <h2>Preescolar</h2>
            <span class="subheading">Nuestros mejores servicios para tus hijos.</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-md-12 mx-auto">
        <h1>Misión</h1>
        <p>Promovemos la critica, reflexión, el respeto y el interes
            por la lectura, así mismo promovemos la auto disciplina, la socialización y la disciplina.
        </p>

        <img class="img-fluid" src="img/press12.jpg" style="display:block; margin:auto;" width="750px" height="750px">
        <br><br>
        <img class="img-fluid" src="img/presscolar.jpg" style="display:block; margin:auto;" width="750px" height="750px">
        <br><br>
        <h1>Requisitos</h1>
        <ul>
            <li>Original y 3 Copias del Acta de Nacimiento</li>
            <li>3 Copias de la Curp</li>
            <li>3 Copias Cartilla de Vacunación</li>
        </ul>
      </div>
    </div>
    <hr>
    @include('digital')
  </div>
  <hr>
@endsection
