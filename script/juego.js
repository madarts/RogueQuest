
function juego(){
	this.modoJuego = 0;
	
	this.ctx;
	
	this.canvas;
	
	
	this.sizeY;
	this.sizeY;
	
	this.constructor=function(){
		this.canvas = document.getElementById('canvas');
		
		this.ctx = this.canvas.getContext('2d');

		this.sizeX = this.canvas.width;
		this.sizeY = this.canvas.height;
		
		this.modoJuego = 1;
	};
	
	
	
	
	
	this.mapa=function(idCanvas){
		for(i=0;i<31;i++){
			this.ctx.strokeStyle = "#333";
		    //Inicio de camino
		    this.ctx.beginPath();
		    this.ctx.moveTo(0+(i*20),0);
		    this.ctx.lineTo(0+(i*20),425);
		    //Trazar linea
		    this.ctx.stroke();
		}
		for(e=0;e<11;e++){
			this.ctx.strokeStyle = "#333";
		    //Inicio de camino
		    this.ctx.beginPath();
		    this.ctx.moveTo(0,0);
		    this.ctx.lineTo(150,300);
		    //Trazar linea
		    this.ctx.stroke();
		}
	};
	
	
	
	
	
	
	
	
	
	

	this.pulsarTecla=function(e){
		
	};
	
	
	
	this.motor=function(){
		this.ctx.clearRect(0,0,this.sizeX,this.sizeY);
		
		switch(this.modoJuego){
			case 1: this.mapa(); break;
		}
	};
}
