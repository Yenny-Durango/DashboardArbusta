<?php
session_start();

// Verificar la sesión
if (!isset($_SESSION['correo'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>ARBUSTA</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link rel="shortcut icon" href="assets/img/LogoARB_PNG.png" type="image/x-icon">

</head>

<body class="sb-nav-fixed">
    <!-- Barra de Navegación Superior (navbar) -->
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Marca de la Barra de Navegación -->
        <a class="navbar-brand ps-3" href="index.html">A R B U S T A</a>

        <!-- Botón para Alternar la Barra Lateral -->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

        <!-- Formulario de Búsqueda de la Barra de Navegación (visible solo en pantallas medianas y grandes) -->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
            </div>
        </form>

        <!-- Sección de la Barra de Navegación (en el lado derecho) -->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <!-- Elemento de Menú Desplegable para el Usuario -->
            <li class="nav-item dropdown">
                <!-- Enlace que activa el Menú Desplegable -->
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <!-- Menú Desplegable del Usuario -->
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <!-- Opción del Menú Desplegable: Ajustes -->
                    <li><a class="dropdown-item" href="#!">Ajustes</a></li>

                    <!-- Línea Separadora en el Menú Desplegable -->
                    <li>
                        <hr class="dropdown-divider" />
                    </li>

                    <!-- Opción del Menú Desplegable: Cerrar Sesión -->
                    <li><a class="dropdown-item" href="php/cerrarsesion.php">Cerrar sesión</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Inicio</div>
                        <a class="nav-link" onclick='Metodo("partials/equipo.php")'>
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Home
                        </a>
                        <div class="sb-sidenav-menu-heading">opciones</div>
                        <a class="nav-link" onclick='Metodo("partials/informacionproducto.php")'>
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Informacion del producto
                        </a>
                        <a class="nav-link" onclick='Metodo("partials/datostecnicos.php")'>
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Datos tecnicos
                        </a>
                        <a class="nav-link" onclick='Metodo("partials/crearticket.php")'>
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Crear ticket
                        </a>
                        <a class="nav-link" onclick='Metodo("partials/mistickets.php")'>
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Mis tickets
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Persona logueada: </div>
                </div>
            </nav>
        </div>
        <!-- CONTENIDO -->
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <center>
                        <div class="container" id="qCarga">
                            <img src="assets/img/bienvenido-de-nuevo.png" alt="" style="width: 300px;">
                            <h1><?php echo $nombreCompleto ?></h1>
                        </div>
                    </center>
                </div>
            </main>

            <!-- FOOTER -->
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; ARBUSTA 2023</div>
                        <div>
                            <a href="#">Política de privacidad</a>
                            &middot;
                            <a href="#">Términos &amp; Condiciones</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- fin contenido -->
    </div>
<script src="assets/js/demo/datatables-demo.js"></script>
    <!-- mis scripts -->
    <script src="assets/js/validaciones.js"></script>

    <script src="assets/js/scripts.js"></script>

    <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>

    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>


</body>

</html>