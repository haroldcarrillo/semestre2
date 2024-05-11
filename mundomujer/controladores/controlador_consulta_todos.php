
<?php
//Paso 1: Importar la libreria de la BD
require "confing/conexion.php";

//Paso 2: Capturando variables


//Paso 3: Armo la sentencia sql que necesite
$sql =  "SELECT cod, cod_prestamo, valor_pagado, valor_restante
FROM pago
limit 100";

//Paso 4: Ejecutar la consulta
foreach($dbh->query($sql) as $row)
{
  print "
  <tr>
<td>".$row[0]."</td>
<td>".$row['cod_prestamo']."</td>
<td>".$row['valor_pagado']."</td>
<td>".$row['valor_restante']."</td>

</tr>
";         
}
?>