<script src="../js/sweetalert2@10.js"></script>

.
<?php

require "../confing/conexion.php";

$cod= $_POST["codigo"];
$cantidadactualizar = $_POST["cantidad"];

$subtotal = $cantidadactualizar  * 3000 ;
$precio = $subtotal * 0.19;
$iva = $precio;
$total = $subtotal + $iva ;



//paso 2: almacenar las variables


//paso 3: armar el sql en una variable
$sql_insertar = "UPDATE ventacer 
SET venta='".$cantidadactualizar."', 
subtotal ='".$subtotal."',
 iva = '".$iva."',
  total = '".$total."'
 WHERE cod='".$cod."' ";


//paso 4: enviar a la BD
if($dbh->query($sql_insertar))
{
    print "<script>
    Swal.fire({
        title: 'Actualizado',
        text: 'Compra Actualizada correctamente',
        icon: 'success',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Aceptar'
        }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = '../eliminar.html';
        }
    });
    </script>";
}else
{
    echo "Error registrando la informacion";
}


?>