<?php
    session_start();
    require('procesarpersonaje.php');
    $personaje = new Personaje();
    $personaje = unserialize($_SESSION["creando_personaje"]);

    $error;
    $habilidades
    $habilidad1 = $_POST["Habilidad1"];
    $habilidad2 = $_POST["Habilidad2"];

    if($habilidad1 == $habilidad2){
        $error = true;
    } else{
        $habilidades = array();
        $habilidades
    }

    if($personaje->getRaza() == "humano" || $personaje->getRaza() == "semielfo" || $personaje->getRaza() == "semiorco" || $personaje->getRaza() == "tiflin"){
        $subraza_personaje = $personaje->getRaza();
    } else{
        $subraza_personaje = $_POST["Subraza"];
    }
    print ("<p>{$subraza_personaje}</p>");


?>
