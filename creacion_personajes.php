<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <article>
            <form action="http://localhost/Ej2_P2/procesar_persoanje.php" method="post">
            <p>
            <label>Nombre del presonaje</label>
            <input id="nombre" type="text" name="nombre_personaje" value="" />
            </p>
            <p>
            <label>Nivel del presonaje</label>
            <input id="nivel" type="text" name="nivel_personaje" value="" />
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
                <option value="Bárbaro"selected>barbaro</option>
                <option value="Bardo">bardo</option>
                <option value="Brujo">brujo</option>
                <option value="Clerigo">clerigo</option>
                <option value="Druida">druida</option>
                <option value="Explorador">explorador</option>
                <option value="Guerrero">guerrero</option>
                <option value="Hechicero">Hechicero</option>
                <option value="Mago">mago</option>
                <option value="Monje">monje</option>
                <option value="Paladin">paladin</option>
                <option value="Picaro">picaro</option>
            </select>
            </p>
            <p>
            <label>Raza</label>
            <select name="Raza">
                <option value="Enano"selected>enano</option>
                <option value="Elfo">elfo</option>
                <option value="Mediano">mediano</option>
                <option value="Humano">humano</option>
                <option value="Draconico">draconico</option>
                <option value="Gnomo">gnomo</option>
                <option value="Semielfo">semielfo</option>
                <option value="Semiorco">semiorco</option>
                <option value="Tiflin">tiflin</option>

            </select>
            </p>
            <p>
            <label>Transfondo</label>
            <select name="Raza">
                <option value="Enano"selected>enano</option>
                <option value="Elfo">elfo</option>
                <option value="Mediano">mediano</option>
                <option value="Humano">humano</option>
                <option value="Draconico">draconico</option>
                <option value="Gnomo">gnomo</option>
                <option value="Semielfo">semielfo</option>
                <option value="Semiorco">semiorco</option>
                <option value="Tiflin">tiflin</option>

            </select>
            </p>
            <input type="submit" value="Enviar" />
        </article>
    </main>
</body>
</html>