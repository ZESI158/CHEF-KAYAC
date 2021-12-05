<?php
    include 'conexion_bd.php';
    $nombre =$_POST ['nombre'];
    $publicacion = $_POST['decripcion'];


    $query = "INSERT INTO recetas(nombre, decripcion)
                VALUES('$nombre','$publicacion')";
                $ejecutar = mysqli_query($conexion, $query);


if($ejecutar){
    echo '
        <script>
        alert("Haz  publicado exitosamente tu receta");
        window.location = "../publicacion.php";
        </script>';
}else{
    echo '
        <script>
        alert("Ha ocurrido un error vuelve a intentarlo");
        window.location = "../index.php";
        </script>';
}

mysqli_close($conexion);

?>