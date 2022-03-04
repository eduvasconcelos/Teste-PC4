<?php
	function listaAlunos($conexao) {
		$alunos = array();
		$resultado = mysqli_query($conexao, "select * from escola.alunos");
	
		while($aluno = mysqli_fetch_assoc($resultado)) {
			array_push($alunos, $aluno);
		}
		return $alunos;
	}

?>