@extends('layouts.app')

@section('content')
 <!-- Page Header -->
 <header class="masthead" style="background-image: url('img/g1.png')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-md-12 mx-auto">
          <div class="page-heading">
            <p class="tprincipal">Grupo Educativo Mename S.C.</p>
            <p class="sprincipal">"Guarderia (Subrogada al Imss)."</p>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-md-12 mx-auto">
        
        <b class="titulo">Misión Guarderia</b>
        <video width="800" height="400" controls autoplay>
          <source src="video/v1.mp4" type="video/mp4" >
      </video>
        <img class="img-fluid" src="img/g4.png" style="display:block; margin:auto;"  ALIGN=right  width="450px" height="450px">
           
          <p class="contenido">Nuestra misión es proporcionar a los hijos de las madres trabajadoras aseguradas,
            padres viudos, divorciados o de aquél al que judicialmente se le ha otorgado la
            custodia de sus hijos e hijas; todos aquellos elementos que favorezcan su desarrollo
            integral a través de programas de alto valor educativo, nutricional, de preservación
            y de fomento a la salud, así como satisfacer la demanda mediante la ampliación de cobertura.
        </p>
        <b class="titulo">Visión</b>
        <p class="contenido">Nuestra visión es promover el desarrollo integral de los niños y niñas, mediante la aplicación
            de modelos educativos vanguardistas con personal calificado que proporcione el servicio con
            calidad, respeto y calidez; en instalaciones seguras y funcionales, que se adapten a las
            necesidades de la demanda con procesos automatizados y estandarizados que permitan evaluar
            su desempeño en el progreso del menor.
        </p>
        <b class="titulo">Requisitos de Inscripción</b>
        <img class="img-fluid" src="img/r.jpeg" style="display:block; margin:auto;" ALIGN=center: width="550px" height="350px">
        <hr>
        <b class="contenido"> Ahorra ya Puedes ralizar tu solicitud en la siguente liga.</b>
        <ul class="contenido" >
          <a href="https://stigi.imss.gob.mx/">
            <img class="img-fluid" src="comp/g2.png" style="display:block; margin:auto;" ALIGN=center: width="250px" height="50px">
        </a>
       <b> <li><a href="https://stigi.imss.gob.mx/"> Dar clic,Para el regristro a nuestra Guarderia U-1314</a></li></b>
            <li style=”text-align: justify;”>Una vez realizado la solicitud si la guarderia cuenta con el espacio disponible, 
            solicitud pasa a tramite en caso contrario se quedaria en lista de espera.</li>
            <li style=”text-align: justify;”>Cuando su solicitud se encuentre en tramite nos comunicaremos con usted.</li>
            <li style=”text-align: justify;”>Dudas puede comunicarse tel: 3501234,Horarios de antencion 8:00am - 4:00pm</li>
            
            
        </ul>
       
      
      </div>
    </div>
  </div>
  <hr>

@endsection
