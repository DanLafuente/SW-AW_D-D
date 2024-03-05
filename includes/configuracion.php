<?php
/* */
/* Parámetros de configuración de la aplicación */
/* */

// Parámetros de configuración generales
define('RUTA_APP', '/SW-AW_D-D');
define('RUTA_IMGS', RUTA_APP . '/img');
define('RUTA_CSS', RUTA_APP . '/csses');
define('RUTA_SRS', RUTA_APP . '/includes/src');
    define('RUTA_Usuario', RUTA_SRS . '/Usuarios');
define('RUTA_VIEW', RUTA_APP . '/includes/vistas'); 
//define('RUTA_JS', RUTA_APP . '/js');
define('INSTALADA', false);

// Parámetros de configuración de la BD
define('BD_HOST', 'localhost');
define('BD_NAME', '');
define('BD_USER', '');
define('BD_PASS', '');


/* */
/* Utilidades básicas de la aplicación */
/* */
require_once __DIR__ . '/src/Utils.php';

// Inicialización de la aplicación 
if (!INSTALADA) {
	Utils::paginaError(502, 'Error', 'Oops', 'La aplicación no está configurada. Tienes que modificar el fichero config.php');
}

// Configuración de Codificación y timezone
ini_set('default_charset', 'UTF-8');
setLocale(LC_ALL, 'es_ES.UTF.8');
date_default_timezone_set('Europe/Madrid');


/* */
/* Clases y Traits de la aplicación */
/* */

/* */
/* Clases que simulan una BD almacenando los datos en memoria */
/* */ 

/**/ 
/* Configuramos e inicializamos la sesión para todas las peticiones*/
/* */

/* */
/* Inicialización de las clases que simulan una BD en memoria */
/* */

/* */
/* Clases que usan una BD para almacenar el estado */
/* */