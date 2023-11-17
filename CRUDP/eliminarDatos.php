<?php
include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id_productos'])) {
    $id_productos = $_GET['id_productos'];

    // Consulta para eliminar el registro de la base de datos (debes proporcionar tus propias consultas)
    $consulta = "DELETE FROM productos WHERE id_productos = $id_productos";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la eliminación exitosa
        header("Location: ../Formularios/productos/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la eliminación falla
        echo "Error al eliminar el registro: " . mysqli_error($conexion);
    }
} else {
    // Redireccionar a alguna página si el id_productos no está definid_productoso o la solicitud no es GET
    header("Location: ../Formularios/productos/index.php");
    exit();
}
