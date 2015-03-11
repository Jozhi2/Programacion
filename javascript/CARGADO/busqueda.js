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

	cicloCreaNegocio();

	cambiarCursorBusqueda();	
});


