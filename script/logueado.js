var maxfps = 60;
var drawInterval = 1 / maxfps * 1000;

var temporizador;
var juego;

function inicio(){

	juego=new juego();
	
	
	//Enlazamos los eventos de teclado
	document.onkeydown=function(e){
		juego.pulsarTecla(e);
	};
	
	juego.constructor();
	
	
	temporizador=setInterval("juego.motor();",drawInterval);
}
