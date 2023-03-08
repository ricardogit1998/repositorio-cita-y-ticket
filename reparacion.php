<!DOCTYPE html>
<html>
<head>
	<title>Formulario de reparación</title>
    <link rel="stylesheet" href="css/menuadmin.css">
	
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<!-- ======= Menu ======= -->
<?php
        include "modulos/menuadmin.php";
		
        ?>


        <!-- ======= Contenido ======= -->
    <main class="container my-5 ">
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-6 mx-auto">
				<div class="card">
					<div class="card-header">
						<h4>Formulario de reparación</h4>
					</div>

					<?php
					include "controlador/insertar_datos_reparacion.php";
					
					?>
					<div class="card-body">
						<form method="POST" >
							<div class="mb-3">
								<label for="nombre">Nombre del cliente</label>
								<input type="text" class="form-control" name="nombre" required>
							</div>
							<div class="mb-3">
								<label for="correo">Correo</label>
								<input type="email" class="form-control" name="correo" required>
							</div>
							<div class="mb-3">
								<label for="equipo">Equipo a reparar</label>
								<input type="text" class="form-control" name="equipo" required>
							</div>
							<div class="mb-3">
								<label for="problema">Descripción del problema</label>
								<textarea class="form-control" name="problema" required></textarea>
							</div>
							<div class="mb-3">
								<label for="materiales">Materiales necesarios</label>
								<textarea class="form-control" name="materiales" required></textarea>
							</div>
							<div class="mb-3">
								<label for="fecha_entrega">Fecha de entrega</label>
								<input type="date" class="form-control" name="fecha_entrega" required>
							</div>
							<div class="mb-3">
								
								<input type="submit" class="btn btn-primary" value="Enviar" name="enviar" >
							</div>
							
						</form>
						
					</div>
				</div>
			</div>
		</div>
	</div>
    </main>
	<!-- Bootstrap JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>