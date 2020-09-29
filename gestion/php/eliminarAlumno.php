<?php 

	require_once "conexion.php";
	$conexion=conexion();

	$idAsisAlu=$_POST['idAsisAlu'];
	
	

	$sql="DELETE FROM `alumno` WHERE  `idAsisAlumno`='$idAsisAlu'";


	echo $result=mysqli_query($conexion,$sql);

	

 ?>