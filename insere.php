<?php
	//dados do formulário
	$nomeP = $_POST['nomeP'];
	$idadeP = $_POST['idadeP'];
	$nomeD = $_POST['nomeD'];
	$tel = $_POST['tel'];
	
	//conexão com o BD
	include('cabecalho_conexao.php');
	
	$SQL = "INSERT INTO animais (nome_do_pet, idade_do_pet, nome_do_dono, telefone) 
			VALUE ('$nomeP', $idadeP, '$nomeD', $tel)";
			
	$texto = "Aluno Inserido com Sucesso<br>";
	
	include('rodape_conexao.php');
?>