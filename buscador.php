<?php
     $conexion= mysqli_connect('localhost','root','','proyecto2');
     $consulta = "SELECT DISTINCT MARCA FROM zapatos";
     $conectar = mysqli_query ($conexion,$consulta);
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
               <h1>Filtrar por marca</h1>
            </header>
        
            <nav>        
                <h1>¡StyleShoes!</h1>
            </nav>
          
          <p id="dos">Seleccione la marca por la que desea filtrar.</p>
          <br>
          <br>
        
          <form action="filtrar.php" method="POST">
            
             <select name="select">
                 <option value="">Seleccionar</option>
                 <?php
                     while ($mostrar = mysqli_fetch_array($conectar)){
                 ?>
                            echo <option value = " <?php echo $mostrar['MARCA']?> "> <?php echo $mostrar['MARCA']?> </option>;
                 <?php
                
                     }
                 ?> 
             </select>
             <br>
             <br>
             <input type="submit" name="enviar">
          </form> 
          
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