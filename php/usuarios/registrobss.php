<?php session_start();

	$namebss=$_POST['namebss'];
	$website=$_POST['website'];
	$address= $_POST['address'];
	$phone=$_POST['phone'];
	$email=$_POST['mail'];
	$descrip=$_POST['descrip'];
	$categoria=$_POST['category'];
	$subcategoria=$_POST['categorysub'];
  
	require("connect_db.php");
	include("session.php");
	
	$sql=mysqli_query($link,"INSERT INTO negocios VALUES('','$namebss','$website','$address','$phone','$email','$descrip','$login_session3','','$categoria','$subcategoria','')");

	
	echo ' <script language="javascript">alert("Negocio registrado");</script> ';	
		//row select Autonumerico FROM Mi_Tabla WHERE Cedula = '1010' AND Nombre = 'Edwin' AND Apellido = 'Gomez';
	
	
	echo "<script>location.href='../../html/perfil.php'</script>";




?>	