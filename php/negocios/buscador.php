<?php session_start();
      $buscar=$_SESSION['buscar'];
     
	include("connect_db.php");
	$result = mysqli_query($link, "SELECT * FROM negocios LEFT JOIN imagenesbss ON negocios.id_negocio = imagenesbss.id_bss WHERE namebss LIKE '%$buscar%'"); 

      $cb=0;
    if ($row6 = mysqli_fetch_array($result)){ 
		  do {
              $cb=$cb+1;
              $bss_mostrar[$cb]=$row6['namebss'];
              $bss_mostrar1[$cb]=$row6['address'];
              $bss_mostrar2[$cb]=$row6['descrip'];
              $bss_mostrar3[$cb]=$row6['imagenbss'];
          } while($row6=mysqli_fetch_array($result));
          for ($i = 1; $i <=$cb; $i++) {
                if(isset($bss_mostrar3[$i]))
                {
                    $bss_mostrarimg[$i]="../../imagenesbss/" .$bss_mostrar3[$i];
                }else{
                    $bss_mostrarimg[$i]= "../../objetos/sinFoto.png";
                }

          }
	   } 

       else { 
            echo "¡ No se ha encontrado ningún registro !"; 
      } 

?> 
<script>
      var variableb = "<?php echo $cb; ?>" ;
      var number= parseInt(variableb);
      //var nombresNegocio= new Array();
      nombresNegocio=<?php echo json_encode($bss_mostrar);?>;
      direccionNegocio=<?php echo json_encode($bss_mostrar1);?>;
      descripNegocio=<?php echo json_encode($bss_mostrar2);?>;
      imagenNegocio=<?php echo json_encode($bss_mostrarimg);?>;
      var imgNegocio=new Array();
      var desNegocio=new Array();
      var dirNegocio=new Array();
      var nombreneg= new Array();
      var c=0;
      for(var j = 1; j <= number; j++){
            nombreneg[j]=nombresNegocio[j];
            dirNegocio[j]=direccionNegocio[j];
            desNegocio[j]=descripNegocio[j];
            imgNegocio[j]=imagenNegocio[j];
      }
</script>