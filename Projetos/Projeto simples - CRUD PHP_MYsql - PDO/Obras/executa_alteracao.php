<?php
	
	include_once('../connect.php');
	session_start();
	
try{
	
	$sql = " UPDATE obras SET data = :data, 
			 nome = :nome, 
			 valor = :valor 
			 WHERE codigo = :codigo ";
	
	$stmt = $conn->prepare($sql);
	
		$stmt->bindParam(':data', $_POST['data'], PDO::PARAM_STR);
		$stmt->bindParam(':nome', $_POST['nome'], PDO::PARAM_STR);
		$stmt->bindParam(':valor', $_POST['valor'], PDO::PARAM_STR);
		$stmt->bindParam(':codigo', $_SESSION['codigo'], PDO::PARAM_STR);
		
	$stmt->execute();
	
	include_once('obra.php');
	
}catch(PDOException $e){
	echo "ERROR: ".$e->getMessage();
}


?>