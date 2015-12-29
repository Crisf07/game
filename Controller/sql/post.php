<?php
	foreach($_POST as $nombre => $valor){ 
   		$asignacion = "\${$nombre}=\"{$valor}\";"; 
   		eval($asignacion); 
	}
?>