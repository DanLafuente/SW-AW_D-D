<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Planificación</title>
        <link id="estilo" rel="stylesheet" type="text/css" href="csses/tabla.css" />
    </head>

    <body>
        <!--Encabezado-->
        <?php require 'includes/vistas/commun/cabecera.php'; ?>

        <!--Tabla de la planificación-->
        <!--Descripcion-->
        <table><caption>Planificaci&oacute;n del proyecto distribuido en semanas</caption> 
            <!--Encabezado-->
            <thead>
            <tr><th  rowspan=2 colspan=2>Tareas</th> 
                <th colspan=12>Semanas</th> 
            </tr> 
            <!--Columna de Semanas-->
            <tr><th>S1</th>   
                <th>S2</th>
                <th>S3</th>   
                <th>S4</th>
                <th>S5</th>   
                <th>S6</th>
                <th>S7</th>   
                <th>S8</th>
                <th>S9</th>   
                <th>S10</th>
                <th>S11</th>   
                <th>S12</th>
            </tr>
            </thead>
            <tbody>
            <!--Fila de Tareas-->
            <!--Tarea 1: Descripcion inicial de la idea-->
            <tr><th colspan=2>Descripcion de la idea</th>
                <td colspan=2>X</td> <!--Semanas 1 al 2-->
                <td colspan=2></td> <!--Semanas 3 al 4-->
                <td colspan=2></td> <!--Semanas 5 al 6-->
                <td colspan=2></td> <!--Semanas 7 al 8-->
                <td colspan=2></td> <!--Semanas 9 al 10-->
                <td colspan=2></td> <!--Semanas 11 al 12-->
            </tr>
            <!--Tarea 2: Bocetos-->
            <tr><th colspan=2>Bocetos</th>
                <td colspan=2>X</td> <!--Semanas 1 al 2-->
                <td colspan=2>X</td> <!--Semanas 3 al 4-->
                <td colspan=2></td> <!--Semanas 5 al 6-->
                <td colspan=2></td> <!--Semanas 7 al 8-->
                <td colspan=2></td> <!--Semanas 9 al 10-->
                <td colspan=2></td> <!--Semanas 11 al 12-->
            </tr>
            <!--Tarea 3: Httml-->
            <tr><th rowspan=13 colspan=1>Httml</th></tr><!--rowspan a de ser nElemenos+1 (12+1)-->
                <!--Tarea 3.1: Httml.index-->
                <tr><th>index</th>
                    <td colspan=2>X</td> <!--Semanas 1 al 2-->
                    <td colspan=2>X</td> <!--Semanas 3 al 4-->
                    <td colspan=2>X</td> <!--Semanas 5 al 6-->
                    <td colspan=2></td> <!--Semanas 7 al 8-->
                    <td colspan=2></td> <!--Semanas 9 al 10-->
                    <td colspan=2></td> <!--Semanas 11 al 12-->
                </tr>
                <!--Tarea 3.2: Httml.detalles-->
                <tr><th>detalles</th>
                    <td colspan=2>X</td> <!--Semanas 1 al 2-->
                    <td colspan=2>X</td> <!--Semanas 3 al 4-->
                    <td colspan=2></td> <!--Semanas 5 al 6-->
                    <td colspan=2></td> <!--Semanas 7 al 8-->
                    <td colspan=2></td> <!--Semanas 9 al 10-->
                    <td colspan=2></td> <!--Semanas 11 al 12-->
                </tr>
                <!--Tarea 3.2: Httml.bocetos-->
                <tr><th>bocetos</th>
                    <td colspan=2>X</td> <!--Semanas 1 al 2-->
                    <td colspan=2>X</td> <!--Semanas 3 al 4-->
                    <td colspan=2></td> <!--Semanas 5 al 6-->
                    <td colspan=2></td> <!--Semanas 7 al 8-->
                    <td colspan=2></td> <!--Semanas 9 al 10-->
                    <td colspan=2></td> <!--Semanas 11 al 12-->
                </tr>
                <!--Tarea 3.4: Httml.miembros-->
                <tr><th>miembros</th>
                    <td colspan=2>X</td> <!--Semanas 1 al 2-->
                    <td colspan=2>X</td> <!--Semanas 3 al 4-->
                    <td colspan=2>X</td> <!--Semanas 5 al 6-->
                    <td colspan=2>X</td> <!--Semanas 7 al 8-->
                    <td colspan=2>X</td> <!--Semanas 9 al 10-->
                    <td colspan=2></td> <!--Semanas 11 al 12-->  
                </tr>
                <!--Tarea 3.5: Httml.planificacion-->
                <tr><th>planificaci&oacute;n</th>
                    <td colspan=2></td> <!--Semanas 1 al 2-->
                    <td colspan=2>X</td> <!--Semanas 3 al 4-->
                    <td colspan=2></td> <!--Semanas 5 al 6-->
                    <td colspan=2></td> <!--Semanas 7 al 8-->
                    <td colspan=2></td> <!--Semanas 9 al 10-->
                    <td colspan=2></td> <!--Semanas 11 al 12-->
                </tr>
                <!--Tarea 3.6: Httml.contactos-->
                <tr><th>contactos</th>
                    <td colspan=2></td> <!--Semanas 1 al 2-->
                    <td colspan=2>X</td> <!--Semanas 3 al 4-->
                    <td colspan=2></td> <!--Semanas 5 al 6-->
                    <td colspan=2></td> <!--Semanas 7 al 8-->
                    <td colspan=2></td> <!--Semanas 9 al 10-->
                    <td colspan=2></td> <!--Semanas 11 al 12-->
                </tr>
                <!--Tarea 3.7: Httml.documentacion-->
                <tr><th>documentaci&oacute;n</th>
                    <td colspan=2></td> <!--Semanas 1 al 2-->
                    <td colspan=2></td> <!--Semanas 3 al 4-->
                    <td colspan=2>X</td> <!--Semanas 5 al 6-->
                    <td colspan=2></td> <!--Semanas 7 al 8-->
                    <td colspan=2></td> <!--Semanas 9 al 10-->
                    <td colspan=2></td> <!--Semanas 11 al 12-->
                </tr>
                <!--Tarea 3.8: Httml.usuarios-->
                <tr><th>usuarios</th>
                    <td colspan=2></td> <!--Semanas 1 al 2-->
                    <td colspan=2></td> <!--Semanas 3 al 4-->
                    <td colspan=2>X</td> <!--Semanas 5 al 6-->
                    <td colspan=2>X</td> <!--Semanas 7 al 8-->
                    <td colspan=2>X</td> <!--Semanas 9 al 10-->
                    <td colspan=2>X</td> <!--Semanas 11 al 12-->
                </tr>
                <!--Tarea 3.9: Httml.cookies-->
                <tr><th>cookies</th>
                    <td colspan=2></td> <!--Semanas 1 al 2-->
                    <td colspan=2></td> <!--Semanas 3 al 4-->
                    <td colspan=2>X</td> <!--Semanas 5 al 6-->
                    <td colspan=2>X</td> <!--Semanas 7 al 8-->
                    <td colspan=2>X</td> <!--Semanas 9 al 10-->
                    <td colspan=2></td> <!--Semanas 11 al 12-->
                </tr>
                <!--Tarea 3.10: Httml.personajes-->
                <tr><th>personajes</th>
                    <td colspan=2></td> <!--Semanas 1 al 2-->
                    <td colspan=2></td> <!--Semanas 3 al 4-->
                    <td colspan=2>X</td> <!--Semanas 5 al 6-->
                    <td colspan=2>X</td> <!--Semanas 7 al 8-->
                    <td colspan=2>X</td> <!--Semanas 9 al 10-->
                    <td colspan=2>X</td> <!--Semanas 11 al 12-->
                </tr>
                <!--Tarea 3.11: Httml.foro-->
                <tr><th>foro</th>
                    <td colspan=2></td> <!--Semanas 1 al 2-->
                    <td colspan=2></td> <!--Semanas 3 al 4-->
                    <td colspan=2>X</td> <!--Semanas 5 al 6-->
                    <td colspan=2>X</td> <!--Semanas 7 al 8-->
                    <td colspan=2>X</td> <!--Semanas 9 al 10-->
                    <td colspan=2></td> <!--Semanas 11 al 12-->
                </tr>
                <!--Tarea 3.12: Httml.campañas-->
                <tr><th>campañas</th>
                    <td colspan=2></td> <!--Semanas 1 al 2-->
                    <td colspan=2></td> <!--Semanas 3 al 4-->
                    <td colspan=2>X</td> <!--Semanas 5 al 6-->
                    <td colspan=2>X</td> <!--Semanas 7 al 8-->
                    <td colspan=2>X</td> <!--Semanas 9 al 10-->
                    <td colspan=2>X</td> <!--Semanas 11 al 12-->
                </tr>
            <!--Tarea 4: CSS-->
            <tr><th rowspan=6 colspan=1>CSS</th></tr><!--rowspan a de ser nElemenos+1 (5+1)-->
                <!--Tarea 4.1: CSS.index-->
                <tr><th>index</th>
                    <td colspan=2></td> <!--Semanas 1 al 2-->
                    <td colspan=2>X</td> <!--Semanas 3 al 4-->
                    <td colspan=2></td> <!--Semanas 5 al 6-->
                    <td colspan=2></td> <!--Semanas 7 al 8-->
                    <td colspan=2></td> <!--Semanas 9 al 10-->
                    <td colspan=2></td> <!--Semanas 11 al 12-->
                </tr>
                <!--Tarea 4.2: CSS.colores-->
                <tr><th>colores</th>
                    <td colspan=2></td> <!--Semanas 1 al 2-->
                    <td colspan=2>X</td> <!--Semanas 3 al 4-->
                    <td colspan=2></td> <!--Semanas 5 al 6-->
                    <td colspan=2></td> <!--Semanas 7 al 8-->
                    <td colspan=2></td> <!--Semanas 9 al 10-->
                    <td colspan=2></td> <!--Semanas 11 al 12-->
                </tr>
                <!--Tarea 4.3: CSS.tablas-->
                <tr><th>tablas</th>
                    <td colspan=2></td> <!--Semanas 1 al 2-->
                    <td colspan=2>X</td> <!--Semanas 3 al 4-->
                    <td colspan=2>X</td> <!--Semanas 5 al 6-->
                    <td colspan=2></td> <!--Semanas 7 al 8-->
                    <td colspan=2></td> <!--Semanas 9 al 10-->
                    <td colspan=2></td> <!--Semanas 11 al 12-->
                </tr>
                <!--Tarea 4.4: CSS.logica-->
                <tr><th>logica</th>
                    <td colspan=2></td> <!--Semanas 1 al 2-->
                    <td colspan=2></td> <!--Semanas 3 al 4-->
                    <td colspan=2>X</td> <!--Semanas 5 al 6-->
                    <td colspan=2>X</td> <!--Semanas 7 al 8-->
                    <td colspan=2>X</td> <!--Semanas 9 al 10-->
                    <td colspan=2>X</td> <!--Semanas 11 al 12-->
                </tr>
                <!--Tarea 4.5: CSS.general-->
                <tr><th>general</th>
                    <td colspan=2></td> <!--Semanas 1 al 2-->
                    <td colspan=2></td> <!--Semanas 3 al 4-->
                    <td colspan=2>X</td> <!--Semanas 5 al 6-->
                    <td colspan=2>X</td> <!--Semanas 7 al 8-->
                    <td colspan=2>X</td> <!--Semanas 9 al 10-->
                    <td colspan=2>X</td> <!--Semanas 11 al 12-->
                </tr>
            </tbody>
        </table>
    </body>
</html>