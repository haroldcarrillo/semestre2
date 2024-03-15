<?php

require "../confing/conexion.php";


$usuario = $_POST["usuario"];
$password = $_POST["password"];
$email = $_POST["correo"];
$nombre = $_POST["nombres"];
$apellido = $_POST["apellidos"];
$direccion = $_POST["direccion"];
$pais = $_POST["pais"];
$numero = $_POST["numero"];


$sql_insertar="INSERT INTO nuevo_usuario
( fecha_sys, usuario, password, email, nombre, apellido, direccion, pais, numero)
VALUES (now(),'".$usuario."','".$password."','".$email."','".$nombre."','".$apellido."','".$direccion."','".$pais."','".$numero."')";




//ENVIAR A LA BD
if($dbh->query($sql_insertar))
{
    print "INFORMACION REGISTRADA CORRECTAMENTE";
}else
{
    print "ERROR AL REGISTRAR LA INFORMACION";
}
?>
