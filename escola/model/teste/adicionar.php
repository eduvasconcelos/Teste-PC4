<?php
    require_once 'conexao.php';
    if($_POST){ 
    $nome = $_POST['Nomee'];
    $email = $_POST['Emaill'];

    $sql = "INSERT INTO escola.teste (nome, email) VALUES ('$nome', '$email')";
    if($conexao->query($sql) === TRUE) {
        header("location: ../view/gestao-de-alunos/alunos/cadastro-aluno.php");
        die();
    
    } else {
        echo "Error " . $sql . ' ' . $conexao->connect_error;
    }
    
    $conexao->close();
}