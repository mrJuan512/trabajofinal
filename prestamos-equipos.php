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
        $cedula=$_POST["cedula"];
        $Ciudad=$_POST["Ciudad"];
        $celular=$_POST["celular"];
        $equipo=$_POST["equipo"];
        $fechap=$_POST["fechap"];
        $fechad=$_POST["fechad"];
       

        // mostrar datos 

        echo"<h2> GRACIAS POR EL INTERES, DATOS RECIBIDOS:</h2>";
        echo"<p><strong>NOMBRE COMPLETO:</strong>$nombre_completo</p>";
        echo"<p><strong>CEDULA:</strong>$cedula</p>";
        echo"<p><strong>CIUDAD:</strong>$Ciudad</p>";
        echo"<p><strong>NUMERO DE TELEFONO:</strong>$celular</p>";
        echo"<p><strong>EQUIPO QUE DESEA PRESTAR:</strong>$equipo</p>";
        echo"<p><strong>FECHA DE PRESTAMO:</strong>$fechap</p>";
        echo"<p><strong>FECHA DE DEVOLUCION:</strong>$fechad</p>";
       

    }


?>
</body>
</html>