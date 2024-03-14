<?php

require "../confing/conexion.php";

$seleccionDestino= $_POST["opc"];

$nombreApellido = $_POST["nombre"];

$Domicilio =$_POST["Domicilio"];

$ciudad= $_POST["Ciudad"];

$codigoPostal= $_POST["codigo"];

$provincias= $_POST["provincia"];

$telefonos= $_POST["telefono"];

$emails= $_POST["email"];

$fechaNacimiento= $_POST["fecha"];


$sql_insertar ="INSERT INTO tower_communication 
(fecha_sys, destino, nombre, domicilio, ciudad, codigo_postal, provincia, numero_telefono, email, fecha_nacimiento) 
VALUES (now(),'".$seleccionDestino."','".$nombreApellido."','".$Domicilio."','".$ciudad."','".$codigoPostal."','".$provincias."','".$telefonos."','".$emails."','".$fechaNacimiento."')";



//paso 4: enviar a la BD
if($dbh->query($sql_insertar))
{
    echo "Informacion registrada correctamente";
}else
{
    echo "Error registrando la informacion";
}

?>