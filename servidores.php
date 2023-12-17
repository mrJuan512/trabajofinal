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
        $nombre_estudiante=$_POST["nombre_estudiante"];
        $nombre_docente=$_POST["nombre_docente"];
        $nombre_materia=$_POST["nombre_materia"];
       

        // mostrar datos 

        echo"<h2> DATOS RECIBIDOS:</h2>";
        echo"<p><strong>NOMBRE ESTUDIANTE:</strong>$nombre_estudiante</p>";
        echo"<p><strong>NOMBRE DOCENTE:</strong>$nombre_docente</p>";
        echo"<p><strong>NOMBRE MATERIA:</strong>$nombre_materia</p>";

    }


?>
</body>
</html>