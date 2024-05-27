<?php

include "confing/conexion.php";


$nombre = $_POST["nombre"];


$sql="SELECT * FROM personas WHERE nombre like '%".$nombre."%'";

foreach($dbh->query($sql) as $row)
{
    
}


?>