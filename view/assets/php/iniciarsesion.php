<?php
// Incluir el archivo de conexión a la base de datos
include("conexion.php");

// Crear una instancia de PDO para la conexión a la base de datos
$PDO_DATABASE = new PDO("mysql:host=localhost;dbname=crud_arbusta", "root", "");

// Verificar si la solicitud HTTP es de tipo POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validaciones básicas
    $correo = filter_input(INPUT_POST, 'correo', FILTER_VALIDATE_EMAIL);
    $contrasena = $_POST['contrasena'];

    $ip = $_SERVER['REMOTE_ADDR'];
    $captcha = $_POST['g-recaptcha-response'];
    $secretkey = "6LdjQz8pAAAAAIaneJaTyhbEsRCOYfwXomX68V5e";

    $respuesta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$captcha&remoteip=$ip");

    $atributos = json_decode($respuesta, TRUE);

    if(!$atributos['success']){
        echo "<script>alert('Verificar captcha'); window.location.href = 'login.php';</script>";
    }

    // Verificar si el correo y la contraseña no están vacíos
    if (!$correo || empty($contrasena)) {
        // Redireccionar a la página de inicio con un mensaje de error
        header("Location: login.php");
        exit();
    }

    // Consultar la base de datos para obtener el usuario con el correo proporcionado
    $sql = "SELECT correo, contrasena FROM usuario WHERE correo = ?";
    $stmt = $PDO_DATABASE->prepare($sql);
    $stmt->execute([$correo]);
    $row = $stmt->fetch();

    // Verificar si se encontró un usuario y la contraseña es válida
    if ($row && password_verify($contrasena, $row['contrasena'])) {
    // Iniciar la sesión y almacenar el correo del usuario
    session_start();
    $_SESSION['usuario'] = $row['correo'];

    // Redireccionar a la página de inicio después del inicio de sesión exitoso
    header("Location: home.php");
    exit();
} else {
    // Redireccionar a la página de inicio con un mensaje de error de credenciales inválidas
    echo "<script>alert('Usuario no encontrado o contraseña incorrecta')</script>";
    header("Location: login.php");
    exit();
}
}
