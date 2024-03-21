<?php
/* */
/* Parámetros de configuración de la aplicación */
/* */

// Parámetros de configuración generales
define('RUTA_APP', '/Dungeons_Hub/SW-AW_D-D-1');
define('RAIZ_APP', dirname(__DIR__));
define('RUTA_IMGS', RUTA_APP . '/img');
define('RUTA_CSS', RUTA_APP . '/csses');
define('RUTA_SRS', RUTA_APP . '/includes/src');
define('RUTA_Usuario', RUTA_SRS . '/Usuarios');
define('RUTA_personajes', RUTA_SRS . '/Personajes');
define('RUTA_VIEW', RAIZ_APP . '/includes/vistas'); 
define('INSTALADA', true);

// Parámetros de configuración de la BD
define('BD_HOST', 'localhost');
define('BD_NAME', 'SW-AW_D-D');
define('BD_USER', 'SW-AW_D-D');
define('BD_PASS', 'SW-AW_D-D');


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
require_once 'src/Arrays.php';
require_once 'src/traits/MagicProperties.php';

/**/ 
/* Configuramos e inicializamos la sesión para todas las peticiones*/
/* */
session_start([
	'cookie_path' => RUTA_APP, // Para evitar problemas si tenemos varias aplicaciones en htdocs
]);


/* */
/* Clases que usan una BD para almacenar el estado */
/* */
require_once 'src/BD.php';
require_once 'src/Usuarios/usuarioBD.php';