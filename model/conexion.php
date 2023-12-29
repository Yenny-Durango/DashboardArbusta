<?php

class PDO_DATABASE
{
    private $host; // Atributo HOST
    private $usuario; // Atributo Usuario
    private $contrasena; // Atributo Contraseña
    private $database; // Atributo Nombre de Base de datos

    private $conexion; // Atributo Conexión, aquí se guardará la conexión una vez que se crea.

    function __construct()
    {
        $this->host = "localhost";
        $this->usuario = "root";
        $this->contrasena = "";
        $this->database = "crud_arbusta";
    }

    function connect()
    {
        try {
            $opciones = array(
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                PDO::MYSQL_ATTR_FOUND_ROWS => true
            );
            $this->conexion = new PDO(
                'mysql:host=' . $this->host . ';dbname=' . $this->database,
                $this->usuario,
                $this->contrasena,
                $opciones
            );
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error al conectar a la base de datos: " . $e->getMessage());
        }
    }

    function login($sql)
    {
        try {
            $data = array();
            $resultado = $this->conexion->query($sql);
            if ($resultado->rowCount() > 0) {
                while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
                    array_push($data, $row);
                }
            } else {
                $data = false;
            }
            return $data;
        } catch (PDOException $e) {
            die("Error en la consulta de inicio de sesión: " . $e->getMessage());
        }
    }

    function executeInstruction($sql)
    {
        try {
            $resultado = $this->conexion->query($sql);
            return $resultado;
        } catch (PDOException $e) {
            die("Error al ejecutar la instrucción: " . $e->getMessage());
        }
    }
}
