<script src="../js/sweetalert2@10.js"></script>

.
<?php

require "../confing/conexion.php";


$seleccionCarrera = $_POST["opc"];
$documento = $_POST["Documento"];





//paso 2: almacenar las variables


//paso 3: armar el sql en una variable
$sql_insertar = "UPDATE Taller2 SET carrera='".$seleccionCarrera."'
 WHERE documento='".$documento."' ";



//paso 4: enviar a la BD
if($dbh->query($sql_insertar))
{
    print "<script>
    Swal.fire({
        title: 'ACTUALIZADO',
        text: 'actualizado correctamente',
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
    echo "Error registrando la informacion";
}


?>