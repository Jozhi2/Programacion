<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title> Wallavi</title>
	<meta charset="utf-8">

	<?php include("../php/usuarios/session.php");?>
		
	<link rel="shortcut icon" href="../objetos/favicon/favicon.png" />

	<link rel="stylesheet" type="text/css" href="../css/GENERALES/principal.css">
	<link rel="stylesheet" type="text/css" href="../css/GENERALES/pixeles.css">
	<link rel="stylesheet" type="text/css" href="../css/LOGIN/encabezado.css">
	<link rel="stylesheet" type="text/css" href="../css/perfil/principal.css">
	<link rel="stylesheet" type="text/css" href="../css/perfil/secundario.css">
	<link rel="stylesheet" type="text/css" href="../css/LOGIN/subirImagenes.css">
	<link rel="stylesheet" type="text/css" href="../css/LOGIN/visualizar_opciones.css">
	<link rel="stylesheet" type="text/css" href="../css/LOGIN/mis_negocios.css">
	<link rel="stylesheet" type="text/css" href="../css/LOGIN/crear_negocio.css">
	<link rel="stylesheet" type="text/css" href="../css/LOGIN/crear_campana.css">
	<link rel="stylesheet" type="text/css" href="../css/LOGIN/crear_campana_seleccionar_negocio.css">
	<link rel="stylesheet" type="text/css" href="../css/LOGIN/crear_campana_duracion.css">
	<link rel="stylesheet" type="text/css" href="../css/LOGIN/crear_campana_costos.css">
	<link rel="stylesheet" type="text/css" href="../css/LOGIN/crear_campana_foto.css">
	<link rel="stylesheet" type="text/css" href="../css/LOGIN/publicacion.css">

	<script type="text/javascript" src="../javascript/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="../javascript/resize.js"></script>
	<script type="text/javascript" src="../javascript/CARGADO/perfil.js"></script>
	<script type="text/javascript" src="../javascript/SOCKETS/socket.js"></script>
	<script type="text/javascript" src="../javascript/LOGINOUT/cambiarCursor.js"></script>
	<script type="text/javascript" src="../javascript/LOGIN/visualizarOpciones.js"></script>
	<script type="text/javascript" src="../javascript/LOGIN/subirImagenes.js"></script>
	<script type="text/javascript" src="../javascript/LOGIN/mis_negocios.js"></script>
	<script type="text/javascript" src="../javascript/LOGIN/crear_negocio.js"></script>
	<script type="text/javascript" src="../javascript/LOGIN/crear_campana.js"></script>
	
</head>
<body>

	<!-- SECCION ENCABEZADO -->
	<div id="encabezado">
		<div id="encabezadoDivQueCentraContenido">
			<figure id="encabezadoFigureQueContieneLogo" class="LOGIN quincePixeles"><img src="../objetos/logo.png"></figure>
			<form method="POST" action="../html/busqueda_login.php" id="encabezadoFormulario" autocomplete="off">
				<input type="text" name="cuadroDeBusqueda" id="encabezadoCuadroDeBusqueda" class="quincePixeles"  placeholder="<?php echo $login_session." " .$login_session4;?>">
			</form>
			<figure id="encabezadoFotoPerfil" class="quincePixeles"><?php echo "<img src='$ruta' />"; ?></figure>
			<figure id="encabezadoOpciones" class="quincePixeles"><img src="../objetos/perfil/opciones.png"></figure>
		</div>
	</div><!-- FINALIZA EL ENCABEZADO -->

	<!-- SECCION PRINCIPAL -->
	<div id="principal">
		<div id="actualizarFotoPortada" class="quincePixeles">
			<p id="textoCambiarPortada" class="diecisietePixeles">Actualizar foto de portada</p>
		</div>
		<figure id="cambiarPortada" class="quincePixeles">
			<img src="../objetos/perfil/camara.png">
		</figure>

		<figure id="principalPortada" class="quincePixeles">
			<img src="../objetos/perfil/fotoDePortada.png">
		</figure>
		<div id="principalOpciones" class="quincePixeles"></div>
		

		<div id="actualizarFotoPerfil" class="quincePixeles">
			<figure id="cambiarPerfil" class="quincePixeles">
				<img src="../objetos/perfil/camaraLimpia.png">
			</figure>
			<p id="textoCambiarFotoPerfil" class="quincePixeles">Actualizar foto de perfil</p>	           				
		</div>
		<figure id="principalPerfil" class="quincePixeles">
			<?php echo "<img src='$ruta' />"; ?>
		</figure>
	</div>
	<!-- FINALIZA SECCION PRINCIPAL -->
	
	<!-- SECCION SECUNDARIA -->
	<div id="secundaria" class="quincePixeles">
		<div class="publicacion quincePixeles">
			<div class="cabeceraPublicacion quincePixeles">
				<figure class="fotoQuienPublica quincePixeles">
					<img src="../objetos/perfil/fotoPerfil.png">
				</figure>
				<p class="quienLoPublica quincePixeles"><?php echo $login_session." " .$login_session4;?></p>
				<p class="fechaPublicacion quincePixeles"><?php echo date('l j F Y'); ?></p>
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
	
