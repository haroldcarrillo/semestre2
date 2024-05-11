<script src="../js/sweetalert2@10.js"></script>

.
<?php

require "../confing/conexion.php";

//paso 2: almacenar las variables

$limite_hoy=300;
$venta_hoy=100;
$vendido_persona=0;
$documento = $_POST["documento"];

if($vendido_persona >0)
{
    die("Lo siento solo se puede uno al dia");
}

if($venta_hoy > $limite_hoy)
{
    die("Hemos llegado al limite, no podemos vender mas");
}


//paso 3: armar el sql en una variable
$sql_insertar = "INSERT INTO ventaalmuerzos
(fecha_sys, documento) 
VALUES (now(),'".$documento."')";



//paso 4: enviar a la BD
if($dbh->query($sql_insertar))
{
    print "<script>
    Swal.fire({
        title: 'Compra exitosa',
        text: 'Disfruta tu almuerzo',
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