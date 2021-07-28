<?php
    function conexion() {
        $servidor = "localhost";
        $usuario = "root";
        $password = "";
        $db = "estudiantes";

        $conexion = mysqli_connect($servidor, $usuario, $password, $db);

        return $conexion;
    }
?>