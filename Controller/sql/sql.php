<?php
	$bd = "navidator";
	$server ="127.0.0.1";
	$user = "root";
	$password = "root";

	require("post.php");

	$conexion = @mysqli_connect($server, $user, $password, $bd);
		
	if( ! $conexion )	
		die( "Error de conexion ".mysqli_connect_error() );
	mysqli_set_charset($conexion,"utf8");

	switch ($id_sql) {
		case '1':
			$sql="INSERT into user_abilities (user_id,ability_id) values ('{$userf}','{$comp}')";
			$result = mysqli_query($conexion, $sql);
			if ($result) 
				echo "Se ha completado la compra";
			else
				echo "Ha ocurrido un error: ".mysql_error();
		break;

		default:
			echo "asdsadasd";
		break;
	}