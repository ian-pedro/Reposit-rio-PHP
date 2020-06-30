<?php

include_once('../connect.php');

$data = $_POST['data_obra'];
$nome = $_POST['nome_obra'];
$valor = $_POST['valor_obra'];

try{
	
	$insere_dados = $conn->query(" INSERT INTO obras(data, nome, valor) VALUES('$data', '$nome', '$valor') ");
	
	$seleciona_dados = $conn->query(" SELECT * FROM obras WHERE data LIKE '$data' AND nome LIKE 'nome' AND valor='$valor' ");
	
	include_once('obra.php');
	
}catch(PDOException $e){
	echo "ERROR: ".$e->getMessage();
}

?>