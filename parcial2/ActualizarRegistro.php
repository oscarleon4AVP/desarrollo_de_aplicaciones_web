<?php

    include 'conexionn.php';
    $id = $_post["id"];
    $nombre = $_post["nombre"];
    $numero_control = $_post["nc"];
    $semestre = $_post["semestre"];
    $edad = $_post["edad"];
    $turno = $_post["turno"];
    $sexo = $_post["sexo"];

    $sql = "UPDATE alumnos SET nombre='".$nombre."',numero_control='".$numero_control."',semestre='".$semestre."',edad='".$edad."',turno='".$turno."',sexo='".$sexo."' WHERE id=".$id;


    if($conexionn->query(sql) === TRUE){
        header("Location: consultarAlumnos.php");
        $conexion->close();
        exit;
    } else {
        echo "<h2>Ocurrió un error</h2> <p>Error: ".$sql . "<br>" . $conexion->error . "</p>";
        echo "<h3><a href='consultarAlumnos.php'>Regresar a alumnos</a></h3>";
    
    }



?>
   