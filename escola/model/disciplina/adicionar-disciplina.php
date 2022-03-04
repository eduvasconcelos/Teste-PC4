<?php
    require_once '../conexao.php';
    if($_POST){
        
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];

        $sql = "INSERT INTO escola.disciplinas (nome, descricao) VALUES ('$nome', '$descricao')";
        
        if($conexao->query($sql) === TRUE) {
            header("location: ../../view/gestao-de-alunos/disciplinas");
            die();
        } else {
            echo "Error " . $sql . ' ' . $conexao->connect_error;
        }
        $conexao->close();
    }
?>