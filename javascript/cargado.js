$(document).on('ready',function(){

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

	$(document).on('click','#encabezadoOpciones',function(){
	 	visualizarOpciones(); 
	});

	$(document).on('click','#cerrarSesion',function(){
	 		location.href='../php/usuarios/logout.php';
	});

	$(document).on('click','#cubrePantallaOpciones',function(){
	 	salirVisualizarOpciones(); 
	});

	$('.negocio').mouseenter(function(){
	 	calificarNegocio(); 
	});

	$('.negocio').mouseleave(function(){
	 	salirCalificarNegocio(); 
	});

	$(document).on('click','#crearNegocioTexto',function(){
		salirVisualizarOpciones();
		crearNegocio();
	});

	$(document).on('click','#cubrePantallaCrearNegocio',function(){
		salirCrearNegocio();
	});

	$(document).on('mouseenter','.imagenSubir',function(){
		subirImagenHover();
	});

	$(document).on('mouseleave','.imagenSubir',function(){
		subirImagenHoverOut();
	});

	$(document).on('click','#promocionarCampana',function(){
		salirVisualizarOpciones();
		crearCampana();
	});

	$(document).on('click','#cubrePantallaPromocionarNegocio',function(){
		salirCrearCampana();
	});

	$(document).on('click','#cajaCrearCampana',function(){
		crearCampanaSeleccionarNegocio();
	});

	$(document).on('click','#cubrePantallaSeleccionarNegocio',function(){
		salirCrearCampanaSeleccionarNegocio();
	});

	$(document).on('click','.seleccionarNegocio',function(){
		crearCampanaDuracion();
	});

	$(document).on('click','#cubrePantallaDuracion',function(){
		salirCrearCampanaDuracion();
	});

	$(document).on('click','#siguienteDuracion',function(){
		crearCampanaCostos();
	});

	$(document).on('click','#cubrePantallaCostos',function(){
		salirCrearCampanaCostos();
	});

	$(document).on('click','#siguienteCostos',function(){
		crearCampanaFoto();
	});

	$(document).on('click','#cubrePantallaFoto',function(){
		salirCrearCampanaFoto();
	});
	
});


