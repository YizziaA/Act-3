<?php
require_once("../../config/conexion.php");
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar</title>
    <link rel="stylesheet" href="<?php echo base_url; ?>css/bootstrap.min.css">

<body>

    <!-- CODIGO DE NAVBAR RESPONSIVA -->
    <header>
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand" href="<?php echo base_url; ?>">
                    <img src="<?php echo base_url; ?>img/logo.png" alt="logo" height="55" width="115">
                </a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mi-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mi-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/productos/index.php">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/mascota/index.php">Mascota</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/receta/index.php">Receta</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- FIN CODIGO DE NAVBAR RESPONSIVA -->

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">REGISTRAR RECETA</h5>
                        <form action="<?php echo base_url; ?>CRUDR/insertarDatos.php" method="POST">
                            <div class="mb-3">
                                <label for="idmascota" class="form-label">Id mascota</label>
                                <input type="text" class="form-control" id="idmascota" name="idmascota" placeholder="id de la mascota" required>
                            </div>
                            <div class="mb-3">
                                <label for="idcliente" class="form-label">Id cliente</label>
                                <input type="text" class="form-control" id="idcliente" name="idcliente" placeholder="id del cliente" required>
                            </div>
                            <div class="mb-3">
                                <label for="fecha" class="form-label">Fecha</label>
                                <input type="date" class="form-control" id="fecha" name="fecha" placeholder="fecha de la receta" required>
                            </div>
                            <div class="mb-3">
                                <label for="medicamento" class="form-label">Medicamento</label>
                                <input type="text" class="form-control" id="medicamento" name="medicamento" placeholder="medicamentos" required>
                            </div>
                            <div class="mb-3">
                                <label for="doctor" class="form-label">Doctor</label>
                                <input type="text" class="form-control" id="doctor" name="doctor" placeholder="Doctor" required>
                            </div>
                            <div class="mb-3">
                                <label for="alergias" class="form-label">Alergias</label>
                                <input type="text" class="form-control" id="alergias" name="alergias" placeholder="Alergias" required>
                            </div>
                            <div class="mb-3">
                                <label for="antecedentes" class="form-label">Antecedentes</label>
                                <input type="text" class="form-control" id="antecedentes" name="antecedentes" placeholder="Antecedentes" required>
                            </div>
                            <div class="mb-3">
                                <label for="vacunas" class="form-label">Vacunas</label>
                                <input type="text" class="form-control" id="vacunas" name="vacunas" placeholder="vacunas" required>
                            </div>
                            <div class="mb-3">
                                <label for="precio" class="form-label">Precio</label>
                                <input type="text" class="form-control" id="precio" name="precio" placeholder="precio" required>
                            </div>
                            <div class="text-center">
                                <a href="<?php echo base_url; ?>Formularios/receta/index.php" type="submit" class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

marca
    <script src="<?php echo base_url; ?>js/bootstrap.min.js"></script>

</body>

</html>