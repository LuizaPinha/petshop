<?php
	include("cabecalho.inc.php");
?>

	<form action="insere.php" method="POST">
		<p>
		<label>Nome do pet:</label>
		<input type="text" name="nomeP" />
		</p>
		
		<p>
		<label>Idade do pet:</label>
		<input type="text" name="idadeP" />
		</p>
		
		<p>
		<label>Nome do dono:</label>
		<input type="text" name="nomeD" />
		</p>

		<p>
		<label>Telefone:</label>
		<input type="number" name="tel" />
		</p>
		
		<p>
		<input type="submit" value="Salvar" />
		</p>
	</form>
		
<?php
	include("rodape.inc.php");
?>