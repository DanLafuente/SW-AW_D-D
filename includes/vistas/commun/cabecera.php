
<?php 
require_once dirname(dirname(__DIR__)).'/configuracion.php';
require_once dirname(__DIR__).'/helpers/usuariosHelp.php';
?>

<!DOCTYPE html>
<html>
<header>
    <form class=formtitule><?=$tituloPagina?></form>
    <img src="img/Dungeon's_Hub.png" alt="DH_web_icon" height="128" width= "128">
    <form class=formlogin><label><?= saludo() ?></label></form>
</header>
<footer>
    <ul><li><a href="index.php">Inicio</a></li>
        <li><a href="bocetos.php">Bocetos</a></li>
        <li><a href="detalles.php">Detalles</a></li>
        <li><a href="Miembros.php">Miembros</a></li>
        <li><a href="planificacion.php">Planificacion</a></li>
        <li><a href="contactos.php">Contactos</a></li>
        <li><a href="http://localhost/SW-AW_D-D/includes/src/Personajes/crear_personaje_paso1.php">Tus personajes</a></li>
    </ul>
</footer>

