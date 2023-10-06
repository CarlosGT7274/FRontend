@extends('layouts.base')

@section('navbar')
     <!-- navigation & logo-->
   <nav class="navbar navbar-expand-lg" style="background-color: rgb(152, 193, 217);" >
    <div class="container-fluid">
      <div class="navbar-brand">OnTheMinute</div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./home.html">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./profile.html">Perfil</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Empleados
            </a>
            <ul class="dropdown-menu" style="background: rgb(152, 193, 217);"  >
              <li><a class="dropdown-item"  href="./empleados.html">Lista Empleados</a></li>
              <li><a class="dropdown-item" href="#">Horarios</a></li>
              <li><a class="dropdown-item" href="#">Incidencias</a></li>
              <li><a class="dropdown-item" href="#">Vacaciones</a></li>
              <li><a class="dropdown-item" href="#">Documentos</a></li>
              <li><a class="dropdown-item" href="#">Fotos</a></li>
              <li><a class="dropdown-item" href="#">Familiares</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Departamentos
            </a>
            <ul class="dropdown-menu" style="background: rgb(152, 193, 217);"  >
                <li><a class="dropdown-item"  href="./departamentos.html">Ver Departamentos</a></li>
                <li><a class="dropdown-item"  href="#">Puestos</a></li>
              <li><a class="dropdown-item" href="#">Vacaciones</a></li>
              <li><a class="dropdown-item" href="#">Documentos</a></li>
              <li><a class="dropdown-item" href="#">Fotos</a></li>
              <li><a class="dropdown-item" href="#">Familiares</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Turnos/Horarios
            </a>
            <ul class="dropdown-menu" style="background: rgb(152, 193, 217);"  >
              <li><a class="dropdown-item"  href="./turnos.html">Turnos</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item"  href="#">Turno Abierto</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Reporte Asistencia
            </a>
            <ul class="dropdown-menu" style="background: rgb(152, 193, 217);"  >
              <li><a class="dropdown-item"  href="#">Turno Normal</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item"  href="#">Turno Abierto</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Estadisticas</a>
          </li>
        </ul>
        <a href="./index.html"><button class="btn btn-outline-dark" type="button" >Cerrar sesion </button></a>
       
      </div>
    </div>
@endsection

@section('content')
    <div>
    <div class="container profile-page">
    <div class="row">
        <div class="col-xl-6 col-lg-7 col-md-12">
            <div class="card profile-header">
                <div class="body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="profile-image float-md-right"> <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt=""> </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h4 class="m-t-0 m-b-0"><strong>Michael</strong> Deo</h4>
                            <span class="job_post">Administracion y finanzas</span>
                            <p>795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                            <div>
                                <button class="btn btn-primary btn-round">Ver Perfil</button>
                                <button class="btn btn-primary btn-round btn-simple">Editar</button>
                            </div>
                            <p class="social-icon m-t-5 m-b-0">
                                <a title="Twitter" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                <a title="Facebook" href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                <a title="Google-plus" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                <a title="Behance" href="javascript:void(0);"><i class="fa fa-behance"></i></a>
                                <a title="Instagram" href="javascript:void(0);"><i class="fa fa-instagram "></i></a>
                            </p>
                        </div>                
                    </div>
                </div>                    
            </div>
        </div>
        
        
        <div class="col-xl-6 col-lg-7 col-md-12">
            <div class="card profile-header">
                <div class="body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="profile-image float-md-right"> <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt=""> </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h4 class="m-t-0 m-b-0"><strong>Michael</strong> Deo</h4>
                            <span class="job_post">Ui UX Designer</span>
                            <p>795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                            <div>
                                <button class="btn btn-primary btn-round">Ver Perfil</button>
                                <button class="btn btn-primary btn-round btn-simple">Editar</button>
                            </div>
                            <p class="social-icon m-t-5 m-b-0">
                                <a title="Twitter" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                <a title="Facebook" href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                <a title="Google-plus" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                <a title="Behance" href="javascript:void(0);"><i class="fa fa-behance"></i></a>
                                <a title="Instagram" href="javascript:void(0);"><i class="fa fa-instagram "></i></a>
                            </p>
                        </div>                
                    </div>
                </div>                    
            </div>
        </div>
    </div>
        
    <div class="row">
        <div class="col-xl-6 col-lg-7 col-md-12">
            <div class="card profile-header">
                <div class="body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="profile-image float-md-right"> <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt=""> </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h4 class="m-t-0 m-b-0"><strong>Michael</strong> Deo</h4>
                            <span class="job_post">Ui UX Designer</span>
                            <p>795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                            <div>
                                <button class="btn btn-primary btn-round">Ver Perfil</button>
                                <button class="btn btn-primary btn-round btn-simple">Editar</button>
                            </div>
                            <p class="social-icon m-t-5 m-b-0">
                                <a title="Twitter" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                <a title="Facebook" href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                <a title="Google-plus" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                <a title="Behance" href="javascript:void(0);"><i class="fa fa-behance"></i></a>
                                <a title="Instagram" href="javascript:void(0);"><i class="fa fa-instagram "></i></a>
                            </p>
                        </div>                
                    </div>
                </div>                    
            </div>
        </div>
        
        
        <div class="col-xl-6 col-lg-7 col-md-12">
            <div class="card profile-header">
                <div class="body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="profile-image float-md-right"> <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt=""> </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h4 class="m-t-0 m-b-0"><strong>Michael</strong> Deo</h4>
                            <span class="job_post">Ui UX Designer</span>
                            <p>795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                            <div>
                                <button class="btn btn-primary btn-round">Ver Perfil</button>
                                <button class="btn btn-primary btn-round btn-simple">Editar</button>
                            </div>
                            <p class="social-icon m-t-5 m-b-0">
                                <a title="Twitter" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                <a title="Facebook" href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                <a title="Google-plus" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                <a title="Behance" href="javascript:void(0);"><i class="fa fa-behance"></i></a>
                                <a title="Instagram" href="javascript:void(0);"><i class="fa fa-instagram "></i></a>
                            </p>
                        </div>                
                    </div>
                </div>                    
            </div>
        </div>
	</div>
</div>
    </div>
    <!-- <h1>{{ $titulo }}</h1>
    <p>{{ $contenido }}<p> -->
@endsection