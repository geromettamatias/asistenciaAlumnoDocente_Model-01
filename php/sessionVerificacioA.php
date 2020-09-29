<?php 
	session_start();

	$idper=$_POST['usuario'];
	$_SESSION['BuscarValorF']=$idper;

	echo $idper;
	


 ?>