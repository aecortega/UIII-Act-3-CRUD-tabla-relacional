<?php
include "../config/conexion.php";

$nombreProducto = $_POST['nombreProducto'];
$cantidadEnStock = $_POST['cantidadEnStock'];
$tallasDisponibles = $_POST['tallasDisponibles'];
$proveedor = $_POST['proveedor'];
$precioCompra = $_POST['precioCompra'];
$precioVenta = $_POST['precioVenta'];
$fechaReposicion = $_POST['fechaReposicion'];

$sql = "INSERT INTO inventario (n_producto, cantidad_en_estock, tallas_disponibles, proveedor, precio_compra, precio_venta, fecha_de_reposicion)
    VALUES ('$nombreProducto', $cantidadEnStock, '$tallasDisponibles', '$proveedor', $precioCompra, $precioVenta, '$fechaReposicion')";


$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/marcas/index.php");
} else {
    echo "Datos no insertados";
}
?>
