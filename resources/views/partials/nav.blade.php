<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">

  <a class="navbar-brand col-md-3 col-lg-2 mr-3 px-3"> FourNet
      <!--     <img src="images/4Net-1024x507.png" alt="imagen" height="30px" width="150px" id="">-->
  </a>



    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse"
            data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
   </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Buscar" aria-label="Search">
       

     {{--  @guest
      <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
      @if (Route::has('register'))
      <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
      @endif
      @else
      <span>{{ Auth::user()->name }}</span>

      <a href="{{ route('logout') }}" class="no-underline hover:underline" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
          {{ csrf_field() }}
      </form>
      @endguest --}}
      <script>
        <?php

      function setActive($routeName){

      return request()-> routeIs($routeName) ? 'active' : '';
      }?>
      </script>
      

  </nav>
</nav>
<div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="sidebar-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item ">
            <a class="nav-link {{ setActive('home') }}" href="{{route('home')}}">
                <span data-feather="home"></span>
                Inicio
              </a>
            </li>
  
  
            <li class="nav-item ">
            <a class="nav-link {{ setActive('clientes') }} " href=" {{route('clientes')}} ">
                <span data-feather="users"></span>
                Clientes
              </a>
            </li>
  
            <li class="nav-item  ">
            <a class="nav-link {{ setActive('planes.index') }} " href=" {{route('planes.index')}} ">
                <span data-feather="layers"></span>
                Planes
              </a>
  
            </li>
            <li class="nav-item ">
              <a class="nav-link {{ setActive('tecnicos') }}" href="{{route('tecnicos')}} ">
                <span data-feather="rss"></span>
                Tecnicos
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link {{ setActive('servicioTecnico') }}" href=" {{route('servicioTecnico')}} ">
                <span data-feather="file-text"></span>
                Servicio Tecnico
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link {{ setActive('reportes') }}" href=" {{route('reportes')}} ">
                <span data-feather="bar-chart-2"></span>
                Reportes
              </a>
            </li>
          </ul>
        </div>
      </nav>
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-5">
          @yield('content')
      </main>
  
    </div>
</div>
  