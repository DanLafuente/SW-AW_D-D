<?php
    session_start();
    //require_once dirname(dirname(__DIR__)).'/vistas/commun/cabecera.php';
?>

<!DOCTYPE html>
<body>
    <?php// require_once dirname(dirname(__DIR__)).'/vistas/commun/cabecera.php'; ?>

    <main>
            <form action="http://localhost/SW-AW_D-D/includes/src/Personajes/crear_personaje_paso2.php" method="post">
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
            <p>
            <label>Caracteristicas de personalidad</label>
            <textarea name="Caracteristicas_personalidad" rows="4" cols="40"></textarea>
            </p>
            <p>
            <label>Ideales</label>
            <textarea name="Ideales" rows="4" cols="40"></textarea>
            </p>
            <p>
            <label>Lazos</label>
            <textarea name="Lazos" rows="4" cols="40"></textarea>
            </p>
            <p>
            <label>Fallos</label>
            <textarea name="Fallos" rows="4" cols="40"></textarea>
            </p>
            <p>
            <label>Historia del persoanje</label>
            <textarea name="Historia" rows="8" cols="70"></textarea>
            </p>
            <p>
                Caracteristicas de habilidad (sin bonus de la raza): 
            </p>
            <p>
            <label>Fuerza</label>
            <select name="Fuerza">
                <option value="1"selected>1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
            </select>
            </p>
            
            <label>Dexteridad</label>
            <select name="Dexteridad">
                <option value="1"selected>1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
            </select>
            </p><label>Constitucion</label>
            <select name="Constitucion">
                <option value="1"selected>1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
            </select>
            </p><label>Inteligencia</label>
            <select name="Inteligencia">
                <option value="1"selected>1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
            </select>
            </p><label>Sabiduria</label>
            <select name="Sabiduria">
                <option value="1"selected>1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
            </select>
            </p><label>Carisma</label>
            <select name="Carisma">
                <option value="1"selected>1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
            </select>
            </p>

            <input type="submit" value="Enviar" />
            
    </main>
</body>
</html>

