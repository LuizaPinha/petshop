<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <?php
        if(empty($_POST))
        {
            include('cabecalho_conexao.php');
            
            $pront= $_GET['pront'];
            $SQL = "SELECT * FROM animais WHERE id= $pront";

            // Executa o comando SQL
            $dados_recuperados = mysqli_query($con, $SQL);

            if(mysqli_num_rows($dados_recuperados) > 0){
                
                while( ($resultado = mysqli_fetch_array($dados_recuperados)) != null) {
                    
                    $nomeP=$resultado[1];
                    $idadeP=$resultado[2];
                    $nomeD=$resultado[3];
                    $tel=$resultado[4];
                }
                echo'<form action="edit_pet.php" method="POST">
                        <fieldset>
                            <legend>Editar dados do pet</legend>
                            <p>
                                <label>Nome do pet</label>
                                <input type="text" name="nomeE" value="'.$nomeP.'"/>
                            </p>
                            <p>
                                <label>Idade do pet</label>
                                <input type="number" name="idadeE" value="'.$idadeP.'"/>
                            </p>
                            <p>
                                <label>Nome do dono</label>
                                <input type="text" name="nomeDE" value="'.$nomeD.'"/>
                            </p>
                            <p>
                                <label>Telefone</label>
                                <input type="number" name="telE" value="'.$tel.'"/>
                            </p>
                            <p>
                                <input type="hidden" name="id" value="'.$pront.'"/>
                            </p>
                            <p>
                                <input type="submit" value="Enviar"/>
                            </p>
                        </fieldset>
                    </form>';	
            }
        }else{
            $pront = $_POST['id'];

            $nomeE = $_POST['nomeE'];
            $idadeE = $_POST['idadeE'];
            $nomeDE = $_POST['nomeDE'];
            $telefoneE = $_POST['telE'];

            include('cabecalho_conexao.php');
                
            $SQL = "UPDATE animais set nome_do_pet='$nomeE', idade_do_pet='$idadeE', nome_do_dono='$nomeDE', telefone='$telefoneE' WHERE id=$pront";

            include('rodape_conexao.php');

        }

    ?>
</body>
</html>