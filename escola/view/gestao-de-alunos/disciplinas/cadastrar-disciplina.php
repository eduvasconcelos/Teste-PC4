<?php
    require_once "../../../model/conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Escola - Cadastro de Alunos</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <!-- Estilos customizados para esse template -->
    <link href="../../../css/form-validation.css" rel="stylesheet">
</head>

<body class="bg-light">
    
    <div class="container">
        <div class="py-5 text-center">
            <h2>Área de cadastro</h2>
            <p class="lead">Abaixo temos um exemplo de formulário construído com controles de formulário Bootstrap. Cada campo obrigatório possui um estado de validação que é ativado quando tenta-se enviar o formulário sem completá-lo.</p>
        </div>

        <div class="row">
            <h4 class="mb-3">Cadastro de disciplina</h4>
            <form method="post" class="needs-validation" novalidate="" action="../../../model/disciplina/adicionar-disciplina.php">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nome">Disciplina</label>
                        <input type="text" class="form-control" id="nome" name="nome" required="">
                        <div class="invalid-feedback">
                            É obrigatório inserir um nome válido.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="descricao">Descrição</label>
                        <input type="text" class="form-control" id="descricao" name="descricao" required=""></input>
                        <div class="invalid-feedback">
                            É obrigatório inserir uma descrição válida.
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary btn-lg btn-block" type="submit">Cadastrar</button>
            </form>
        </div>

        <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2022 Escola</p>
        </footer>
    </div>

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="../../../js/holder.min.js"></script>

    <script>
    // Exemplo de JavaScript para desativar o envio do formulário, se tiver algum campo inválido.
    (function() {
        'use strict';

        window.addEventListener('load', function() {
        // Selecione todos os campos que nós queremos aplicar estilos Bootstrap de validação customizados.
        var forms = document.getElementsByClassName('needs-validation');

        // Faz um loop neles e previne envio
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
            }, false);
        });
        }, false);
    })();
    </script>
</body>
</html>