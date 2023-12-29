<?php
require_once("conexion.php");

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
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT); // Hash de la contraseña
$nombreCompleto = $apellido . ' ' . $nombre;

// Inserta los datos en la base de datos
$consulta = "INSERT INTO usuario(nombre_completo, correo, telefono, contrasena) VALUES ('$nombreCompleto','$correo','$telefono','$contrasena')";

if ($conexion->query($consulta) === TRUE) {
    echo "Registro exitoso";
    header("Location: home.php");
} else {
    echo "Error al registrar: " . $conexion->error;
    header("Location: login.php");
}

$conexion->close();
