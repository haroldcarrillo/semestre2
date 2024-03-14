<?php
//paso 1: impoprtar la libreria BD
require "../confing/conexion.php";

//paso 2: almacenar las variables

$nombre_persona = $_POST["Nombre"];
$documento = $_POST["Documento"];
$fecha_nacimiento = $_POST["fecha"];
$numero_celular = $_POST["numero"];
$sexo = $_POST["sexo"];

//paso 3: armar el sql en una variable

$sql_insertar = "INSERT INTO registro_personas
(fecha_sys, nombre, documento, fecha_nacimiento, numero_celular, sexo) 
VALUES (now(),'".$nombre_persona."','".$documento."','".$fecha_nacimiento."','".$numero_celular."',".$sexo.")";




//paso 4: enviar a la BD
if($dbh->query($sql_insertar))
{
    echo "Informacion registrada correctamente";
}else
{
    echo "Error registrando la informacion";
}


?>