<?php session_start();
	include("connect_db.php");
	$buscar=$_POST['cuadroDeBusqueda'];
	$_SESSION['buscar']=$buscar;
    
    $check=$_SESSION['login_username'];
	if(isset($check)){
		echo "<script>location.href='../../html/busqueda_login.php'</script>";
		exit;
	}
	else{
		echo "<script>location.href='../../html/busqueda.php'</script>";
		exit;
	}
	
    


?> 
