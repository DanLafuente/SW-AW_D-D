<?php

require_once 'includes/configuracion.php';


$tituloPagina = 'indexhola';
$contenidoPrincipal=<<<EOS
    <section>
            <h1>Contactos</h1>
        
            <p> El oráculo hablará a los dioses por tí. Muestra tus suplicas.</p>
            <form action="mailto:correoDH@ejemplo.com">
                <p><label for="Nombre">Nombre:</label><br>
                    <input type="text" id="Nombre" name="Contname" value=""></p>

                <p><label for="correoinvocador">Email del contacto:</label><br>
                <input type="email" id="correoinvocador" name="Conte-m" value=""></p>

                <p><label>Motivo de invocación:</label>
                <input type="radio" id="evaluacion" name="Contmotive" value="Evaluacion">
                <label for="evaluacion">Evaluacion</label>
                <input type="radio" id="critica" name="Contmotive" value="Crítica">
                <label for="critica">Crítica</label>
                <input type="radio" id="sugerencias" name="Contmotive" value="Sugerencia">
                <label for="sugerencias">Sugerencia</label></p>

                <p><input type="checkbox" id="terminos" value="terminos" required>
                <label for="terminos"> He leido todos los términos y condiciones.</label></p>

                <p><label for="consulta">Consulta:</label>
                    <textarea id="consulta" name="consulta" rows="8" cols = "100"></textarea>
                


            </form>
    </section>
    EOS;
    require 'includes/vistas/commun/layout.php';