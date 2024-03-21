<?php

require __DIR__ . '/includes/configuracion.php';

$tituloPagina = "Dungeon's Hub";
$contenidoPrincipal=<<<EOS
    <h1>INICIO</h1>
    <h2>BIENVENIDO A LA HOGUERA</h2>
    <img src="img/Dungeons_Hub.png" alt="DH_web_icon" height= "512" width= "512">
    <h2>Descansa y reponte. La campaña te espera</h2>
    <p>Dungeon's hub es una herramienta web pensada para todos los amantes de los juegos de rol que te permitirá al usuario crear, 
        aprender sobre DnD (Dungeons and Dragons) y crear personajes y mapas de las mazmorras para tus campañas.
    </p>
    <p>También podrás hablar con otra gente a través de los foros y incluso unirte a sus campañas. Y si no sabes que hace una raza o una
        clase, también la podrás consultar en nuestra página para crear a tu personaje.
    </p>
    EOS;
    require RUTA_VIEW.'/commun/layout.php';





