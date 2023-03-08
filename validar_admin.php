<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","servicio_ticket");

$consulta="SELECT*FROM usuario where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['id_cargo']==1){ //administrador
    header("location:admin.php");

}else
if($filas['id_cargo']==2){ //cliente

}
else{
    ?>
    <?php
    include("loginadmin.php");
    ?>
    
    
    <h1 class="bad">USTED NO ES ADMINISTRADOR</h1>

    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
