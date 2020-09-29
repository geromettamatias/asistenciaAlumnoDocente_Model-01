<?php 

	require_once "conexion.php";
	$conexion=conexion();

	$idAsigAlumno=$_POST['idAsigAlumno'];
	$usuario=$_POST['usuario'];
	$dni=$_POST['dni'];
	

	$sql="UPDATE `alumno` SET `usuario`='$usuario',`dni`='$dni' WHERE `idAsisAlumno`='$idAsigAlumno'";


	echo $result=mysqli_query($conexion,$sql);

	

 ?>