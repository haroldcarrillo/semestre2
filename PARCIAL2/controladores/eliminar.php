<script src="../js/sweetalert2@10.js"></script>

.
<?php

require "../confing/conexion.php";

$eliminar= $_POST["codigo"];



//paso 2: almacenar las variables


//paso 3: armar el sql en una variable
$sql_insertar = "DELETE FROM ventacer WHERE cod='".$eliminar."' ";

//paso 4: enviar a la BD
if($dbh->query($sql_insertar))
{
    print "<script>
    Swal.fire({
        title: 'Eliminado',
        text: 'Compra eliminada',
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