<?php
require "../confing/conexion2.php";

$excelente = $_POST["calificacion1"];
$calificacion2 = $_POST["calificacion2"];
$calificacion = $_POST["calificacion3"];
$calificacion4 = $_POST["calificacion4"]

$sql_insertar= "INSERT INTO encuesta
(fecha_sys, excelente, calificacion2,calificacion,calificacion4) 
VALUES (now(),'".$excelente."','".$calificacion2."','".$calificacion."','".$calificacion4."')";


//ENVIAR A LA BD
if($dbh->query($sql_insertar))
{
    print "INFORMACION REGISTRADA CORRECTAMENTE";
}else
{
    print "ERROR AL REGISTRAR LA INFOPRMACION";
}
?>
