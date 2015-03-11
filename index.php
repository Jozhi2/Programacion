<?php session_start();
?>
<!DOCTYPE html> 
<html lang="es">
<head>
	<title>Wallavi</title>
</head>
<body>

<?php 

$check=$_SESSION['login_username'];
if(isset($check)){
	echo "<script>location.href='/html/index_login.php'</script>";
	exit;
	
}
else{
	echo "<script>location.href='/html/index.php'</script>";
	exit;
}

?>

</body>