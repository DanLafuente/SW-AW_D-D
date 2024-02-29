
<?php require_once __DIR__.'/../helpers/usuarios.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bocetos</title>
    <link id="estilo" rel="stylesheet" type="text/css" href="csses/style.css" />
</head>
<header>Dungeon's Hub <img src="img/Dungeon's_Hub.png" height="128" width= "128"></header>
<footer>
    <ul><li><a href="index.php">Inicio</a></li>
        <li><a href="bocetos.php">Bocetos</a></li>
        <li><a href="detalles.php">Detalles</a></li>
        <li><a href="Miembros.php">Miembros</a></li>
        <li><a href="planificacion.php">Planificacion</a></li>
        <li><a href="contactos.php">Contactos</a></li>
        <li><?= saludo() ?></li>
    </ul>
</footer>
