<script src="../js/sweetalert2@10.js"></script>

.
<?php
require "../confing/conexion.php";


$devolucion= $_POST["documento"];


$sql_insertar="DELETE FROM ventaalmuerzos WHERE documento='".$devolucion."' ";

//ENVIAR A LA BD
if($dbh->query($sql_insertar))
{   print "<script>
    Swal.fire({
        title: 'Exitosa',
        text: 'La devolucion de la compra ha sido exitosa',
        icon: 'success',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Aceptar'
        }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = '../actualizar.html';
        }
    });
    </script>";
}else

{
    print "ERROR AL ACTUALIZAR LA INFORMACION";
}

?>