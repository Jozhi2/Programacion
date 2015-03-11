<?php
	$click=$_POST["click"];
	$id_negocio=$_POST["id_negocio"];

	require("connect_db.php");
	


	if( isset( $_SERVER['HTTP_X_FORWARDED_FOR'] )) $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if( isset( $_SERVER ['HTTP_VIA'] ))  $ip = $_SERVER['HTTP_VIA'];
    else if( isset( $_SERVER ['REMOTE_ADDR'] ))  $ip = $_SERVER['REMOTE_ADDR'];




$sql=mysqli_query($link, "SELECT ip, TIMEDIFF(NOW(),fecha), fecha, click, DAYOFYEAR(NOW()) FROM payperclickf WHERE id_negocio='$id_negocio'");
$sql1=mysql_query($link, "SELECT diasp, metodop, clickpay FROM payperclick WHERE id_negocio='$id_negocio'");

$fila=mysqli_fetch_array($sql);
$fila1=mysqli_fetch_array($sql1);

$tiempo=$fila[1]; //Diferencia entre fecha guardada y fecha actual
$click=$fila[3]; //Número de visitas
$dayear=$fila[4];//dia del año

$diasp=$fila1[0];//dias pagados
$metop=$fila1[1];//metodo de pago
$clickre=$$fila1[2];//click restantes

$diasu=$diasp-$dayear;//dias restantes

$horas_t=substr($tiempo,0,2); //Número de horas transcurridas
$horas_s=substr($tiempo,-5,-4);//minutos transcurridos
$horas_t=$horas_t*3;
$sum_horas=$horas_t+$horas_s;

$tiemRes = 3; //Varible de tiempo en horas para restringir la visita


if($metop=1){
	if (mysqli_num_rows($sql)==0)

	{
		$c=1;
		$sql1=mysqli_query($link, "INSERT INTO payperclickf(ip, click, fecha, id_negocio) VALUES('$ip','$c', NOW(), '$id_negocio')");
		if($diasu>0){
			$sql3=mysqli_query($link, "UPDATE payperclick SET clickpay=clickpay-1, diasr='$diasu',saldo=saldo-0.60 WHERE id_negocio='$id_negocio'");
			
		}
		else{
			$sql3=mysqli_query($link, "UPDATE payperclick SET clickpay=clickpay-1,saldo=saldo-0.60 WHERE id_negocio='$id_negocio'");
		}
		
	}
	else if (mysqli_num_rows($sql) > 0 && $sum_horas >= $tiemRes)
	{
		$sql2=mysqli_query($link, "UPDATE payperclickf SET fecha=NOW(), click='$click'+1 WHERE id_negocio='$id_negocio'");
		if($diasu>0){
			$sql3=mysqli_query($link, "UPDATE payperclick SET clickpay=clickpay-1, diasr='$diasu',saldo=saldo-0.60 WHERE id_negocio='$id_negocio'");
			
		}
		else{
			$sql3=mysqli_query($link, "UPDATE payperclick SET clickpay=clickpay-1,saldo=saldo-0.60 WHERE id_negocio='$id_negocio'");
		}
	}
	$sql3=mysql_query($link, "SELECT clickpay FROM payperclick WHERE id_negocio='$id_negocio'"); //Obtenemos la suma de todas las visitas
	$fila1=mysqli_fetch_array($sql3); //Almacenanos el resultado de la consulta en un arreglo
	$click_r=$fila1[0];

	$sql4=mysqli_query($link,"UPDATE negocios SET clickpay='$click_r' WHERE id_negocio='$id_negocio'");
}

if($metop=2){
	if (mysqli_num_rows($sql)==0)

	{
		$c=1;
		$sql1=mysqli_query($link, "INSERT INTO payperclickf(ip, click, fecha, id_negocio) VALUES('$ip','$c', NOW(), '$id_negocio')");
		if($diasu>0){
			$sql3=mysqli_query($link, "UPDATE payperclick SET clickpay=clickpay-1, diasr='$diasu',saldo=saldo-0.50 WHERE id_negocio='$id_negocio'");
			
		}
		else{
			$sql3=mysqli_query($link, "UPDATE payperclick SET clickpay=clickpay-1,saldo=saldo-0.50 WHERE id_negocio='$id_negocio'");
		}
		
	}
	else if (mysqli_num_rows($sql) > 0 && $sum_horas >= $tiemRes)
	{
		$sql2=mysqli_query($link, "UPDATE payperclickf SET fecha=NOW(), click='$click'+1 WHERE id_negocio='$id_negocio'");
		if($diasu>0){
			$sql3=mysqli_query($link, "UPDATE payperclick SET clickpay=clickpay-1, diasr='$diasu',saldo=saldo-0.50 WHERE id_negocio='$id_negocio'");
			
		}
		else{
			$sql3=mysqli_query($link, "UPDATE payperclick SET clickpay=clickpay-1,saldo=saldo-0.50 WHERE id_negocio='$id_negocio'");
		}
	}
	$sql3=mysql_query($link, "SELECT clickpay FROM payperclick WHERE id_negocio='$id_negocio'"); //Obtenemos la suma de todas las visitas
	$fila1=mysqli_fetch_array($sql3); //Almacenanos el resultado de la consulta en un arreglo
	$click_r=$fila1[0];

	$sql4=mysqli_query($link,"UPDATE negocios SET clickpay='$click_r' WHERE id_negocio='$id_negocio'");
}

if($metop=3){
	if (mysqli_num_rows($sql)==0)

	{
		$c=1;
		$sql1=mysqli_query($link, "INSERT INTO payperclickf(ip, click, fecha, id_negocio) VALUES('$ip','$c', NOW(), '$id_negocio')");
		if($diasu>0){
			$sql3=mysqli_query($link, "UPDATE payperclick SET clickpay=clickpay-1, diasr='$diasu',saldo=saldo-0.40 WHERE id_negocio='$id_negocio'");
			
		}
		else{
			$sql3=mysqli_query($link, "UPDATE payperclick SET clickpay=clickpay-1,saldo=saldo-0.40 WHERE id_negocio='$id_negocio'");
		}
		
	}
	else if (mysqli_num_rows($sql) > 0 && $sum_horas >= $tiemRes)
	{
		$sql2=mysqli_query($link, "UPDATE payperclickf SET fecha=NOW(), click='$click'+1 WHERE id_negocio='$id_negocio'");
		if($diasu>0){
			$sql3=mysqli_query($link, "UPDATE payperclick SET clickpay=clickpay-1, diasr='$diasu',saldo=saldo-0.40 WHERE id_negocio='$id_negocio'");
			
		}
		else{
			$sql3=mysqli_query($link, "UPDATE payperclick SET clickpay=clickpay-1,saldo=saldo-0.40 WHERE id_negocio='$id_negocio'");
		}
	}
	$sql3=mysql_query($link, "SELECT clickpay FROM payperclick WHERE id_negocio='$id_negocio'"); //Obtenemos la suma de todas las visitas
	$fila1=mysqli_fetch_array($sql3); //Almacenanos el resultado de la consulta en un arreglo
	$click_r=$fila1[0];

	$sql4=mysqli_query($link,"UPDATE negocios SET clickpay='$click_r' WHERE id_negocio='$id_negocio'");
}

?>