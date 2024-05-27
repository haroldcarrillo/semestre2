<script src="../js/sweetalert2@10.js"></script>

.
<?php

require "../confing/conexion.php";

$cantidadCervezas = $_POST["cantidad"];


$subtotal = $cantidadCervezas  * 3000 ;
$precio = $subtotal * 0.19;
$iva = $precio;
$total = $subtotal + $iva ;



//paso 2: almacenar las variables


//paso 3: armar el sql en una variable
$sql_insertar = "INSERT INTO ventacer
(fecha_sys, venta, subtotal, iva, total) 
VALUES (now(),'".$cantidadCervezas."','".$subtotal."','".$iva."','".$total."')" ;


//paso 4: enviar a la BD
if($dbh->query($sql_insertar))
{
    print "<script>
    Swal.fire({
        title: 'Vendida',
        text: 'Disfruta tu cerveza',
        icon: 'success',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Aceptar'
        }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = '../vender.html';
        }
    });
    </script>";
}else
{
    echo "Error registrando la informacion";
}


?>