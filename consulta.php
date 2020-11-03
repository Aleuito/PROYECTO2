<?php
    $conexion=mysqli_connect('localhost','root','','proyecto2');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Consulta datos</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="CSS/estils_consulta.css">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet"> 
</head>
    
<body>    

    <div id="all">
        <header>
           <h1>Consulta de datos</h1>
        </header>
        
        <nav>        
            <h1>¡StyleShoes!</h1>
        </nav>
        
        <div id="contenedor">
            <table>
                <tr>
                    <td class="t">ID</td>
                    <td class="t">Marca</td>
                    <td class="t">Modelo</td>
                    <td class="t">Talla</td>
                    <td class="t">Color</td>
                    <td class="t">Precio</td>
                </tr>
                <?php
//    Consulta para mostrar la tabla ordenada por Marca
                    $sql="SELECT * FROM zapatos ORDER BY MARCA";
//                conexion con la base de datos
                    $result=mysqli_query($conexion,$sql);
                
                    while($mostrar=mysqli_fetch_array($result)){
                 ?>

                    <tr>
                        <td><?php echo $mostrar['ID'] ?></td>
                        <td><?php echo $mostrar['MARCA'] ?></td>
                        <td><?php echo $mostrar['MODELO'] ?></td>
                        <td><?php echo $mostrar['TALLA'] ?></td>
                        <td><?php echo $mostrar['COLOR'] ?></td>
                        <td><?php echo $mostrar['PRECIO'] ?></td>
                    </tr>
                <?php
                }
                ?>
            </table> 
            <br>       
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
    </div>
    
   
</body>

</html>
