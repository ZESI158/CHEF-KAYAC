<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos/estilo/estilo2.css">

</head>
<body>
    <h1> Foro</h1>
    <main>
    <form action="PHP/recetas.php" method="POST" class="recetas">
        <h2>¿Cual es tu receta favorita?</h2>
        <input type="text"placeholder="Nombre de la receta" name="nombre"><br><br>
        <p>Acontinuacion de los datos necesarios y su opinion personal sobre su receta de preferencia:</p><br>
        <textarea name="decripcion" rows="4" cols="40" placeholder="Escriba su receta:"></textarea><br>
        <button>Enviar receta</button>
    </form>
    <div class="body__page">

<div class="container__card">

    <div class="card c1">
        <div class="icon">
            <i class=""></i>
        </div>
        <div class="info__description">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. At, repellendus dolor dolorem voluptate aut expedita doloribus molestias modi libero excepturi cum perferendis laboriosam praesentium provident suscipit, eius impedit quidem magnam ipsa similique necessitatibus nam delectus nesciunt magni! Temporibus autem, reprehenderit amet quidem aliquid architecto, blanditiis, neque quam asperiores eum enim.</p>
            <input type="button" value="Leer Más">
        </div>
    </div>

    <div class="card c2">
        <div class="icon">
            <i class="fab fa-css3"></i>
        </div>
        <div class="info__description">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. At, repellendus dolor dolorem voluptate aut expedita doloribus molestias modi libero excepturi cum perferendis laboriosam praesentium provident suscipit, eius impedit quidem magnam ipsa similique necessitatibus nam delectus nesciunt magni! Temporibus autem, reprehenderit amet quidem aliquid architecto, blanditiis, neque quam asperiores eum enim.</p>
            <input type="button" value="Leer Más">
        </div>
    </div>

    <div class="card c3">
        <div class="icon">
            <i class="fab fa-js-square"></i>
        </div>
        <div class="info__description">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. At, repellendus dolor dolorem voluptate aut expedita doloribus molestias modi libero excepturi cum perferendis laboriosam praesentium provident suscipit, eius impedit quidem magnam ipsa similique necessitatibus nam delectus nesciunt magni! Temporibus autem, reprehenderit amet quidem aliquid architecto, blanditiis, neque quam asperiores eum enim.</p>
            <input type="button" value="Leer Más">
        </div>
    </div>

    

</div>
</main>


    
</body>
</html>