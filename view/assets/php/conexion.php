<?php
// La clase PDO_DATABASE facilita la gestión de conexiones a una base de datos MySQL utilizando PDO.

class PDO_DATABASE
{
    // Atributos privados que almacenan información de conexión.
    private $host;
    private $usuario;
    private $contraseña;
    private $database;

    // Atributo privado que almacena la conexión PDO.
    private $conexion;

    // La función __construct inicializa los atributos de la clase con valores predeterminados para la conexión a la base de datos.
    function __construct()
    {
        $this->host = "localhost";
        $this->usuario = "root";
        $this->contraseña = "";
        $this->database = "crud_arbusta";
    }

    // La función connect establece la conexión a la base de datos utilizando los valores proporcionados.
    function connect()
    {
        // Configuración adicional para la conexión PDO.
        $opciones = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::MYSQL_ATTR_FOUND_ROWS => true
        );

        // Se crea la conexión PDO y se asigna al atributo $conexion.
        $this->conexion = new PDO(
            'mysql:host=' . $this->host . ';dbname=' . $this->database,
            $this->usuario,
            $this->contraseña,
            $opciones
        );
    }

    // Función para obtener datos de la base de datos basados en una consulta SQL
    function getData($sql)
    {
        try {
            $data = array();
            $resultado = $this->conexion->query($sql);

            // Verificar si hay resultados
            if ($resultado->rowCount() > 0) {
                while ($row = $resultado->dba_fetch(PDO::FETCH_ASSOC)) {
                    // Almacenar cada fila en el array de datos
                    array_push($data, $row);
                }
            }

            return $data;
        } catch (\Throwable $th) {
            // Manejar cualquier excepción lanzada durante la ejecución
            die("¡Oh, no! ¡Hay un error en la consulta!");
        }
    }

    // Función para realizar el proceso de inicio de sesión basado en una consulta SQL
    function login($sql)
    {
        try {
            $data = array();
            $result = $this->conexion->query($sql);

            // Verificar si hay resultados
            if ($result->rowCount() > 0) {
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    // Almacenar cada fila en el array de datos
                    array_push($data, $row);
                }
            } else {
                // Si no hay resultados, establecer $data como false
                $data = false;
            }

            return $data;
        } catch (\Throwable $th) {
            // Manejar cualquier excepción lanzada durante la ejecución
            die("¡Oh, no! ¡Hay un error en la consulta!");
        }
    }

    // Función para ejecutar una instrucción SQL que no requiere resultados
    function executeInstruction($sql)
    {
        try {
            $result = $this->conexion->query($sql);
            return $result;
        } catch (Exception $e) {
            // Manejar cualquier excepción lanzada durante la ejecución
            die("¡Oh, no! ¡Hay un error en la consulta!");
        }
    }

    // Función para cerrar la conexión a la base de datos
    function close()
    {
        $this->conexion = null;
    }
}
