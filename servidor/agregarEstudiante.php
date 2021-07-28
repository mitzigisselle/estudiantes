<?php
    $paterno = $_POST['paterno'];
    $materno = $_POST['materno'];
    $nombre = $_POST['nombre'];
    $matricula = $_POST['matricula'];
    $fecha = $_POST['fecha'];
    $especialidad = $_POST['especialidad'];
    $sexo = $_POST['sexo'];
    $imagen = $_POST['imagen'];
    

    include "conexion.php";
    $conexion = conexion();

    $sql = "INSERT INTO t_estudiantes (paterno, materno, nombre, matricula, fecha, especialidad, sexo, imagen) VALUES ('$paterno', '$materno', '$nombre', '$matricula', '$fecha', '$especialidad', '$sexo', '$imagen')";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        header("location:../index.php");
    } else {
        echo "No se pudo agregar, no sé porque :(";
    }

?>