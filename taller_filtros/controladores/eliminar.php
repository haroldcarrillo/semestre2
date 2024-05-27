<script src="../js/sweetalert2@11.js"></script>

.
<?php

require "../confing/conexion.php";


$codigo= $_POST["cod"];




//paso 2: almacenar las variables


//paso 3: armar el sql en una variable
$sql_insertar = "DELETE FROM personas WHERE cod='".$codigo."' ";

//paso 4: enviar a la BD
if($dbh->query($sql_insertar))
{
    print "<script>
    Swal.fire({
        title: 'ELIMINADO',
        text: 'Eliminado exitosamente',
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