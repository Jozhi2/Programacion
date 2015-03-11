$(document).on('ready',function(){
	$(document).on('click','#encabezadoFotoPerfil',function(){
		location.href='../html/perfil.php';
	});

	$(document).on('click','.LOGIN',function(){
		location.href='../html/index_login.php';
	});

	$(document).on('click','#encabezadoOpciones',function(){
	 	visualizarOpciones(); 
	 	cicloMisNegocios();
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

    cambiarCursorPerfil();

});


