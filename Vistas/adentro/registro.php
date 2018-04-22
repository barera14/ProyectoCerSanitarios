<?php
	//conexion con la base de datos y el servidor

   $link = mysql_connect("localhost","id4457381_certificados","erichernandez") or die("<h2>No se encuentra el servidor</h2>");
	$db = mysql_select_db("id4457381_registro",$link) or die("<h2>Error de Conexion</h2>");

	//obtenemos los valores del formulario

	$nombres = $_POST['nombreuser'];
	$apellidos = $_POST['apellidosuser'];
	$cedula = $_POST['cc'];
	$correo = $_POST['emailuser'];
	$direccion =$_POST['direc'];
	$celular = $_POST['cel'];

	//Obtiene la longitus de un string
	$req = (strlen($nombres)*strlen($apellidos)*strlen($cedula)*strlen($correo)*strlen($direccion)*strlen($celular)) or die("No se han llenado todos los campos");


	//ingresamos la informacion a la base de datos
	mysql_query("INSERT INTO Cliente VALUES('','$nombres','$apellidos','$cedula','$correo','$direccion','$celular')",$link) or die("<h2>Error Guardando los datos</h2>");
	echo'
		<script>
			alert("Registro Exitoso");
			location.href="index.html";
		</script>
	'


?>