<?php

require "../confing/conexion.php";

$numero_tarjeta = $_POST["numero"];
$nombre_titular = $_POST["titular"];
$fecha_caducidad = $_POST["fecha"];
$codigo_seguridad = $_POST["codigo"];

$sql_insertar="INSERT INTO pagos
(fecha_sys, numero_tarjeta, nombre_titular, fecha_caducidad, codigo_seguridad) 
VALUES(now(),'".$numero_tarjeta."','".$nombre_titular."','".$fecha_caducidad."','".$codigo_seguridad."')";

//ENVIAR A LA BD
if($dbh->query($sql_insertar))
{
    print "INFORMACION REGISTRADA CORRECTAMENTE";
}else
{
    print "ERROR AL REGISTRAR LA INFOPRMACION";
}

?>