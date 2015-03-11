function visualizarOpciones(){

	var encabezado = document.getElementById('encabezado');

	var cubrePantalla = document.createElement('div');
	cubrePantalla.setAttribute('id', 'cubrePantallaOpciones');
	var triangulo = document.createElement('figure');
	triangulo.setAttribute('id', 'triangulo');
	triangulo.setAttribute('class','triangulo quincePixeles');
	var imagenTriangulo = document.createElement('img');
	imagenTriangulo.setAttribute('src', '../objetos/LOGIN/triangulo.png');
	triangulo.appendChild(imagenTriangulo);

	var visualizarOpciones = document.createElement('div');
	visualizarOpciones.setAttribute('id', 'visualizarOpciones');
	visualizarOpciones.setAttribute('class', 'quincePixeles');
	
	var cerrarSesion = document.createElement('p');
	cerrarSesion.setAttribute('id', 'cerrarSesion');
	var cerrarSesionTexto = document.createTextNode('Cerrar sesión');
	cerrarSesion.appendChild(cerrarSesionTexto);

	var crearNegocio = document.createElement('p');
	var crearNegocioTexto = document.createTextNode('Crear negocio');
	crearNegocio.setAttribute('id', 'crearNegocioTexto');
	crearNegocio.appendChild(crearNegocioTexto);

	var hr = document.createElement('div');
	hr.setAttribute('id', 'miHr');

	var promocionarCampaña = document.createElement('p');
	promocionarCampaña.setAttribute('id', 'promocionarCampana');
	var textoPromocionarCampaña = document.createTextNode('Promocionar campaña');
	promocionarCampaña.appendChild(textoPromocionarCampaña);

	visualizarOpciones.appendChild(cerrarSesion);
	visualizarOpciones.appendChild(crearNegocio);
	visualizarOpciones.appendChild(hr);
	visualizarOpciones.appendChild(promocionarCampaña);

	document.body.insertBefore(cubrePantalla, encabezado); 
	document.body.insertBefore(triangulo, encabezado); 
	document.body.insertBefore(visualizarOpciones, encabezado); 

	cargado();
}

function salirVisualizarOpciones(){
	var cubrePantalla = document.getElementById('cubrePantallaOpciones');
	var triangulo = document.getElementById('triangulo');
	var visualizarOpciones = document.getElementById('visualizarOpciones');

	document.body.removeChild(triangulo); 
	document.body.removeChild(visualizarOpciones); 
	document.body.removeChild(cubrePantalla); 
}

