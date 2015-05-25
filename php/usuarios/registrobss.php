<?php session_start();

	$namebss=$_POST['namebss'];
	$website=$_POST['website'];
	$address= $_POST['address'];
	$phone=$_POST['phone'];
	$email=$_POST['mail'];
	$descrip=$_POST['descrip'];
	$categoria=$_POST['category'];
	$subcategoria=$_POST['categorysub'];
	$file=$_FILES["file"];
  
	require("connect_db.php");
	include("session.php");
	
	$sql=mysqli_query($link,"INSERT INTO negocios VALUES('','$namebss','$website','$address','$phone','$email','$descrip','$login_session3','','$categoria','$subcategoria','')");
	$id_negocio=mysqli_insert_id($link);

	if ($file["error"] > 0){
	echo "ha ocurrido un error";
	} else {
	//ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
	//y que el tamano del archivo no exceda los 100kb
	$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
	$limite_kb = 100000;

	if (in_array($file['type'], $permitidos) && $file['size'] <= $limite_kb * 1024){
		//esta es la ruta donde copiaremos la imagen
		//recuerden que deben crear un directorio con este mismo nombre
		//en el mismo lugar donde se encuentra el archivo subir.php
		$ruta = "../../imagenesbss/" . $file['name'];
		//comprobamos si este archivo existe para no volverlo a copiar.
		//pero si quieren pueden obviar esto si no es necesario.
		//o pueden darle otro nombre para que no sobreescriba el actual.
		if (!file_exists($ruta)){
			//aqui movemos el archivo desde la ruta temporal a nuestra ruta
			//usamos la variable $resultado para almacenar el resultado del proceso de mover el archivo
			//almacenara true o false
			$resultado = @move_uploaded_file($file["tmp_name"], $ruta);
			echo "<img src='$ruta'>";
			if ($resultado){
				$nombre = $file['name'];
				mysqli_query($link, "INSERT INTO imagenesbss VALUES ('','$nombre','')") ;
				$id_imag=mysqli_insert_id($link);
				mysqli_query($link, "UPDATE imagenesbss SET id_bss='$id_negocio' WHERE id_imgbss='$id_imag'");
				echo "<script>location.href='../../html/perfil.php'</script>";
				echo ' <script language="javascript">alert("Negocio registrado");</script> ';
				
			
			} else {
				echo "ocurrio un error al mover el archivo.";
			}
		} else {
			echo $file['name'] . ", este archivo existe";
		}
	} else {
		echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
	}
}
	
	echo ' <script language="javascript">alert("Negocio registrado");</script> ';	
		//row select Autonumerico FROM Mi_Tabla WHERE Cedula = '1010' AND Nombre = 'Edwin' AND Apellido = 'Gomez';
	
	
	echo "<script>location.href='../../html/perfil.php'</script>";




?>	