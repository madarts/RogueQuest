<?php

function controlCSS(){
    if(!isset($_SESSION['user']) OR !isset($_SESSION['pass'])){
        echo '<link href="style/style.css" rel="stylesheet" type="text/css" />';
    }
    else
        echo '<link href="style/logueado.css" rel="stylesheet" type="text/css" />';
        
}

function controlJS(){
    if(!isset($_SESSION['user']) OR !isset($_SESSION['pass'])){
        echo '<script type="text/javascript" src="script/script.js"></script>';
    }
    else{
        echo '<script type="text/javascript" src="script/logueado.js"></script>';
        echo '<script type="text/javascript" src="script/motor.js"></script>';
        echo '<script type="text/javascript" src="script/juego.js"></script>';
	}
        
}


function contenidoWeb(){
    if(!isset($_SESSION['user']) OR !isset($_SESSION['pass'])){
        include("modulos/inicio/index.php");
    }
    else
        include("modulos/logueado/index.php");
}