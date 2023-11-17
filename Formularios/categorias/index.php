<?php
include_once("../../config/conexion.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Marcas</title>
    <link rel="stylesheet" href="<?php echo base_url; ?>css/bootstrap.min.css">
</head>

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
                            <a class="nav-link"
                                href="<?php echo base_url; ?>Formularios/productos/index.php">PRODUCTO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/categorias/index.php">MARCA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="<?php echo base_url; ?>Formularios/marcas/index.php">INVENTARIO</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- FIN CODIGO DE NAVBAR RESPONSIVA -->

    <div class="container-lg mt-5">
        <a href="crear.php" type="button" class="btn btn-outline-primary mb-3">
            <i class="fa-solid fa-cart-plus fa-beat"></i>
            NUEVO
        </a>
        <h1 class="text-center bg-danger text-light ">LISTADO DE MARCAS</h1>
        <div class="table-responsive-sm">
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">FUNDACIÓN</th>
                        <th scope="col">PAÍS DE ORIGEN</th>
                        <th scope="col">PÁGINA WEB</th>
                        <th scope="col">CONTACTO</th>
                        <th scope="col">DESCRIPCIÓN</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $sql = $conexion->query("SELECT * FROM marca");

                    while ($resultado = $sql->fetch_assoc()) {
                        ?>
                        <tr>
                            <th scope="row">
                                <?php echo $resultado['id_marca'] ?>
                            </th>
                            <th scope="row">
                                <?php echo $resultado['nombre_marca'] ?>
                            </th>
                            <th scope="row">
                                <?php echo $resultado['fundacion'] ?>
                            </th>
                            <th scope="row">
                                <?php echo $resultado['pais_origen'] ?>
                            </th>
                            <th scope="row">
                                <?php echo $resultado['pagina_web'] ?>
                            </th>
                            <th scope="row">
                                <?php echo $resultado['contacto_nombre'] ?><br>
                                <?php echo $resultado['contacto_telefono'] ?><br>
                                <?php echo $resultado['contacto_email'] ?>
                            </th>
                            <th scope="row">
                                <?php echo $resultado['descripcion'] ?>
                            </th>
                            <th scope="row">
                                <a href="<?php echo base_url; ?>Formularios/categorias/actualizar.php?id_marca=<?php echo $resultado['id_marca'] ?>"
                                    class="btn btn-outline-warning">
                                    <i class="fa-solid fa-pen-to-square fa-beat"></i>
                                </a>
                                <a href="<?php echo base_url; ?>CRUDC/eliminarDatos.php?id_marca=<?php echo $resultado['id_marca'] ?>"
                                    class="btn btn-outline-danger">
                                    <i class="fa-solid fa-trash fa-beat"></i>
                                </a>
                            </th>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="<?php echo base_url; ?>js/bootstrap.min.js"></script>
    <script>
        const base_url = "<?php base_url; ?>";
    </script>
    <script src="<?php echo base_url; ?>js/all.min.js"></script>

</body>

</html>