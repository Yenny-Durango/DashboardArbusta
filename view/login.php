<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Metadatos de la página -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Título de la página -->
    <title>Login - ARBUSTA</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="shortcut icon" href="assets/img/LogoARB_PNG.png" type="image/x-icon">

</head>


<body class="bg-primary">
    <!-- Contenedor principal de la página -->
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <!-- Sección principal -->
            <main>
                <!-- Contenedor principal dentro de la sección principal -->
                <div class="container">
                    <!-- Fila centrada en la página -->
                    <div class="row justify-content-center">
                        <!-- Columna que ocupa 5 columnas en pantallas grandes -->
                        <div class="col-lg-5">
                            <!-- Tarjeta con sombra y bordes redondeados -->
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <!-- Encabezado de la tarjeta con logo y título -->
                                <div class="card-header">
                                    <img src="assets/img/LogoARB_PNG.png" alt="">
                                    <h3 class="text-center font-weight-light my-4">Login</h3>
                                </div>
                                <!-- Cuerpo de la tarjeta con el formulario de inicio de sesión -->
                                <div class="card-body">
                                    <form method="post" action="iniciarsesion.php" onsubmit="return validarFormularioLogin()">
                                        <!-- Campos de entrada para el correo y la contrasena -->
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="correo" name="correo" type="email" placeholder="name@arbusta.net" />
                                            <label for="correo">Correo</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="contrasena" name="contrasena" type="password" placeholder="contrasena"/>
                                            <span >Ver contraseña</span>
                                            <label for="contrasena">Contraseña</label>
                                        </div>
                                        <!-- Enlaces y botón para enviar el formulario -->
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a href="password.php">¿Olvidaste la contrasena?</a>
                                            <button type="submit" class="btn btn-primary" id="btnIngresar">Ingresar</button>
                                        </div>
                                        <br>
                                        <div class="card">
                                            <div class="g-recaptcha" data-sitekey="6LdjQz8pAAAAAJgZ__0wq6FNFJ266q0cdS3fyUkF"></div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Pie de la tarjeta con enlace para registrarse -->
                                <div class="card-footer text-center py-3">
                                    <div><a href="register.php">¿Necesitas una cuenta? ¡Regístrate!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- Inclusión de Bootstrap y script personalizado -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="assets/js/validaciones.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/myscript.js"></script>

    <!-- CDN SWEETALERT -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>