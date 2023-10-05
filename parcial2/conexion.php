<?php

    $server = "localhost";
    $user = "rout";
    $pasword = "987654321";

    //conexion
    $conexion = new mysql($server, $user, $pasword);

    //revisar conexion
    if($conexion -> connect_error){
        die("fallo la conexion" .$conexion-> connect_error);
    }

?>