<?php 

	require_once "conexion.php";
	$conexion=conexion();

	$idAsisDocen=$_POST['idAsisDocen'];
	
	

	$sql="DELETE FROM `docente` WHERE  `idAsisDocen`='$idAsisDocen'";


	echo $result=mysqli_query($conexion,$sql);

	

 ?>