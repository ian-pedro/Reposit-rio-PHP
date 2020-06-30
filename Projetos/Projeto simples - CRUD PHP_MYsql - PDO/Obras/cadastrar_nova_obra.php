<!DOCTYPE html>
	<html lang="pt-br">
		
		<head>
				
			<meta charset="utf-8"/>
			<meta lang="pt-br"/>
			
			<title> Cadastrar obra </title>
			
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
			<script type="text/javascript">
				jQuery('option').mousedown(function(e) {
					e.preventDefault();
					jQuery(this).toggleClass('selected');
				  
					jQuery(this).prop('selected', !jQuery(this).prop('selected'));
					return false;
				});
			</script>
			
		</head>
		
		<body>
		
			<h3> Cadastrar Obra </h3>
			
			<br/>
			<br/>
			
				<form id="form" action="inserir_obra.php" method="post">
					
					<label>Data de início:</label>
					<br/>
						<input id="borda" type="date" name="data_obra"/>
					<br/>
					<label>Nome da obra:</label>
					<br/>
						<input id="borda" type="text" name="nome_obra"/>
					<br/>
					<label>Valor da obra:</label>
					<br/>
						<input id="borda" type="text" name="valor_obra" placeholder="R$"/>
				
					<br/>
			
					<input class="botao" type="submit" value="Cadastrar obra"/>
				
				</form>
				
		</body>
		
	</html>
		