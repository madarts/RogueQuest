<?php
session_start();

include('config/config.php');
include('fnc/fnc.php');
include('fnc/controlModulos.php');

controlValidacion();

?>
<!DOCTYPE html>

<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        
        <title>Rogue Quest!</title>
        
        <?php controlCSS(); ?>
        
        <?php controlJS(); ?>
    </head>

    <body id="contenido" onload="inicio();">
        
        <a href="./"><img src="img/Logo.png" class="logo" /></a>
        
        <?php contenidoWeb(); ?>
        
    </body>
</html>