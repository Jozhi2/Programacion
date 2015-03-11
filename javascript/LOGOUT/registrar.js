function botonRegistrar(){

	var encabezado = document.getElementById('encabezado');

	var cubrePantallaRegistrar = document.createElement('div');
	cubrePantallaRegistrar.setAttribute('id', 'cubrePantallaRegistrar');
	document.body.insertBefore(cubrePantallaRegistrar, encabezado); 

	var cajaCentrada = document.createElement('div');
	cajaCentrada.setAttribute('id', 'cajaCentrada');
	cajaCentrada.setAttribute('class', 'quincePixeles');
	document.body.insertBefore(cajaCentrada, encabezado); 

	var titulo = document.createElement('p');
	var textoTitulo =  document.createTextNode('ÚNETE A WALLAVI');
	titulo.setAttribute('id', 'tituloRegistro');
	titulo.setAttribute('class', 'veinticincoPixeles');
	titulo.appendChild(textoTitulo);
	cajaCentrada.appendChild(titulo); 

	var formulario = document.createElement('form');
	formulario.setAttribute('id', 'formularioRegistro');
	formulario.setAttribute('class', 'quincePixeles');
	formulario.setAttribute('method','post');
	formulario.setAttribute('action','../php/usuarios/registro.php');
	cajaCentrada.appendChild(formulario); 

	var inputNombre = document.createElement('input');
	inputNombre.setAttribute('class', 'inputFormularioRegistro quincePixeles');
	inputNombre.setAttribute('placeholder', 'Nombre');
	inputNombre.setAttribute('name','realname');
	formulario.appendChild(inputNombre); 

	var inputApellido = document.createElement('input');
	inputApellido.setAttribute('class', 'inputFormularioRegistro inputDerechoFormularioRegistro quincePixeles');
	inputApellido.setAttribute('placeholder', 'Apellido');
	inputApellido.setAttribute('name','apellido');
	formulario.appendChild(inputApellido);
	
	var inputEmail = document.createElement('input');
	inputEmail.setAttribute('class', 'inputFormularioRegistro quincePixeles');
	inputEmail.setAttribute('required', '');
	inputEmail.setAttribute('type', 'email');	
	inputEmail.setAttribute('placeholder', 'Email');	
	inputEmail.setAttribute('name','mail');
	formulario.appendChild(inputEmail); 

	var inputConfirmarEmail = document.createElement('input');
	inputConfirmarEmail.setAttribute('class', 'inputFormularioRegistro inputDerechoFormularioRegistro quincePixeles');
	inputConfirmarEmail.setAttribute('type', 'email');
	inputConfirmarEmail.setAttribute('placeholder', 'Confirmar email');
	inputConfirmarEmail.setAttribute('name','nick2');
	formulario.appendChild(inputConfirmarEmail);

	var inputContraseña = document.createElement('input');
	inputContraseña.setAttribute('class', 'inputFormularioRegistro quincePixeles');
	inputContraseña.setAttribute('type', 'password');		
	inputContraseña.setAttribute('placeholder', 'Contraseña');
	inputContraseña.setAttribute('name','pass');
	formulario.appendChild(inputContraseña); 

	var inputConfirmarContraseña = document.createElement('input');
	inputConfirmarContraseña.setAttribute('class', 'inputFormularioRegistro inputDerechoFormularioRegistro quincePixeles');
	inputConfirmarContraseña.setAttribute('type', 'password');	
	inputConfirmarContraseña.setAttribute('placeholder', 'Confirmar contraseña');
	inputConfirmarContraseña.setAttribute('name','rpass');
	formulario.appendChild(inputConfirmarContraseña);

	var registrar = document.createElement('button');
 	registrar.setAttribute('id', 'formularioBotonRegistrar');
	registrar.setAttribute('class', 'quincePixeles');
	registrar.setAttribute('type', 'submit');
	var textoRegistrar = document.createTextNode('Regístrate');
	registrar.appendChild(textoRegistrar);
	formulario.appendChild(registrar);

	cargado(); 

	$(registrar).hover( function(){
			$(registrar).css('cursor', 'pointer');  	
		}, function(){
 	});
}

function salirBotonRegistrar(){
	document.body.removeChild(cubrePantallaRegistrar);
	document.body.removeChild(cajaCentrada);
}