


<ul id="dropdown1" class="dropdown-content">
  @if (Auth::guest())
  <li><a href="{{ route('login') }}">Login</a></li>
  <li><a href="{{ route('register') }}">Register</a></li>
  @else
  <li>
    <a href="{{ route('logout') }}"
    onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
    Salir
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      {{ csrf_field() }}
    </form>
  </li>
@endif
</ul>

<ul id="dropdown2" class="dropdown-content">
  <li>Seccionales</li>
  <li>Facultades</li>
  <li>Programas académicos</li>
  <li>Grupos</li>
  <li>Semilleros</li>
  <li>Proyectos</li>
  <li>Eventos</li>
  <li>Integrantes</li>
</ul>

<nav class="">
  <div class="nav-wrapper light-blue lighten-3">
    <a href="#" class="brand-logo center">Semilleros UCC</a>

    <div class="nav-wrapper">
      <ul class="right hide-on-med-and-down">
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
      <ul class="right hide-on-med-and-down">
        <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Seleccione una opción<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
    </div>


  </div>
</nav>
