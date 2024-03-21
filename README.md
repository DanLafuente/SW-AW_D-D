# SW-AW_D-D

Anotciones:
    1. Cuando se termine la BD modificar sus cosos en 'configuracion.php' (Varias).
    2. Tocar pagerror(); en Utils => hablar de la forma general de las paginas.

Barra para escribir texto, boton de enviar. -> LOGIN
BD de foro:

	1. Mesaje - UsuarioID
	2. Mensaje - UsuarioID

Cada xTiempo preguntar BD size, si sizeBD != sizeCarga => ActualizarForo => sizeBD == sizeCarga; 
	-> Mesaje No Borrado por ActualizarPag!!!
	-> Enviar mensaje => ActualizarForo 
 
FORMA:

	Cabecera -> layout
	-------------------------------
	FORO -> Mensajes
	-------------------------------
	FOROENVIAR -> barra de texto y boton enviar -> footer

FOROS:
	
	ProcesarForo -> BD cargar los Foros (Siempre el general en el 1. -> Este no se puede eliminar)
	CargarForo -> Cargar en la base de datos del Foro
