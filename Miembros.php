<?php

require_once 'includes/configuracion.php';


$tituloPagina = 'Miembros';
$contenidoPrincipal=<<<EOS

        <!--Hoja-->
            <!--Lateral con referencias-->
            <h1>Miembros del Proyecto</h1>
                <ol><li> <a href="#DanielLafuenteBazo">Daniel Lafuente Bazo <img src="img/daniLafu.png" alt="Pueblerino" height="64" width= "64"></a></li>
                    <li> <a href="#HugoVivacioFernandez">Hugo Vivacio Fernandez <img src="img/hugouwu.png" alt="Furro" height="64" width= "64"></a> </li>
                    <li> <a href="#JaimeIsarMuñoz">Jaime Isar Muñoz <img src="img/jimmysaurio.png" alt="Estegosaurio" height="64" width= "64"></a> </li>
                    <li> <a href="#AlejandroRodriguezGiner">Alejandro Rodriguez Giner<img src="img/chuvak.png" alt="Mascota" height="64" width= "64"></a> </li>

                </ol>
            <!--Lista de miembros del equipo de desarrollo-->
            <ol><li id="DanielLafuenteBazo">Daniel Lafuente Bazo
                        <dl><dt>Nombre</dt>
                            <dd>Daniel Lafuente Bazo</dd>
                        <dt>Correo de contacto: danlafue@ucm.es</dt>
                        <dt>Imagen de Daniel:</dt>
                            <dd><img src="img/dani.jpg" alt="Pueblerino" height="370" width="550"></dd>
                        <dt>Historia:</dt>
                            <dd>Un gran y atrevido emprendedor en el mundo Web y sus CSSes.
                            Mensaje: "Ya no se si son leds o está ardiendo la CPU."</dd>
                        </dl>
                    </li>
                    <li id="HugoVivacioFernandez">Hugo Vivacio Fernandez
                        <dl><dt>Nombre:</dt>
                            <dd>Hugo Vivacio Fernandez</dd>
                        <dt>Correo de contacto:</dt>
                            <dd>hvivanco@ucm.es</dd>
                        <dt>Imagen de Hugo:</dt>
                            <dd><img src="img/hugo.jpg" alt="Furro" height="300" width="500"></dd>
                        <dt>Historia:</dt>
                            <dd>Aquí os presento a nuestro gran maravilloso Dungeon Master que tuvo esta gran idea en primer lugar. 
                            Mensaje: "F, por nuestro Dundeons Master. F de FURRO."</dd>
                        </dl>
                    </li>
                    <li id="JaimeIsarMuñoz">Jaime Isar Muñoz
                        <dl><dt>Nombre:</dt>
                            <dd>Jaime Isar Muñoz</dd>
                        <dt>Correo de contacto:</dt>
                            <dd> jaimisar@ucm.es</dd>
                        <dt>Imagen de Jaime:</dt>
                            <dd><img src="img/jimmy.jpg" alt="Estegosaurio" height="516" width="300"></dd>
                        <dt>Historia:</dt>
                            <dd>Tambien conocido como Jimmy, es un ser de luz que se dedica ha hacer el mal. Nos hace feliz tenerlo, pero por favor,
                             no le des nada inflamabe. Mensaje: "Erbisiho is coming for your weakness."</dd>
                        </dl>
                    </li>
                    <li id="AlejandroRodriguezGiner">Alejandro Rodriguez Giner
                        <dl><dt>Nombre:</dt>
                            <dd>Alejandro Rodriguez Giner</dd>
                        <dt>Correo de contacto:</dt>
                            <dd>alrodr27@ucm.es</dd>
                        <dt>Imagen de Alejandro:</dt>
                            <dd> <img src="img/alex.jpg" alt="Mascota" height="400" width="300"></dd>
                        <dt>Historia:</dt>
                            <dd>Saludad a la mascota, tambien conocida como Chuvakan. Es tan mono que se cree artista cuando ha hecho gran parte del diseño de esta página.
                            Mensaje: "No me mireis que me estoy cambiando."</dd>
                        </dl>
                    </li>
                </ol>
        EOS;
        require 'includes/vistas/commun/layout.php';

