<?php
session_start();
if(!isset($_SESSION['usuario'])){
    echo'
    <script>
        alert("Por favor debe de iniciar Sesión");
        window.location = "index.php";
    </script>
    ';
    /*header("location: index.php");*/
    session_destroy();
    die();
    /* conectar la tabla de recetas*/
}
?>
