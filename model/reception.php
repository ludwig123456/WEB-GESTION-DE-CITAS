<?php
	require "../controller/CnsDB.php";
	$Conexion = new CnsDB();
	$msg=$Conexion->ConectaDB();
	echo $msg;
	$rsC=$Conexion->CnsSubs();
	echo $rsC;

?>