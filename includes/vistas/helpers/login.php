<?php

function buildFormularioLogin($nombreUsuario='', $password='')
{
    return <<<EOS
    <form id="formLogin" action="procesarLogin.php" method="POST">
        <fieldset>
            <legend>Usuario y contraseña</legend>
            <div><label>Name:</label> <input type="text" name="nombreUsuario" value="$nombreUsuario" /></div>
            <div><label>Password:</label> <input type="password" name="password" password="$password" /></div>
            <div><button type="submit">Entrar</button></div>
        </fieldset>
    </form>
    EOS;
}