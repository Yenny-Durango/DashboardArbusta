<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Definición del conjunto de caracteres y configuración para Internet Explorer -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Configuración de la vista en dispositivos móviles -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Título de la página -->
    <title>REGISTRO ARBUSTA</title>
    <!-- Enlace a la hoja de estilo CSS -->
    <link href="assets/css/login.css" rel="stylesheet" />
    <!-- Enlace favicon -->
    <link rel="shortcut icon" href="assets/img/LogoARB_PNG.png" type="image/x-icon">
    <!-- Inclusión de la biblioteca Font Awesome para iconos -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
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
                        <!-- Columna que ocupa 7 columnas en pantallas grandes -->
                        <div class="col-lg-7">
                            <!-- Tarjeta con sombra y bordes redondeados -->
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <!-- Encabezado de la tarjeta -->
                                <div class="card-header">
                                    <!-- Título centrado en negrita -->
                                    <h3 class="text-center font-weight-light my-4">Crear una cuenta</h3>
                                </div>
                                <!-- Cuerpo de la tarjeta con el formulario de registro -->
                                <div class="card-body">
                                    <form method="post" action="assets/php/procesar_registro.php" onsubmit="return validarFormularioRegistro()">
                                        <!-- Campo de entrada para el nombre -->
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="nombre" name="nombre" type="text" placeholder="nombre" value="Teresa"/>
                                            <label for="nombre">Nombre</label>
                                        </div>
                                        <!-- Campo de entrada para el apellido -->
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="apellido" name="apellido" type="text" placeholder="apellido" value="Fernadez"/>
                                            <label for="apellido">Apellido</label>
                                        </div>
                                        <!-- Campo de entrada para el correo electrónico -->
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="correo" name="correo" type="email" placeholder="name@arbusta.net" value="teresa.fernadez@arbusta.net"/>
                                            <label for="correo">Correo</label>
                                        </div>
                                        <!-- Campo de entrada para el telefono -->
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="telefono" name="telefono" type="number" placeholder="telefono" value="1234567890"/>
                                            <label for="telefono">Telefono</label>
                                        </div>
                                        <!-- Campo de entrada para la contrasena -->
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="contrasena" name="contrasena" type="password" placeholder="contrasena" value="Teresa123"/>
                                            <label for="contrasena">Contraseña</label>
                                        </div>
                                        <!-- Campo de entrada para confirmar la contrasena -->
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="confirmarcontrasena" name="confirmarcontrasena" type="password" placeholder="confirmarcontrasena" value="Teresa123"/>
                                            <label for="confirmarcontrasena">Confirmar contrasena</label>
                                        </div>
                                        <button type="button" id="verContrasena" class="ver-contraseña" title="Ver contraseña"><i class="fa-solid fa-eye"></i> Ver contraseña</button>
                                        <!-- Botón para enviar el formulario -->
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid">
                                            <button type="submit" class="btn btn-primary" id="btnRegistrarse">Registrarse</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Pie de la tarjeta con enlace para iniciar sesión -->
                                <div class="card-footer text-center py-3">
                                    <div><a href="login.php">¿Ya tienes una cuenta? Iniciar sesion</a></div>
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