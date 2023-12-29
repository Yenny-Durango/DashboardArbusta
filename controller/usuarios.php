<?php
require_once '../model/conexion.php';

switch ($_POST['metodo']) {
    case 'r':
        registrarUsuario();
        break;
}

function registrarUsuario()
{
    $nombre = $_POST['nombre'];
    $apellido = $_POST["apellido"];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $contrasena = $_POST["contrasena"];

    // concatenar nombre y apellido
    $nombrecompleto = $apellido . ', ' . $nombre;

    // encriptacion de contrasenas
    $contrasena_hasheada = password_hash($contrasena, PASSWORD_DEFAULT);

    $conexion = new PDO_DATABASE();

    $conexion->connect();

    $sql = "INSERT INTO usuario(id, nombre_completo, correo, telefono, contrasena) VALUES (NULL,'$nombrecompleto','$correo',$telefono,'$contrasena_hasheada')";

    $resultado = $conexion->executeInstruction($sql);

    if ($resultado == true) {
        echo "Registrado correctamente";
    } else {
        echo "No se pudo realizar el registro";
    }
}
