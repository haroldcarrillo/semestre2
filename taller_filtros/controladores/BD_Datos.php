<?php
require "confing/conexion.php";

$sql_mostrar = "SELECT cod, Facultad
FROM facultades
WHERE 1";

foreach($dbh->query($sql_mostrar) as $row){
    print "
    <option value='".$row['Facultad']."'>".$row['Facultad']."</option>
    ";
}
?>