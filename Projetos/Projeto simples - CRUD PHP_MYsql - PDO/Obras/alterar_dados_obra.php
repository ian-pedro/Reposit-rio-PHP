<!DOCTYPE html>
	<html lang="pt-br">
		<head>
			<meta charset="utf-8"/>
			<meta lang="pt-br"/>
			
			<title> Alterações </title>
		</head>
		
		<body>
		
			<h3> Alterar dados de obra </h3>
			<br/>
				<form id="form" action="executa_alteracao.php" method="post">
					<label> Obra: </label>
					<br/>
						<?php
						
							include_once('../connect.php');
							session_start();
							
							$obra = $_POST['obraParaAlterar'];
							
							$dados_obra = $conn->prepare(" SELECT data, nome, valor, codigo FROM obras WHERE codigo=? ");
							$dados_obra->execute([$obra]);
							
							$obraSelecionada = $dados_obra->fetch();
							// print_r($obraSelecionada);
							
							/*
								foreach($dados_obra as $dado_obra){
									$obraSelecionada = $dado_obra;
								}
							*/
							
							$_SESSION['codigo'] = $obraSelecionada[3];
						
							echo "<br/>";
						
							echo "<label> Data: </label>";
							echo "<br/>";
								echo " <input id='borda' type='date' name='data' value='".$obraSelecionada[0]."'/> ";
							
							echo "<br/>"; 
							
							echo "<label> Nome: </label>";
							echo "<br/>";
								echo " <input id='borda' type='text' name='nome' value=' ".$obraSelecionada[1]." '/> ";
							
							echo "<br/>";
							
							echo "<label> Valor: </label>";
							echo "<br/>";
								echo " <input id='borda' type='text' name='valor' value=' ".$obraSelecionada[2]." '/> ";							
						
						?>
					<br/>
					<br/>
					<input class="botao" type="submit" value="Executar alteração"/>
		</body>
	</html>
	