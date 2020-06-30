<!DOCTYPE html>
	<html lang="pt-br">
		<head>
			<meta charset="utf-8"/>
			<meta lang="pt-br"/>
			
			<title> Apagar registro de obra </title>
		</head>
		<body>
		
			<h3> Apagar registro de obra </h3>
			<br/>
				<form id="form" action="executa_apagar.php" method="post">
					<label> Selecione o nome da obra para apagar </label>
					<br/>
					<br/>
					<label> Nome: </label>
					<br/>
					
						<?php
						
							include_once('../connect.php');
							
							try{
							
								$dados_obra = $conn->query(' SELECT * FROM obras ');
								
								echo ' <select name="codigo_obra"> ';
									foreach($dados_obra as $dado_obra){
										echo ' <option value="'.htmlspecialchars($dado_obra[3]).'"> '.htmlspecialchars($dado_obra[1]).' </option> '; 
									}
								echo ' </select> ';
								
							}catch(PDOException $e){
								echo "ERROR: ".$e->getMessage();
							}
						
						?>
					<br/>
					<br/>
					<input class="botao" type="submit" value="Apagar obra"/>
		
		</body>
	</html>