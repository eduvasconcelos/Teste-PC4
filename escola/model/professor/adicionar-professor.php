<?php
    require_once '../conexao.php';
    if($_POST){
        
        $nome = $_POST['nome'];
        $matricula = $_POST['matricula'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nascimento = $_POST['data_nascimento'];

        $sql = "INSERT INTO escola.professores (nome, matricula_professor, email, telefone, sexo, data_nascimento) VALUES ('$nome', '$matricula', '$email', '$telefone', '$sexo', '$data_nascimento')";
        if($conexao->query($sql) === TRUE) {
            header("location: ../../view/gestao-de-alunos/professores");
            die();
        } else {
            echo "Error " . $sql . ' ' . $conexao->connect_error;
        }
        $conexao->close();
    }
?>