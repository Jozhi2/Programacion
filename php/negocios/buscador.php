<?php session_start();
$buscar=$_SESSION['buscar'];

     
	include("connect_db.php");

	$result = mysqli_query($link, "SELECT * FROM negocios WHERE namebss LIKE '%$buscar%'"); 
	$cb=0;
      if ($row6 = mysqli_fetch_array($result)){ 
		do {
                  $cb=$cb+1;
                  $bss_mostrar[$cb]=$row6['namebss'];
                  $bss_mostrar[$cb]=$row6['address'];
                  $bss_mostrar[$cb]=$row6['descrip'];
            } while($row6=mysqli_fetch_array($result));
	} 

       else { 
            echo "¡ No se ha encontrado ningún registro !"; 
      } 

?> 
<script>
      
            var variableb = "<?php echo $cb; ?>" ;
            var number= parseInt(variableb);
      
</script>