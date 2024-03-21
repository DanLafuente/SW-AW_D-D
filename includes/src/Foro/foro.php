<?php

class Foro {

    use MagicProperties;

    /* Declarations & Construct */
    
    private $nombreForo;//Unico
    private $UsuarioID;
    private $mensaje;
    

    private function __construct($nombreForo, $UsuarioID, $mensaje)
    {
        $this->nombreForo = $nombreForo;
        $this->UsuarioID = $UsuarioID;
        $this->mensaje = $mensaje;
    }


    /* Gets */
    public function getnombreForo() { return $this->nombreForo; }
    public function getMensajeUsuarioID() { return $this->UsuarioID; }
    public function getmensaje() { return $this->mensaje; }
}