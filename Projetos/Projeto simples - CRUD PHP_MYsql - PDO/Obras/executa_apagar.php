<?php

	include_once('../connect.php');

$codigo_obra = $_POST['codigo_obra'];

try{
	
	$dados_obra = $conn->query(" DELETE from obras WHERE codigo LIKE '$codigo_obra' ");
	
	include_once('obra.php');
	
}catch(PDOException $e){
	echo "ERROR: ".$e->getMessage();
}

?>