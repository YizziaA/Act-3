<?php

include "../config/conexion.php";

$almacen = $_POST['almacen'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$categoria = $_POST['categoria'];
$precio = $_POST['precio'];


$sql = "INSERT INTO productos(almacen,nombre,descripcion,categoria,precio)
    VALUES ('$almacen','$nombre','$descripcion','$categoria','$precio')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/productos/index.php");
} else {
    echo "Datos no insertados";
}
