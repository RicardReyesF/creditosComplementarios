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
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light">Administrador de Creditos Complementarios</div>
            <div class="list-group list-group-flush">
                <li class="nav-item">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3"
                        href="{{ route('Administrador') }}">Alta de Actividades</a>
                </li>
                <li class="nav-item">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3"
                        href="{{ route('Solicitudes') }}">Solicitudes</a>
                </li>
                <li class="nav-item">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3"
                        href="{{ route('Liberaciones') }}">Liberaciones</a>
                </li>
                <li class="nav-item">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                        aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-fw fa-wrench"></i>
                        <span>Reportes</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Archivos</h6>
                            <a class="collapse-item" href="{{ route('Liberaciones') }}">Servicio Social</a>
                            <a class="collapse-item" href="{{ route('Liberaciones') }}">Residencia</a>
                        </div>
                    </div>
                </li>
            </div>

    </ul>
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
                        <li class="nav-item active"><a class="nav-link" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Link</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#!">Action</a>
                                <a class="dropdown-item" href="#!">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#!">Something else here</a>
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
