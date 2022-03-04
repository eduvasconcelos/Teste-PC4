<?php
	function listaTeste($conexao) {
		$teste = array();
		$resultado = mysqli_query($conexao, "select * from escola.teste");
	
		while($produto = mysqli_fetch_assoc($resultado)) {
			array_push($teste, $produto);
		}
		return $teste;
	}

?>