<!DOCTYPE html>
	<html lang="pt-br">
		<head>
		
			<meta charset="utf-8"/>
			<meta lang="pt-br"/>
			
			<title> Alterações </title>
			
		</head>
		
		<body>
		
			<h3> Alteração de dados da obra </h3>
			<br/>
				<form id="form" action="alterar_dados_obra.php" method="post">
					<label> Selecione a obra para alterar </label>
					<br/>
					<br/>
					<label> Nome: </label>
						<?php
						
							include_once('../connect.php');
							
							try{
								
								$dados_obra = $conn->query(' SELECT data, nome, valor, codigo FROM obras ');
								
								echo ' <select name="obraParaAlterar"> ';
									foreach($dados_obra as $dado_obra){
										
										echo ' <option value="'.htmlspecialchars($dado_obra[3]).'"> '.htmlspecialchars($dado_obra[1]).' </option> ';
										
									}	
								echo ' </select> ';
							}catch(PDOException $e){
								echo "ERROR: ".$e->getMessage();
							}
						
						?>
						
					</br>
					</br>
					<input class="botao" type="submit" value="Alterar">
				</form>
				
		</body>
	</html>