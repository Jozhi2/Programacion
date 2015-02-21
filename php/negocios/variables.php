<?php session_start();
	$buscar=$_POST['cuadroDeBusqueda'];
	$_SESSION['buscar']=$buscar;
     
	include("connect_db.php");
     echo "<script>location.href='../../html/busqueda.php'</script>";


?> 
