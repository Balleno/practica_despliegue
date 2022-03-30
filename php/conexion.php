<?php
  $conexion = 'mysql:dbname=grupo_3;host=132.226.219.27';
    $usuario = 'grupo_3';
    $contra = 'afa_7315';
    $db = new PDO($conexion, $usuario, $contra);

    $sql = "SELECT Nombre, Apellido, Nacionalidad, Victorias FROM Pilotos";
    $consulta = $db->query($sql);
?>