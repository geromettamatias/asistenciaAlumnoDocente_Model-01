<?php 

	require_once "conexion.php";
	$conexion=conexion();

	$apellidNombreAlumno=$_POST['apellidNombreAlumno'];
	$dni=$_POST['dni'];
	$SecuBla=$_POST['SecuBla'];
	$asignatura=$_POST['asignatura'];

	$anexo=$_POST['anexo'];
	$fecha=$_POST['fecha'];




	$sql="INSERT INTO `docente`(`idAsisDocen`, `usuario`, `dni`, `secuBla`, `asig`, `anex`, `fecha`) VALUES (null,'$apellidNombreAlumno','$dni','$SecuBla','$asignatura','$anexo','$fecha')";
	echo $result=mysqli_query($conexion,$sql);

	

 ?>