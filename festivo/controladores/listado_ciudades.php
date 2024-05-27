<?php

//Paso 1
include "confing/conexion.php";

//paso 2

//paso 3
$sql = "SELECT cod, nombre FROM ciudades order by nombre ASC";

//Paso 4
foreach($dbh->query($sql) as $row){
    $cod = $row[0];
    $ciudad = $row[1];
    print "
    <option value='".$cod."'>".$ciudad."</option>
    ";
}

?>