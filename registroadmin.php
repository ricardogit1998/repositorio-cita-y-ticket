<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario de Registro</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
  <style>
    form {
      max-width: 600px;
      margin: 0 auto;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Formulario de Registro</h1>

    <?php
    include "controlador/guardar_registro_admin.php";
    ?>
    <form method="post" >
      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
      </div>
      <div class="mb-3">
        <label for="usuario" class="form-label">Usuario:</label>
        <input type="text" class="form-control" id="usuario" name="usuario" required>
      </div>
      <div class="mb-3">
        <label for="correo" class="form-label">Email:</label>
        <input type="text" class="form-control" id="correo" name="correo" required>
      </div>
      <div class="mb-3">
        <label for="telefono" class="form-label">Telefono:</label>
        <input type="text" class="form-control" id="telefono" name="telefono" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Contraseña:</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <div class="mb-3">
        <label for="rol" class="form-label">Rol:</label>
        <select class="form-control" id="rol" name="rol" required>
          <option value="">Seleccione un Rol</option>
          <option value="1">Administrador</option>
          
        </select>
      </div>
      <div class="mb-3">
								
								<input type="submit" class="btn btn-primary" value="Registrarse" name="registraradmin" >
							</div>
    </form>
  </div>
</body>
</html>