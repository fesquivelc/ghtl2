

function mostrar(){
  
    var elemento = document.getElementById('galery').getElementsByTagName('li');
	var pos = 0;
	for (var i=0; i<elemento.length; i++) {
      /*alert("Hola");*/
        /*alert (elemento[0]);*/
        if (elemento[i].className == "selected") {
			elemento[i].className = "noselected";
			pos = i;
		}
    }
    /** Boton atras*/
    if(this.id == "atras" && pos > 0){
        elemento[pos-1].className = "selected";
    } else if(this.id == "atras"){
        elemento[elemento.length-1].className = "selected";
    }
    /** Boton avanzar*/
    if(this.id == "avanzar" && pos < elemento.length-1){
        elemento[pos+1].className = "selected";
    } else if(this.id == "avanzar"){
        elemento[0].className="selected";
    }
    return false;
};
    
var desplazar = function(){
    var nav = document.querySelectorAll(".flecha");
    for(var i=0; i<nav.length;i++){
        nav[i].onclick = mostrar;
    }
};
window.onload = function (){
	new desplazar();
};     /*document.getElementById('imgMostrar').src='images/paisajes/Paisaje2.jpg';
        document.getElementById('mod').style.display="block"*/
    
    /*document.getElementById('imgMostrar').src='images/paisajes/Paisaje2.jpg';
    document.getElementById('mod').style.display="block";*/

