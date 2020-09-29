<?php 

	require_once "conexion.php";
	$conexion=conexion();

	$apellidNom=$_POST['apellidNom'];
	$dni=$_POST['dni'];
	$SecuBla=$_POST['SecuBla'];
	$asignatura=$_POST['asignatura'];

	$anexo=$_POST['anexo'];
	$fecha=$_POST['fecha'];




	$sql="INSERT INTO `alumno`(`idAsisAlumno`, `usuario`, `dni`, `secuBla`, `ciclo`, `anex`, `fecha`) VALUES (null,'$apellidNom','$dni','$SecuBla','$asignatura','$anexo','$fecha')";


	echo $result=mysqli_query($conexion,$sql);

	

 ?>