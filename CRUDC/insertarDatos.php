<?php
include "../config/conexion.php";

$nombreMarca = $_POST['nombreC'];
$fundacion = $_POST['fundacion'];
$paisOrigen = $_POST['pais_origen'];
$paginaWeb = $_POST['pagina_web'];
$contactoNombre = $_POST['contacto_nombre'];
$contactoTelefono = $_POST['contacto_telefono'];
$contactoEmail = $_POST['contacto_email'];
$descripcion = $_POST['descripcion'];

$sql = "INSERT INTO marca (nombre_marca, fundacion, pais_origen, pagina_web, contacto_nombre, contacto_telefono, contacto_email, descripcion)
    VALUES ('$nombreMarca', '$fundacion', '$paisOrigen', '$paginaWeb', '$contactoNombre', '$contactoTelefono', '$contactoEmail', '$descripcion')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/categorias/index.php");
} else {
    echo "Datos no insertados";
}
?>
