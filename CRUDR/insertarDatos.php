<?php

include "../config/conexion.php";

$idmascota = $_POST['idmascota'];
$idcliente = $_POST['idcliente'];
$fecha = $_POST['fecha'];
$medicamento = $_POST['medicamento'];
$doctor = $_POST['doctor'];
$alergias = $_POST['alergias'];
$antecedentes = $_POST['antecedentes'];
$vacunas = $_POST['vacunas'];
$precio = $_POST['precio'];

$sql = "INSERT INTO receta(idmascota, idcliente, fecha, medicamento, doctor, alergias, antecedentes, vacunas, precio)
    VALUES ('$idmascota','$idcliente','$fecha','$medicamento','$doctor','$alergias','$antecedentes','$vacunas','$precio')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/receta/index.php");
} else {
    echo "Datos no insertados";
}
