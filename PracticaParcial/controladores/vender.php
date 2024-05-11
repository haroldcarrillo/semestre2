<script src="../js/sweetalert2@10.js"></script>

.
<?php

require "../confing/conexion.php";

$documento = $_POST["documento"];
$nombre = $_POST["nombre"];
$seleccionCarrera = $_POST["carrera"];
$celular = $_POST["celular"];




//paso 2: almacenar las variables


//paso 3: armar el sql en una variable
$sql_insertar = "INSERT INTO practica1
(fecha_sys,documento, nombre, tipo_carrera, celular) 
VALUES (now(),'".$documento."','".$nombre."','".$seleccionCarrera."','".$celular."')";


//paso 4: enviar a la BD
if($dbh->query($sql_insertar))
{
    print "<script>
    Swal.fire({
        title: 'Compra exitosa',
        text: 'disfruta tu carrera',
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