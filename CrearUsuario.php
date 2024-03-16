<?php
require_once 'includes/configuracion.php';
require_once 'includes/vistas/helpers/CrearUsuario.php';


$tituloPagina = 'CrearUsuario';

$htmlFormLogin = buildFormularioCreaUsuario();
$contenidoPrincipal=<<<EOS
<h1>Cree su Usuario para meterlo a la BD</h1>
$htmlFormLogin
EOS;

require 'includes/vistas/commun/layout.php';