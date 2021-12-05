<?php

session_start();
include 'conexion_bd.php';
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'
and  contrasena='$contrasena'");
if(mysqli_num_rows($validar_login) > 0 ){
    $_SESSION['usuario']= $correo;
    header("location:../bienvenido.php");
    exit();
}
else{
    echo '
            <script>
            alert("Usuario no exite porfavor verifique sus datos");
            window.location:"../index.php";
            </script>    
    ';
    exit();
}
?>