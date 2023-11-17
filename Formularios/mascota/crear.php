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
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/marcas/index.php">Receta</a>
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
                        <h5 class="card-title text-center">REGISTRAR MASCOTA</h5>
                        <form action="<?php echo base_url; ?>CRUDM/insertarDatos.php" method="POST">
                            <div class="mb-3">
                                <label for="nombreP" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de la mascota" required>
                            </div>
                            <div class="mb-3">
                                <label for="nombreP" class="form-label">Especie</label>
                                <input type="text" class="form-control" id="especie" name="especie" placeholder="especie de la mascota" required>
                            </div>
                            <div class="mb-3">
                                <label for="nombreP" class="form-label">Raza</label>
                                <input type="text" class="form-control" id="raza" name="raza" placeholder="raza de la mascota" required>
                            </div>
                            <div class="mb-3">
                                <label for="nombreP" class="form-label">Fecha de nacimiento</label>
                                <input type="date" class="form-control" id="fecha" name="fecha" placeholder="fecha de nacimiento de la mascota" required>
                            </div>
                            <div class="mb-3">
                                <label for="nombreP" class="form-label">Color</label>
                                <input type="text" class="form-control" id="color" name="color" placeholder="color de la mascota" required>
                            </div>
                            <div class="mb-3">
                                <label for="nombreP" class="form-label">Tamano</label>
                                <input type="text" class="form-control" id="tamano" name="tamano" placeholder="tamano de la mascota" required>
                            </div>
                            <div class="text-center">
                                <a href="<?php echo base_url; ?>Formularios/mascotas/index.php" type="submit" class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="<?php echo base_url; ?>js/bootstrap.min.js"></script>

</body>

</html>