k=0;
function slid(direccio){
	imatge = document.getElementsByClassName("fotosli");
	for(i=0;i<imatge.length;i++){
		imatge[i].style.opacity = 0;
	}	
	k = k+direccio;
	if(k==-1){k=imatge.length-1;}
	if(k==imatge.length){k=0;}
	imatge[k].style.opacity = 1;
	
	sumoi = window.innerWidth;
	if(sumoi<=1000){
		clearInterval(slid);
	}
}
/*
function parar(){
	sumoi = window.innerWidth;
	if(sumoi<=1000){
		break(slid);
	}
}
function parar(){
	clearInterval(slid);
	slid = null;
}

function marca(senyal){
	if(senyal.style.color === "black"){
		senyal.style.color = "white";
	}else{
	senyal.style.color = "black";
	}
	if(senyal.style.backgroundColor === "white"){
		senyal.style.backgroundColor = "silver";
	}else{
		senyal.style.backgroundColor = "white";
	}
	if(senyal.style.borderBottom === "0.2vw solid brown"){
		senyal.style.borderBottom = "";
	}else{
		senyal.style.borderBottom = "0.2vw solid brown";
	}
}*/

function reprod(iniciar){
	document.getElementById(iniciar).style.zIndex = 4;
}

function desplegarMenu(){
	menu = document.getElementById("nav1");
	if(menu.style.height == "78vw"){
		menu.style.height = "12vw";
	}else{
		menu.style.height = "78vw";
	}
}