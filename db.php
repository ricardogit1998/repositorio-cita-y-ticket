<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "servicio_ticket";

$mysqli = new mysqli($host, $user, $password, $database);

if ($mysqli->connect_error) {
    die("Error al conectar con la base de datos: " . $mysqli->connect_error);
}

?>