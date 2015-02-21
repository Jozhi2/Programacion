<!DOCTYPE html>
<html lang="es">
<head>
	<title>Wallavi</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/GENERALES/principal.css">
	<link rel="stylesheet" type="text/css" href="../css/GENERALES/pixeles.css">
	<link rel="stylesheet" type="text/css" href="../css/LOGOUT/encabezado.css">
	<link rel="stylesheet" type="text/css" href="../css/index/seccionPrincipal.css">
	<link rel="stylesheet" type="text/css" href="../css/index/seccionSecundario.css">
	<link rel="stylesheet" type="text/css" href="../css/LOGOUT/registrar.css">
	<link rel="stylesheet" type="text/css" href="../css/LOGOUT/ingresar.css">
	<link rel="stylesheet" type="text/css" href="../css/LOGINOUT/visualizar_negocio.css">
	<link rel="stylesheet" type="text/css" href="../css/LOGINOUT/cajaHoverNegocio.css">

	<script type="text/javascript" src="../javascript/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="../javascript/cargado.js"></script>
	<script type="text/javascript" src="../javascript/LOGOUT/registrar.js"></script>
	<script type="text/javascript" src="../javascript/LOGOUT/ingresar.js"></script>	
	<script type="text/javascript" src="../javascript/LOGINOUT/visualizar_negocio.js"></script>	
	<script type="text/javascript" src="../javascript/LOGINOUT/calificar_negocio.js"></script>	
	<script type="text/javascript" src="../javascript/resize.js"></script>
	<?php 	include("../php/contador.php");?>
	<?php 	include("../php/negocios/negocios.php");?>

</head>
<body>
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

	<!-- SECCION PRINCIPAL -->
	<div id="principal">
		<div id="principalPublicidadIzquierda" class="quincePixeles negocio"></div>
		<div id="principalPublicidadCentral" class="quincePixeles negocio"></div>
		<div id="principalPublicidadDerecha" class="quincePixeles negocio"></div>
		<div id="principalPublicidadDerecha" class="quincePixeles negocio"></div>
		<div id="principalPublicidadDerecha" class="quincePixeles negocio"></div>
	</div><!-- FINALIZA LA SECCIÓN PRINCIPAL -->

	<!-- SECCION SECUNDARIA -->
	<div id="secundario">
		<div class="secundarioPublicidadIzquierda quincePixeles negocio"></div>
		<div class="secundarioPublicidadCentral quincePixeles negocio"></div>
		<div class="secundarioPublicidadDerecha quincePixeles negocio"></div>

		<div class="secundarioPublicidadIzquierda quincePixeles negocio"></div>
		<div class="secundarioPublicidadCentral quincePixeles negocio"></div>
		<div class="secundarioPublicidadDerecha quincePixeles negocio"></div>

		<div class="secundarioPublicidadIzquierda quincePixeles negocio"></div>
		<div class="secundarioPublicidadCentral quincePixeles negocio"></div>
		<div class="secundarioPublicidadDerecha quincePixeles negocio"></div>

		<div class="secundarioPublicidadIzquierda quincePixeles negocio"></div>
		<div class="secundarioPublicidadCentral quincePixeles negocio"></div>
		<div class="secundarioPublicidadDerecha quincePixeles negocio"></div>

		<div class="secundarioPublicidadIzquierda quincePixeles negocio"></div>
		<div class="secundarioPublicidadCentral quincePixeles negocio"></div>
		<div class="secundarioPublicidadDerecha quincePixeles negocio"></div>

		<div class="secundarioPublicidadIzquierda quincePixeles negocio"></div>
		<div class="secundarioPublicidadCentral quincePixeles negocio"></div>
		<div class="secundarioPublicidadDerecha quincePixeles negocio"></div>
	</div><!-- FINALIZA LA SECCIÓN SECUNDARIO -->
</body>
</html>