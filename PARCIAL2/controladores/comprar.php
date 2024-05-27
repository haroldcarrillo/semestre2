<script src="../js/sweetalert2@10.js"></script>

.
<?php

require "../confing/conexion.php";

$comprar = $_POST["cantidad"];
$total = $comprar* 3000;


//paso 2: almacenar las variables


//paso 3: armar el sql en una variable
$sql_insertar = "INSERT INTO compra
(fecha_sys, compracer, total)
VALUES (now(),'".$comprar."','".$total."')";

//paso 4: enviar a la BD
if($dbh->query($sql_insertar))
{
    print "<script>
    Swal.fire({
        title: 'Compra exitosa',
        text: 'Disfruta tu cerveza',
        icon: 'success',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Aceptar'
        }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = '../comprar.html';
        }
    });
    </script>";
}else
{
    echo "Error registrando la informacion";
}


?>