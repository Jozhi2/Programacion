<!DOCTYPE html>
<html lang="es">
<head>
	<title>Wallavi</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/GENERALES/principal.css">
	<link rel="stylesheet" type="text/css" href="../css/GENERALES/pixeles.css">
	<link rel="stylesheet" type="text/css" href="../css/LOGIN/encabezado.css">
	<link rel="stylesheet" type="text/css" href="../css/perfil/principal.css">
	<link rel="stylesheet" type="text/css" href="../css/perfil/secundario.css">
	<link rel="stylesheet" type="text/css" href="../css/LOGIN/visualizar_opciones.css">
	<link rel="stylesheet" type="text/css" href="../css/LOGIN/crear_negocio.css">
	<link rel="stylesheet" type="text/css" href="../css/LOGIN/crear_campana.css">
	<link rel="stylesheet" type="text/css" href="../css/LOGIN/crear_campana_seleccionar_negocio.css">
	<link rel="stylesheet" type="text/css" href="../css/LOGIN/crear_campana_duracion.css">
	<link rel="stylesheet" type="text/css" href="../css/LOGIN/crear_campana_costos.css">
	<link rel="stylesheet" type="text/css" href="../css/LOGIN/crear_campana_foto.css">
	<link rel="stylesheet" type="text/css" href="../css/LOGIN/publicacion.css">

	<script type="text/javascript" src="../javascript/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="../javascript/cargado.js"></script>
	<script type="text/javascript" src="../javascript/resize.js"></script>
	<script type="text/javascript" src="../javascript/LOGIN/visualizarOpciones.js"></script>
	<script type="text/javascript" src="../javascript/LOGIN/crear_negocio.js"></script>
	<script type="text/javascript" src="../javascript/LOGIN/crear_campana.js"></script>
	<?php include("../php/usuarios/session.php"); ?>
</head>
<body>

	<!-- SECCION ENCABEZADO -->
	<div id="encabezado">
		<div id="encabezadoDivQueCentraContenido">
			<figure id="encabezadoFigureQueContieneLogo" class="quincePixeles"><img src="../objetos/logo.png"></figure>
			<form method="POST" action="../php/negocios/variables.php" id="encabezadoFormulario" autocomplete="off">
				<input type="text" name="cuadroDeBusqueda" id="encabezadoCuadroDeBusqueda" class="quincePixeles"  placeholder="<?php echo $login_session." " .$login_session4;?>">
			</form>
			<figure id="encabezadoFotoPerfil" class="quincePixeles"><img src="../objetos/perfil/fotoPerfil.png"></figure>
			<figure id="encabezadoOpciones" class="quincePixeles"><img src="../objetos/perfil/opciones.png"></figure>
		</div>
	</div><!-- FINALIZA EL ENCABEZADO -->

	<!-- SECCION PRINCIPAL -->
	<div id="principal">
		<figure id="principalPortada" class="quincePixeles">
			<img src="../objetos/perfil/fotoDePortada.png">
		</figure>
		<div id="principalOpciones" class="quincePixeles"></div>
		<figure id="principalPerfil" class="quincePixeles">
			<?php echo "<br>" ."<img src='$ruta' />"; ?>
		</figure>
	</div>
	<!-- FINALIZA SECCION PRINCIPAL -->
	
	<!-- SECCION PRINCIPAL -->
	<div id="secundaria" class="quincePixeles">
		<div class="publicacion quincePixeles">
			<div class="cabeceraPublicacion quincePixeles">
				<figure class="fotoQuienPublica quincePixeles">
					<img src="../objetos/perfil/fotoPerfil.png">
				</figure>
				<p class="quienLoPublica quincePixeles">Roberto Legorreta Murillo</p>
				<p class="fechaPublicacion quincePixeles">17 de Febrero a la(s) 12:15 </p>
				<figure class="compartir quincePixeles">
					<img src="../objetos/perfil/publicacion/compartirSeleccionado.png">
				</figure>
				<figure class="favorito quincePixeles">
					<img src="../objetos/perfil/publicacion/favorito.png">
				</figure>
				<figure class="opcionesPublicacion quincePixeles">
					<img src="../objetos/perfil/publicacion/opciones.png">
				</figure>
			</div>
			
			<figure class="localizacion quincePixeles">
				<img src="../objetos/perfil/publicacion/localizacion.png">
			</figure>
			<p class="localizacionTexto quincePixeles">En Starbucks</p>
			<p class="textoDePublicacion quincePixeles">Aquí vendiendo tacos de canasta en Starbucks</p>
			<figure class="contenidoPublicacion quincePixeles">
				<img src="../objetos/perfil/publicacion/foto.png">
			</figure>

			<figure class="fotoQuienComenta quincePixeles">
					<img src="../objetos/perfil/fotoPerfil.png">
			</figure>
			<input class="comentarInput catorcePixeles">
		</div>
	</div>
	<!-- FINALIZA SECCION PRINCIPAL -->
</body>
</html>
	
