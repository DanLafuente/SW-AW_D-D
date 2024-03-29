<?php

require_once 'includes/configuracion.php';


$tituloPagina = 'indexhola';
$contenidoPrincipal=<<<EOS
    
    <h1>DETALLES</h1>
    <p>
        Esta aplicación se centrará en la en la creación de personajes, mapas, la 
        interacción de los jugadores, ya sean los "masters" de la partida o los propios jugadores,
        através de un foro y hacer que los usuarios puedan jugar con nuestra aplicación.
    </p>
    <p>
        Lo que la hace única es la fusión de todas las herramientas que ofrecemos, ya que normalmente no 
        hay ninguna aplicación que ofrezca tanto como la nuestra y las pocas que lo hacen son de pago.
    </p>
    <h2>TIPOS DE USUARIOS</h2>
    <h3>USUARIOS NO REGISTRADOS</h3>
    <p>
        Estos usuarios sólo podrán ver información que hayan publicado el resto de usuarios, ya que no
        se le dejará usar ninguna de nuestras herraminetas, eso incluye el uso del foro, la creación de
        personajes y mapas y poder unirse a las campañas que hayan publicado otros usuarios.
    </p>
    <h3>USUARIOS REGISTRADOS</h3>
    <p>
        Estos usuarios podrán usar la creación y edición de sus propios personajes y mapas, el uso del
        foro y la publicación de tus propios mapas para poder jugar con otros usuarios.
    </p>
    <h3>MODERADORES</h3>
    <p>
        Estos usuarios podrán hacer lo mismo que un usuario registrado y la posibilidad de eliminar
        mensajes y los mapas que se hayan publicado en el foro. También podrán mandar mensajes
        importantes a todos los usuarios y la modificación de la información que habtá en nuestra
        aplicación.
    </p>
    <h2>FUNCIONALIDADES</h2>
    <h3>CREACIÓN Y EDICIÓN DE PERSONAJES</h3>
    <p>
        La creación de personajes la podrán hacer todos los usuarios a excepción de los no 
        registrados. Esta funcionalidad consiste en poder ajustar la raza, clase y estadísticas del
        personaje que quieras crear mediante un formulario que el usuario tendrá que ir rellenando. 
        Una vez creado el personaje, se podrán editar todos los personajes que haya 
        creado el usuario.
    </p>
    <h3>CREACIÓN Y EDICIÓN DE MAPAS</h3>
    <p>
        La creación de mapas, al igual que la de personajes, la usarán todos los usuarios excepto los
        no registrados. La creación de mapas consiste en una cuadrícula de altura y ancho modificable
        con un menú de objetos predeterminado, la cual el usuario pondrá los objetos a su gusto. Al 
        igual que con los personajes, se podrán editar los mapas que haya creado el usuario.
    </p>
    <h3>FORO</h3>
    <p>
        El foro lo podrán ver todos los usuarios, incluyendo los no registrados, pero estos últimos
        no podrán escribir en el. Su uso es un punto de encuentro entre todos los usuarios, además de
        que ayudarán a los moderadores a publicar mensajes importantes.
    </p>
    <h3>FORO DE CAMPAÑAS</h3>
    <p>
        El foro de campañas es muy parecido al foro normal, pero sólo podrán enviar por este foro las
        campañas de los jugadores. Al igual que el Foro, todos los usuarios podrán verlo, pero los no 
        registrados no podrán escribir. Una vez el usuario eliga en que campaña va a unirse, podrá ver 
        a todos los jugadores que estén en esa campaña, incluyendo al máster de la partida, que este 
        último tendrá la función extra de poder ir cambiando de mapas y poder poner las fichas de cada 
        jugador.
    </p>
    EOS;
    require 'includes/vistas/commun/layout.php';