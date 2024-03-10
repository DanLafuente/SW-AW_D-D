<?php
   /* session_start();
    $nombre_personaje = htmlspecialchars(trim(strip_tags($_POST["nombre_personaje"])));
    $nivel_personaje = htmlspecialchars(trim(strip_tags($_POST  ["nivel_personaje"])));
    $alineamiento_personaje = $_POST["Alineamiento"];
    $clase_personaje = $_POST["Clase"];
    $raza_personaje = $_POST["Raza"];
    $transfondo_personaje = $_POST["Transfondo"];*/
 
    class Personaje {
        // Propiedades
        public $Nombre;
        public $Nivel;
        public $Clase;
        public $Raza;
        public $Habilidades;
        public $Habilidades_count;
        public $Transfondo;
        public $Alineamiento;
        public $Subraza;
        public $Subclase;

       // $Habilidades = array();


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
    }
    /*$personaje->setNombre($nombre_personaje);
    $personaje->setNivel($nivel_personaje);
    echo "<p>{$personaje->getNombre()}</p>";
    echo "<p>{$personaje->getNivel()}</p>";*/

    function Procesar_formulario1($personaje, $raza, $clase, $nivel, $alineamiento, $transfondo, $nombre) {
        $personaje->setNombre($nombre);
        $personaje->setNivel($nivel);
        $personaje->setClase($clase);
        $personaje->setRaza($raza);
        $personaje->setAlineamiento($alineamiento);
        $personaje->setTransfondo($transfondo);
    }

    function Procesar_formulario2($personaje, $raza, $clase, $nivel, $alineamiento, $transfondo, $nombre) {
        $personaje->setNombre($nombre);
        $personaje->setNivel($nivel);
        $personaje->setClase($clase);
        $personaje->setRaza($raza);
        $personaje->setAlineamiento($alineamiento);
        $personaje->setTransfondo($transfondo);
    }
?>