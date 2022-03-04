<?php
    require_once '../conexao.php';
    if($_POST){
    
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];

        $sql = "UPDATE escola.disciplinas SET nome = '$nome', descricao = '$descricao' WHERE id = '$id'";
        if($conexao->query($sql) === TRUE) {
            header("location: ../../view/gestao-de-alunos/disciplinas");
            die();
        } else {
            echo "Error " . $sql . ' ' . $conexao->connect_error;
        }
        
        $conexao->close();
    }
?>