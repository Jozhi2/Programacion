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
		datoPicado = $(this).attr('title');
		visualizarNegocio2();
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
			datoPicado = $(this).attr('title');
			visualizarNegocio2();
		}

	});

	cambiarCursorIndex();

	$(document).on('click','#flechaIzquierda',function(evento){ 
		if(datoPicado<2){
			 datoPicado = 25;
		}else{ 
			datoPicado = datoPicado - 1; 
		}
		salirVisualizarNegocio(); 
		visualizarNegocio2();
		
	});

	$(document).on('click','#flechaDerecha',function(evento){ 
		if(datoPicado>24){
			datoPicado = 1 ;
		}else{ 
			datoPicado = parseInt(datoPicado) + 1;
		}
		salirVisualizarNegocio(); 
		visualizarNegocio2();
		
	});

	$(document).on('click', '.negocioPrincipal', function(){
		
	});


});


