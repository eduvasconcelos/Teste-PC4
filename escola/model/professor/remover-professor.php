<?php
    require_once '../conexao.php';
    
    if($_GET){
    
    $id = $_GET['id'];

    $sql = "DELETE FROM escola.professores WHERE id = '$id'";
    if($conexao->query($sql) === TRUE) {
        header("location: ../../view/gestao-de-alunos/professores");
        die();
    } else {
        echo "Error " . $sql . ' ' . $conexao->connect_error;
    }
    
    $conexao->close();
}
?>