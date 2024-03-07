<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
            <form action="http://localhost/SW-AW_D-D/crearpersonaje_paso2.php" method="post">
            <p>
            <label>Nombre del presonaje</label>
            <input id="nombre" type="text" name="nombre_personaje" value="" />
            </p>
            <p>
            <label>Nivel del presonaje</label>
            <input id="nivel" type="number" name="nivel_personaje" value="" />
            </p>
            <p>

            <label>Alineamiento</label>
            <select name="Alineamiento">
                <option value="LB"selected>Legal bueno</option>
                <option value="NB">Neutral bueno</option>
                <option value="CB">Caòtico bueno</option>
                <option value="LN">Legal neutral</option>
                <option value="N">Neutral</option>
                <option value="CN">Caòtico neutral</option>
                <option value="LM">Legal malvado</option>
                <option value="NM">Neutra malvado</option>
                <option value="CM">Caòtico malvado</option>
            </select>
            </p>
            <p>
            <label>Clase</label>
            <select name="Clase">
                <option value="barbaro"selected>Bárbaro</option>
                <option value="bardo">Bardo</option>
                <option value="brujo">Brujo</option>
                <option value="clerigo">Clerigo</option>
                <option value="druida">Druida</option>
                <option value="explorador">Explorador</option>
                <option value="guerrero">Guerrero</option>
                <option value="hechicero">Hechicero</option>
                <option value="mago">Mago</option>
                <option value="monje">Monje</option>
                <option value="paladin">Paladin</option>
                <option value="picaro">Picaro</option>
            </select>
            </p>
            <p>
            <label>Raza</label>
            <select name="Raza">
                <option value="enano"selected>Enano</option>
                <option value="elfo">Elfo</option>
                <option value="mediano">Mediano</option>
                <option value="humano">Humano</option>
                <option value="draconico">Draconico</option>
                <option value="gnomo">Gnomo</option>
                <option value="semielfo">Semielfo</option>
                <option value="semiorco">Semiorco</option>
                <option value="tiflin">Tiflin</option>

            </select>
            </p>
            <p>
            <label>Transfondo</label>
            <select name="Transfondo">
                <option value="acolito"selected>Acolito</option>
                <option value="artesano gremial">Artesano Gremial</option>
                <option value="artista">Artista</option>
                <option value="charlatan">Charlatán</option>
                <option value="criminal">Criminal</option>
                <option value="ermitaño">Ermitaño</option>
                <option value="forastero">Forastero</option>
                <option value="heroe del pueblo">Héroe del Pueblo</option>
                <option value="huerfano">Huérfano</option>
                <option value="marinero">Marinero</option>
                <option value="noble">Noble</option>
                <option value="sabio">Sabio</option>
                <option value="soldado">Soldado</option>
            </select>
            </p>
            <input type="submit" value="Enviar" />
            
    </main>
</body>
</html>

