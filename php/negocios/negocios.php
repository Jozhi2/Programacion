<?php session_start();
include('connect_db.php');
//Negocios que no pagan mostrar
$session3=mysqli_query($link, "SELECT * FROM negocios WHERE clickpay='0' ");
$c=0;
if($row3=mysqli_fetch_array($session3)){
	
	do {
		$c=$c+1;
		$bss_session[$c]=$row3['namebss'] ;
		$bss_session1[$c]=$row3['website'];
		$bss_session2[$c]=$row3['address'];
		$bss_session3[$c]=$row3['phone'];
		$bss_session4[$c]=$row3['email'];
		$bss_session5[$c]=$row3['descrip'];
		$bss_session6[$c]=$row3['id_negocio'];
	} while($row3=mysqli_fetch_array($session3));
}
//Negocios que pagan mostrar
$session4=mysqli_query($link, "SELECT * FROM negocios WHERE clickpay>'0' ");
$d=0;
if($row4=mysqli_fetch_array($session4)){
	do {
		$d=$d+1;
		$bss_pay[$d]=$row4['namebss'] ;
		$bss_pay1[$d]=$row4['website'];
		$bss_pay2[$d]=$row4['address'];
		$bss_pay3[$d]=$row4['phone'];
		$bss_pay4[$d]=$row4['email'];
		$bss_pay5[$d]=$row4['descrip'];
		$bss_pay6[$d]=$row4['id_negocio'];
		$bss_pay7[$d]=$row4['clickpay'];
	} while($row4=mysqli_fetch_array($session4));
}
//registro random


//imagenes
$consulta=mysqli_query($link, "SELECT * FROM negocios INNER JOIN imagenesbss ON negocios.id_negocio = imagenesbss.id_bss where clickpay>'0'");

	$e=0;
	$imagen=array();
	$id_bss=array();
	$name_bss=array();
	$direccion_bss=array();
	$phone_bss=array();
	$descripcion_bss=array();
	$email_bss=array();
	$cal_bss=array();

	if($datos=mysqli_fetch_array($consulta)){
	do{
		$e=$e+1;
		$imagen[$e]=$datos['imagenbss'] ;
		$id_bss[$e]=$datos['id_negocio'] ;
		$name_bss[$e]=$datos['namebss'] ;
		$direccion_bss[$e]=$datos['address'] ;
		$phone_bss[$e]= $datos['phone'] ;
		$descripcion_bss[$e]=$datos['descrip'];
		$email_bss[$e]=$datos['email'];
		$cal_bss[$e]=$datos['valoracion'];
		$web_bss[$e]=$datos['website'];
		
	}while($datos = mysqli_fetch_assoc($consulta));
	}
	$numra=array();

	for($i=1;$i<=25;$i++) 
 	{
   		$numra[$i]=rand(1,$e);
    	if($i>1) 
    	{
       		for($x=1; $x<$i; $x++)
       		{
         		if($numra[$i]==$numra[$x]) 
         		{ 
           			$i--; 
           			break; 
         		}
      		}
   		}
 	}

 

 	for ($k = 1; $k <=25; $k++) {
 		$_SESSION['idneg'][$k]=$id_bss[$numra[$k]];
 		$_SESSION['bssname'][$k]=$name_bss[$numra[$k]];
 		$_SESSION['bssdir'][$k]=$direccion_bss[$numra[$k]];
 		$_SESSION['bssphone'][$k]=$phone_bss[$numra[$k]];
 		$_SESSION['bssdes'][$k]=$descripcion_bss[$numra[$k]];
 		$_SESSION['bssval'][$k]=$cal_bss[$numra[$k]];
 		$_SESSION['bssemail'][$k]=$email_bss[$numra[$k]];
 		$_SESSION['bssweb'][$k]=$web_bss[$numra[$k]];
        if(isset($imagen[$k]))
            {
              	$_SESSION['ruta'][$k]="../imagenesbss/" . $imagen[$numra[$k]];
            }else{
                $_SESSION['ruta'][$k]= "../objetos/sinFoto.png";
            }

    }

    $rutan=array();
    $idneg=array();

	for ($j = 1; $j <=25; $j++) {
		$rutan[$j]=$_SESSION['ruta'][$j];
		$idneg[$j]=$_SESSION['idneg'][$j];
		$bssname[$j]=$_SESSION['bssname'][$j];
		$bssdir[$j]=$_SESSION['bssdir'][$j];
		$bssphone[$j]=$_SESSION['bssphone'][$j];
		$bssdes[$j]=$_SESSION['bssdes'][$j];
		$bssval[$j]=$_SESSION['bssval'][$j];
		$bsscorreo[$j]=$_SESSION['bssemail'][$j];
		$bssweb[$j]=$_SESSION['bssweb'][$j];
	}
	


?>

<script>
    var variabled = "<?php echo $e; ?>" ;
    var number2= parseInt(variabled);
      //var nombresNegocio= new Array();
    bssPayName=<?php echo json_encode($bssname);?>;
    bssPayDir=<?php echo json_encode($bssdir);?>;
    bssPayPhone=<?php echo json_encode($bssphone);?>;
    bssPayDes=<?php echo json_encode($bssdes);?>;
    bssPayVal=<?php echo json_encode($bssval);?>;
    bssCorreo=<?php echo json_encode($bsscorreo);?>;
    bssPayImg=<?php echo json_encode($rutan);?>;
    bssWebsite=<?php echo json_encode($bssweb);?>;

   	var nombreneg1=new Array();
    var dirNegocio1=new Array();
    var bssPhonePay1=new Array();
    var desNegocio1=new Array();
    var valoracionNeg1=new Array();
    var imgNegocio1=new Array();
    var correoNeg1=new Array();
    var webNeg1=new Array();
      
    for(var j = 1; j <= 25; j++){
        nombreneg1[j]=bssPayName[j];
        dirNegocio1[j]=bssPayDir[j];
        bssPhonePay1[j]=bssPayPhone[j];
        desNegocio1[j]=bssPayDes[j];
        valoracionNeg1[j]=bssPayVal[j];
        imgNegocio1[j]=bssPayImg[j];
        correoNeg1[j]=bssCorreo[j];
        webNeg1[j]=bssWebsite[j];
            
    }
     
</script>
