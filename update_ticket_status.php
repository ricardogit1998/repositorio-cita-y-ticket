<?php

require_once 'db.php';

$id = $_POST['id'];
$estado = $_POST['estado'];

$query = "UPDATE tickets SET estado='$estado' WHERE id='$id'";

if ($mysqli->query($query) === TRUE) {
     // redirigir a la misma página si aún no se ha redirigido
     if (!isset($_POST['redirected'])) {
        
        header('Location: admin.php' );
        exit;
    } 
       
    
} else {
    echo '<div class="alert alert-danger" role="alert">Error al registrarse: ' . $mysqli->error.'</div>';
}

$mysqli->close();

?>
