<?php 
include 'conexion.php';

$nombre = $_POST["nombre"];
$numero_control = $_POST["nc"];
$semestre = $_POST["semestre"];
$edad = $_POST["edad"];
$turno = $_POST["turno"];
$sexo = $_POST["sexo"];


$sql = "INSERT INTO alumnos(nombre, numero_conrol, semestre, edad, turno, sexo)";
$sql += "VALUES('".$nombre.",".$numero_control.",".$semestre."".$edad."') ";

if($conexion-> query)
?>