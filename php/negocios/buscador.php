<?php session_start();
      $buscar=$_SESSION['buscar'];
     
  include("connect_db.php");
  $result = mysqli_query($link, "SELECT * FROM negocios LEFT JOIN imagenesbss ON negocios.id_negocio = imagenesbss.id_bss WHERE namebss LIKE '%$buscar%'"); 

  $cb=0;
  if ($row6 = mysqli_fetch_array($result)){ 
    do 
    {
      $cb=$cb+1;
      $bss_mostrar[$cb]=$row6['namebss'];
      $bss_mostrar1[$cb]=$row6['address'];
      $bss_mostrar2[$cb]=$row6['descrip'];
      $bss_mostrar3[$cb]=$row6['imagenbss'];
    } while($row6=mysqli_fetch_array($result));
    for ($i = 1; $i <=$cb; $i++) 
    {
      if(isset($bss_mostrar3[$i]))
        {
          $bss_mostrarimg[$i]="../imagenesbss/".$bss_mostrar3[$i];
        }else{
          $bss_mostrarimg[$i]= "../objetos/sinFoto.png";
        }
    }
  } 

  else { 
            echo "¡ No se ha encontrado ningún registro !"; 
  } 
  for($a=1;$a<=$cb;$a++) 
  {
      $numra[$a]=rand(1,$cb);
      if($a>1) 
      {
          for($x=1; $x<$a; $x++)
          {
            if($numra[$a]==$numra[$x]) 
            { 
                $a--; 
                break; 
            }
          }
      }
  }

  for ($k = 1; $k <=$cb; $k++) {
      $bss_mostraral[$k]=$bss_mostrar[$numra[$k]];
      $bss_mostrar1al[$k]=$bss_mostrar1[$numra[$k]];
      $bss_mostrar2al[$k]=$bss_mostrar2[$numra[$k]];
      $bss_mostrar3al[$k]=$bss_mostrar3[$numra[$k]];
        if(isset($bss_mostrarimg[$k]))
            {
                $bss_mostrarimgal[$k]=$bss_mostrarimg[$numra[$k]];
            }else{
                $bss_mostrarimgal[$k]=$bss_mostrarimg[$numra[$k]];
            }

    }
?> 
<script>
      var variableb = "<?php echo $cb; ?>" ;
      var number= parseInt(variableb);
      //var nombresNegocio= new Array();
      nombresNegocio=<?php echo json_encode($bss_mostraral);?>;
      direccionNegocio=<?php echo json_encode($bss_mostrar1al);?>;
      descripNegocio=<?php echo json_encode($bss_mostrar2al);?>;
      imagenNegocio=<?php echo json_encode($bss_mostrarimgal);?>;
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