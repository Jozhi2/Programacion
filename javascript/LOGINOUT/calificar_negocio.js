function quitarCajaHoverNegocio(){
		var cajaHoverNegocio = event.target;

		$(cajaHoverNegocio).animate({'opacity': '0'},150);		
}

function ponerCajaHoverNegocio(){
	var cajaHoverNegocio = document.getElementsByClassName('cajaHoverNegocio');
	var centraEstrellas = document.getElementsByClassName('centraEstrellas');

	$(cajaHoverNegocio).animate({'opacity': '1'},150);
	$(centraEstrellas).animate({'opacity': '1'},150);
}