<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id = $_POST['id'];
    $idmascota = $_POST['idmascota'];
    $idcliente = $_POST['idcliente'];
    $fecha = $_POST['fecha'];
    $medicamento = $_POST['medicamento'];
    $doctor = $_POST['doctor'];
    $alergias = $_POST['alergias'];
    $antecedentes = $_POST['antecedentes'];
    $vacunas = $_POST['vacunas'];
    $precio = $_POST['precio'];

    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE receta SET idmascota = '$idmascota',idcliente = '$idcliente' ,fecha = '$fecha',medicamento = '$medicamento',doctor = '$doctor',alergias = '$alergias',antecedentes = '$antecedentes',vacunas = '$vacunas',precio = '$precio' WHERE idreceta = $id";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/receta/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
