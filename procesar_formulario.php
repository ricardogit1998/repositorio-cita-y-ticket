<!DOCTYPE html>
<html>

<head>
    <title>Confirmación de reparación</title>
    <link rel="stylesheet" href="css/menuadmin.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
</head>

<body>
    <!-- ======= Menu ======= -->
    <?php
    include "modulos/menucliente.php";
    ?>
    <main class="container my-5 ">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4>Confirmación de reparación</h4>
                        </div>
                        <div class="card-body">
                            <?php
                            include "controlador/mensaje_mostrar_cliente.php";

                            
                            
                            ?>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
    </main>
</body>

</html>