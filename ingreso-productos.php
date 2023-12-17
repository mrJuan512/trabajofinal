<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProcesarDatos</title>
</head>
<body>
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        //RECUPERAR LOS DATOS DEL FORMULARIO 
        $nombre_producto=$_POST["nombre_producto"];
        $descripcion=$_POST["descripcion"];
        $categoria=$_POST["categoria"];
        $marca=$_POST["marca"];
        
       

        // mostrar datos 

        echo"<h2> GRACIAS POR EL INTERES, DATOS RECIBIDOS:</h2>";
        echo"<p><strong>NOMBRE DEL PRODUCTO:</strong>$nombre_producto</p>";
        echo"<p><strong>DESCRIPCION:</strong>$descripcion</p>";
        echo"<p><strong>CATEGORIA:</strong>$categoria</p>";
        echo"<p><strong>MARCA:</strong>$marca</p>";
       

    }


?>
</body>
</html>