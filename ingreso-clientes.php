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
        $Direccion=$_POST["Direccion"];
        $Ciudad=$_POST["Ciudad"];
        $codigoP=$_POST["codigoP"];
        $celular=$_POST["celular"];
        $Gmail=$_POST["Gmail"];
       

        // mostrar datos 

        echo"<h2> GRACIAS POR EL INTERES, DATOS RECIBIDOS:</h2>";
        echo"<p><strong>NOMBRE COMPLETO:</strong>$nombre_completo</p>";
        echo"<p><strong>DIRECCION:</strong>$Direccion</p>";
        echo"<p><strong>CIUDAD:</strong>$Ciudad</p>";
        echo"<p><strong>CODIGO POSTAL:</strong>$codigoP</p>";
        echo"<p><strong>NUMERO DE TELEFONO:</strong>$celular</p>";
        echo"<p><strong>CORREO ELECTRONICO:</strong>$Gmail</p>";
       

    }


?>
</body>
</html>