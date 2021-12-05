<?php

session_start();
 if(isset($_SESSION['usuario'])){
     header("location: publicacion.php");
 }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and register</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="../registro/recursos/estilo/style.css" rel="stylesheet"
    
</head>
<body>
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la pagina </p>
                    <button id="btn__iniciar-sesion">Iniciar sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aun no tienes una cuenta?</h3>
                    <p>Registrate para entrar en la pagina</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>
            <!---Formulario de registro y login-->
            <div class="contenedor__login-register">
                <form action="PHP/login_usuario_db.php" method="POST" class="formulario__login">
                    <h2>Iniciar sesión</h2>
                    <input type="text"placeholder="Correo electronico" name="correo">
                    <input type="password"placeholder="Contraseña" name="contrasena">
                    <button>Entrar</button>
                </form>
                <!---formulario de registro-->
                <form action="PHP/registro_usuario_bd.php" method="POST" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text"placeholder="Nombre completo" name="nombre_completo">
                    <input type="text"placeholder="Correo Electronico" name="correo">
                    <input type="text"placeholder="Usuario" name="usuario">
                    <input type="password"placeholder="Contraseña" name="contrasena">
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="../registro/recursos/js/scrip.js"></script>
</body>
</html>