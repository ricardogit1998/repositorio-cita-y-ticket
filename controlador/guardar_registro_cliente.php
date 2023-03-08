<?php
if (!empty($_POST["registrarcliente"])) {
// Conexión a la base de datos
require_once '/xampp/htdocs/login/db.php';


// Obtener los datos del formulario
$nombre = $_POST["nombre"];
$usuario = $_POST["usuario"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$password = $_POST["password"];
$rol = $_POST["rol"];

// Consulta SQL para insertar los datos en la base de datos
$sql = "INSERT INTO cliente (nombre, usuario,correo,itelefono, contraseña, id_cargo) VALUES ('$nombre', '$usuario', '$correo', '$telefono', '$password', '$rol')";



// Ejecutar la consulta SQL
if ($mysqli->query($sql) === TRUE ) {
   
    echo '<div class="alert alert-success" role="alert">Se registro correctamente.</div>';
    
} else {

    
    
    echo '<div class="alert alert-danger" role="alert">Error al registrarse: ' . $mysqli->error.'</div>';
    }



// Cerrar la conexión a la base de datos
$mysqli->close();
}
?>