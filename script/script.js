i=1;
function cargaImagenes(){
	i++;
	if(i > 4) i = 1;
	
	document.getElementById('fotos').style.backgroundImage = "url(img/img000"+ i +".png)"
	marcarOpt(i);
}

function marcarOpt(opt){
	document.getElementById('im1').className = "";
	document.getElementById('im2').className = "";
	document.getElementById('im3').className = "";
	document.getElementById('im4').className = "";
	
	document.getElementById('im'+ opt).className = "slc";
}

function inicio(){
	ini = setInterval("cargaImagenes()", 3500);
		
	document.getElementById('im1').onclick = function(){
		marcarOpt(1);
		document.getElementById('fotos').style.backgroundImage = "url(img/img0001.png)";
		i=1;
		
		clearInterval(ini);
		ini = setInterval("cargaImagenes()", 3500);
	};	
	document.getElementById('im2').onclick = function(){
		marcarOpt(2);
		document.getElementById('fotos').style.backgroundImage = "url(img/img0002.png)";
		i=2;
		
		clearInterval(ini);
		ini = setInterval("cargaImagenes()", 3500);
	};	
	document.getElementById('im3').onclick = function(){
		marcarOpt(3);
		document.getElementById('fotos').style.backgroundImage = "url(img/img0003.png)";
		i=3;
		
		clearInterval(ini);
		ini = setInterval("cargaImagenes()", 3500);
	};	
	document.getElementById('im4').onclick = function(){
		marcarOpt(4);
		document.getElementById('fotos').style.backgroundImage = "url(img/img0004.png)";
		i=4;
		
		clearInterval(ini);
		ini = setInterval("cargaImagenes()", 3500);
	};
}

