<?php
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

    $json = file_get_contents('php://input');

    $params = json_decode($json);

    require("../conexion.php");

    $editar = "UPDATE usuarios SET nombre='$params->nombre', usuario='$params->usuario', clave=shal('$params->clave'), tipo='$params->tipo' WHERE id_usuario=$params->id_usuario";
    mysqli_query($conexion, $editar) or die('no edito');

    class Result {}

    $response = new Result();
    $response->resultado = 'OK';
    $response->mensaje = 'Datos modificados';

    header('Content-Type: application/json');
    echo json_encode($response);

?>