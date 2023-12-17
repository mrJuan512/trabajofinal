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
        $nombre_completo=$_POST["nombre_completo"];
        $celular=$_POST["celular"];
        $nombrep=$_POST["nombrep"];
        $marca=$_POST["marca"];
        $fechac=$_POST["fechac"];
        $problema=$_POST["problema"];

       

        // mostrar datos 

        echo"<h2> GRACIAS POR EL INTERES, DATOS RECIBIDOS:</h2>";
        echo"<p><strong>NOMBRE CLIENTE:</strong>$nombre_completo</p>";
        echo"<p><strong>NUMERO DE TELEFONO:</strong>$celular</p>";
        echo"<p><strong>NOMBRE DEL PRODUCTO:</strong>$nombrep</p>";
        echo"<p><strong>MARCA:</strong>$marca</p>";
        echo"<p><strong>FECHA DE COMPRA:</strong>$fechac</p>";
        echo"<p><strong>PROBLEMA DETALLADO PRESENTADO:</strong>$problema</p>";

    }


?>
</body>
</html>