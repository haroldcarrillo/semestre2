<?php 
require "confing/conexion.php";

if(isset($_POST["buscar"]))
{
    $buscar = $_POST["buscar"];

    $sql = "SELECT cod, nombre, dueno_proyecto, email, celular, selec_facultad
    FROM personas
    WHERE nombre LIKE '%".$buscar."%' or
    dueno_proyecto LIKE '%".$buscar."%' or 
    email LIKE '%".$buscar."%' or
    celular LIKE '%".$buscar."%' or
    selec_facultad LIKE '%".$buscar."%'
    LIMIT 25";

foreach($dbh->query($sql) as $row){
    print "
    <tr>
       <td>".$row['cod']."</td>
       <td>".$row['nombre']."</td>
       <td>".$row['dueno_proyecto']."</td>
       <td>".$row['email']."</td>
       <td>".$row['celular']."</td>
       <td>".$row['selec_facultad']."</td>
    </tr>
    ";
}
}else{
    $sql = "SELECT cod, nombre, dueno_proyecto, email, celular, selec_facultad
    FROM personas
    WHERE 1
    LIMIT 25";

    foreach($dbh->query($sql) as $row){
        print "
        <tr>
            <td>".$row['cod']."</td>
            <td>".$row['nombre']."</td>
            <td>".$row['dueno_proyecto']."</td>
            <td>".$row['email']."</td>
            <td>".$row['celular']."</td>
            <td>".$row['selec_facultad']."</td>
        ";
    }
}
?>