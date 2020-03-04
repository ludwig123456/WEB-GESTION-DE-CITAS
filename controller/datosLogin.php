<?php
	
        require "CnsDBLogin.php";
		echo "holi";
        $Conexion = new CnsDB();
        $msg=$Conexion->ConectaDB();
        echo $msg;
        $rsC=$Conexion->valida();
		echo $rsC;
        //$rsc=$Conexion->CnsSubs();
        
        
?>