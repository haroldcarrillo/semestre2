<?php

include "confing/conexion.php";


$nombre = $_POST["nombre"];


$sql="SELECT * FROM personas WHERE nombre like '%".$nombre."%'";

foreach($dbh->query($sql) as $row)
{
    print "<tr>
    <td>Cod</td>
    <td>Nombre</td>
    <td>Documento</td>
    <td>Naci iento</td>
    <td>Celular</td>
    </tr>";
}


?>