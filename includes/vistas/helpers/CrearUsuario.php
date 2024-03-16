<?php

function buildFormularioCreaUsuario($nombreUsuario='', $password='')
{
    return <<<EOS
    <form id="formLogin" action="procesarCrearUsuario.php" method="POST">
        <fieldset>
            <legend>Usuario, contraseña y rol</legend>
            <div><label>Name:</label> <input type="text" name="nombreUsuario" value="$nombreUsuario" /></div>
            <div><label>Password:</label> <input type="password" name="password" password="$password" /></div>
            <div><label>Rol:</label> <input type="roles" name="roles" roles="$roles" /></div>
            <div><button type="submit">Entrar</button></div>
        </fieldset>
    </form>
    EOS;
}