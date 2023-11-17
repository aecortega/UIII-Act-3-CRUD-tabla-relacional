<?php
require_once("../../config/conexion.php");
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar</title>
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
                        <h5 class="card-title text-center">ACTUALIZAR MARCA</h5>
                        <form action="<?php echo base_url; ?>CRUDM/editarDatos.php" method="post">
                            <?php
                            include_once("../../config/conexion.php");

                            $sql = "SELECT * FROM inventario WHERE id_producto =" . $_REQUEST['id_producto'];
                            $resultado = $conexion->query($sql);

                            $row = $resultado->fetch_assoc();
                            ?>
                            <input type="hidden" class="form-control" name="id_producto" id="id_producto" value="<?php echo $row['id_producto'] ?>">
                            <div class="mb-3">
                                <label for="cantidad" class="form-label">Cantidad en Stock</label>
                                <input type="text" class="form-control" id="cantidad" name="cantidad_en_estock" placeholder="Cantidad en Stock" value="<?php echo $row['cantidad_en_estock'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="tallas" class="form-label">Tallas Disponibles</label>
                                <input type="text" class="form-control" id="tallas" name="tallas_disponibles" placeholder="Tallas Disponibles" value="<?php echo $row['tallas_disponibles'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="proveedor" class="form-label">Proveedor</label>
                                <input type="text" class="form-control" id="proveedor" name="proveedor" placeholder="Proveedor" value="<?php echo $row['proveedor'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="precioCompra" class="form-label">Precio de Compra</label>
                                <input type="text" class="form-control" name="precio_compra" id="precioCompra" placeholder="Precio de Compra" value="<?php echo $row['precio_compra'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="precioVenta" class="form-label">Precio de Venta</label>
                                <input type="text" class="form-control" name="precio_venta" id="precioVenta" placeholder="Precio de Venta" value="<?php echo $row['precio_venta'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="nombreProducto" class="form-label">Nombre del Producto</label>
                                <input type="text" class="form-control" name="n_producto" id="nombreProducto" placeholder="Nombre del Producto" value="<?php echo $row['n_producto'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="fechaReposicion" class="form-label">Fecha de Reposición</label>
                                <input type="date" class="form-control" name="fecha_de_reposicion" id="fechaReposicion" value="<?php echo $row['fecha_de_reposicion'] ?>">
                            </div>
                            <div class="text-center">
                                <a href="../../Formularios/marcas/index.php" type="submit" class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Actualizar</button>
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