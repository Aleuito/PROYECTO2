<!DOCTYPE html>
<html lang="es">
    
    <head>
        <meta charset="UTF-8">
        <title>StyleShoes</title>
        <link rel="stylesheet" href="CSS/estilsentrada.css">
    </head>
    
    <header>
            <h1>¡StyleShoes!</h1>
    </header>
    
    <body>
        <div id="all">
            <div class="imatge">
                <img src="IMATGES/zapato.jpg" alt="">
            </div>
        
<?php
//conectarnos
    $conectar = mysqli_connect('localhost', 'root', '','proyecto2');

    $ID = $_POST['ID'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $talla = $_POST['talla'];
    $color = $_POST['color'];
    $precio = $_POST['precio'];

    $sqltabla = "INSERT into zapatos (ID, marca, modelo , talla, color, precio) VALUES ('$ID', '$marca', '$modelo', '$talla', '$color', '$precio')";

    $ejecutar = mysqli_query($conectar,$sqltabla);

    if($ejecutar){
        
        echo " Los datos han sido almacenados correctamente.";
        
    } else {
        
        echo " Hay algun dato que no es correcto.";
        
    }
?>
            <div id="atras">
                <a href="index.html">Volver</a>
            </div>
        </div>
        
        <footer>
            <p>Página en colaboración con:</p> 
            <p>Nike, Adidas, Converse y Puma</p>
            <p>Atención al cliente</p>
            <p>Contáctanos por correo</p>
            <p>Realización: Elian/Roger</p>
        </footer>
    </body>
</html>