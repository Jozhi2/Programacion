<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Wallavi</title>
	<meta charset="utf-8">

	<link rel="shortcut icon" href="../objetos/favicon/favicon.png" />

	<?php 	include("../php/contador.php");?>
	<?php 	include("../php/negocios/negocios.php");?>

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
	<script type="text/javascript" src="../javascript/resize.js"></script>
	<script type="text/javascript" src="../javascript/LOGINOUT/cambiarCursor.js"></script>
	<script src="https://cdn.socket.io/socket.io-1.3.4.js"></script>
	<script type="text/javascript" src="../javascript/SOCKETS/socketClient.js"></script>
	<script type="text/javascript" src="../javascript/LOGOUT/registrar.js"></script>
	<script type="text/javascript" src="../javascript/LOGOUT/ingresar.js"></script>	
	<script type="text/javascript" src="../javascript/LOGINOUT/visualizar_negocio.js"></script>	
	<script type="text/javascript" src="../javascript/LOGINOUT/calificar_negocio.js"></script>	
	<script type="text/javascript" src="../javascript/LOGINOUT/index_principal.js"></script>
	<script type="text/javascript" src="../javascript/CARGADO/index.js"></script>


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

	<!-- SECCION PRINCIPAL -->
	<div id="principal" class="quincePixeles">
		<figure id="primerNegocio" class="quincePixeles negocioPrincipal">
			<?php echo "<img src='$rutan[1]' />"; ?>
		</figure>
		<figure id="segundoNegocio" class="quincePixeles negocioPrincipal">
			<?php echo "<img src='$rutan[2]' />"; ?>
		</figure>
		<figure id="tercerNegocio" class="quincePixeles negocioPrincipal">
			<?php echo "<img src='$rutan[3]' />"; ?>
		</figure>
		<figure id="cuartoNegocio" class="quincePixeles negocioPrincipal">
			<?php echo "<img src='$rutan[4]' />"; ?>
		</figure>
		<figure id="quintoNegocio" class="quincePixeles negocioPrincipal">
			<?php echo "<img src='$rutan[5]' />"; ?>
		</figure>
		<figure id="ceroNegocio" class="quincePixeles negocioPrincipal">
			<?php echo "<img src='$rutan[6]' />"; ?>
		</figure>
		<figure id="sextoNegocio" class="quincePixeles negocioPrincipal">
			<?php echo "<img src='$rutan[7]' />"; ?>
		</figure>
	</div><!-- FINALIZA LA SECCIÓN PRINCIPAL -->

	<!-- SECCION SECUNDARIA -->
	<div id="secundario" class="quincePixeles">
		<div class="secundarioPublicidadIzquierda quincePixeles negocio">
			<div class="cajaHoverNegocio">
				<div class="centraEstrellas quincePixeles">
					<figure><img src="../objetos/estrellas/4cal.png"></figure>
				</div>
			</div>
			<?php echo "<img src='$rutan[8]' />"; ?>
		</div>
		<div class="secundarioPublicidadCentral quincePixeles negocio">
			<div class="cajaHoverNegocio">
				<div class="centraEstrellas quincePixeles">
					<figure><img src="../objetos/estrellas/8cal.png"></figure>
				</div>
			</div>
			<?php echo "<img src='$rutan[9]' />"; ?>
		</div>
		<div class="secundarioPublicidadDerecha quincePixeles negocio">
			<div class="cajaHoverNegocio">
				<div class="centraEstrellas quincePixeles">
					<figure><img src="../objetos/estrellas/9cal.png"></figure>
				</div>
			</div>
			<?php echo "<img src='$rutan[10]' />"; ?>
		</div>

		<div class="secundarioPublicidadIzquierda quincePixeles negocio">
			<div class="cajaHoverNegocio">
				<div class="centraEstrellas quincePixeles">
					<figure><img src="../objetos/estrellas/9cal.png"></figure>
				</div>
			</div>
			<?php echo "<img src='$rutan[11]' />"; ?>
		</div>
		<div class="secundarioPub secundarioPublicidadCentral quincePixeles negocio">
			<div class="cajaHoverNegocio">
				<div class="centraEstrellas quincePixeles">
					<figure><img src="../objetos/estrellas/9cal.png"></figure>
				</div>
			</div>
			<?php echo "<img src='$rutan[12]' />"; ?>
		</div>
		<div class="secundarioPub secundarioPublicidadDerecha quincePixeles negocio">
			<div class="cajaHoverNegocio">
				<div class="centraEstrellas quincePixeles">
					<figure><img src="../objetos/estrellas/9cal.png"></figure>
				</div>
			</div>
			<?php echo "<img src='$rutan[13]' />"; ?>
		</div>

		<div class="secundarioPub secundarioPublicidadIzquierda quincePixeles negocio">
			<div class="cajaHoverNegocio">
				<div class="centraEstrellas quincePixeles">
					<figure><img src="../objetos/estrellas/9cal.png"></figure>
				</div>
			</div>
			<?php echo "<img src='$rutan[14]' />"; ?>
		</div>
		<div class="secundarioPub secundarioPublicidadCentral quincePixeles negocio">
			<div class="cajaHoverNegocio">
				<div class="centraEstrellas quincePixeles">
					<figure><img src="../objetos/estrellas/9cal.png"></figure>
				</div>
			</div>
			<?php echo "<img src='$rutan[15]' />"; ?>
		</div>
		<div class="secundarioPub secundarioPublicidadDerecha quincePixeles negocio">
			<div class="cajaHoverNegocio">
				<div class="centraEstrellas quincePixeles">
					<figure><img src="../objetos/estrellas/9cal.png"></figure>
				</div>
			</div>
			<?php echo "<img src='$rutan[16]' />"; ?>
		</div>

		<div class="secundarioPub secundarioPublicidadIzquierda quincePixeles negocio">
			<div class="cajaHoverNegocio">
				<div class="centraEstrellas quincePixeles">
					<figure><img src="../objetos/estrellas/9cal.png"></figure>
				</div>
			</div>
			<?php echo "<img src='$rutan[17]' />"; ?>
		</div>
		<div class="secundarioPub secundarioPublicidadCentral quincePixeles negocio">
			<div class="cajaHoverNegocio">
				<div class="centraEstrellas quincePixeles">
					<figure><img src="../objetos/estrellas/9cal.png"></figure>
				</div>
			</div>
			<?php echo "<img src='$rutan[18]' />"; ?>
		</div>
		<div class="secundarioPub secundarioPublicidadDerecha quincePixeles negocio">
			<div class="cajaHoverNegocio">
				<div class="centraEstrellas quincePixeles">
					<figure><img src="../objetos/estrellas/9cal.png"></figure>
				</div>
			</div>
			<?php echo "<img src='$rutan[19]' />"; ?>
		</div>

		<div class="secundarioPub secundarioPublicidadIzquierda quincePixeles negocio">
			<div class="cajaHoverNegocio">
				<div class="centraEstrellas quincePixeles">
					<figure><img src="../objetos/estrellas/9cal.png"></figure>
				</div>
			</div>
			<?php echo "<img src='$rutan[20]' />"; ?>
		</div>
		<div class="secundarioPub secundarioPublicidadCentral quincePixeles negocio">
			<div class="cajaHoverNegocio">
				<div class="centraEstrellas quincePixeles">
					<figure><img src="../objetos/estrellas/9cal.png"></figure>
				</div>
			</div>
			<?php echo "<img src='$rutan[21]' />"; ?>
		</div>
		<div class="secundarioPub secundarioPublicidadDerecha quincePixeles negocio">
			<div class="cajaHoverNegocio">
				<div class="centraEstrellas quincePixeles">
					<figure><img src="../objetos/estrellas/9cal.png"></figure>
				</div>
			</div>
			<?php echo "<img src='$rutan[22]' />"; ?>
		</div>

		<div class="secundarioPub secundarioPublicidadIzquierda quincePixeles negocio">
			<div class="cajaHoverNegocio">
				<div class="centraEstrellas quincePixeles">
					<figure><img src="../objetos/estrellas/9cal.png"></figure>
				</div>
			</div>
			<?php echo "<img src='$rutan[23]' />"; ?>
		</div>
		<div class="secundarioPub secundarioPublicidadCentral quincePixeles negocio">
			<div class="cajaHoverNegocio">
				<div class="centraEstrellas quincePixeles">
					<figure><img src="../objetos/estrellas/9cal.png"></figure>
				</div>
			</div>
			<?php echo "<img src='$rutan[24]' />"; ?>
		</div>
		<div class="secundarioPub secundarioPublicidadDerecha quincePixeles negocio">
			<div class="cajaHoverNegocio">
				<div class="centraEstrellas quincePixeles">
					<figure><img src="../objetos/estrellas/9cal.png"></figure>
				</div>
			</div>
			<?php echo "<img src='$rutan[25]' />"; ?>
		</div>
	</div><!-- FINALIZA LA SECCIÓN SECUNDARIO -->
</body>
</html>