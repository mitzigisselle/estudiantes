<?php

    $idEstudiantes = $_POST['idEstudiantes'];

    include "conexion.php";
    $conexion = conexion();

    $sql = "DELETE FROM t_estudiantes WHERE id_estudiantes = '$idEstudiantes'";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        header("location:../index.php");
    } else {
        echo "No se pudo eliminar, revisa tu query :(";
    }
?>