<!DOCTYPE html>
<html>

<head>
    <title>Sistema de Tickets y Servicios - Administrador</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/menuadmin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <style>
        .small-input {
            width: 50%;
            position: relative;
            left: 25%;
        }
    </style>
</head>

<body>
    <!-- ======= Header ======= -->
    <?php
    include "modulos/menucliente.php";
    ?>
    <!-- Contenido principal -->
    <main class="container my-5 text-center">
        <div class="container mt-5  ">

            <table class="table  " id="contenedor">
                <div class="card-body ">
                    <div class="container ">
                        <h1>Buscar su proceso</h1>
                        <form id="search-form">
                            <div class="mb-3">
                                <label for="search-term" class="form-label">Buscar por nombre:</label>
                                <input type="text" class="form-control small-input" id="search-term" name="search-term">
                            </div>
                            <button type="submit" id="boton-buscar" class="btn btn-primary ">Buscar</button>
                        </form>
                        <div id="search-results"></div>
                    </div>

                    <tbody>
                        <h1 class="text-center mb-5">DETALLE DE TICKETS</h1>
                        <?php

                        
                        if (isset($_GET['search-term'])&& $_GET['search-term'] !== '') {
                            $searchTerm = $_GET['search-term'];
                            require_once 'db.php';

                            $query = "SELECT DISTINCT tickets.nombre, tickets.id, tickets.asunto, tickets.estado, tickets.fecha_creacion, reparaciones.equipo, reparaciones.materiales, reparaciones.fecha_entrega FROM tickets INNER JOIN reparaciones
                            ON tickets.nombre = reparaciones.nombre WHERE tickets.nombre LIKE '%$searchTerm%'";
                            $result = $mysqli->query($query);

                            if ($result->num_rows > 0) {
                                echo '<table class="table" id="contenedor" >';
                                echo '<thead><tr><th>ID</th><th>Nombre</th><th>Asunto</th><th>Estado</th><th>Equipo entregado</th><th>Materiales</th><th>fecha de creacion</th><th>fecha de entrega</th></tr></thead>';
                                echo '<tbody >';
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . $row['id'] . "</td>";
                                    echo "<td>" . $row['nombre'] . "</td>";
                                    echo "<td>" . $row['asunto'] . "</td>";
                                    echo "<td>" . ($row['estado'] == 1 ? 'pendiente' : 'cerrado') . "</td>";

                                    
                                    echo "<td>" . $row['equipo'] . "</td>";
                                    echo "<td>" . $row['materiales'] . "</td>";
                                    echo "<td>" . $row['fecha_creacion'] . "</td>";
                                    echo "<td>" . $row['fecha_entrega'] . "</td>";
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
                                                 <div class="1row">EQUIPO ENTREGADO: ' . $row['equipo'] . '</div>
                                                 <div class="1row">MATERIALES: ' . $row['materiales'] . '</div>
                                                 <div class="1row">FECHA DE CREACION: ' . $row['fecha_creacion'] . '</div>
                                                 <div class="1row">FECHA DE ENTREGA: ' . $row['fecha_entrega'] . '</div>
                                                 
                                                    
                                                
                                          
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>';
                                }
                                echo '</tbody>';
                                echo '</table>';
                            } else {
                                echo '<p>No se encontraron resultados.</p>';
                            }
                            $mysqli->close();
                        } else {
                            echo '<p>Ingrese un término de búsqueda.</p>';
                        }



                        ?>
                    </tbody>
            </table>
        </div>
        </div>
    </main>








    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/js/bootstrap.min.js"></script>
</body>

</html>