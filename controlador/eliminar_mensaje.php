<?php

$id = $_POST["id"][0];
   // Conexión a la base de datos
   require_once '/xampp/htdocs/login/db.php';
// Crear la consulta SQL

// Crear la consulta SQL preparada
$sql = "DELETE FROM reparaciones WHERE id ='".$id."'";

// Preparar la consulta SQL
$stmt = $mysqli_query($conexion,$sql);

// Verificar si la consulta SQL preparada es válida
if ($stmt) {
    echo "Registro eliminado correctamente";
    
}else{
    die("Error en la consulta SQL preparada: " . $mysqli->error);
}


// Cerrar la conexión a la base de datos
$stmt->close();
$mysqli->close();



?>