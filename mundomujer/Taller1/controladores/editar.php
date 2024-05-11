<script src="../js/sweetalert2@10.js"></script>

.
<?php
require "../confing/conexion.php";


$limite= $_POST["almuerzos"];


$sql_insertar="UPDATE confing
 SET limite_hoy = '".$limite."'
  WHERE cod= 0";

//ENVIAR A LA BD
if($dbh->query($sql_insertar))
{   print "<script>
    Swal.fire({
        title: 'actualizada',
        text: 'la informacion ha sido actualizada correctamente',
        icon: 'success',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Aceptar'
        }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = '../editar.html';
        }
    });
    </script>";
}else

{
    print "ERROR AL ACTUALIZAR LA INFORMACION";
}

?>