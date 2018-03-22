<?php
	$conectar=@mysql_connect('localhost', 'root','');
	if(!$conectar)
	{
		echo "No se pudo conectar"; 
	}
	else
	{
		$base=mysql_select_db('pruebaphp');
		if(!$base)
		{
			echo "No se encontro la base de datos";
		}
	}
	
	$nombre = $_POST['txtombre'];
	$apellido = $_POST['txtapellido'];
	$edad = $_POST['txtedad'];
	$fechanac = $_POST['txtfechanac'];
	
	$insertar = "INSERT INTO personas (nombre, apellido, edad, fechanac) VALUES ('$nombre', '$apellido', '$edad', '$fechanac')";
	$ejecutar=mysql_query($insertar);
	if(!$ejecutar)
	{
		echo "Hubo un error";
	}
	else
	{
		echo "Datos insertados correctamente";
	}
?>