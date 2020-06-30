<?php

include_once('../connect.php');

try{
	
	$dados_obra = $conn->query(' SELECT data, nome, valor FROM obras');
	
	echo "<h3> STATUS - Dados da(s) obra(s):</h3>";
	
	echo " <table style='width: 100%' border='2'> ";
		
		echo "<tr>";
			echo "<td style='text-align:center'>Data de início:</td>";
			echo "<td style='text-align:center'>Nome:</td>";
			echo "<td style='text-align:center'>Valor:</td>";
		echo "</tr>";
	
	
		foreach($dados_obra as $dado_obra){
			echo "<tr>";
				echo "<td>".$dado_obra['data']."</td>";
				echo "<td>".$dado_obra['nome']."</td>";
				echo "<td>R$ ".$dado_obra['valor']."</td>";
			echo "</tr>";
		}
		
	echo "</table>";
	
	echo "<br/>";
	echo "<br/>";
	
	echo " <form id='form' action='cadastrar_nova_obra.php' mmethod='post'> ";
		echo " <input class='botao' type='submit' value='Inserir no sistema os dados de uma nova obra'/> ";
	echo " </form> ";
	
	echo "<br/>";
	
	echo " <form id='form' action='seleciona_para_alterar_obra.php' method='post'> ";
		echo " <input class='botao' type='submit' value='Alterar dados de uma obra já cadastrados'/> ";
	echo " </form> ";
	
	echo "<br/>";
	
	echo " <form id='form' action='seleciona_para_apagar_obra.php' method='post'> ";
		echo " <input class='botao' type='submit' value='Apagar obra do sistema'/> ";
	echo " </form> ";
	
}catch(PDOException $e){
	echo "ERROR: ".$e->getMessage();
}

?>