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
$consulta=mysqli_query($link, "SELECT imagenbss, namebss FROM negocios INNER JOIN imagenesbss ON negocios.id_negocio = imagenesbss.id_bss where clickpay>'0'");

if($datos = mysqli_fetch_assoc($consulta))
{
	do {
		$e=$e+1;
		$imagen[$e]=$datos['imagenbss'] ;
		$id_bss[$e]=$datos['id_negocio'] ;
		$name_bss[$e]=$datos['namebss'] ;
		$direccion_bss[$e]=$datos['address'] ;
		$phone_bss[$e]= $datos['phone'] ;
		$descripcion_bss[$e]=$datos['descrip'];
		$email_bss[$e]=$datos['email'];
		$cal_bss[$e]=$datos['valoracion'];
		
	}while($datos = mysqli_fetch_assoc($consulta));
	
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
 		$_SESSION['idneg'][$k]="../../imagenesbss/" . $id_bss[$numra[$k]];
        if(isset($imagen[$k]))
            {
              	$_SESSION['ruta'][$k]="../../imagenesbss/" . $imagen[$numra[$k]];
            }else{
                $_SESSION['ruta'][$k]= "../../objetos/sinFoto.png";
            }

    }

	for ($j = 1; $j <=25; $j++) {
		$rutan[$j]=$_SESSION['ruta'][$j];
		$idneg[$j]=$_SESSION['idneg'][$j];
	}
	
}

?>

<script>
      var variableb = "<?php echo $e; ?>" ;
      var numBssClick= parseInt(variableb);
      //var nombresNegocio= new Array();
      bssPayImg=<?php echo json_encode($rutan);?>;
      bssPayImg=<?php echo json_encode($rutan);?>;
      bssPayImg=<?php echo json_encode($rutan);?>;
      bssPayImg=<?php echo json_encode($rutan);?>;
   
      var bssImgPay=new Array();
      
      for(var j = 1; j <= numBssClick; j++){
            bssImgPay[j]=bssPayImg[j];
            
      }
</script>
