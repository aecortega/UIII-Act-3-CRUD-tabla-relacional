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
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/productos/index.php">PRODUCTOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/categorias/index.php">CATEGORIAS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/marcas/index.php">MARCAS</a>
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
                        <h5 class="card-title text-center">REGISTRAR CATEGORIAS</h5>
                        <form action="<?php echo base_url; ?>CRUDC/insertarDatos.php" method="POST">
                            <div class="mb-3">
                                <label for="nombreC" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombreC" name="nombreC" placeholder="Nombre de la marca" required>
                            </div>
                            <div class="mb-3">
                                <label for="fundacion" class="form-label">Fecha de Fundación</label>
                                <input type="date" class="form-control" id="fundacion" name="fundacion" required>
                            </div>
                            <div class="mb-3">
                                <label for="pais_origen" class="form-label">País de Origen</label>
                                <input type="text" class="form-control" id="pais_origen" name="pais_origen" placeholder="País de origen" required>
                            </div>
                            <div class="mb-3">
                                <label for="pagina_web" class="form-label">Página Web</label>
                                <input type="text" class="form-control" id="pagina_web" name="pagina_web" placeholder="Página web" required>
                            </div>
                            <div class="mb-3">
                                <label for="contacto_nombre" class="form-label">Nombre de Contacto</label>
                                <input type="text" class="form-control" id="contacto_nombre" name="contacto_nombre" placeholder="Nombre de contacto" required>
                            </div>
                            <div class="mb-3">
                                <label for="contacto_telefono" class="form-label">Teléfono de Contacto</label>
                                <input type="text" class="form-control" id="contacto_telefono" name="contacto_telefono" placeholder="Teléfono de contacto" required>
                            </div>
                            <div class="mb-3">
                                <label for="contacto_email" class="form-label">Correo Electrónico de Contacto</label>
                                <input type="email" class="form-control" id="contacto_email" name="contacto_email" placeholder="Correo electrónico de contacto" required>
                            </div>
                            <div class="mb-3">
                                <label for="descripcion" class="form-label">Descripción</label>
                                <textarea class="form-control" id="descripcion" name="descripcion" rows="2" placeholder="Descripción" required></textarea>
                            </div>
                            <div class="text-center">
                                <a href="<?php echo base_url; ?>Formularios/marcas/index.php" type="submit" class="btn btn-outline-secondary">Cancelar</a>
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