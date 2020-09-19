<?php
	include("cabecalho.inc.php");
?>
    <?php
        if(empty($_POST)){
            include 'form.inc';
        }
        else{
            $Nomepet = $_POST["nomeP"];
            include('cabecalho_conexao.php');

            $SQL = "SELECT * FROM animais WHERE nome_do_pet='$Nomepet'";

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
                    </tr>';
                while( ($resultado = mysqli_fetch_array($dados_recuperados)) != null) {
                    echo '
					<tr>
						<td>'.$resultado[0].'</td>
						<td>'.$resultado[1].'</td>
						<td>'.$resultado[2].'</td>
						<td>'.$resultado[3].'</td>
						<td>'.$resultado[4].'</td>
					</tr>
                    ';
                }		
                echo '</table></center>';
                echo '<a href="menu.php">Voltar</a>';
            }
            else{
                echo"Este pet não consta no banco de dados!";
            }

            mysqli_close($con);
        }
        
    ?>

