$(document).on('ready',function(){
	$(document).on('click','.LOGOUT',function(){
		location.href='../html/index.php';
	});

	$(document).on('click','#encabezadoBotonRegistrar',function(){
	 	botonRegistrar(); 
	});

	$(document).on('click','#cubrePantallaRegistrar',function(){
	 	salirBotonRegistrar(); 
	});

	$(document).on('click','#encabezadoBotonIngresar',function(){
	 	botonIngresar(); 
	});
	
	$(document).on('click','#cubrePantallaIngresar',function(){
	 	salirBotonIngresar(); 
	});

	$(document).on('click','.negocio',function(evento){
		visualizarNegocio(); 
	});

	$(document).on('click','#cubrePantallaVisualizarNegocio',function(){
	 	salirVisualizarNegocio(); 
	});

	$('.cajaHoverNegocio').mouseenter(function(){
	 	quitarCajaHoverNegocio(); 
	});

	$('.negocio').mouseleave(function(){
	 	ponerCajaHoverNegocio(); 
	});
	
	$(document).on('click','#ceroNegocio',function(){
		ceroNegocio();
	});

	$(document).on('click','#primerNegocio',function(){
		primerNegocio();
	});

	$(document).on('click','#segundoNegocio',function(){
		segundoNegocio();
	});

	$(document).on('click','#tercerNegocio',function(){
		tercerNegocio();
	});

	$(document).on('click','#cuartoNegocio',function(){
		cuartoNegocio();
	});

	$(document).on('click','#quintoNegocio',function(){
		quintoNegocio();
	});

	$(document).on('click','#sextoNegocio',function(){
		sextoNegocio();
	});

	$(document).on('click','.negocioPrincipal',function(){
		console.log(event.target.parentNode);
		var figure = event.target.parentNode;
		left = $(figure).css('left');
		font = $(figure).css('font-size');

		leftNumero = parseFloat(left);
		fontNumero = parseFloat(font);

		fontNumeroOperacion = fontNumero * 18;

		if(fontNumeroOperacion.toFixed(4) == leftNumero){
			visualizarNegocio();
		}

	});

	cambiarCursorIndex();

	$(document).on('click', '#flechaIzquierda', function(){

	});

	$(document).on('click', '#flechaDerecha', function(){
		
	});

	$(document).on('click', '.negocioPrincipal', function(){
		
	});


	$(document).on('click', '.negocio', function(evento){
		var negocio = document.getElementsByClassName('negocio');

		mandarMensajeAlServidor(negocio);
	});
});


