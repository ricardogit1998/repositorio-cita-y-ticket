<?php
if (!empty($_POST["enviar"])) {
    require_once '/xampp/htdocs/login/db.php';
    
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$estado = 1; // Estado inicial: pendiente
$fecha_creacion = date('Y-m-d H:i:s'); // Fecha y hora actual

$sql = "INSERT INTO tickets (nombre, correo,telefono, asunto, mensaje, estado, fecha_creacion) VALUES ('$nombre', '$correo','$telefono', '$asunto', '$mensaje', '$estado', '$fecha_creacion')";

if ($mysqli->query($sql) === TRUE) {
    echo '<div class="alert alert-success" role="alert">Los datos del formulario se han enviado correctamente.</div>';
} else {
    echo '<div class="alert alert-danger" role="alert">Error al enviar: ' . $mysqli->error.'</div>';
}



$mysqli->close();
}

?>
