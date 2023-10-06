@extends('layouts.forms')

@section('content')
<div style="margin-bottom: 20px;" class="container-fluid">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">On the minute</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                    <a class="nav-link" href="#">Mi perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cerrar sesion</a>
                </li>
            </ul>
          </div>
        </div>
      </nav>
</div>

<div class="d-flex flex-row" style="width: 100%;justify-content: space-between;/* gap: 100px; */">
  <div style="display: flex;width: 150px;"  >
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white ">
          <ul class="list-unstyled ps-0">
              <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                  Personal
                </button>
                <div class="collapse" id="home-collapse" style="">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Unidad</a></li>
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Departamentos</a></li>
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Puestos</a></li>
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Conceptos</a></li>
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Empleados</a></li>
                    
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Aprovaciones</a></li>
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Vacaciones</a></li>
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Renuncias</a></li>
                  </ul>
                </div>
              </li>
              <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                  Dispositivos
                </button>
                <div class="collapse" id="dashboard-collapse" style="">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Dispositivos</a></li>
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Sincronizar Datos</a></li>
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Cargar Eventos USB</a></li>
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Descargar Eventos</a></li>
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Enrolamiento Remoto</a></li>
                  </ul>
                </div>
              </li>
              <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                  Asistencia
                </button>
                <div class="collapse" id="orders-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Asistencias</a></li>
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Incidencias</a></li>
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Excepciones</a></li>
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Tiempo Extras</a></li>
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Calendario</a></li>
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Horarios y Turnos</a></li>
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Consultas y Reportes</a></li>
                  </ul>
                </div>
              </li>
              <li class="border-top my-3"></li>
              <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                  Sistema
                </button>
                <div class="collapse" id="account-collapse" style="">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Perfiles</a></li>
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Usuarios</a></li>
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Bitacora</a></li>
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Configurar Correo</a></li>
                  </ul>
                </div>
              </li>
            </ul>
    </nav>
  </div>

  {{-- <div class="d-flex flex-row" style="gap: 25px;width: 80%;flex-wrap:wrap;">
    <div class="p-2" ><canvas id="miGrafico"></canvas></div>
    <div class="p-2" ><canvas id="miGrafico2"></canvas></div> 
    <div id="grafico" class="p-2"></div>
    <div id="graficoesgenerales" class="p-2"></div>
    <div id="graficosalarios"></div>
    <div id="graficorotaciones"></div>
  </div> --}}
  <div id="wrapper">
    <div class="content-area">
      <div class="container-fluid">
        <div class="main">
          <div class="row sparkboxes mt-4 mb-4">
            <div class="col-md-4">
              <div class="box box1">
                <div id="spark1"></div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box box2">
                <div id="spark2"></div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box box3">
                <div id="spark3"></div>
              </div>
            </div>
          </div>

          <div class="row mt-5 mb-4">
            <div class="col-md-6">
              <div class="box">
                <div id="bar"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="box">
                <div id="donut"></div>
              </div>
            </div>
          </div>

          <div class="row mt-4 mb-4">
            <div class="col-md-6">
              <div class="box">
                <div id="area"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="box">
                <div id="line"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection