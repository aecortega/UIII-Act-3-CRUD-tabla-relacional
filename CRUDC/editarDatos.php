<?php
include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id_marca = $_POST['id_marca'];
    $nombreMarca = $_POST['nombreC'];
    $fundacion = $_POST['fundacion'];
    $paisOrigen = $_POST['pais_origen'];
    $paginaWeb = $_POST['pagina_web'];
    $contactoNombre = $_POST['contacto_nombre'];
    $contactoTelefono = $_POST['contacto_telefono'];
    $contactoEmail = $_POST['contacto_email'];
    $descripcion = $_POST['descripcion'];

    // Actualizar los datos en la base de datos
    $consulta = "UPDATE marca SET nombre_marca = '$nombreMarca', fundacion = '$fundacion', pais_origen = '$paisOrigen', pagina_web = '$paginaWeb', contacto_nombre = '$contactoNombre', contacto_telefono = '$contactoTelefono', contacto_email = '$contactoEmail', descripcion = '$descripcion' WHERE id_marca = $id_marca";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/categorias/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
?>
  