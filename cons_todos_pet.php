<?php
	include("cabecalho.inc.php");
?>
<?php

	include('cabecalho_conexao.php');
	
	$SQL = "SELECT * FROM animais";
	
	// Executa o comando SQL
	$dados_recuperados = mysqli_query($con, $SQL);

	if(mysqli_num_rows($dados_recuperados) > 0){
		echo'<center><table border = "1">
				<tr>
					<th>Id</th>
					<th>Nome do pet</th>
					<th>Idade do pet</th>
					<th>Nome do dono</th>
					<th>Telefone</th>
					<th colspan = "2">Operacoes</th>
				</tr>';
		while( ($resultado = mysqli_fetch_array($dados_recuperados)) != null) {
	
			echo '
					<tr>
						<td>'.$resultado[0].'</td>
						<td>'.$resultado[1].'</td>
						<td>'.$resultado[2].'</td>
						<td>'.$resultado[3].'</td>
						<td>'.$resultado[4].'</td>
						<td><a href="remo_pet.php?pront='.$resultado[0].'">Remover</a></td>
						<td><a href="edit_pet.php?pront='.$resultado[0].'">Editar</a></td>
					</tr>
				';
		}	
		echo '</table></center>';	
	}
	
	
	mysqli_close($con);
	echo '</br><a href="menu.php">Voltar</a>';
?>