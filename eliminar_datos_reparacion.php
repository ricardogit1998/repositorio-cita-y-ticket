<?php

/*// Conexión a la base de datos
require_once 'db.php';
// Procesamiento de los datos del formulario

$id = $_POST["SELECT*FROM reparaciones where id=? "];
// Eliminar el registro de la base de datos
$sql = "DELETE  FROM reparaciones WHERE id=?";
if ($stmt = mysqli_prepare($mysqli, $sql)) {
    // Vincular los parámetros
    mysqli_stmt_bind_param($stmt,"i",$id);

// Ejecutar la consulta preparada
if (mysqli_stmt_execute($stmt)) {
    // Redirigir al usuario de vuelta a la página anterior con un mensaje de éxito
    header("Location: procesar_formulario.php?mensaje=Registro eliminado exitosamente");
  } else {
    // Mostrar un mensaje de error si no se pudo eliminar el registro
    echo "Error al eliminar el registro: " . mysqli_error($mysqli);
  }


 // Cerrar la consulta preparada
 mysqli_stmt_close($stmt);
} else {
  // Mostrar un mensaje de error si no se pudo preparar la consulta
  echo "Error al preparar la consulta: " . mysqli_error($mysqli);
}
$mysqli->close();

?>*/