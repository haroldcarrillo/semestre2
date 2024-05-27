<script src="../js/sweetalert2@11.js"></script>.
<?php
    require "../confing/conexion.php";

    $nombre_proyecto = $_POST["nombre_proyecto"];
    $nombre_dueño = $_POST["nombre_dueño"];
    $correo = $_POST["correo"];
    $celular = $_POST["celular"];
    $facultad = $_POST["facultad"];


    $sql_insertar = "INSERT INTO personas
	(fecha_sys, nombre, dueno_proyecto, email, celular, selec_facultad) 
    VALUES (now(),'".$nombre_proyecto."','".$nombre_dueño."','".$correo."','".$celular."','".$facultad."')";
    if($dbh->query($sql_insertar)) {
        echo "<script>
        Swal.fire({
            title: 'INSCRIPCION REGISTRADA CORRECTAMENTE',
            icon: 'success',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Aceptar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '../Registrar.php';
            }
        });
        </script>";
    } else {
        echo "<script>
        Swal.fire({
            title: 'Oops...',
            text: 'ERROR AL REGISTRAR LOS DATOS.',
            icon: 'error',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Aceptar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '../Registrar.php';
            }
        });
        </script>";
    }
?>