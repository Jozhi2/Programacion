$(document).on('ready',function(){
	$(document).on('click','#encabezadoFotoPerfil',function(){
		location.href='../html/perfil.php';
	});

	$(document).on('click','.LOGIN',function(){
		location.href='../html/index_login.php';
	});

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

	$(document).on('click','#encabezadoOpciones',function(){
	 	visualizarOpciones(); 
	});

	$(document).on('click','#cerrarSesion',function(){
	 		location.href='../php/usuarios/logout.php';
	});

	$(document).on('click','#cubrePantallaOpciones',function(){
	 	salirVisualizarOpciones(); 
	});

	$('.cajaHoverNegocio').mouseenter(function(){
	 	quitarCajaHoverNegocio(); 
	});

	$('.negocio').mouseleave(function(){
	 	ponerCajaHoverNegocio(); 
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

	$("#cambiarPortada").on('mouseenter', function(){
    	$("#actualizarFotoPortada").animate({'opacity': '1'},100);
   	});

    $('#actualizarFotoPortada').on('mouseleave', function (){
        $("#actualizarFotoPortada").animate({'opacity': '0'}, 100);
    });

	$("#principalPerfil").on('mouseenter', function () {
        $("#actualizarFotoPerfil").animate({'opacity': '1'}, 100);
    });

    $("#actualizarFotoPerfil").on('mouseenter', function () {
        $("#actualizarFotoPerfil").animate({'opacity': '1'}, 100);
    });

    $("#actualizarFotoPerfil").on('mouseleave', function(){
    	$("#actualizarFotoPerfil").animate({'opacity': '0'}, 100);
    });

    cicloCreaNegocio();//Para sección búsquedas, crea los negocios 

    cicloMisNegocios();//Para encabezado LOGIN, pone tus negocios en visualizar Opciones

    alert('cargado .js');
});


