<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Administrador</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">

    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />

</head>

<div class="d-flex" id="wrapper">
    <!-- Sidebar-->
    <div class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light">Administrador de Creditos Complementarios</div>
            <div class="list-group list-group-flush">
                
                    <a class="list-group-item list-group-item-action list-group-item-light p-3"
                        href="{{ route('Administrador') }}">Alta de Actividades</a>
                
                
                    <a class="list-group-item list-group-item-action list-group-item-light p-3"
                        href="{{ route('Solicitudes') }}">Solicitudes</a>
                
                
                    <a class="list-group-item list-group-item-action list-group-item-light p-3"
                        href="{{ route('Liberaciones') }}">Liberaciones</a>
                
                
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route('Export')}}" data-toggle="collapse" data-target="#collapseUtilities"
                        aria-expanded="true" aria-controls="collapseUtilities">
                    Reporte</a>
                        
                               
                
            </div>
        </div>
    </div>
    <!-- Page content wrapper-->
    <div id="page-content-wrapper">
        <!-- Top navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <div class="container-fluid">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->nombre}}</a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                        
                                    </form>
                                    Salir
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page content-->
        <div class="container-fluid">
            <div class="container">
                <img src="{{ asset('img/logoTec.png') }}" class="img-responsive">
            </div>
            <br>
            @yield('content')
        </div>
    </div>
</div>




</html>
