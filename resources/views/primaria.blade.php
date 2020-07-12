@extends('layouts.app')

@section('content')
 <!-- Page Header -->
 <header class="masthead" style="background-image: url('img/1.jpeg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-md-12 mx-auto">
          <div class="page-heading">
            <h2>Primaria</h2>
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
        <p>Nuestro objetivo es que el niño encuentre el
            reconocimiento en el medio, identificarlo como un miembro de la familia,
            establecer códigos de disciplina y autoevaluarse.
        </p>
        <img class="img-fluid" src="img/prima12.jpg" style="display:block; margin:auto;" width="750px" height="750px">
        <br><br>
        <img class="img-fluid" src="img/primaria.jpeg" style="display:block; margin:auto;" width="750px" height="750px">
        <br><br>
        <h1>Requisitos</h1>
        <ul>
            <li>Original y 3 Copias del Acta de Nacimiento</li>
            <li>3 Copias de la Curp</li>
            <li>3 Copias Cartilla de Vacunación</li>
            <li>Original Constacia de último grado de estudios y 3 Copias.</li>
            <li>Constancia de Buena Conducta</li>
            <li>Constancia de No Adeudo(Si proviene de colegio paerticular).</li>
        </ul>
      </div>
    </div>
    <hr>
    @include('digital')
  </div>
  <hr>
@endsection
