<script src="../js/sweetalert2@10.js"></script>

.
<?php

require "../confing/conexion.php";

$cod_usuario = $_POST["cod"];
$valor_pagado = $_POST["Valor_Pagado"];
$valor_restante = $_POST["Valor_Restante"];




$sql_insertar="UPDATE pago 
SET Valor_Pagado = '".$valor_pagado."', 
    Valor_Restante = '".$valor_restante."' 
WHERE cod = '".$cod_usuario."'";

//ENVIAR A LA BD
if($dbh->query($sql_insertar))
{   print "<script>
    Swal.fire({
        title: 'Valor actualizado',
        text: 'La informacion ha sido actualizada correctamente',
        icon: 'success',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Aceptar'
        }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = '../mundomujer.html';
        }
    });
    </script>";
}else

{
    print "ERROR AL ACTUALIZAR LA INFORMACION";
}

?>
