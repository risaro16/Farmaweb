<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $bd = "almacen";

    $conexion = mysqli_connect($servidor, $usuario, $clave) or die("No se pudo conectar a mysql");
    mysqli_select_db($conexion, $bd) or die("No se encontro la base de datos");


?>