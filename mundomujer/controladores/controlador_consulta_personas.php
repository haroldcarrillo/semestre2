
<?php
//Paso 1: Importar la libreria de la BD
require "confing/conexion.php";

//Paso 2: Capturando variables


//Paso 3: Armo la sentencia sql que necesite
$sql =  "SELECT cod, nombre
FROM personas
WHERE 1";

//Paso 4: Ejecutar la consulta
foreach($dbh->query($sql) as $row)
{
 print "
 <tr>
      <td>".$row[0]."</td>
      <td>".$row[1]."</td>
      </tr>
 ";    
}
?>