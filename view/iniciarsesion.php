<?php
session_start();

// Conexión a la base de datos (ajusta los valores según tu configuración)
$host = "localhost";
$usuario = "root";
$contrasena = "";
$database = "crud_arbusta";

$conexion = new mysqli($host, $usuario, $contrasena, $database);

// Verifica la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Recupera los datos del formulario
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

// Verifica las credenciales del usuario
$sql = "SELECT * FROM usuario WHERE correo = '$correo'";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($contrasena, $row['contrasena'])) {
        // Inicio de sesión exitoso
        $_SESSION['usuario_id'] = $row['id'];
        $_SESSION['usuario_nombre'] = $row['nombre'];
        header("Location: home.php"); // Redirige a la página principal después del inicio de sesión
    } else {
        // Contraseña incorrecta
        header("Location: login.php");
    }
} else {
    // Usuario no encontrado
    header("Location: login.php");
}

$conexion->close();
