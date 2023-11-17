<?php
require_once("../../config/conexion.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar</title>
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
                        <h5 class="card-title text-center">REGISTRAR INVENTARIO</h5>
                        <form action="<?php echo base_url; ?>CRUDM/insertarDatos.php" method="POST">
                            <div class="mb-3">
                                <label for="nombreProducto" class="form-label">Nombre del Producto</label>
                                <input type="text" class="form-control" id="nombreProducto" name="nombreProducto" placeholder="Nombre del producto" required>
                            </div>
                            <div class="mb-3">
                                <label for="cantidadEnStock" class="form-label">Cantidad en Stock</label>
                                <input type="number" class="form-control" id="cantidadEnStock" name="cantidadEnStock" placeholder="Cantidad en stock" required>
                            </div>
                            <div class="mb-3">
                                <label for="tallasDisponibles" class="form-label">Tallas Disponibles</label>
                                <input type="text" class="form-control" id="tallasDisponibles" name="tallasDisponibles" placeholder="Tallas disponibles" required>
                            </div>
                            <div class="mb-3">
                                <label for="proveedor" class="form-label">Proveedor</label>
                                <input type="text" class="form-control" id="proveedor" name="proveedor" placeholder="Proveedor" required>
                            </div>
                            <div class="mb-3">
                                <label for="precioCompra" class="form-label">Precio de Compra</label>
                                <input type="number" class="form-control" id="precioCompra" name="precioCompra" placeholder="Precio de compra" required>
                            </div>
                            <div class="mb-3">
                                <label for="precioVenta" class="form-label">Precio de Venta</label>
                                <input type="number" class="form-control" id="precioVenta" name="precioVenta" placeholder="Precio de venta" required>
                            </div>
                            <div class="mb-3">
                                <label for="fechaReposicion" class="form-label">Fecha de Reposición</label>
                                <input type="date" class="form-control" id="fechaReposicion" name="fechaReposicion" required>
                            </div>
                            <div class="text-center">
                                <a href="<?php echo base_url; ?>Formularios/inventario/index.php" type="submit" class="btn btn-outline-secondary">Cancelar</a>
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
