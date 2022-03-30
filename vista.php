<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <?php include('php/conexion.php') ?>
    <h1 class="h1">Colaboración de Git</h1>
    <div>
        <?php
            foreach ($consulta as $campo){
                /* Creamos una tarjeta para cada uno de los pilotos */
                echo "<div class='tarjeta'>";
                echo "<p class='campo'>Nombre: ".$campo['Nombre']."</p>";
                echo "<p class='campo'>Apellido: ".$campo['Apellido']."</p>";
                echo "<p class='campo'>Nacionalidad: ".$campo['Nacionalidad']."</p>";
                echo "<p class='campo'>Victorias: ".$campo['Victorias']."</p>";
                echo "</div>";
            }
            
        ?>
    </div>
</body>
</html>