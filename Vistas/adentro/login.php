
<?php


   //conexion con la base de datos y el servidor
   

$link = mysql_connect("localhost","id4457381_certificados","erichernandez") or die("<h2>No se encuentra el servidor</h2>");
	$db = mysql_select_db("id4457381_registro",$link) or die("<h2>Error de Conexion</h2>");
   

	$cedula=$_POST['CC'];
	


	$sql=mysql_query("SELECT * FROM Cliente WHERE Cedula='$cedula'");

	
	if($f=mysql_fetch_array($sql))
	{
	echo "<script>location.href='adentro/index.html'</script>";
	}
	
	else
	{
		
		echo '<script>alert("ESTE DOCUMENTO NO SE ENCUENTRA REGISTRADO, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='registro.html'</script>";	

	}


?>