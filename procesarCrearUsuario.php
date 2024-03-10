<?php

require_once 'includes/configuracion.php';
require_once 'includes/vistas/helpers/usuariosHelp.php';
require_once 'includes/vistas/helpers/autorizacion.php';
require_once 'includes/vistas/helpers/CrearUsuario.php';
require_once 'includes/vistas/helpers/login.php';

$tituloPagina = 'CrearUsuario';

$nombreUsuario = filter_input(INPUT_POST, 'nombreUsuario', FILTER_SANITIZE_SPECIAL_CHARS);
$password = $_POST["password"] ?? null;
$roles = filter_input(INPUT_POST, 'roles', FILTER_SANITIZE_SPECIAL_CHARS);

$esValido = $nombreUsuario && $password && ($usuario = Usuario::login($nombreUsuario, $password));
if ($esValido) {
	$htmlFormLogin = buildFormularioLogin($nombreUsuario, $password);
	$contenidoPrincipal=<<<EOS
		<h1>Error</h1>
		<p>Este Usuario ya se encuentra en la BD.</p>
		$htmlFormLogin
	EOS;
	require 'includes/vistas/commun/layout.php';
	exit();
}

$usuario = Usuario::crea($nombreUsuario, $password, $roles);

$_SESSION['idUsuario'] = $usuario->id;
$_SESSION['roles'] = $usuario->roles;
$_SESSION['nombreUsuario'] = $usuario->nombreUsuario;

$contenidoPrincipal=<<<EOS
	<h1>Encantado ${_SESSION['nombreUsuario']}</h1>
	<p>Selecione Inicio.</p>
EOS;

require 'includes/vistas/commun/layout.php';
