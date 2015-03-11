function cicloMisNegocios(){
	var cuadroOpciones = document.getElementById('visualizarOpciones');
	
	for(var i = 1; i <= numBssu; i++){
		var miNegocio = document.createElement('p');
		miNegocio.setAttribute('class', 'miNegocio quincePixeles');
		var miNegocioTexto = document.createTextNode(bssUser[i]);
		miNegocio.appendChild(miNegocioTexto);

		cuadroOpciones.appendChild(miNegocio);
	}		

	if(numBssu > 3){
		nuevaAltura = (numBssu + 3) * 2.5;
	$(cuadroOpciones).css('height', nuevaAltura + 'em');
	}
	cargado();
}


