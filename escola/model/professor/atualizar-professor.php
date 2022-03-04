<?php
    require_once '../conexao.php';
    if($_POST){
    
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero'];
    $data_nascimento = $_POST['data_nascimento'];

    $sql = "UPDATE escola.professores SET nome = '$nome', matricula_professor = '$matricula', email = '$email', telefone = '$telefone', sexo = '$sexo', data_nascimento = '$data_nascimento' WHERE id = '$id'";
    if($conexao->query($sql) === TRUE) {
        header("location: ../../view/gestao-de-alunos/professores");
        die();
    } else {
        echo "Error " . $sql . ' ' . $conexao->connect_error;
    }
    
    $conexao->close();
}
?>