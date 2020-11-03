<?php
    
    $dato = $_POST['select'];
    $conexio = mysqli_connect ('localhost','root','','proyecto2');
    $result = "SELECT * FROM zapatos WHERE MARCA='$dato'";
    $conectado = mysqli_query ($conexio,$result);
    
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="CSS/filtrar.css">
        <title>Filtrar por marca</title>
     </head>
    <body>
       <div id="all">
        <header>
            <h1>Marca filtrada</h1>
        </header>
         <nav>
             <h1>¡StyleShoes!</h1>
         </nav>
         
         <p>Tabla zapatos por marca.</p>
         <br>
         <br>
          
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
    
    while($registro=mysqli_fetch_array($conectado)){
        
?>
                 <tr>
                        <td><?php echo $registro['ID'] ?></td>
                        <td><?php echo $registro['MARCA'] ?></td>
                        <td><?php echo $registro['MODELO'] ?></td>
                        <td><?php echo $registro['TALLA'] ?></td>
                        <td><?php echo $registro['COLOR'] ?></td>
                        <td><?php echo $registro['PRECIO'] ?></td>
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