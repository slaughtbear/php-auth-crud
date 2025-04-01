<?php

// Credenciales
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_php";

// Crear la conexión
$conexion = new mysqli($servername, $username, $password, $dbname);

$conexion->set_charset("utf8"); // Para que el sitio web reconozca caracteres especiales

// Checar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
  }
  // echo "Conectado correctamente";

?>