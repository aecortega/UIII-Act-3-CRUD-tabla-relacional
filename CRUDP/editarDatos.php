<?php
include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id = $_POST['id_productos'];
    $nombre = $_POST['n_producto'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $talla = $_POST['talla'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $corte = $_POST['corte'];
    $color = $_POST['color'];

    // Actualizar los datos en la base de datos
    $consulta = "UPDATE productos SET 
                n_producto = '$nombre',
                descripcion = '$descripcion',
                precio = '$precio',
                talla = '$talla',
                marca = '$marca',
                modelo = '$modelo',
                corte = '$corte',
                color = '$color'
                WHERE id_productos = $id";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/productos/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
?>
