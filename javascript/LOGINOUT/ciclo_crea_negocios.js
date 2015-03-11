function cicloCreaNegocio(){
	var secundaria = document.getElementById('secundaria');

	for(var i = 1; i <= number; i++){
	var negocio = document.createElement('article');
	
	fontSizeCero = document.createElement('div');
	fontSizeCero.setAttribute('class', 'fontSizeCero');
	
	informacionNegocio = document.createElement('div');
	informacionNegocio.setAttribute('class', 'informacionNegocio quincePixeles');
	nombreNegocio = document.createElement('p');
	nombreNegocio.setAttribute('class', 'nombreNegocio diecisietePixeles')
	nombreNegocioTexto = document.createTextNode(nombreneg[i]);
	nombreNegocio.appendChild(nombreNegocioTexto);
	direccion = document.createElement('p');
	direccion.setAttribute('class', 'direccion catorcePixeles')
	direccionTexto = document.createTextNode(dirNegocio[i]);
	direccion.appendChild(direccionTexto);
	descripcion = document.createElement('p');
	descripcion.setAttribute('class', 'direccion catorcePixeles')
	descripcionTexto = document.createTextNode(desNegocio[i]);
	descripcion.appendChild(descripcionTexto);
	figureImagenEstrellas = document.createElement('figure');
	figureImagenEstrellas.setAttribute('class', 'figureImagenEstrellas quincePixeles');
	imagenEstrellas = document.createElement('img');
	imagenEstrellas.setAttribute('src', '../objetos/busqueda/estrellas.png');
	figureImagenEstrellas.appendChild(imagenEstrellas);
	
	informacionNegocio.appendChild(nombreNegocio);
	informacionNegocio.appendChild(direccion);
	informacionNegocio.appendChild(descripcion);
	informacionNegocio.appendChild(figureImagenEstrellas)

	fotoNegocio = document.createElement('figure');
	fotoNegocio.setAttribute('class', 'fotoNegocio quincePixeles');
	imagenNegocio = document.createElement('img');
	imagenNegocio.setAttribute('src', imgNegocio[i]);
	fotoNegocio.appendChild(imagenNegocio);

	negocio.appendChild(fontSizeCero);
	fontSizeCero.appendChild(informacionNegocio);
	fontSizeCero.appendChild(fotoNegocio);

	if(i%2 == 0){
		negocio.setAttribute('class', 'negocioDerecho quincePixeles negocio');
	}
	else{
		negocio.setAttribute('class', 'negocioIzquierdo quincePixeles negocio');
	}
	
	secundaria.appendChild(negocio);
	}

	cargado();
}

