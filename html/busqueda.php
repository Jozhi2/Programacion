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
	<?php include("../php/negocios/buscador.php");?>
	<?php include("../php/negocios/negocios.php");?>
	
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
	<script type="text/javascript" src="../javascript/CARGADO/busqueda.js"></script>
	<script type="text/javascript" src="../javascript/SOCKETS/socket.js"></script>
	<script type="text/javascript" src="../javascript/LOGINOUT/cambiarCursor.js"></script>
	<script type="text/javascript" src="../javascript/LOGOUT/registrar.js"></script>
	<script type="text/javascript" src="../javascript/LOGOUT/ingresar.js"></script>
	<script type="text/javascript" src="../javascript/LOGINOUT/ciclo_crea_negocios.js"></script>
	<script type="text/javascript" src="../javascript/LOGINOUT/visualizar_negocio.js"></script>
	<script type="text/javascript" src="../javascript/resize.js"></script>	
	

</head>
<body>
	<!-- SECCION ENCABEZADO -->
	<div id="encabezado" class="quincePixeles">
		<div id="encabezadoDivQueCentraContenido">
			<figure id="encabezadoFigureQueContieneLogo" class="LOGOUT quincePixeles"><img src="../objetos/logo.png"></figure>
			<form method="POST" action="../html/busqueda.php" id="encabezadoFormulario" autocomplete="off">
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
		
	</section>
</body>
</html>