<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0-beta1/css/bootstrap.min.css">

</head>
<body>
   <form action="validar_admin.php" method="post">

   <h1 class="animate__animated animate__backInLeft">Sistema de login administrador</h1>

   <p>Usuario <input type="text" placeholder="ingrese su nombre" name="usuario"></p>

   <p>Contraseña <input type="password" placeholder="ingrese su contraseña" name="contraseña"></p>
   
   <input type="submit" value="Ingresar">
   <br>
   <div class="text-center mt-3">
          <a href="loginadmin.php" class="btn btn-outline-primary">Iniciar sesión como administrador</a>
        </div>
        <div class="text-center mt-3">
          <a href="logincliente.php" class="btn btn-outline-primary">Iniciar sesión como usuario</a>
        </div>
        <div class="text-center mt-3">
          <a href="registroadmin.php" class="btn btn-outline-primary">Registrarse</a>
        </div>
   </form> 
   
</body>
</html>