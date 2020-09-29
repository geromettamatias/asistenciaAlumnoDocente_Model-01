<?php 

	require_once "conexion.php";
	$conexion=conexion();

	$idAsisDocen=$_POST['idAsisDocen'];
	$usuario=$_POST['usuario'];
	$dni=$_POST['dni'];
	

	$sql="UPDATE `docente` SET `usuario`='$usuario',`dni`='$dni' WHERE `idAsisDocen`='$idAsisDocen'";


	echo $result=mysqli_query($conexion,$sql);

	

 ?>