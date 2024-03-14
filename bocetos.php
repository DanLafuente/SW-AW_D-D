<?php

require_once 'includes/configuracion.php';


$tituloPagina = 'Bocetos';
$contenidoPrincipal=<<<EOS
    <h1>Bocetos</h1>
    <h2 id="PP">Pantalla principal</h2>
    <img src = "img/boceto_pagina_principal.jpeg" alt="DH_index_SKETCH" width= "360" height= "500">
    <p>Desde la página principal se puede navegar hasta el resto de páginas. Lo primero que encontramos es el panel de campañas, 
        en este panel podremos crear camapañas, además nos saldran en formato de lista las capañas activas en las que estamos primero, y despues capañas a las que nos podríamos unir.
        Para entrar a las campañas basta con clicar en el nombre de la campaña.
        Debajo de este panel habrá dos botónes, uno en el que pone "Tus personajes" y otro en el que pone "Tus mapas",
        cada botón te llevará a su respectiva página.
        Por último, debajo de los bótones, esta el panel de foros en el que puedes crear, o buscar foros que te interesen con el buscador,
        para entrar en el foro basta con clicar en el nombre de la foro. 
        A la izquierda de la página principal y en el resto de páginas habrá una barra lateral la cual podemos abrir para que nos de acceso
        al resto de enlaces y páginas.
    </p>
    <h2 id="BL">Barra lateral</h2>
    <img src = "img/boceto_barra_lateral.jpeg" alt="DH_barra_lateral" width= "360" height= "500">
    <p>La barra lateral nos dará aceso a una variedad de enlaces. Tiene un enlace a la página principal, a la información de las razas y 
        de las clases y también tendra enlaces a las páginas de <a href="#PJs">"Tus personajes"</a> y de <a href="#Maps">"Tus mapas"</a> además de enlaces a las campañas en las que esta el usuario.
        Tambien tendrán acceso a una página en la que se explica como jugar a Dungeons and Dragons 5 edition en formato de texto.
    </p>
    <h2 id="PJs">Tus personajes</h2>
    <img src = "img/boceto_tus_personajes.jpeg" alt="DH_users_characters" width= "360" height= "500">
    <p>En esta página puedes organizar y editar los personajes que has creado.
        Lo primero que nos encontramos es un botón en el que pone "Nuevo personaje" el cual nos llevará a la página de 
        <a href="#CreacionPJs">creación de personajes</a>. Debajo de este botón hay un buscador y filtros que puedes usar para buscar a un personaje entre 
        todos tus personajes. Debajo del buscador habrá paneles con la información de cada personaje, 
        si clicamos en el nombre del personaje pasaremos a la visualización de la información del personaje. 
        Junto a cada panel habrá un botón con el que podemos eliminar dicho personaje y otro con el que podemos editarlo.
    </p>
    <h2 id="CreacionPJs">Creación de personajes</h2>
    <img src = "img/boceto_creacion_personajes.jpeg" alt="character_design_page" width= "360" height= "500">
    <p>En esta página se exponene las opciones que tiene el usuario a la hora de crear el personaje en forma de formulario, una vez acabado el "formulario"
        el personaje se guardará y ya se podrá usar en las campañas.
    </p>
    <h2 id="EdicionPJs">Edicion de personajes</h2>
    <img src = "img/boceto_edicion_personajes.jpeg" alt="character_edition_page" width= "360" height= "500">
    <p>En esta página el usuario sera capaz de editar la informacion de su personaje, podrá cambiar la raza, la clase, el nivel, etc...
        Una vez acabado de editar su personaje el usuario debe pulsar el botón de guardado que se encuentra al final de la página y te devuelve a la 
        página de <a href="#PJs">"Tus personajes"</a>.
    </p>
    <h2 id="Maps">Tus mapas</h2>
    <img src = "img/boceto_tus_mapas.jpeg" alt="users_maps_page" width= "360" height= "500">
    <p>
        En esta página puedes organizar y editar los mapas que has creado.
        Lo primero que nos encontramos es un botón en el que pone "Nuevo mapa" el cual nos llevará a la página de 
        <a href="#CrEdMaps">creación y edición de mapas</a>. Debajo hay un buscador con el que podemos buscar por nombres los mapas.
        Debajo del buscador hay paneles con una visualización previa del mapa además de información de este como puede ser su tamaño o su nombre.
        Si hacemos click en uno de estos paneles se nos llevará a la página de  <a href="#CrEdMaps">creación y edición de mapas</a>.
        Junto a cada panel habrá un botón con el que podemos eliminar dicho mapa.
    </p>
    <h2 id="CrEdMaps">Creación/edición de mapas</h2>
    <img src = "img/boceto_creacion_mapas.jpeg" alt="new_maps_page" width= "360" height= "500">
    <p>
        En esta página se crean o se editan los mapas que ya tienes.
        Lo primero que nos encontramos es que tenemos que poner el nombre del mapa y su tamaño, justo debajo de eso encontramos un panel cuadriculado.
        Este panel cuadriculado será el mapa y a la derecha de dicho panel habrá una serie de listas con los distintos tipos de objetos que podemos poner en el mapa,
        Al final de la página encontramos un botón de guardado que al pulsarlo nos llevará a la página de  <a href="#Maps">"Tus mapas"</a>.
    </p>
    <h2 id="Races">Razas</h2>
    <img src = "img/boceto_razas.jpeg" alt="races_page" width= "360" height= "500">
    <p>
        En esta página se muestra la información de cada raza en forma de paneles en las que hay una pequeña imagen de la raza 
        y donde se explican brevemente su historia y las características que tienen,
        tambien habrá una pequeña lista donde se listarán las subrazas que tiene cada raza.
        Cuando clicamos en una raza nos llevará a otra página en la que se describe más detalladamente cada raza en formato de texto.
    </p>
    <h2 id="Class">Clases</h2>
    <img src = "img/boceto_clases.jpeg" alt="classes_page" width= "360" height= "500">
    <p>
        En esta página se muestra la información de cada clase en forma de paneles en las que hay una pequeña imagen de la clase 
        y donde se explica brevemente de que trata la clase, tambien habrá una pequeña lista donde se listarán las subclases que tiene cada clase.
        Cuando clicamos en una clase nos llevará a otra página en la que se describe más detalladamente cada clase en formato de texto.
    </p>
    <h2 id="Forums">Foros</h2>
    <img src = "img/boceto_foro.jpeg" alt="forum_page" width= "360" height= "500">
    <p>
        En esta página los usuarios podrán hablar todos juntos. Lo primero que nos encontramos es el nombre del foro 
        y una descripción que explica de que se va a hablar en el foro. Tambien se indicará que usuario creó el foro.
        Debajo podemos encontrar un panel en el que se mostrarán los mensajes mandados en dicho foro y una barra en la que podemos
        escribir el mensaje que queramos mandar, para mandarlo hay un botón a la derecha que mandará el mensaje al foro para que el 
        resto de usuarios lo puedan ver.
    </p>
    <h2 id="Campañas">Campañas</h2>
    <img src = "img/boceto_campaña.jpeg" alt="campaign_page" width= "360" height= "500">
    <p>
        En esta página los usuarios podrán unirse a la campaña, además de poder comunicarse entre ellos.
        Lo primero que encontramos es el nombre de la campaña y la descripción de esta en la que se explicara la historia de la campaña
        y los datalles necesarios. Debajo de la descripción encontramos una lista en la que se mostrar los usuarios que se han unido 
        a la camapaña y quien la ha creado, quien cree la campaña se le denominara Dungeon Máster o DM. Tambien Se mostrar que personaje 
        va a jugar cada usuario en la campaña y que clase es dicho personaje, el DM sera el único capaz de ver más informacion de los personaje 
        ya que sera capaz de pulsar en los nombres de los personajes y ver toda la informacion pero no modificarla.
        Debajo de la lista habrá un botón con el que, si la campaña no tiene suficiiente jugadores, un usuario podrá uniser a dicha campaña. 
        Además el DM sera capaz de eliminar usuarios de la lista y por lo tanto de la campaña. 
        Lo siguiente que encontramos es un panel en el que se mostrarán los mensajes mandados en dicha campaña y una barra en la que podemos
        escribir el mensaje que queramos mandar, para mandarlo hay un botón a la derecha que mandará el mensaje al foro para que el 
        resto de usuarios lo puedan ver. Al final de la página encontramos un botón en el que pone "Tablero Virtual" el cual al pulsarlo te 
        llevará al <a href="#TV">tablero virtual</a> de la campaña.
    </p>
    <h2 id="TV">Tablero Virtual</h2>
    <img src = "img/boceto_tablero_virtual.jpeg" alt="VT_page" width= "360" height= "500">
    <p>
        En esta página los usuario podrán usar sus mapas y persoanjes para poder jugar. Habrá un panel cuadriculado en el que el DM puede poner sus mapas para la campaña y 
        donde podrá crear fichas que serbiran como NPCs. Cada personaje de los jugadores tendra su propia ficha la cual solo ellos o el DM pueden mover. 
        El DM sera el único que pueda mover las fichas de NPCs. A la derecha del panel habrá una bara lateral la cual solo el DM podrá ver e interactuar con ella. 
        En esta barra habrá un botón que creará una nueva ficha en el mapa, y una lista con todas las fichas en el mapa. Si el DM Pulsa sobre una ficha en el mapa o en la lista, 
        en la parte de abajo de la barra saldrá la informacion de cada ficha en formato de texto el cual el DM puede modificar cuando quiera.
        Debajo de este panel habrá un botón el cual el usuario DM sera el único que pueda interactuar con él, este botón le permitirá cambiar el mapa que aparece en el panel de arriba.
        Lo siguiente que encontramos es un panel en el que se mostrarán los mensajes mandados en dicha campaña y una barra en la que podemos
        escribir el mensaje que queramos mandar, para mandarlo hay un botón a la derecha que mandará el mensaje al foro para que el 
        resto de usuarios lo puedan ver.
    </p>
EOS;
require 'includes/vistas/commun/layout.php';