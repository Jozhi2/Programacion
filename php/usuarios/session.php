<?php session_start();
include('connect_db.php');

$check=$_SESSION['login_username'];

	$session=mysqli_query($link, "SELECT * FROM login WHERE email='$check' ");
	$row=mysqli_fetch_array($session);
	$login_session=$row['realname'];
	$login_session4=$row['apellido'];
	$login_session2=$row['email'];
	$login_session3=$row['id_usuario'];

	//mostrar tus negocios
	$session2=mysqli_query($link, "SELECT * FROM login INNER JOIN negocios ON login.id_usuario = negocios.id_usuario WHERE login.email='$check' ");
	$row2=mysqli_fetch_array($session2);
	do {
		$c=$c+1;
		$bss_user[$c]=$row2['namebss'] ;
		$bss_user1[$c]=$row2['id_negocio'] ;
	} while($row2=mysqli_fetch_array($session2));


	//mostrar imagen

	$consulta=mysqli_query($link, "SELECT imagen FROM login INNER JOIN imagenes ON login.id_usuario = imagenes.id_user WHERE login.email='$check' ");
	$datos = mysqli_fetch_assoc($consulta);
	if(isset($datos['imagen']))
	{
		$ruta = "../../imagenes/" . $datos['imagen'];
	}else{
		$ruta = "../../objetos/perfil/fotoPerfil.png";
	}
	


if(!isset($login_session))
{
	
	echo "<script>location.href='/html/index.php'</script>";
	
}
?>
<script>
      var variableb = "<?php echo $c; ?>" ;
      var numBssu= parseInt(variableb);
      //var nombresNegocio= new Array();
      negocioUser=<?php echo json_encode($bss_user);?>;
   
      var bssUser=new Array();
      
      for(var j = 1; j <= numBssu; j++){
            bssUser[j]=negocioUser[j];
            
      }
</script>