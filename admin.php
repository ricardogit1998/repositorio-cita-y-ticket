<!DOCTYPE html>
<html>

<head>
    <title>Sistema de Tickets y Servicios - Administrador</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/menuadmin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    
</head>

<body>
<!-- ======= Header ======= -->
<?php 
   include "modulos/menuadmin.php";
  ?>
<!-- Contenido principal -->
<main class="container my-5 text-center">
<div class="container mt-5  ">
        <h1 class="text-center mb-5">Panel de administración</h1>

        <table class="table  " id="contenedor">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo electrónico</th>
                    <th>Telefono</th>
                    <th>Asunto</th>
                    <th>Estado</th>
                    <th>Fecha de creación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once 'db.php';

                $query = "SELECT * FROM tickets ";
                $result = $mysqli->query($query);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['nombre'] . "</td>";
                        
                        echo '<td><a href="https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&to=' . urlencode($row['correo']) . '" target="_blank">' . $row['correo'] . '</a></td>';
                        echo "<td>" . $row['telefono'] . "</td>";
                        echo "<td>" . $row['asunto'] . "</td>";
                        echo "<td>";
                        echo "<form method='post' id='my-form' action='update_ticket_status.php'>";
                        echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
                        echo "<select name='estado'>";
                        echo "<option value='1' " . ($row['estado'] == 1 ? 'selected' : '') . ">Pendiente</option>";
                        echo "<option value='3' " . ($row['estado'] == 3 ? 'selected' : '') . ">Cerrado</option>";
                        echo "</select>";
                        echo "<button type='submit' class='btn btn-primary btn-sm ms-2'>Actualizar</button>";
                        echo "</form>";
                        echo "</td>";
                        echo "<td>" . $row['fecha_creacion'] . "</td>";
                        echo '<td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal' . $row['id'] . '">Ver</button></td>';
                        echo "</tr>";
                        
                        echo '<div class="modal fade" id="exampleModal' . $row['id'] . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                           <center> <h5 class="modal-title" id="exampleModalLabel">DETALLES</h5></center>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            
                                                 
                                                 <div class="1row">NOMBRE: ' . $row['nombre'] . '</div>
                                                 <div class="1row">ASUNTO: ' . $row['asunto'] . '</div>
                                                 <div class="1row">ESTADO: ' . ($row['estado'] == 1 ? 'pendiente' : 'cerrado') . '</div>
                                                 <div class="1row">FECHA DE CREACION: ' . $row['fecha_creacion'] . '</div>
                                                
                                                    
                                                
                                          
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>';
                    }
                } else {
                    echo "<tr><td colspan='7' class='text-center'>No se encontraron tickets.</td></tr>";
                }
                $mysqli->close();
                ?>
            </tbody>
        </table>
    </div>
</main>



    




    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/js/bootstrap.min.js"></script>
</body>

</html>