<?php
	function listaDisciplinas($conexao) {
		$disciplinas = array();
		$resultado = mysqli_query($conexao, "select * from escola.disciplinas");
	
		while($disciplina = mysqli_fetch_assoc($resultado)) {
			array_push($disciplinas, $disciplina);
		}
		return $disciplinas;
	}
?>