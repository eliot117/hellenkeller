<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="/">Inicio</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="/about" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Escolaridad</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/presscolar"><i class="fas fa-pencil-ruler"></i> Presscolar</a>
                <a class="dropdown-item" href="/primaria"><i class="fas fa-atlas"></i> Primaria</a>
                <a class="dropdown-item" href="/secundaria"><i class="fas fa-school"></i> Secundaria</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/kinder">Guarderia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">Misión-Visión</a>
          </li>
          <!-- Authentication Links -->
          @guest
               <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
               </li>
            {{-- @if (Route::has('register'))
                   <!--<li class="nav-item">
                       <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarme') }}</a>
                   </li>-->
               @endif --}}
          @else
               <li class="nav-item dropdown">
                   <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                   </a>

                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a href="/admin" class="dropdown-item"><i class="fas fa-fw fa-tachometer-alt"></i> Dashboard</a>

                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i>
                            {{ __('Cerrar Sesión') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                   </div>
                </li>
          @endguest
        </ul>
      </div>
    </div>
</nav>
