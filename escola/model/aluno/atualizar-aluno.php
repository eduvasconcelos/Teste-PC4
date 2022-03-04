<?php
    require_once '../conexao.php';
    if($_POST){
    
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $matricula_aluno = $_POST['matricula'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero_aluno'];
    $data_nascimento = $_POST['data_nascimento'];

    $sql = "UPDATE escola.alunos SET nome = '$nome', matricula_aluno = '$matricula_aluno', email = '$email', telefone = '$telefone', sexo = '$sexo', data_nascimento = '$data_nascimento' WHERE id = '$id'";
    if($conexao->query($sql) === TRUE) {
        header("location: ../../view/gestao-de-alunos/alunos");
        die();
    } else {
        echo "Error " . $sql . ' ' . $conexao->connect_error;
    }
    
    $conexao->close();
}
?>