<!DOCTYPE html>
<html>

<head>
    <title>Sistema de Tickets y Servicios</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/menuadmin.css">
    <link rel="stylesheet" href="css/fondo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- ======= Menu ======= -->
    <?php
    include "modulos/menucliente.php";
    ?>


    <!-- ======= Contenido ======= -->
    <main class="container my-5 ">
        <div class="container mt-5 " id="contenedor">
            <h1 class="text-center mb-5">Nueva Cita</h1>
             <?php
             include "controlador/submit_ticket_process.php";
             
             
             ?>
             
             
            <div class="card-body">
                <form  method="POST">
                    <div class="form-group mb-3">
                        <label for="nombre">Nombre</label>
                        <input type="text" placeholder="Ingrese su nombre"  class="form-control" id="nombre" name="nombre"  required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="correo">Correo electrónico</label>
                        <input type="email" placeholder="Ingrese su correo" class="form-control" id="correo" name="correo"  required>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Telefono:</label>
                        <input type="text" placeholder="Ingrese su telefono" class="form-control" id="telefono" name="telefono"  required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="asunto">Asunto</label>
                        <input type="text" placeholder="Ingrese su problema" class="form-control" id="asunto" name="asunto" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="mensaje">Mensaje</label>
                        <textarea class="form-control" placeholder="Explique su problema" id="mensaje" name="mensaje" rows="5" required></textarea>
                    </div>
                    <div class="mb-3">
								
								<input type="submit" class="btn btn-primary" value="Enviar" name="enviar" >
							</div>
                </form>
            </div>
        </div>

    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>