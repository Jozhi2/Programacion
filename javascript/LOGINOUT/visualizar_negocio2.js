function visualizarNegocio2(){

	console.log(datoPicado);




	var encabezado = document.getElementById('encabezado');

	var cubrePantallaVisualizarNegocio = document.createElement('div');
	cubrePantallaVisualizarNegocio.setAttribute('id', 'cubrePantallaVisualizarNegocio');
	document.body.insertBefore(cubrePantallaVisualizarNegocio, encabezado); 

	var cajaCentradaVisualizarNegocio = document.createElement('div');
	cajaCentradaVisualizarNegocio.setAttribute('id', 'cajaCentradaVisualizarNegocio');
	cajaCentradaVisualizarNegocio.setAttribute('class', 'quincePixeles');
	document.body.insertBefore(cajaCentradaVisualizarNegocio, encabezado); 

	var negocioParteIzquierda = document.createElement('div');
	negocioParteIzquierda.setAttribute('id', 'negocioParteIzquierda');
	negocioParteIzquierda.setAttribute('class', 'quincePixeles');
	cajaCentradaVisualizarNegocio.appendChild(negocioParteIzquierda); 

	var negocioParteDerecha = document.createElement('figure');
	negocioParteDerecha.setAttribute('id', 'negocioParteDerecha');
	negocioParteDerecha.setAttribute('class', 'quincePixeles');
	cajaCentradaVisualizarNegocio.appendChild(negocioParteDerecha); 

	var imagenPrincipal = document.createElement('img');
	imagenPrincipal.setAttribute('id', 'imagenPrincipal');
	imagenPrincipal.setAttribute('class', 'imagenPrincipal');
	imagenPrincipal.setAttribute('src', imgNegocio1[datoPicado]);
	negocioParteDerecha.appendChild(imagenPrincipal); 

	var nombreNegocio = document.createElement('p');
	nombreNegocio.setAttribute('id', 'nombreNegocio');
	nombreNegocio.setAttribute('class', 'nomNegocio quincePixeles');
	nombreNegocioTexto = document.createTextNode(nombreneg1[datoPicado]);
	nombreNegocio.appendChild(nombreNegocioTexto);
	negocioParteIzquierda.appendChild(nombreNegocio); 


	var calificacion = document.createElement('figure');
	calificacion.setAttribute('id', 'calificacionFigure');
	calificacion.setAttribute('class', 'calificacionF quincePixeles');
	calificacionTexto = document.createTextNode(valoracionNeg1[datoPicado]);
	negocioParteIzquierda.appendChild(calificacion); 
	calificacion.appendChild(calificacionTexto);

	var estrellas = document.createElement('img');
	estrellas.setAttribute('id', 'estrellas');
	estrellas.setAttribute('class', 'imEstrellas quincePixeles');
	estrellas.setAttribute('src', '../objetos/busqueda/estrellas.png');
	calificacion.appendChild(estrellas); 

	var direccion = document.createElement('p');
	direccion.setAttribute('id', 'direccion');
	direccion.setAttribute('class', 'quincePixeles');
	direccionTexto = document.createTextNode(dirNegocio1[datoPicado]);
	negocioParteIzquierda.appendChild(direccion); 
	direccion.appendChild(direccionTexto);

	var ciudadPais = document.createElement('p');
	ciudadPais.setAttribute('id', 'ciudadPais');
	ciudadPais.setAttribute('class', 'quincePixeles');
	ciudadTexto = document.createTextNode('ciudad');
	negocioParteIzquierda.appendChild(ciudadPais); 
	ciudadPais.appendChild(ciudadTexto);

	var sitioWeb = document.createElement('p');
	sitioWeb.setAttribute('id', 'sitioWeb');
	sitioWeb.setAttribute('class', 'quincePixeles');
	sitioWebTexto = document.createTextNode(webNeg1[datoPicado]);
	negocioParteIzquierda.appendChild(sitioWeb); 
	sitioWeb.appendChild(sitioWebTexto);

	var correo = document.createElement('p');
	correo.setAttribute('id', 'correo');
	correo.setAttribute('class', 'quincePixeles');
	correoTexto = document.createTextNode(correoNeg1[datoPicado]);
	negocioParteIzquierda.appendChild(correo);
	correo.appendChild(correoTexto);

	var telefono = document.createElement('p');
	telefono.setAttribute('id', 'telefono');
	telefono.setAttribute('class', 'quincePixeles');
	telefonoTexto = document.createTextNode('311-555-5554');
	negocioParteIzquierda.appendChild(telefono); 
	telefono.appendChild(telefonoTexto);

	var descripcion = document.createElement('p');
	descripcion.setAttribute('id', 'descripcion');
	descripcion.setAttribute('class', 'quincePixeles');
	descripcionTexto = document.createTextNode(desNegocio1[datoPicado]);
	negocioParteIzquierda.appendChild(descripcion); 
	descripcion.appendChild(descripcionTexto);

	var flechaIzquierda = document.createElement('figure');
	flechaIzquierda.setAttribute('id', 'flechaIzquierda');
	flechaIzquierda.setAttribute('class', 'quincePixeles');
	var imagenFlechaIzquierda = document.createElement('img');
	imagenFlechaIzquierda.setAttribute('src','../objetos/flechas/flechaIzquierda.png');
	flechaIzquierda.appendChild(imagenFlechaIzquierda);
	document.body.insertBefore(flechaIzquierda, cajaCentradaVisualizarNegocio); 

	var flechaDerecha = document.createElement('figure');
	flechaDerecha.setAttribute('id', 'flechaDerecha');
	flechaDerecha.setAttribute('class', 'quincePixeles');
	var imagenFlechaDerecha = document.createElement('img');
	imagenFlechaDerecha.setAttribute('src','../objetos/flechas/flechaDerecha.png');
	flechaDerecha.appendChild(imagenFlechaDerecha);
	document.body.insertBefore(flechaDerecha, cajaCentradaVisualizarNegocio); 

	$('#flechaIzquierda').mouseover(function(){
		imagenFlechaIzquierda.setAttribute('src','../objetos/flechas/flechaIzquierdaHover.png');
		document.body.style.cursor = 'pointer';
	});

	$('#flechaIzquierda').mouseout(function(){
		imagenFlechaIzquierda.setAttribute('src','../objetos/flechas/flechaIzquierda.png');
		document.body.style.cursor = 'auto';
	});

	$('#flechaDerecha').mouseover(function(){
		imagenFlechaDerecha.setAttribute('src','../objetos/flechas/flechaDerechaHover.png');
		document.body.style.cursor = 'pointer';
	});

	$('#flechaDerecha').mouseout(function(){
		imagenFlechaDerecha.setAttribute('src','../objetos/flechas/flechaDerecha.png');
		document.body.style.cursor = 'auto';
	});


	cargado();
}



function salirVisualizarNegocio(){
	document.body.removeChild(cubrePantallaVisualizarNegocio);
	document.body.removeChild(cajaCentradaVisualizarNegocio);
	document.body.removeChild(flechaIzquierda);
	document.body.removeChild(flechaDerecha);
}