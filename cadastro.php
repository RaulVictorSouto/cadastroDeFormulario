<?php
    include("conexao.php");

    $cpf = mysqli_real_escape_string($conexao, $_POST['cpf']);
    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $ano_nascimento = mysqli_real_escape_string($conexao, $_POST['ano_nascimento']);
    $logradouro = mysqli_real_escape_string($conexao, $_POST['logradouro']);
    $numero = mysqli_real_escape_string($conexao, $_POST['numero']);
    $bairro = mysqli_real_escape_string($conexao, $_POST['bairro']);
    $cidade = mysqli_real_escape_string($conexao, $_POST['cidade']);
    $estado = mysqli_real_escape_string($conexao, $_POST['estado']);
    $cep = mysqli_real_escape_string($conexao, $_POST['cep']);
    $telefone = mysqli_real_escape_string($conexao, $_POST['telefone']);
    $email =  mysqli_real_escape_string($conexao, $_POST['email']);
    $possui_computador = mysqli_real_escape_string($conexao, $_POST['possui_computador']);
    $possui_celular = mysqli_real_escape_string($conexao, $_POST['possui_celular']);
    $possui_notebook = mysqli_real_escape_string($conexao, $_POST['possui_notebook']);
    $renda = mysqli_real_escape_string($conexao, $_POST['renda']);

    $sql = "INSERT INTO 
            form (cpf, nome, ano_nascimento, end_log, end_num, end_bai, end_cid, end_est, cep, telefone, email, possui_computador, possui_celular, possui_notebook, renda) 
            VALUES ('$cpf', '$nome', $ano_nascimento, '$logradouro', '$numero', '$bairro', '$cidade', '$estado', '$cep', '$telefone','$email', '$possui_computador', '$possui_celular', '$possui_notebook', $renda)";

    if(mysqli_query($conexao, $sql)){
        echo "Usuário Cadastrado com sucesso";
    } else{
        echo "Erro: ".mysqli_error($conexao);
    }
    mysqli_close($conexao);

?>