<?php
require_once 'autorizacion.php';

function saludo()
{
    $html = '';

    if (estaLogado()) {
        //$urlLogout = Utils::buildUrl('/logout.php');
        $urlLogout = "1";//Quitar
        $html = <<<EOS
        Bienvenido, {$_SESSION['nombre']} <a href="{$urlLogout}">(salir)</a>
        EOS;
    } else {
        //$urlLogin = Utils::buildUrl('/login.php');
        $urlLogin = "0";//Quitar
        $html = <<<EOS
        Usuario desconocido. <a href="{$urlLogin}">Login</a>
        EOS;
    }

    return $html;
}

function logout()
{
    //Doble seguridad: unset + destroy
    unset($_SESSION['idUsuario']);
    unset($_SESSION['roles']);
    unset($_SESSION['nombre']);
    
    session_destroy();
    session_start();
}