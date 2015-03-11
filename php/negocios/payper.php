<?php
	require("connect_db.php");
	$diasp=$_POST['diasp'];
	$paybss=$_POST['paybss'];


	if( isset( $_SERVER['HTTP_X_FORWARDED_FOR'] )) $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if( isset( $_SERVER ['HTTP_VIA'] ))  $ip = $_SERVER['HTTP_VIA'];
    else if( isset( $_SERVER ['REMOTE_ADDR'] ))  $ip = $_SERVER['REMOTE_ADDR'];

    if($paybss<1000) $metop=1; //metodo de pago 1
	else if($paybss<10000) $metop=2; //metodo de pago 2
	else if($paybss>9999) $metop=3; //metodo de pago 3

	if($paybss<1000) $paybs1=$paybss/0.60; //clicks
	else if($paybss<10000) $paybs1=$paybss/0.50; //clicks
	else if($paybss>9999) $paybs1=$paybss/0.40; //clicks

	$sql=mysqli_query($link, "SELECT id_negocio, clickpay, diasp, inversion, saldo FROM payperclick WHERE id_negocio='$id_negocio'");
	$fila=mysqli_fetch_array($sql);
		$click=$fila[1];//click restantes del negocio
		$dias=$fila[2];// dias de pago
		$inver=$fila[3];// inversion
		$sald=$fila[4]; // saldo restante
	if(mysqli_fetch_array($sql)==0){
		$sql=mysqli_query($link, "INSERT INTO payperclick VALUES('','$paybss1','$diasp',NOW(),'$id_negocio','$paybss','$paybss','$diasp','$metop')");
		$sql1=mysqli_query($link, "SELECT DAYOFYEAR(NOW()) FROM payperclick WHERE id_negocio='$id_negocio'");
		$fila1=mysqli_fetch_array($sql1);
		$diay=$fila1[0];// dia del año
		$sumdia=$diay+$diasp;//dia de pago finalizar
		if($sumdia>365){
			$sumdia=$sumdia-365;//dia del año
			$sql2=mysqli_query($link, "UPDATE payperclick SET diasp=$sumdia WHERE id_negocio='$id_negocio'");
		}
		$sql2=mysqli_query($link, "UPDATE payperclick SET diasp=$sumdia WHERE id_negocio='$id_negocio'");
	}

	else{
		$sumdia=$dias+$diasp;//dia del año
		if($sumdia>365){
			$sumdia=$sumdia-365;// dia del año
			$sql=mysqli_query($link, "UPDATE payperclick SET clickpay='$click'+'$paybss1', diasp='$sumdia', inversion=$inver+$paybss, saldo=$sald+$paybss, metodop=$metop WHERE id_negocio='$id_negocio'");
		}
		$sql=mysqli_query($link, "UPDATE payperclick SET clickpay='$click'+'$paybss1', diasp='$sumdia', inversion=$inver+$paybss, saldo=$sald+$paybss, metodop=$metop WHERE id_negocio='$id_negocio'");

	}
$sql2=mysqli_query($link, "SELECT clickpay, diasp FROM payperclick WHERE id_negocio='$id_negocio'");
$fila2=mysqli_fetch_array($sql2);
$click_r=$fila[0];//clicks restantes
$dias_r=$fila[1];//dias de pago
$sql3=mysqli_query($link,"UPDATE negocios SET clickpay='$click_r' WHERE id_negocio='$id_negocio'");
?>