<?php

require "../confing/conexion.php";

$nivel_educacion = $_POST["nivel"];
$puesto_aplica = $_POST["puesto"];
$experiencia_laboral = $_POST["experiencia"];
$consideracion_trabajo_equipo = $_POST["escala"];


$sql_insertar = "INSERT INTO laboral
(fecha_sys, nivel_educacion, puesto_aplica, experiencia_laboral, consideracion)
VALUES (now(), '".$nivel_educacion."','".$puesto_aplica."','".$experiencia_laboral."','".$consideracion_trabajo_equipo."')";


if($dbh->query($sql_insertar))
{
    print "INFORMACION REGISTRADA CORRECTAMENTE";
}else
{
    print "ERROR AL REGISTRAR LA INFORMACION";
}
 ?>