
<?php
//Paso 1: Importar la libreria de la BD
require "confing/conexion.php";

//Paso 2: Capturando variables


//Paso 3: Armo la sentencia sql que necesite
$sql = "SELECT documento, nombre, carrera, celular
FROM taller2 
limit 100";

//Paso 4: Ejecutar la consulta
foreach($dbh->query($sql) as $row)
{
  print "
  <tr>
<td>".$row['documento']."</td>
<td>".$row['nombre']."</td>
<td>".$row['carrera']."</td>
<td>".$row['celular']."</td>


</tr>
";         
}
?>