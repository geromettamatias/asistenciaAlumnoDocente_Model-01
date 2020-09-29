<?php 
	session_start();

	$modalidadDoce=$_POST['modalidad'];
	$_SESSION['modalidadDoce']=$modalidadDoce;

	$busquedaDoce=$_POST['busqueda'];
	$_SESSION['busquedaDoce']=$busquedaDoce;

	$anexoDoce=$_POST['anexo'];
	$_SESSION['anexoDoce']=$anexoDoce;

	echo "1";
	

 ?>