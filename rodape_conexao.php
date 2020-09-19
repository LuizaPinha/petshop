<?php
	include("cabecalho.inc.php");
?>
<?php
	// Executa o comando SQL
	$query = mysqli_query($con, $SQL);
	if($query){
		echo "Operacao concluida";
		echo"</br>";
		echo "<a href='menu.php'>Voltar</a>";
	} else {
		echo mysqli_error($con);
	}

	mysqli_close($con);
?>