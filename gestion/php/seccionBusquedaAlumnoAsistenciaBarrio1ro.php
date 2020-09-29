<?php 
	session_start();

	$modalidad=$_POST['modalidad'];
	$_SESSION['modalidad']=$modalidad;

	$busqueda=$_POST['busqueda'];
	$_SESSION['busqueda']=$busqueda;

	$anexo=$_POST['anexo'];
	$_SESSION['anexo']=$anexo;

	echo "1";
	

 ?>