<?php session_start();
	include("../php/usuarios/connect_db.php");
	$buscar=$_POST['cuadroDeBusqueda'];
	$_SESSION['buscar']=$buscar; 
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Wallavi</title>
	<meta charset="utf-8">

	<link rel="shortcut icon" href="../objetos/favicon/favicon.png" />

	<?php include("../php/usuarios/session.php");?>
	<?php include("../php/negocios/buscador.php");?>
	<?php include("../php/negocios/negocios.php");?>
	

	<link rel="stylesheet" type="text/css" href="../css/GENERALES/principal.css">
	<link rel="stylesheet" type="text/css" href="../css/GENERALES/pixeles.css">
	<link rel="stylesheet" type="text/css" href="../css/LOGIN/encabezado.css">
	<link rel="stylesheet" type="text/css" href="../css/LOGIN/visualizar_opciones.css">
	<link rel="stylesheet" type="text/css" href="../css/LOGIN/crear_negocio.css">
	<link rel="stylesheet" type="text/css" href="../css/LOGIN/crear_campana.css">
	<link rel="stylesheet" type="text/css" href="../css/LOGIN/crear_campana_seleccionar_negocio.css">
	<link rel="stylesheet" type="text/css" href="../css/LOGIN/crear_campana_duracion.css">
	<link rel="stylesheet" type="text/css" href="../css/LOGIN/crear_campana_costos.css">
	<link rel="stylesheet" type="text/css" href="../css/LOGIN/crear_campana_foto.css">
	<link rel="stylesheet" type="text/css" href="../css/busqueda/principal.css">
	<link rel="stylesheet" type="text/css" href="../css/busqueda/secundario.css">	
	<link rel="stylesheet" type="text/css" href="../css/busqueda/negocios.css">
	<link rel="stylesheet" type="text/css" href="../css/LOGINOUT/visualizar_negocio.css">

	<script type="text/javascript" src="../javascript/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="../javascript/CARGADO/busqueda_login.js"></script>
	<script type="text/javascript" src="../javascript/LOGINOUT/cambiarCursor.js"></script>
	<script type="text/javascript" src="../javascript/SOCKETS/socket.js"></script>
	<script type="text/javascript" src="../javascript/LOGIN/visualizarOpciones.js"></script>
	<script type="text/javascript" src="../javascript/LOGIN/mis_negocios.js"></script>
	<script type="text/javascript" src="../javascript/LOGIN/crear_negocio.js"></script>
	<script type="text/javascript" src="../javascript/LOGINOUT/ciclo_crea_negocios.js"></script>
	<script type="text/javascript" src="../javascript/LOGIN/crear_campana.js"></script>
	<script type="text/javascript" src="../javascript/LOGINOUT/visualizar_negocio.js"></script>
	<script type="text/javascript" src="../javascript/resize.js"></script>	
	

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

	<section id="principal" class="quincePixeles">
		<figure id="principalMapa">
	 		<img src="../objetos/busqueda/mapa.png">
		</figure>
	</section>
	<section id="secundaria">
	</section>
</body>
</html>