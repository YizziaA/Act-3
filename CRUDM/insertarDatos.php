<?php

include "../config/conexion.php";

$nombre = $_POST['nombre'];
$especie = $_POST['especie'];
$raza = $_POST['raza'];
$fecha = $_POST['fecha'];
$color = $_POST['color'];
$tamano = $_POST['tamano'];

$sql = "INSERT INTO mascota(nombre, especie, raza, fecha, color, tamano)
    VALUES ('$nombre','$especie','$raza','$fecha','$color','$tamano')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/mascota/index.php");
} else {
    echo "Datos no insertados";
}
