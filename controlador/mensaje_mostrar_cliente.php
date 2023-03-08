<?php
if (!empty($_POST["enviar"])) {
   // Conexión a la base de datos
   require_once '/xampp/htdocs/login/db.php';
// Procesamiento de los datos del formulario
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$equipo = $_POST["equipo"];
$problema = $_POST["problema"];
$materiales = $_POST["materiales"];
$fecha_entrega = $_POST["fecha_entrega"];

// Inserción de los datos en la base de datos
$sql = "INSERT INTO reparaciones (nombre,correo, equipo, problema, materiales, fecha_entrega) VALUES ('$nombre','$correo', '$equipo', '$problema', '$materiales', '$fecha_entrega')";

if ($mysqli->query($sql) === TRUE) {
    
    echo '<div class="alert alert-success" role="alert">Los datos del formulario se han enviado correctamente.</div>';
    
} else {
    echo '<div class="alert alert-danger" role="alert">Error: ' . $sql . '<br>' . $mysqli->error .'</div>';
}
$sql = "SELECT tickets.nombre,reparaciones.id, reparaciones.equipo, reparaciones.materiales, reparaciones.fecha_entrega
        FROM tickets
        INNER JOIN reparaciones
        ON tickets.nombre = reparaciones.nombre
        WHERE tickets.nombre = '$nombre'
        LIMIT 1";
        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                 
                $mensaje ="Estimado " . $row['nombre'] . "," . " su " . $row['equipo'] . " ha sido reparado exitosamente. Se han utilizado los siguientes materiales: " . $row['materiales'] . " La fecha de entrega acordada es el " . $row['fecha_entrega'] . " <br> ¡Gracias por confiar en nosotros! ";
                echo "<p>$mensaje</p>";
            }
        } else {
            
            echo "<p>No se han enviado datos del formulario.</p>";
        }                    

$mysqli->close();
}


?>