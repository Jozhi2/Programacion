<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	<title>Proyecto academias</title>
	
	
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	
	
</head>
<body background="images/golf.jpg" style="background-attachment: fixed" >
<?php
include("session.php");

?>

<h3 align="center"> Hellow <?php echo $login_session." " .$login_session4;?></h3> 
<h3 align="center"> correo <?php echo $login_session2; ?></h3> 
<h3 align="center"> tu negocio <?php 	do {
											echo  "<br>" .$row2['namebss'] ;
										} while($row2=mysql_fetch_array($session2));
								?>
</h3>
<h3 align="center"> Otros negocios <?php echo "<br>" .$bss_session[$numr]; ?></h3> 
<h3 align="center"> imagen <?php echo "<br>" ."<img src='$ruta' />"; ?></h3> 

<h2 align="center" class="alert alert-danger" role="alert">Welcome to login system</h2> 

<!-- buscador -->
<h4 align="center">  click here to <a href="logout.php">LogOut</a> </h4>

<form method="POST" action="buscador.php"> 
<strong>Palabra clave:</strong> <input type="text" name="T1" size="20"><br><br> 

<button type="submit" value="Buscar" name="buscar" class="glyphicon glyphicon-search"> 
</button>
</form> 
<!-- buscador -->
<!-- formulario registro -->

<form method="post" action="" >
  <fieldset>
    <legend  style="font-size: 18pt"><b>Registra tu empresa</b></legend>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Nombre del negocio</b></label>
      <input type="text" name="namebss" class="form-control" placeholder="Ingresa nombre negocio" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;"><b>Sitio web</b></label>
      <input type="text" name="website" class="form-control"  required placeholder="Ingresa sitio web"/>
    </div>
	    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;"><b>Direccion</b></label>
      <input type="text" name="address" class="form-control"  required placeholder="Ingresa direccion"/>
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;"><b>Numero Telefonico</b></label>
      <input type="text" name="phone" class="form-control"  placeholder="Ingresa telefono" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>email</b></label>
      <input type="text" name="mail" class="form-control" required placeholder="ingresa mail" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>descripcion</b></label>
      <input type="text" name="descrip" class="form-control" required placeholder="ingresa descripcion" />
    </div>
    </div>
   
    <input  class="btn btn-danger" type="submit" name="submit" value="Registrarse"/>

  </fieldset>
</form>
</div>
<!--Fin formulario registro -->
<?php
		if(isset($_POST['submit'])){
			require("registrobss.php");
		}
?>
<form action="subir.php" method="POST" enctype="multipart/form-data">
	<label for="imagen">Imagen:</label>
	<input type="file" name="imagen" id="imagen" />
	<input type="submit" name="subir" value="Subir"/>
</form><br>
<?php 

/*
 require("connect_db.php");
 $result = mysql_query("SELECT * FROM negocios"); 
 if ($row = mysql_fetch_array($result)){ 
   echo "<table border = '1'> \n"; 
   echo "<tr><td>Nombre</td> \n <td>Sitio Web</td> \n <td>Direccion</td> \n <td>Telefono</td> \n 
   <td>Email</td> \n <td>Descripcion</td> \n"; 
   do { 
      echo "<tr><td>".$row["namebss"]."</td> \n <td>".$row["website"]."</td> \n <td>".$row["address"]."</td> \n 
	  <td>".$row["phone"]."</td> \n <td>".$row["email"]."</td> \n <td>".$row["descrip"]."</td></tr> \n"; 
   } while ($row = mysql_fetch_array($result)); 
   echo "</table> \n"; 
 } else { 
 echo "¡ No se ha encontrado ningún registro !"; 
 } 
*/ 
?>


	
</body>
</html>