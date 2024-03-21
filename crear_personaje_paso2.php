<?php
    //session_start();
    //require 'includes/vistas/commun/cabecera.php';
    require_once'includes/configuracion.php' ;
    require('includes/src/Personajes/procesar_personajes.php');
    $nombre_personaje = htmlspecialchars(trim(strip_tags($_POST["nombre_personaje"])));
    $nivel_personaje = htmlspecialchars(trim(strip_tags($_POST  ["nivel_personaje"])));
    $alineamiento_personaje = $_POST["Alineamiento"];
    $clase_personaje = $_POST["Clase"];
    $raza_personaje = $_POST["Raza"];
    $transfondo_personaje = $_POST["Transfondo"];
    $Caracteristicas_personalidad = $_POST["Caracteristicas_personalidad"];
    $Ideales = $_POST["Ideales"];
    $Lazos = $_POST["Lazos"];
    $Fallos = $_POST["Fallos"];
    $Historia = $_POST["Historia"];
    $Fuerza = $_POST["Fuerza"];
    $Dexteridad = $_POST["Dexteridad"];
    $Constitucion = $_POST["Constitucion"];
    $Inteligencia = $_POST["Inteligencia"];
    $Sabiduria = $_POST["Sabiduria"];
    $Carisma = $_POST["Carisma"];

    $personaje = new Personaje();
    
    Procesar_formulario1($personaje, $raza_personaje, 
    $clase_personaje, $nivel_personaje, 
    $alineamiento_personaje, $transfondo_personaje, 
    $nombre_personaje, $Caracteristicas_personalidad,
    $Ideales, $Lazos, $Fallos, $Historia, $Fuerza, $Dexteridad,
    $Constitucion, $Inteligencia, $Sabiduria, $Carisma);

    require_once 'includes/vistas/helpers/creacion_persoanje_paso2.php';
    $subraza_formulario;
    $subclase_formulario;
    $clase_formulario;
    $boton_formulario = buildFormularioButton();

    if($raza_personaje == "enano"){
        $subraza_formulario = buildFormularioSubrazaEnano();
    }
    if($raza_personaje == "elfo"){
        $subraza_formulario = buildFormularioSubrazaElfo();
    }
    if($raza_personaje == "draconico"){
        $subraza_formulario = buildFormularioSubrazaDraconico();
    }
    if($raza_personaje == "gnomo"){
        $subraza_formulario = buildFormularioSubrazaGnomo();
    }
    if($raza_personaje == "mediano"){
        $subraza_formulario = buildFormularioSubrazaMediano();
    }
    if($clase_personaje == "brujo"){
        $clase_formulario = buildFormularioSubclaseBrujo(); 
        if($nivel_personaje >= 3){
            $subclase_formulario = buildFormularioSubclaseBrujo_N3(); 
        }
    }
    
    if($clase_personaje == "barbaro"){
        $personaje->setHabilidades_count(2);
        $clase_formulario = buildFormularioSubclaseBarbaro(); 
        
        if($nivel_personaje >= 3){
            $subclase_formulario = buildFormularioSubclaseBarbaro_N3(); 
        }else{
            $subclase_formulario = NULL;
        }
    }
   /* if($clase_personaje == "bardo"){
        if($nivel_personaje >= 3){
            $subclase_formulario = buildFormularioSubclaseBardo_N3(); 
        }
    }*/
    


    $tituloPagina = 'creacion personaje paso2';
    $contenidoPrincipal=<<<EOS
    $subraza_formulario
    $clase_formulario
    $subclase_formulario
    $boton_formulario
    EOS;


require 'includes/vistas/commun/layout.php';
$_SESSION["creando_personaje"] = serialize($personaje);

    