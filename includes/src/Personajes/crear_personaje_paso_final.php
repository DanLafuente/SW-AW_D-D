<?php
    session_start();
    require('procesar_personajes.php');
    $personaje = new Personaje();
    $personaje = unserialize($_SESSION["creando_personaje"]);

    $error = false;
    $mensage_error;
    $habilidades = array();
    $habilidad1 = $_POST["Habilidad1"];
    $habilidad2 = $_POST["Habilidad2"];
   

    //habilidades------------------------------------
    $habilidades[0] = $habilidad1;
    $habilidades[1] = $habilidad2;

    if($personaje->getClase() == "bardo" || $personaje->getClase() == "explorador" || $personaje->getClase() == "picaro" ){
        $habilidad3 = $_POST["Habilidad3"];
        $habilidades[2] = $habilidad3;
        if($personaje->getClase() == "picaro" ){
            $habilidad4 = $_POST["Habilidad4"];
            $habilidades[3] = $habilidad4;
            
        }
    }
    
    if(comprobar_habilidades($habilidades, $personaje->getHabilidades_count())){
        $error = true;
        $mensage_error = "Se repiten dos o mas habilidades";
    }
    //------------------------------------------------------------------

    //subraza----------------------------------------------------------    
    if($personaje->getRaza() == "humano" || $personaje->getRaza() == "semielfo" || $personaje->getRaza() == "semiorco" || $personaje->getRaza() == "tiflin"){
        $subraza_personaje = $personaje->getRaza();
    } else{
        $subraza_personaje = $_POST["Subraza"];
    }
    //-------------------------------------------------------
    
    //equipamiento----------------------------------------------
    $equipamiento1 = $_POST["Equipamiento1"];
    $equipamiento2 = $_POST["Equipamiento2"];
    $equipamiento = $equipamiento1;
    $equipamiento = $equipamiento . ", " . $equipamiento2;

    if($personaje->getClase() != "monje" && $personaje->getClase() != "druida" && $personaje->getClase() != "barbaro"){
        $equipamiento3 = $_POST["Equipamiento3"];
        $equipamiento = $equipamiento . ", " . $equipamiento3;
        if($personaje->getClase() == "clerigo" || $personaje->getClase() == "guerrero"){
            $equipamiento4 = $_POST["Equipamiento4"];
            $equipamiento = $equipamiento . ", " . $equipamiento4;
        }

    }

    //-----------------------------------------------------------

    if($error == true){
        print ("<p> ERROR {$mensage_error}</p>");

    } else{
        Procesar_formulario2($personaje, $subraza_personaje, $habilidades, $equipamiento);
    }


    //se pasa a la base de datos--------------------------------------

    

    //----------------------------------------------------------------
    
    unset($_SESSION["creando_personaje"]);

?>
