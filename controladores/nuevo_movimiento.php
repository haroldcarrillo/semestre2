<?php

require "../confing/conexion.php";

$fechas = $_POST["fecha"];
$horas = $_POST["hora"];
$conceptos = $_POST["concepto"];

$cantidades = $_POST["cantidad"];

$sql_insertar = "INSERT nuevo_movimiento
(fecha_sys,fecha,hora,concepto,cantidad)
VALUES (now(),'".$fechas."','".$horas."','".$conceptos."','".$cantidades."')";





//ENVIAR A LA BD
if($dbh->query($sql_insertar))
{
    print "INFORMACION REGISTRADA CORRECTAMENTE";
}else
{
    print "ERROR AL REGISTRAR LA INFORMACION";
}

?>
