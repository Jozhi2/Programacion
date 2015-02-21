function crearNegocio(){
	var encabezado = document.getElementById('encabezado');

	var cubrePantallaCrearNegocio = document.createElement('div');
	cubrePantallaCrearNegocio.setAttribute('id', 'cubrePantallaCrearNegocio');

	var cajaCentrada = document.createElement('div');
	cajaCentrada.setAttribute('id', 'pantallaCentradaCrearNegocio');
	cajaCentrada.setAttribute('class', 'quincePixeles');

	var titulo = document.createElement('p');
	var textoTitulo =  document.createTextNode('REGISTRA TU NEGOCIO');
	titulo.setAttribute('id', 'tituloRegistroNegocios');
	titulo.setAttribute('class', 'veinticincoPixeles');
	titulo.appendChild(textoTitulo);
	cajaCentrada.appendChild(titulo); 

	var formulario = document.createElement('form');
	formulario.setAttribute('id', 'formularioRegistroNegocios');
	formulario.setAttribute('class', 'quincePixeles');
	formulario.setAttribute('method', 'post');
	formulario.setAttribute('action', '../php/usuarios/registrobss.php');
	cajaCentrada.appendChild(formulario); 

	var inputNombre = document.createElement('input');
	inputNombre.setAttribute('class', 'inputFormularioNegocios quincePixeles');
	inputNombre.setAttribute('placeholder', 'Nombre');
	inputNombre.setAttribute('name', 'namebss');
	formulario.appendChild(inputNombre); 

	var inputWeb = document.createElement('input');
	inputWeb.setAttribute('class', 'inputFormularioNegocios inputDerechoFormularioNegocios quincePixeles');
	inputWeb.setAttribute('placeholder', 'Sitio web');
	inputWeb.setAttribute('name', 'website');
	formulario.appendChild(inputWeb); 

	var inputCategoria = document.createElement('input');
	inputCategoria.setAttribute('class', 'inputFormularioNegocios quincePixeles');
	inputCategoria.setAttribute('placeholder', 'Categoría');
	inputCategoria.setAttribute('name', 'category');
	formulario.appendChild(inputCategoria); 

	var inputSubCategoria = document.createElement('input');
	inputSubCategoria.setAttribute('class', 'inputFormularioNegocios inputDerechoFormularioNegocios quincePixeles');
	inputSubCategoria.setAttribute('placeholder', 'Sub Categoría');
	inputSubCategoria.setAttribute('name', 'categorysub');
	formulario.appendChild(inputSubCategoria); 

	var inputDireccion = document.createElement('input');
	inputDireccion.setAttribute('class', 'inputFormularioNegocios inputMasAncho quincePixeles');
	inputDireccion.setAttribute('placeholder', 'Dirección');
	inputDireccion.setAttribute('name', 'address');
	formulario.appendChild(inputDireccion);

	var inputTelefono = document.createElement('input');
	inputTelefono.setAttribute('class', 'inputFormularioNegocios quincePixeles');
	inputTelefono.setAttribute('placeholder', 'Teléfono');
	inputTelefono.setAttribute('name', 'phone');
	formulario.appendChild(inputTelefono); 

	var inputEmail = document.createElement('input');
	inputEmail.setAttribute('class', 'inputFormularioNegocios inputDerechoFormularioNegocios quincePixeles');
	inputEmail.setAttribute('placeholder', 'Email');
	inputEmail.setAttribute('name', 'mail');
	formulario.appendChild(inputEmail); 

	var inputDescripcion = document.createElement('textarea');
	inputDescripcion.setAttribute('class', 'inputFormularioNegocios inputDescripcion quincePixeles');
	inputDescripcion.setAttribute('placeholder', 'Descripción');
	inputDescripcion.setAttribute('name', 'descrip');
	formulario.appendChild(inputDescripcion);

	var contenedorSubirImagenes = document.createElement('div');
	contenedorSubirImagenes.setAttribute('id', 'contenedorSubirImagenes');
	cajaCentrada.appendChild(contenedorSubirImagenes);

	var primerFigure = document.createElement('figure');
	primerFigure.setAttribute('id', 'primerFigure');
	var primeraImagen = document.createElement('img');
	primeraImagen.setAttribute('class', 'imagenSubir');
	primeraImagen.setAttribute('src', '../objetos/subirImagenes/subirImagen.png');
	primerFigure.appendChild(primeraImagen);
	contenedorSubirImagenes.appendChild(primerFigure);

	var segundoFigure = document.createElement('figure');	
	segundoFigure.setAttribute('id', 'segundoFigure');
	var segundaImagen = document.createElement('img');
	segundaImagen.setAttribute('class', 'imagenSubir');
	segundaImagen.setAttribute('src', '../objetos/subirImagenes/subirImagen.png');
	segundoFigure.appendChild(segundaImagen);
	contenedorSubirImagenes.appendChild(segundoFigure);

	var tercerFigure = document.createElement('figure');
	tercerFigure.setAttribute('id', 'tercerFigure');
	var terceraImagen = document.createElement('img');
	terceraImagen.setAttribute('class', 'imagenSubir');
	terceraImagen.setAttribute('src', '../objetos/subirImagenes/subirImagen.png');
	tercerFigure.appendChild(terceraImagen);
	contenedorSubirImagenes.appendChild(tercerFigure);

	var anadirOtraImagen = document.createElement('div');
	anadirOtraImagen.setAttribute('id', 'anadirOtraImagen');
	contenedorSubirImagenes.appendChild(anadirOtraImagen);

	var registrar = document.createElement('button');
 	registrar.setAttribute('id', 'submitRegistrarNegocio');
	registrar.setAttribute('class', 'quincePixeles');
	registrar.setAttribute('type', 'submit');
	registrar.setAttribute('form', 'formularioRegistroNegocios');
	var textoRegistrar = document.createTextNode('Registrar');
	registrar.appendChild(textoRegistrar);
	cajaCentrada.appendChild(registrar);
	
	document.body.insertBefore(cubrePantallaCrearNegocio, encabezado);
	document.body.insertBefore(cajaCentrada, encabezado);

	cargado();
}

function salirCrearNegocio(){
	document.body.removeChild(cubrePantallaCrearNegocio);
	document.body.removeChild(pantallaCentradaCrearNegocio);
}

function subirImagenHover(){
	var imagen = event.target;
	imagen.setAttribute('src', '../objetos/subirImagenes/subirImagenHover.png');
}

function subirImagenHoverOut(){
	var imagen = event.target;
	imagen.setAttribute('src', '../objetos/subirImagenes/subirImagen.png');
}