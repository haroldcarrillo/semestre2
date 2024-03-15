<?php

require "../confing/conexion2.php";

$usuario = $_POST["usuario"];
$password =$_POST["password"];

$sql_insertar= "INSERT INTO inicio_sesion
(fecha_sys, usuario, password) 
VALUES (now(),'".$usuario."','".$password."')";



//ENVIAR A LA BD
if($dbh->query($sql_insertar))
{
    print "INFORMACION REGISTRADA CORRECTAMENTE";
}else
{
    print "ERROR AL REGISTRAR LA INFOPRMACION";
}
