<?php
    require_once '../conexao.php';
    if($_POST){
        
    $nome = $_POST['nome'];
    $matricula_aluno = $_POST['matricula'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero_aluno'];
    $data_nascimento = $_POST['data_nascimento'];

    $sql = "INSERT INTO escola.alunos (nome, matricula_aluno, email, telefone, sexo, data_nascimento) VALUES ('$nome', '$matricula_aluno', '$email', '$telefone', '$sexo', '$data_nascimento')";
    if($conexao->query($sql) === TRUE) {
        header("location: ../../view/gestao-de-alunos/gerenciador.php");
        die();
    } else {
        echo "Error " . $sql . ' ' . $conexao->connect_error;
    }
    
    $conexao->close();
}
?>