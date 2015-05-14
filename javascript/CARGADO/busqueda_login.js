$(document).on('ready',function(){
	$(document).on('click','#encabezadoFotoPerfil',function(){
		location.href='../html/perfil.php';
	});

	$(document).on('click','.LOGIN',function(){
		location.href='../html/index_login.php';
	});

	$(document).on('click','.negocio',function(evento){
		datoPicado = $(this).attr('title');
		visualizarNegocio(); 
	});

	$(document).on('click','#cubrePantallaVisualizarNegocio',function(){
	 	salirVisualizarNegocio(); 
	});

	$(document).on('click','#encabezadoOpciones',function(){
	 	visualizarOpciones(); 
	    cicloMisNegocios();//Para mostrar los negocios que administro en visualizarOpciones
	});

	$(document).on('click','#cerrarSesion',function(){
	 		location.href='../php/usuarios/logout.php';
	});

	$(document).on('click','#cubrePantallaOpciones',function(){
	 	salirVisualizarOpciones(); 
	});

	$(document).on('click','#crearNegocioTexto',function(){
		salirVisualizarOpciones();
		crearNegocio();
	});

	$(document).on('click','#cubrePantallaCrearNegocio',function(){
		salirCrearNegocio();
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

	cambiarCursorBusquedaLogin();

    cicloCreaNegocio();//Para sección búsquedas, crea los negocios 
});


