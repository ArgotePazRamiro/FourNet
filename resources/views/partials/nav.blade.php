<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">

    <a class="navbar-brand col-md-3 col-lg-2 mr-3 px-3"> FourNet
      <!--     <img src="images/4Net-1024x507.png" alt="imagen" height="30px" width="150px" id="">-->
    </a>
  
  
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse"
      data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Buscar" aria-label="Search">
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="../index.html">Cerrar Sesion</a>
      </li>
    </ul>
</nav>
<div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="sidebar-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="/">
                <span data-feather="home"></span>
                Inicio
              </a>
            </li>
  
  
            <li class="nav-item">
            <a class="nav-link" href="clientes.index">
                <span data-feather="users"></span>
                Clientes
              </a>
            </li>
  
            <li class="nav-item">
            <a class="nav-link" href="planes.index">
                <span data-feather="layers"></span>
                Planes
              </a>
  
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tecnicos.index">
                <span data-feather="rss"></span>
                Tecnicos
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="servicioTecnico.index">
                <span data-feather="file-text"></span>
                Servicio Tecnico
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="reportes.index">
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
  