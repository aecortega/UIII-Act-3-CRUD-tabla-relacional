<?php
include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id = $_POST['id_producto'];
    $cantidad = $_POST['cantidad_en_estock'];
    $tallas = $_POST['tallas_disponibles'];
    $proveedor = $_POST['proveedor'];
    $precioCompra = $_POST['precio_compra'];
    $precioVenta = $_POST['precio_venta'];
    $nombreProducto = $_POST['n_producto'];
    $fechaReposicion = $_POST['fecha_de_reposicion'];

    // Actualizar los datos en la base de datos
    $consulta = "UPDATE inventario SET 
                cantidad_en_estock = '$cantidad',
                tallas_disponibles = '$tallas',
                proveedor = '$proveedor',
                precio_compra = '$precioCompra',
                precio_venta = '$precioVenta',
                n_producto = '$nombreProducto',
                fecha_de_reposicion = '$fechaReposicion'
                WHERE id_producto = $id";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/marcas/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
?>
