@extends('layouts.app')

@section('content')
 <!-- Page Header -->
 <header class="masthead" style="background-image: url('img/1.jpeg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-md-12 mx-auto">
          <div class="page-heading">
            <p class="tprincipal">Primaria</p>
            <p class="sprincipal" >"Un niño feliz adulto excelente."</p>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-md-12 mx-auto">
        <b class="titulo">Misión Primaria</b>
        <br><br>
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
                <img src="carousel/casa1.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="carousel/primaria1.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="carousel/primaria2.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="carousel/primaria3.jpeg" class="d-block w-100" alt="...">
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

        
        <p class="contenido">Nuestro objetivo es que el niño encuentre el
            reconocimiento en el medio, identificarlo como un miembro de la familia,
            establecer códigos de disciplina y autoevaluarse.
        </p>
        
        
      <b class="titulo">Requisitos de Inscripción</b>
       <br><br>
        <ul class="contenido">
            <li >Original y 3 Copias del Acta de Nacimiento</li>
            <li>3 Copias de la Curp</li>
            <li>3 Copias Cartilla de Vacunación</li>
            <li>Original Constacia de último grado de estudios y 3 Copias.</li>
            <li>Constancia de Buena Conducta</li>
            <li>Constancia de No Adeudo(Si proviene de colegio particular).</li>
           <li><a class="contenido" href="https://drive.google.com/file/d/1F4k9plAZe578bjTf81HADsIgukRwfzma/view?usp=sharing" target="_blank">Solicitud de Inscripción <i class="far fa-file-word"></i></a></li>
           <li><a class="contenido" href="https://drive.google.com/file/d/1-nlmH8xLgSKAfKmp9yd77h61E8xyTgPA/view?usp=sharing" target="_blank">Cedula de Identificación <i class="far fa-file-word"></i></a></li>
           <li><a class="contenido" href="https://drive.google.com/file/d/1yNbp6sXJ0d1ulSsiWYg2u4KHqMezmN2a/view?usp=sharing" target="_blank">Reglamento Escolar <i class="far fa-file-pdf"></i></a></li>
           <li><a class="contenido" href="https://drive.google.com/file/d/1gCOWHq-5B8I7U-TPwbjXpYbdUPQsq1qf/view?usp=sharing" target="_blank">Lista de Utiles Escolares <i class="far fa-file-pdf"></i></a></li>
      </ul>
        
        <br>  
        <video width="800" height="400" controls autoplay>
          <source src="video/v1.mp4" type="video/mp4" >
        </video>
        <br>  <br>
        <b class="contenido"> ¿Por qué escoger la Primaria en Colegio Hellen Keller?  </b>
        <p class="contenido" >Porque en nuestro colegio, los alumnos tienen oportunidad de vivir el aprendizaje guiados por profesores comprometidos y apoyados en programas de calidad.</p>
         
 
   <b class="titulo">Únete a la Familia Colegio Hellen Keller.</b>
   <br> 
   <i class="contenido">Más de 15 años impartiendo educación de excelencia</i>
   <br> <br> 
  
   <a class="boton" href="#" target="_blank">Contáctanos →</a>
  
  <br>  
  <br> 
      </div>
    </div>
    <hr> 
    @include('digital')
  </div>
  <hr>
@endsection
