<?php

function buildFormularioSubrazaEnano()
{
    return <<<EOS
    <form action="http://localhost/SW-AW_D-D/crear_personaje_paso_final.php" method="post">
        <p>
    <label>Subraza</label>
    <select name='Subraza'>
        <option value='enano de las colinas'selected>Enano de las colinas</option>
        <option value='enano de las montañas'>Enano de las Montañas</option>
    </select>
    </p>
    EOS;
}

function buildFormularioSubrazaElfo()
{
    return <<<EOS
    <form action="http://localhost/SW-AW_D-D/crear_personaje_paso_final.php" method="post">
        <p>
        <label>Subraza</label>
        <select name='Subraza'>
            <option value='alto elfo'selected>Alto Elfo</option>
            <option value='elfo de los bosques'>Elfo de los Bosques</option>
            <option value='elfo oscuro'>Elfo Oscuro (Drow)</option>
        </select>
        </p>
    EOS;
}
function buildFormularioSubrazaDraconico()
{
    return <<<EOS
    <form action="http://localhost/SW-AW_D-D/crear_personaje_paso_final.php" method="post">
        <p>
        <label>Ascendencia Dracónica</label>
        <select name='Subraza'>
            <option value='azul'selected>Azul (relámpago)</option>
            <option value='blanco'>Blanco (Frío)</option>
            <option value='bronce'>Bronce (relámpago)</option>
            <option value='cobre'>Cobre (Ácido)</option>
            <option value='laton'>Láton (Fuego)</option>
            <option value='negro'>Negro (Ácido)</option>
            <option value='oro'>Oro (Fuego)</option>
            <option value='plata'>Plata (Frío)</option>
            <option value='rojo'>Rojo (Fuego)</option>
            <option value='verde'>Verde (Veneno)</option>

        </select>
        </p> 
    EOS;
}
function buildFormularioSubrazaGnomo()
{
    return <<<EOS
    <form action="http://localhost/SW-AW_D-D/crear_personaje_paso_final.php" method="post">
        <p>
    <label>Subraza</label>
    <select name='Subraza'>
        <option value='gnomo del bosque'selected>Gnomo del Bosque</option>
        <option value='gnomo de la roca'>Gnomo de la Roca</option>
    </select>
    </p>
    EOS;
}
function buildFormularioSubrazaMediano()
{
    return <<<EOS
    <form action="http://localhost/SW-AW_D-D/crear_personaje_paso_final.php" method="post">
        <p>
        <label>Subraza</label>
        <select name='Subraza'>
            <option value='mediano piesligeros'selected>Mediano Piesligeros</option>
            <option value='mediano fornido'>Mediano Fornido</option>
        </select>
        </p>
    EOS;
}

function buildFormularioSubclaseBrujo()
{
    return <<<EOS
    <form action="http://localhost/SW-AW_D-D/crear_personaje_paso_final.php" method="post">
        <p>
        <label>Patrón de otro Mundo</label>
        <select name='Patron'>
            <option value='archihada'selected>El Archihada</option>
            <option value='diablo'>El Diablo</option>
            <option value='gran antiguo'> El Gran Antiguo</option>
        </select>
        </p>
    EOS;
}

function buildFormularioSubclaseBrujo_N3()
{
    return <<<EOS
    <form action="http://localhost/SW-AW_D-D/crear_personaje_paso_final.php" method="post">
        <p>
            <label>Don del Pacto</label>
            <select name='Subclase'>
                <option value='pacto de la cadena'selected>Pacto de la Cadena</option>
                <option value='pacto de la espada'>Pacto de la Espada</option>
                <option value='pacto del tomo'>Pacto del Tomo</option>
            </select>
        </p> 
    EOS;
}

function buildFormularioSubclaseBarbaro()
{   
    return <<<EOS
    <form action="http://localhost/SW-AW_D-D/crear_personaje_paso_final.php" method="post">
        <p>Escoja 2 habilidades distintas:</p>
            
            <p>
            <label>Habilidad 1</label>
            <select name='Habilidad1'>
                <option value='atletismo'selected>Atletismo</option>
                <option value='intimidacion'>Intimidación</option>
                <option value='naturaleza'>Naturaleza</option>
                <option value='percepcion'>Percepción</option>
                <option value='supervivencia'>Supervivencia</option>
                <option value='manejo de animales'>Manejo de Animales</option>

            </select>
            </p> 
            <p>
            <label>Habilidad 2</label>
            <select name='Habilidad2'>
                <option value='atletismo'selected>Atletismo</option>
                <option value='intimidacion'>Intimidación</option>
                <option value='naturaleza'>Naturaleza</option>
                <option value='percepcion'>Percepción</option>
                <option value='supervivencia'>Supervivencia</option>
                <option value='manejo de animales'>Manejo de Animales</option>

            </select>
            </p>
            <p>Equipamiento</p>
            <p>
            <label>Arma Principal</label>
            <select name='Equipamiento1'>
                <option value='Gran hacha'selected>Gran hacha</option>
                <option value='Cualquier arma marcial cuerpo a cuerpo'>Cualquier arma marcial cuerpo a cuerpo</option>
            </select>
            </p>
            <p>
            <label>Arma Secundaria</label>
            <select name='Equipamiento2'>
                <option value='Dos hachas de mano'selected>Dos hachas de mano</option>
                <option value='Cualquier arma simple'>Cualquier arma simple</option>
            </select>
            </p>
    EOS;
}

function buildFormularioSubclaseBarbaro_N3()
{
    return <<<EOS
    <form action="http://localhost/SW-AW_D-D/crear_personaje_paso_final.php" method="post">
        <p>
            <label>Sendas Primarias</label>
            <select name='Subclase'>
                <option value='senda del berserker'selected>Senda del Berserker</option>
                <option value='senda del guerrero totemico oso'>Senda del Guerrero Totémico (Oso)</option>
                <option value='senda del guerrero totemico aguila'>Senda del Guerrero Totémico (Águila)</option>
                <option value='senda del guerrero totemico lobo'>Senda del Guerrero Totémico (Lobo)</option>
            </select>
        </p>
    EOS;
}

function buildFormularioSubclaseBardo_N3()
{
    return <<<EOS
    <form action="http://localhost/SW-AW_D-D/crear_personaje_paso_final.php" method="post">
        <p>
            <label>Colegio de Bardo</label>
            <select name='Subclase'>
                <option value='colegio del conocimiento'selected>Colegio del Conocimiento</option>
                <option value='colegio del valor'>Colegio del Valor</option>
            </select>
        </p>
    EOS;
}

function buildFormularioButton(){
    return <<<EOS
    <form action="http://localhost/SW-AW_D-D/crear_personaje_paso_final.php" method="post">
        <input type="submit" value="Enviar" />
    EOS;
}
