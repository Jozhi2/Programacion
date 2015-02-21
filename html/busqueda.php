<!DOCTYPE html>
<html lang="es">
<head>
	<title>Wallavi</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/GENERALES/principal.css">
	<link rel="stylesheet" type="text/css" href="../css/GENERALES/pixeles.css">
	<link rel="stylesheet" type="text/css" href="../css/LOGOUT/encabezado.css">
	<link rel="stylesheet" type="text/css" href="../css/LOGOUT/registrar.css">	
	<link rel="stylesheet" type="text/css" href="../css/LOGOUT/ingresar.css">	
	<link rel="stylesheet" type="text/css" href="../css/busqueda/principal.css">
	<link rel="stylesheet" type="text/css" href="../css/busqueda/secundario.css">	
	<link rel="stylesheet" type="text/css" href="../css/busqueda/negocios.css">
	<link rel="stylesheet" type="text/css" href="../css/LOGINOUT/visualizar_negocio.css">


	<script type="text/javascript" src="../javascript/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="../javascript/cargado.js"></script>
	<script type="text/javascript" src="../javascript/LOGOUT/registrar.js"></script>
	<script type="text/javascript" src="../javascript/LOGOUT/ingresar.js"></script>
	<script type="text/javascript" src="../javascript/LOGINOUT/visualizar_negocio.js"></script>
	<script type="text/javascript" src="../javascript/resize.js"></script>	

	<?php include("../php/negocios/buscador.php");?>
	

</head>
<body>
	<script type="text/javascript">
		var variableb = number;
		alert(variableb);
	</script>
	<!-- SECCION ENCABEZADO -->
	<div id="encabezado" class="quincePixeles">
		<div id="encabezadoDivQueCentraContenido">
			<figure id="encabezadoFigureQueContieneLogo" class="quincePixeles"><img src="../objetos/logo.png"></figure>
			<form method="POST" action="../php/negocios/variables.php" id="encabezadoFormulario" autocomplete="off">
				<input type="text" name="cuadroDeBusqueda" id="encabezadoCuadroDeBusqueda" class="quincePixeles" placeholder="Estoy Buscando...">
			</form>
			<div id="encabezadoBotonRegistrar" class="quincePixeles">Regístrate</div>
			<div id="encabezadoBotonIngresar" class="quincePixeles">Ingresa</div>
		</div>
	</div><!-- FINALIZA EL ENCABEZADO -->
	<section id="principal" class="quincePixeles">
		<figure id="principalMapa">
	 		<img src="../objetos/busqueda/mapa.png">
		</figure>
	</section>
	<section id="secundaria">
		<article class="negocioIzquierdo quincePixeles negocio">
			<div class="fontSizeCero">
				<div class="informacionNegocio quincePixeles">
					<p class="nombreNegocio diecisietePixeles">Wallavi</p>
					<p class="direccion catorcePixeles">Margarita Alvarado #152 col. Caminera</p>
					<p class="descripcion catorcePixeles">Este es un párrafo donde los negocios pondrán una descripción de su negocio</p>
					<figure class="figureImagenEstrellas quincePixeles"><img src="../objetos/busqueda/estrellas.png"></figure>
				</div>
				<figure class="fotoNegocio quincePixeles">
				</figure>
			</div>
		</article>

		<article class="negocioDerecho quincePixeles negocio">
			<div class="fontSizeCero">
				<div class="informacionNegocio quincePixeles">
					<p class="nombreNegocio diecisietePixeles">Wallavi</p>
					<p class="direccion catorcePixeles">Margarita Alvarado #152 col. Caminera</p>
					<p class="descripcion catorcePixeles">Este es un párrafo donde los negocios pondrán una descripción de su negocio</p>
					<figure class="figureImagenEstrellas quincePixeles"><img src="../objetos/busqueda/estrellas.png"></figure>
				</div>
				<figure class="fotoNegocio quincePixeles">
				</figure>
			</div>
		</article>

		<article class="negocioIzquierdo quincePixeles negocio">
			<div class="fontSizeCero">
				<div class="informacionNegocio quincePixeles">
					<p class="nombreNegocio diecisietePixeles">Wallavi</p>
					<p class="direccion catorcePixeles">Margarita Alvarado #152 col. Caminera</p>
					<p class="descripcion catorcePixeles">Este es un párrafo donde los negocios pondrán una descripción de su negocio</p>
					<figure class="figureImagenEstrellas quincePixeles"><img src="../objetos/busqueda/estrellas.png"></figure>
				</div>
				<figure class="fotoNegocio quincePixeles">
				</figure>
			</div>
		</article>

		<article class="negocioDerecho quincePixeles negocio">
			<div class="fontSizeCero">
				<div class="informacionNegocio quincePixeles">
					<p class="nombreNegocio diecisietePixeles">Wallavi</p>
					<p class="direccion catorcePixeles">Margarita Alvarado #152 col. Caminera</p>
					<p class="descripcion catorcePixeles">Este es un párrafo donde los negocios pondrán una descripción de su negocio</p>
					<figure class="figureImagenEstrellas quincePixeles"><img src="../objetos/busqueda/estrellas.png"></figure>
				</div>
				<figure class="fotoNegocio quincePixeles">
				</figure>
			</div>
		</article>

		<article class="negocioIzquierdo quincePixeles negocio">
			<div class="fontSizeCero">
				<div class="informacionNegocio quincePixeles">
					<p class="nombreNegocio diecisietePixeles">Wallavi</p>
					<p class="direccion catorcePixeles">Margarita Alvarado #152 col. Caminera</p>
					<p class="descripcion catorcePixeles">Este es un párrafo donde los negocios pondrán una descripción de su negocio</p>
					<figure class="figureImagenEstrellas quincePixeles"><img src="../objetos/busqueda/estrellas.png"></figure>
				</div>
				<figure class="fotoNegocio quincePixeles">
				</figure>
			</div>
		</article>

		<article class="negocioDerecho quincePixeles negocio">
			<div class="fontSizeCero">
				<div class="informacionNegocio quincePixeles">
					<p class="nombreNegocio diecisietePixeles">Wallavi</p>
					<p class="direccion catorcePixeles">Margarita Alvarado #152 col. Caminera</p>
					<p class="descripcion catorcePixeles">Este es un párrafo donde los negocios pondrán una descripción de su negocio</p>
					<figure class="figureImagenEstrellas quincePixeles"><img src="../objetos/busqueda/estrellas.png"></figure>
				</div>
				<figure class="fotoNegocio quincePixeles">
				</figure>
			</div>
		</article>

		<article class="negocioIzquierdo quincePixeles negocio">
			<div class="fontSizeCero">
				<div class="informacionNegocio quincePixeles">
					<p class="nombreNegocio diecisietePixeles">Wallavi</p>
					<p class="direccion catorcePixeles">Margarita Alvarado #152 col. Caminera</p>
					<p class="descripcion catorcePixeles">Este es un párrafo donde los negocios pondrán una descripción de su negocio</p>
					<figure class="figureImagenEstrellas quincePixeles"><img src="../objetos/busqueda/estrellas.png"></figure>
				</div>
				<figure class="fotoNegocio quincePixeles">
				</figure>
			</div>
		</article>

		<article class="negocioDerecho quincePixeles negocio">
			<div class="fontSizeCero">
				<div class="informacionNegocio quincePixeles">
					<p class="nombreNegocio diecisietePixeles">Wallavi</p>
					<p class="direccion catorcePixeles">Margarita Alvarado #152 col. Caminera</p>
					<p class="descripcion catorcePixeles">Este es un párrafo donde los negocios pondrán una descripción de su negocio</p>
					<figure class="figureImagenEstrellas quincePixeles"><img src="../objetos/busqueda/estrellas.png"></figure>
				</div>
				<figure class="fotoNegocio quincePixeles">
				</figure>
			</div>
		</article>

		<article class="negocioIzquierdo quincePixeles negocio">
			<div class="fontSizeCero">
				<div class="informacionNegocio quincePixeles">
					<p class="nombreNegocio diecisietePixeles">Wallavi</p>
					<p class="direccion catorcePixeles">Margarita Alvarado #152 col. Caminera</p>
					<p class="descripcion catorcePixeles">Este es un párrafo donde los negocios pondrán una descripción de su negocio</p>
					<figure class="figureImagenEstrellas quincePixeles"><img src="../objetos/busqueda/estrellas.png"></figure>
				</div>
				<figure class="fotoNegocio quincePixeles">
				</figure>
			</div>
		</article>

		<article class="negocioDerecho quincePixeles negocio">
			<div class="fontSizeCero">
				<div class="informacionNegocio quincePixeles">
					<p class="nombreNegocio diecisietePixeles">Wallavi</p>
					<p class="direccion catorcePixeles">Margarita Alvarado #152 col. Caminera</p>
					<p class="descripcion catorcePixeles">Este es un párrafo donde los negocios pondrán una descripción de su negocio</p>
					<figure class="figureImagenEstrellas quincePixeles"><img src="../objetos/busqueda/estrellas.png"></figure>
				</div>
				<figure class="fotoNegocio quincePixeles">
				</figure>
			</div>
		</article>

		<article class="negocioIzquierdo quincePixeles negocio">
			<div class="fontSizeCero">
				<div class="informacionNegocio quincePixeles">
					<p class="nombreNegocio diecisietePixeles">Wallavi</p>
					<p class="direccion catorcePixeles">Margarita Alvarado #152 col. Caminera</p>
					<p class="descripcion catorcePixeles">Este es un párrafo donde los negocios pondrán una descripción de su negocio</p>
					<figure class="figureImagenEstrellas quincePixeles"><img src="../objetos/busqueda/estrellas.png"></figure>
				</div>
				<figure class="fotoNegocio quincePixeles">
				</figure>
			</div>
		</article>

		<article class="negocioDerecho quincePixeles negocio">
			<div class="fontSizeCero">
				<div class="informacionNegocio quincePixeles">
					<p class="nombreNegocio diecisietePixeles">Wallavi</p>
					<p class="direccion catorcePixeles">Margarita Alvarado #152 col. Caminera</p>
					<p class="descripcion catorcePixeles">Este es un párrafo donde los negocios pondrán una descripción de su negocio</p>
					<figure class="figureImagenEstrellas quincePixeles"><img src="../objetos/busqueda/estrellas.png"></figure>
				</div>
				<figure class="fotoNegocio quincePixeles">
				</figure>
			</div>
		</article>

		<article class="negocioIzquierdo quincePixeles negocio">
			<div class="fontSizeCero">
				<div class="informacionNegocio quincePixeles">
					<p class="nombreNegocio diecisietePixeles">Wallavi</p>
					<p class="direccion catorcePixeles">Margarita Alvarado #152 col. Caminera</p>
					<p class="descripcion catorcePixeles">Este es un párrafo donde los negocios pondrán una descripción de su negocio</p>
					<figure class="figureImagenEstrellas quincePixeles"><img src="../objetos/busqueda/estrellas.png"></figure>
				</div>
				<figure class="fotoNegocio quincePixeles">
				</figure>
			</div>
		</article>

		<article class="negocioDerecho quincePixeles negocio">
			<div class="fontSizeCero">
				<div class="informacionNegocio quincePixeles">
					<p class="nombreNegocio diecisietePixeles">Wallavi</p>
					<p class="direccion catorcePixeles">Margarita Alvarado #152 col. Caminera</p>
					<p class="descripcion catorcePixeles">Este es un párrafo donde los negocios pondrán una descripción de su negocio</p>
					<figure class="figureImagenEstrellas quincePixeles"><img src="../objetos/busqueda/estrellas.png"></figure>
				</div>
				<figure class="fotoNegocio quincePixeles">
				</figure>
			</div>
		</article>

		<article class="negocioIzquierdo quincePixeles negocio">
			<div class="fontSizeCero">
				<div class="informacionNegocio quincePixeles">
					<p class="nombreNegocio diecisietePixeles">Wallavi</p>
					<p class="direccion catorcePixeles">Margarita Alvarado #152 col. Caminera</p>
					<p class="descripcion catorcePixeles">Este es un párrafo donde los negocios pondrán una descripción de su negocio</p>
					<figure class="figureImagenEstrellas quincePixeles"><img src="../objetos/busqueda/estrellas.png"></figure>
				</div>
				<figure class="fotoNegocio quincePixeles">
				</figure>
			</div>
		</article>

		<article class="negocioDerecho quincePixeles negocio">
			<div class="fontSizeCero">
				<div class="informacionNegocio quincePixeles">
					<p class="nombreNegocio diecisietePixeles">Wallavi</p>
					<p class="direccion catorcePixeles">Margarita Alvarado #152 col. Caminera</p>
					<p class="descripcion catorcePixeles">Este es un párrafo donde los negocios pondrán una descripción de su negocio</p>
					<figure class="figureImagenEstrellas quincePixeles"><img src="../objetos/busqueda/estrellas.png"></figure>
				</div>
				<figure class="fotoNegocio quincePixeles">
				</figure>
			</div>
		</article>

		<article class="negocioIzquierdo quincePixeles negocio">
			<div class="fontSizeCero">
				<div class="informacionNegocio quincePixeles">
					<p class="nombreNegocio diecisietePixeles">Wallavi</p>
					<p class="direccion catorcePixeles">Margarita Alvarado #152 col. Caminera</p>
					<p class="descripcion catorcePixeles">Este es un párrafo donde los negocios pondrán una descripción de su negocio</p>
					<figure class="figureImagenEstrellas quincePixeles"><img src="../objetos/busqueda/estrellas.png"></figure>
				</div>
				<figure class="fotoNegocio quincePixeles">
				</figure>
			</div>
		</article>

		<article class="negocioDerecho quincePixeles negocio">
			<div class="fontSizeCero">
				<div class="informacionNegocio quincePixeles">
					<p class="nombreNegocio diecisietePixeles">Wallavi</p>
					<p class="direccion catorcePixeles">Margarita Alvarado #152 col. Caminera</p>
					<p class="descripcion catorcePixeles">Este es un párrafo donde los negocios pondrán una descripción de su negocio</p>
					<figure class="figureImagenEstrellas quincePixeles"><img src="../objetos/busqueda/estrellas.png"></figure>
				</div>
				<figure class="fotoNegocio quincePixeles">
				</figure>
			</div>
		</article>

		<article class="negocioIzquierdo quincePixeles negocio">
			<div class="fontSizeCero">
				<div class="informacionNegocio quincePixeles">
					<p class="nombreNegocio diecisietePixeles">Wallavi</p>
					<p class="direccion catorcePixeles">Margarita Alvarado #152 col. Caminera</p>
					<p class="descripcion catorcePixeles">Este es un párrafo donde los negocios pondrán una descripción de su negocio</p>
					<figure class="figureImagenEstrellas quincePixeles"><img src="../objetos/busqueda/estrellas.png"></figure>
				</div>
				<figure class="fotoNegocio quincePixeles">
				</figure>
			</div>
		</article>

		<article class="negocioDerecho quincePixeles negocio">
			<div class="fontSizeCero">
				<div class="informacionNegocio quincePixeles">
					<p class="nombreNegocio diecisietePixeles">Wallavi</p>
					<p class="direccion catorcePixeles">Margarita Alvarado #152 col. Caminera</p>
					<p class="descripcion catorcePixeles">Este es un párrafo donde los negocios pondrán una descripción de su negocio</p>
					<figure class="figureImagenEstrellas quincePixeles"><img src="../objetos/busqueda/estrellas.png"></figure>
				</div>
				<figure class="fotoNegocio quincePixeles">
				</figure>
			</div>
		</article>

	</section>
</body>
</html>