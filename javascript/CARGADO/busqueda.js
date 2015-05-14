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
		//var dato = cicloCreaNegocio.
		datoPicado = $(this).attr('title');
		visualizarNegocio(); 
	});

	$(document).on('click','#flechaIzquierda',function(evento){ 
		if(datoPicado<2){
			 datoPicado = document.getElementsByClassName("negocio").length;
		}else{ 
			datoPicado = datoPicado - 1; 
		}
		salirVisualizarNegocio(); 
		visualizarNegocio();
		
	});

	$(document).on('click','#flechaDerecha',function(evento){ 
		dato = document.getElementsByClassName("negocio").length;
		if(datoPicado==dato){
			datoPicado = 1 ;
		}else{ 
			datoPicado = parseInt(datoPicado) + 1;
		}
		salirVisualizarNegocio(); 
		visualizarNegocio();
		
	});

	$(document).on('click','#cubrePantallaVisualizarNegocio',function(){
	 	salirVisualizarNegocio(); 
	});

	cicloCreaNegocio();

	cambiarCursorBusqueda();	
});


