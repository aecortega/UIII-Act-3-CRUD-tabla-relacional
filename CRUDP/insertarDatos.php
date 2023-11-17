<?php
include "../config/conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $n_producto = $_POST['n_producto'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $talla = $_POST['talla'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $corte = $_POST['corte'];
    $color = $_POST['color'];

    // Consulta SQL para insertar datos en la tabla 'productos'
    $sql = "INSERT INTO productos (n_producto, descripcion, precio, talla, marca, modelo, corte, color)
            VALUES ('$n_producto', '$descripcion', '$precio', '$talla', '$marca', '$modelo', '$corte', '$color')";

    // Ejecutar la consulta
    $resultado = mysqli_query($conexion, $sql);

    // Verificar si la inserción fue exitosa
    if ($resultado) {
        header("location:../Formularios/productos/index.php");
    } else {
        echo "Error al insertar datos: " . mysqli_error($conexion);
    }
}

include "../config/conexion.php";
?>
