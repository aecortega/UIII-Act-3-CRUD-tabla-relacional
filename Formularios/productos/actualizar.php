<?php
include_once("../../config/conexion.php");

// Verificar si se recibió un ID válido
if (isset($_REQUEST['id_productos']) && is_numeric($_REQUEST['id_productos'])) {
    $id_productos = $_REQUEST['id_productos'];

    // Obtener datos del producto por ID
    $sql = "SELECT * FROM productos WHERE id_productos = $id_productos";
    $resultado = $conexion->query($sql);

    // Verificar si se encontraron resultados
    if ($resultado->num_rows > 0) {
        $row = $resultado->fetch_assoc();
    } else {
        // Manejar el caso en el que no se encuentren resultados
        echo "Producto no encontrado";
        exit;
    }
} else {
    // Manejar el caso en el que no se proporcionó un ID válido
    echo "ID de producto no válido";
    exit;
}
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar</title>
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
                                href="<?php echo base_url; ?>Formularios/productos/index.php">PRODUCTOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="<?php echo base_url; ?>Formularios/categorias/index.php">CATEGORIAS</a>
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
                        <h5 class="card-title text-center">ACTUALIZAR PRODUCTO</h5>
                        <form action="../../CRUDP/editarDatos.php" method="post">
                            <input type="hidden" class="form-control" name="id_productos" id="id_productos"
                                value="<?php echo $row['id_productos'] ?>">

                            <div class="mb-3">
                                <label for="n_producto" class="form-label">Nombre del Producto</label>
                                <input type="text" class="form-control" id="n_producto" name="n_producto"
                                    placeholder="Nombre del producto" value="<?php echo $row['n_producto'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="descripcion" class="form-label">Descripción</label>
                                <textarea class="form-control" id="descripcion" name="descripcion" rows="2"
                                    placeholder="Descripción"><?php echo $row['descripcion'] ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="precio" class="form-label">Precio</label>
                                <input type="text" class="form-control" name="precio" id="precio" placeholder="Precio"
                                    value="<?php echo $row['precio'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="talla" class="form-label">Talla</label>
                                <input type="text" class="form-control" name="talla" id="talla" placeholder="Talla"
                                    value="<?php echo $row['talla'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="marca" class="form-label">Marca</label>
                                <input type="text" class="form-control" name="marca" id="marca" placeholder="Marca"
                                    value="<?php echo $row['marca'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="modelo" class="form-label">Modelo</label>
                                <input type="text" class="form-control" name="modelo" id="modelo" placeholder="Modelo"
                                    value="<?php echo $row['modelo'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="corte" class="form-label">Corte</label>
                                <input type="text" class="form-control" name="corte" id="corte" placeholder="Corte"
                                    value="<?php echo $row['corte'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="color" class="form-label">Color</label>
                                <input type="text" class="form-control" name="color" id="color" placeholder="Color"
                                    value="<?php echo $row['color'] ?>">
                            </div>
                            <div class="text-center">
                                <a href="../productos/index.php" type="submit"
                                    class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="<?php echo base_url; ?>js/bootstrap.min.js"></script>
    <script src="../../js/fontawesome.js"></script>

</body>

</html>