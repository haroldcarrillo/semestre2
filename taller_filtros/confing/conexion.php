<?php
$database = "mysql:dbname=taller3;host=127.0.0.1";
$user = "root";
$pass = "";

try {
    $dbh = new PDO($database, $user, $pass);
}catch (Exception $e) {
    die("<script>
            Swal.fire({
              title: 'ERROR AL CONECTAR CON LA BASE DE DATOS',
              icon: 'error',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Aceptar'
            }).then((result) => {
                if (result.isConfirmed) {
                window.location.href = '../Index.html';
                }
            });
        </script>");
}
?>