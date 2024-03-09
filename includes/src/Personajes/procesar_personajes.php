<?php
    class Personaje {
        // Propiedades
        private $Nombre;
        private $Nivel;
        private $Clase;
        private $Raza;
        private $Habilidades;
        private $Habilidades_count;
        private $Transfondo;
        private $Alineamiento;
        private $Subraza;
        private $Subclase;
        private $Equipamiento;
        private $Equipamiento_secundario;
        private $Idiomas;
        private $Bonus_compencias;
        private $Percepcion_pasiva;
        private $Caracteristicas_personalidad;
        private $Ideales;
        private $Lazos;
        private $Fallos;
        private $Historia;
        private $Fuerza;
        private $Fuerza_mod;
        private $Dexteridad;
        private $Dexteridad_mod;
        private $Constitucion;
        private $Constitucion_mod;
        private $Inteligencia;
        private $Inteligencia_mod;
        private $Sabiduria_mod;
        private $Sabiduria;
        private $Carisma;
        private $Carisma_mod;
        private $Velocidad;
        private $Armadura;
        private $ID_persoanje;



        // Métodos
        function setNombre($Nombre) {
            $this->Nombre = $Nombre;
        }
        function setNivel($Nivel) {
            $this->Nivel = $Nivel;
        }
        function setClase($Clase) {
            $this->Clase = $Clase;
        }
        function setRaza($Raza) {
            $this->Raza = $Raza;
        }
        function setTransfondo($Transfondo) {
            $this->Transfondo = $Transfondo;
        }
        function setAlineamiento($Alineamiento) {
            $this->Alineamiento = $Alineamiento;
        }
        function setHabilidades($Habilidades) {
            $this->Habilidades = $Habilidades;
        }
        function setSubraza($Subraza) {
            $this->Subraza = $Subraza;
        }
        function setSubclase($Subclase) {
            $this->Subclase = $Subclase;
        }
        function setHabilidades_count($Hab_count){
            $this->Habilidades_count = $Hab_count;
        }
        function setEquipamiento($Equipamiento){
            $this->Equipamiento = $Equipamiento;
        }
        function setEquipamiento_secundario($Equipamiento_secundario){
            $this->Equipamiento_secundario = $Equipamiento_secundario;
        }
        function setIdiomas($Idiomas){
            $this->Idiomas = $Idiomas;
        }
        function setBonus_compencias($Bonus_compencias){
            $this->Bonus_compencias = $Bonus_compencias;
        }
        function setPercepcion_pasiva($Percepcion_pasiva){
            $this->Percepcion_pasiva = $Percepcion_pasiva;
        }
        function setCaracteristicas_personalidad($Caracteristicas_personalidad){
            $this->Caracteristicas_personalidad = $Caracteristicas_personalidad;
        }
        function setIdeales($Ideales){
            $this->Ideales = $Ideales;
        }
        function setLazos($Lazos){
            $this->Lazos = $Lazos;
        }
        function setFallos($Fallos){
            $this->Fallos = $Fallos;
        }
        function setHistoria($Historia){
            $this->Historia = $Historia;
        }
        function setFuerza($Fuerza){
            $this->Fuerza = $Fuerza;
        }
        function setDexteridad($Dexteridad){
            $this->Dexteridad = $Dexteridad;
        }
        function setConstitucion($Constitucion){
            $this->Constitucion = $Constitucion;
        }
        function setInteligencia($Inteligencia){
            $this->Inteligencia = $Inteligencia;
        }
        function setSabiduria($Sabiduria){
            $this->Sabiduria = $Sabiduria;
        }
        function setCarisma($Carisma){
            $this->Carisma = $Carisma;
        }
        function setFuerza_mod($Fuerza_mod){
            $this->Fuerza_mod = $Fuerza_mod;
        }
        function setDexteridad_mod($Dexteridad){
            $this->Dexteridad_mod = $Dexteridad;
        }
        function setConstitucion_mod($Constitucion){
            $this->Constitucion_mod = $Constitucion;
        }
        function setInteligencia_mod($Inteligencia){
            $this->Inteligencia_mod = $Inteligencia;
        }
        function setSabiduria_mod($Sabiduria){
            $this->Sabiduria_mod = $Sabiduria;
        }
        function setCarisma_mod($Carisma){
            $this->Carisma_mod = $Carisma;
        }
        function setVelocidad($Velocidad){
            $this->Velocidad = $Velocidad;
        }        
        function setArmadura($Armadura){
            $this->Armadura = $Armadura;
        }
        function setID_persoanje($ID_persoanje){
            $this->ID_persoanje = $ID_persoanje;
        }

        function getNombre() {
            return $this->Nombre;
        }
        function getNivel() {
            return $this->Nivel;
        }
        function getClase() {
            return $this->Clase;
        }
        function getRaza() {
            return $this->Raza;
        }
        function getHabilidades() {
            return $this->Habilidades;
        }
        function getTransfondo() {
            return $this->Transfondo;
        }
        function getSubraza() {
            return $this->Subraza;
        }
        function getSubclase() {
            return $this->Subclase;
        }
        function getHabilidades_count() {
            return $this->Habilidades_count;
        }
        function getEquipamiento() {
            return $this->Equipamiento;
        }
        function getEquipamiento_secundario() {
            return $this->Equipamiento_secundario;
        }
        function getIdiomas() {
            return $this->Idiomas;
        }
        function getBonus_compencias() {
            return $this->Bonus_compencias;
        }
        function getPercepcion_pasiva(){
            return $this->Percepcion_pasiva;
        }
        function getCaracteristicas_personalidad(){
            return $this->Caracteristicas_personalidad;
        }
        function getIdeales(){
            return $this->Ideales;
        }
        function getLazos(){
            return $this->Lazos;
        }
        function getFallos(){
            return $this->Fallos;
        }
        function getHistoria(){
            return $this->Historia;
        }
        function getFuerza(){
            return $this->Fuerza;
        }
        function getDexteridad(){
            return $this->Dexteridad;
        }
        function getConstitucion(){
            return $this->Constitucion;
        }
        function getInteligencia(){
            return $this->Inteligencia;
        }
        function getSabiduria(){
            return $this->Sabiduria;
        }
        function getCarisma(){
            return $this->Carisma;
        }
        function getVelocidad(){
            return $this->Velocidad;
        }        
        function getArmadura($Armadura){
            return $this->Armadura;
        }
        function getFuerza_mod(){
            return $this->Fuerza_mod;
        }
        function getDexteridad_mod(){
            return $this->Dexteridad_mod;
        }
        function getConstitucion_mod(){
            return $this->Constitucion_mod;
        }
        function getInteligencia_mod(){
            return $this->Inteligencia_mod;
        }
        function getSabiduria_mod(){
            return $this->Sabiduria_mod;
        }
        function getCarisma_mod(){
            return $this->Carisma_mod;
        }
        function getID_persoanje(){
            return $this->ID_persoanje;
        }

    }


    function Procesar_formulario1($personaje, $raza, $clase, $nivel,
    $alineamiento, $transfondo, $nombre,
    $Caracteristicas_personalidad,
    $Ideales, $Lazos, $Fallos, $Historia, $Fuerza, $Dexteridad,
    $Constitucion, $Inteligencia, $Sabiduria, $Carisma) {
        $personaje->setNombre($nombre);
        $personaje->setNivel($nivel);
        $personaje->setClase($clase);
        $personaje->setRaza($raza);
        $personaje->setAlineamiento($alineamiento);
        $personaje->setTransfondo($transfondo);
        $personaje->setCaracteristicas_personalidad($Caracteristicas_personalidad);
        $personaje->setIdeales($Ideales);
        $personaje->setLazos($Lazos);
        $personaje->setFallos($Fallos);
        $personaje->setHistoria($Historia);
        $personaje->setFuerza($Fuerza);
        $personaje->setDexteridad($Dexteridad);
        $personaje->setConstitucion($Constitucion);
        $personaje->setInteligencia($Inteligencia);
        $personaje->setSabiduria($Sabiduria);
        $personaje->setCarisma($Carisma);


        if($nivel > 0 && $nivel <5){
            $personaje->setBonus_compencias(2);
        }else if($nivel >= 5 && $nivel <9){
            $personaje->setBonus_compencias(3);
        }else if($nivel >= 9 && $nivel <13){
            $personaje->setBonus_compencias(4);
        }else if($nivel >= 13 && $nivel < 17){
            $personaje->setBonus_compencias(5);
        }else if($nivel >= 17 && $nivel <= 20){
            $personaje->setBonus_compencias(6);
        }

    }

    function Procesar_formulario2($personaje, $Subraza, $habilidades, $equipamiento) {

        $personaje->setSubraza($Subraza);
        $personaje->setHabilidades($habilidades);
        procesar_transfondo($personaje);

        switch($personaje->getClase()){
            case "barbaro":
                $equipamiento = $equipamiento . ", Un equipo de explorador y cuatro jabalinas";
            break;
            case "bardo":
                $equipamiento = $equipamiento . ", Armadura de cuero y una daga";
            break;
            case "brujo":
                $equipamiento = $equipamiento . ", Armadura de cuero, cualquier arma simple y dos dagas";
            break;
            case "clerigo":
                $equipamiento = $equipamiento . ", Un escudo y un símbolo sagrado";
            break;
            case "druida":
                $equipamiento = $equipamiento . ", Armadura de cuero, un equipo de explorador y un foco druídico";
            break;
            /*case "explorador":
                $equipamiento = $equipamiento . "";
            break;
            case "guerrero":
                $equipamiento = $equipamiento . "";
            break;
            case "hechicero":
                $equipamiento = $equipamiento . "";
            break;
            case "mago":
                $equipamiento = $equipamiento . "";
            break;
            case "monje":
                $equipamiento = $equipamiento . "";
            break;
            case "paladin":
                $equipamiento = $equipamiento . "";
            break;
            case "picaro":
                $equipamiento = $equipamiento . "";
            break;*/
            $personaje->setEquipamiento($equipamiento);
        }
        switch($personaje->getRaza()){
            case "enano":
                $personaje->setVelocidad(25);
                $personaje->setConstitucion($personaje->getConstitucion() + 2);
                switch($personaje->getSubraza()){
                    case "enano de las colinas":
                        $personaje->setSabiduria($personaje->getSabiduria() + 1);
                    break;
                    case "enano de las montañas":
                        $personaje->setFuerza($personaje->getFuerza() + 2);
                    break;
                }
            break;
            case "elfo":
                $personaje->setVelocidad(30);
                $personaje->setDexteridad($personaje->getDexteridad() + 2);
                switch($personaje->getSubraza()){
                    case "alto elfo":
                        $personaje->setInteligencia($personaje->getInteligencia() + 1);
                    break;
                    case "elfo de los bosques":
                        $personaje->setSabiduria($personaje->getSabiduria() + 1);
                    break;
                    case "elfo oscuro":
                        $personaje->setCarisma($personaje->getCarisma() + 1);
                    break;
                }
            break;
            case "mediano":
                $personaje->setVelocidad(25);
                $personaje->setDexteridad($personaje->getDexteridad() + 2);
                switch($personaje->getSubraza()){
                    case "mediano piesligeros":
                        $personaje->setCarisma($personaje->getCarisma() + 1);
                    break;
                    case "mediano fornido":
                        $personaje->setConstitucion($personaje->getConstitucion() + 1);
                    break;
                }
            break;
            case "humano":
                $personaje->setVelocidad(30);
                $personaje->setConstitucion($personaje->getConstitucion() + 1);
                $personaje->setCarisma($personaje->getCarisma() + 1);
                $personaje->setDexteridad($personaje->getDexteridad() + 1);
                $personaje->setSabiduria($personaje->getSabiduria() + 1);
                $personaje->setInteligencia($personaje->getInteligencia() + 1);
                $personaje->setFuerza($personaje->getFuerza() + 1);
            break;
            case "draconico":
                $personaje->setVelocidad(30);
                $personaje->setFuerza($personaje->getFuerza() + 2);
                $personaje->setCarisma($personaje->getCarisma() + 1);
            break;
            case "gnomo":
                $personaje->setVelocidad(25);
                $personaje->setInteligencia($personaje->getInteligencia() + 2);
                switch($personaje->getSubraza()){
                    case "gnomo del bosque":
                        $personaje->setDexteridad($personaje->getDexteridad() + 1);
                    break;
                    case "gnomo de la roca":
                        $personaje->setConstitucion($personaje->getConstitucion() + 1);
                    break;
                }
            break;
            case "semielfo":
                $personaje->setVelocidad(30);
                $personaje->setCarisma($personaje->getCarisma() + 2);
                $personaje->setSabiduria($personaje->getSabiduria() + 1); // he legido yo estos dos
                $personaje->setDexteridad($personaje->getDexteridad() + 1);
            break;
            case "semiorco":
                $personaje->setVelocidad(30);
                $personaje->setFuerza($personaje->getFuerza() + 2);
                $personaje->setConstitucion($personaje->getConstitucion() + 1);
            break;
            case "tiflin":
                $personaje->setVelocidad(30);
                $personaje->setInteligencia($personaje->getInteligencia() + 1);
                $personaje->setCarisma($personaje->getCarisma() + 2);
            break;
        }
        $personaje->setFuerza_mod(procesar_score($personaje->getFuerza()));
        $personaje->setDexteridad_mod(procesar_score($personaje->getDexteridad()));
        $personaje->setConstitucion_mod(procesar_score($personaje->getConstitucion()));
        $personaje->setInteligencia_mod(procesar_score($personaje->getInteligencia()));
        $personaje->setSabiduria_mod(procesar_score($personaje->getSabiduria()));
        $personaje->setCarisma_mod(procesar_score($personaje->getCarisma()));

        procesar_percepcion_pasiva($personaje);

    }

    function comprobar_habilidades($habilidades, $Habilidades_count){
        $error = false;
        for($i = 0; $i < $Habilidades_count; $i++){
            for( $x = 0; $x < $Habilidades_count; $x++){
                if($i != $x && $habilidades[$i] == $habilidades[$x]){
                    $error = true;
                }
            }
        }
        return $error;
    }

    function añadir_habilidad($personaje, $habilidad){
        $Habilidades_aux = $personaje->getHabilidades();
        $Habilidades_aux[$personaje->getHabilidades_count()] = $habilidad;
        $personaje->setHabilidades_count($personaje->getHabilidades_count()+1);
        $personaje->setHabilidades($Habilidades_aux);
        return comprobar_habilidades($Habilidades_aux, $personaje->getHabilidades_count());

    }

    function procesar_transfondo($personaje){
        $Equipamiento_secundario;

        switch($personaje->getTransfondo()){
            case "acolito":
                añadir_habilidad($personaje, "Averiguar intenciones");
                añadir_habilidad($personaje, "Religión");
                $Idiomas_aux = $personaje->getIdiomas() . ", dos de tu elección";
                $personaje->setIdiomas($Idiomas_aux);
                $Equipamiento_secundario = "Un símbolo sagrado (un regalo de cuando entraste
                en el sacerdocio), un libro de oraciones o rueda de plegarias, 5 barritas de incienso, vestiduras, un conjunto de
                ropa común y una bolsa que contiene 15 po";
            break;
            case "artesano gremial":
                $Equipamiento_secundario = ", Armadura de cuero y una daga";
            break;
            case "artista":
                $Equipamiento_secundario = ", Armadura de cuero, cualquier arma simple y dos dagas";
            break;
            case "charlatan":
                $Equipamiento_secundario = ", Un escudo y un símbolo sagrado";
            break;
            case "criminal":
                $Equipamiento_secundario = ", Armadura de cuero, un equipo de explorador y un foco druídico";
            break;
            case "ermitaño":
                $Equipamiento_secundario = "";
            break;
            case "forastero":
                $Equipamiento_secundario = "";
            break;
            case "heroe del pueblo":
                $Equipamiento_secundario = "";
            break;
            case "huerfano":
                $Equipamiento_secundario = "";
            break;
            case "marinero":
                $Equipamiento_secundario = "";
            break;
            case "noble":
                $Equipamiento_secundario = "";
            break;
            case "sabio":
                $Equipamiento_secundario = "";
            break;
            case "soldado":
                $Equipamiento_secundario = "";
            break;
            $personaje->setEquipamiento_secundario($Equipamiento_secundario);
        }
    }

    function procesar_percepcion_pasiva($personaje){
        $habilidades = $personaje->getHabilidades();
        for($i = 0; $i < $personaje->getHabilidades_count(); $i++){
            
            if($habilidades[$i] == "percepcion"){
                $personaje->setPercepcion_pasiva(10 + $personaje->getBonus_compencias() + $personaje->getSabiduria_mod());
            } else{
                $personaje->setPercepcion_pasiva(10 + $personaje->getSabiduria_mod());
            }
            
        }
    }

    function procesar_score($score){
        $mod;
        if($score == 1){
            $mod = -5;
        }else if($score == 2 || $score == 3){
            $mod = -4;
        }else if($score == 4 || $score == 5){
            $mod = -3;
        }else if($score == 6 || $score == 7){
            $mod = -2;
        }else if($score == 8 || $score == 9){
            $mod = -1;
        }else if($score == 10 || $score == 11){
            $mod = 0;
        }else if($score == 12 || $score == 13){
            $mod = 1;
        }else if($score == 14 || $score == 15){
            $mod = 2;
        }else if($score == 16 || $score == 17){
            $mod = 3;
        }else if($score == 18 || $score == 19){
            $mod = 4;
        }else if($score == 20 || $score == 21){
            $mod = 5;
        }else if($score == 22 || $score == 23){
            $mod = 6;
        }else if($score == 24 || $score == 25){
            $mod = 7;
        }else if($score == 26 || $score == 27){
            $mod = 8;
        }else if($score == 28 || $score == 29){
            $mod = 9;
        }else if($score == 10){
            $mod = 10;
        }
        return $mod;
    }
?>

