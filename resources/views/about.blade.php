@extends('layouts.app')

@section('content')
 <!-- Page Header -->
<header class="masthead" style="background-image: url('img/1.jpeg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-md-12 mx-auto">
          <div class="page-heading">
            <br> 
            <p class="tprincipal">Colegio Hellen Keller</p>
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
        <b class="titulo">Nuestra Misión</b>
        <br><br>
        <video width="800" height="400" controls autoplay>
          <source src="video/v1.mp4" type="video/mp4" >
        </video>
        
        <p class="contenido">Brindar educación de calidad, sustentada en los cuatro pilares de la educación:
        Aprender a conocer, Aprender a hacer, Aprender a vivir juntos, Aprender a ser.
        Integrando valores y haciendo de esta una tarea de todos para lograr alumnos comprometidos con su país.</p>

        <b class="titulo">Nuestra Visión</b>
        <p class="contenido">Ser una Institución reconocida por su excelencia académica y formación en valores a través
            de un equipo de trabajo comprometido con la calidad. Que esté dispuesto a innovar, a capacitarse
            continuamente y a formar ciudadanos preparados para enfrentar los retos de la vida.
        </p>

        <b class="titulo">Valores</b>
        <p class="contenido">Valores que fomentamos honestidad responsabilidad compromiso respeto
            integridad disciplina igualdad creatividad lealtad solidaridad.
        </p>
        <img class="img-fluid" src="img/platilla.png" style="display:block; margin:auto;" width="750px" height="750px">

        <b class="titulo">Habilidades Y Aptitudes</b>
        <p class="contenido"> Nuestros programas y planes de estudio buscan fortalecer las siguientes habilidades y actitudes:</p>
        <ul class="contenido">
            <li>Autoestima</li>
            <li>Responsabilidad</li>
            <li>Trabajo en equipo</li>
            <li>Pensamiento crítico y reflexivo</li>
            <li>Hábito de la lectura</li>
            <li>Expresión oral y escrita</li>
            <li>Dominio del inglés</li>
            <li>Dominio de la tecnología</li>
            <li>Conciencia ambiental</li>
        </ul>
      </div>
    </div>
    <hr><br>
    <main id="main">
        <!-- ======= Services Section ======= -->
        <section class="services">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-box icon-box-blue">
                  <div class="icon"><i class="fas fa-pencil-ruler"></i></div>
                  <h4 class="title"><a href="/presscolar">Preescolar</a></h4>
                  <p class="contenido"> Promovemos la critica, reflexión, el respeto y el interes
                    por la lectura; así mismo promovemos la auto disciplina, la socialización y la disciplina.</p>
                </div>
              </div>

              <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box icon-box-blue">
                  <div class="icon"><i class="fas fa-atlas"></i></div>
                  <h4 class="title"><a href="/primaria">Primaria</a></h4>
                  <p class="contenido">Nuestro objetivo es que el niño encuentre el
                    reconocimiento en el medio, identificarlo como un miembro de la familia,
                    establecer códigos de disciplina y autoevaluarse.
                  </p>
                </div>
              </div>

              <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box icon-box-blue">
                  <div class="icon"><i class="fas fa-school"></i></div>
                  <h4 class="title"><a href="/secundaria">Secundaria</a></h4>
                  <p class="contenido">En el Colegio Hellen Keller estamos preparados para educar a sus
                    hijos en esta etapa tan difícil, enseñandole a valorar, entender, ser objetivos y como
                    factor de conocimiento, y encauzarlos hacia una vida sana y sin adicciones</p>
               
                  </div>
              </div>
            </div>
          </div>
        </section><!-- End Services Section -->
    </main>
    <hr><br>
    @include('digital')
  </div>
@endsection
