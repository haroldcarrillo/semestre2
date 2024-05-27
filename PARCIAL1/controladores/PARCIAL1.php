<?php

require "../confing/conexion.php";

$documentos = $_POST["Documento"];
$nombres = $_POST["Nombre"];
$celulares = $_POST["celular"];
$numero_boletas = $_POST["numero_boleta"];


if ($numero_boletas <= 999 && $numero_boletas >= 1) {



$id_partidos = $_POST["id_partido"];


$sql_insertar="INSERT INTO Boleteria
( fecha_sys, Documento, Nombre, Celular, numero_boleta, id_partido) 
VALUES (now(),'".$documentos."','".$nombres."','".$celulares."','".$numero_boletas."','".$id_partidos."')";


//ENVIAR A LA BD
if($dbh->query($sql_insertar))
{
    print "INFORMACION REGISTRADA CORRECTAMENTE";
}else
{
    print "ERROR AL REGISTRAR LA INFOPRMACION";
}
} else {
    print "El numero  de la boleta no es valido, debe estar entre 1 y 999";
}

?>
