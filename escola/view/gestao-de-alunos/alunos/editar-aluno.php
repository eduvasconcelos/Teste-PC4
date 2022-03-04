<?php
    require_once "../../../model/conexao.php";
    require_once "../../../model/aluno/exibir-aluno.php";

    $id = $_GET['id'];
    $sql = "SELECT * FROM escola.alunos WHERE id = '$id'";
    $resultado = $conexao->query($sql);
    $dado = $resultado->fetch_assoc();
    $conexao->close();
?>
<!DOCTYPE html>
<html lang="pt-br" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Escola - Editar Aluno</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <!-- Estilos customizados para esse template -->
    <link href="../../../css/form-validation.css" rel="stylesheet">
    
    <script>
        function removerAluno(){
            var resposta = window.confirm("Deseja remover esse registro?");
            if (resposta == true){
                var id = document.getElementById('id').value;
                document.location.assign(`../../../model/aluno/remover-aluno.php?id=${id}`);
            }
        }
    </script>
</head>

<body class="bg-light">
    <div class="container">
        <div class="py-5 text-center">
            <h2>Área de edição</h2>
            <p class="lead">Abaixo temos um exemplo de formulário construído com controles de formulário Bootstrap. Cada campo obrigatório possui um estado de validação que é ativado quando tenta-se enviar o formulário sem completá-lo.</p>
        </div>

        <div class="row">
            <h4 class="mb-3">Editar Aluno</h4>
            <form method="post" class="needs-validation" novalidate="" action="../../../model/aluno/atualizar-aluno.php">
                <input type="hidden" id="id" name="id" value="<?php echo $dado['id']; ?>">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nome">Aluno</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo do aluno" value="<?php echo $dado['nome']; ?>" required="">
                        <div class="invalid-feedback">
                            É obrigatório inserir um nome válido.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="matricula">Matrícula</label>
                        <input type="number" class="form-control" id="matricula" name="matricula" placeholder="Número da matrícula" value="<?php echo $dado['matricula_aluno']; ?>" required="">
                        <div class="invalid-feedback">
                            É obrigatório inserir uma matrícula válida.
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="antonio.jose@exemplo.com" value="<?php echo $dado['email']; ?>" required="">
                        <div class="invalid-feedback">
                        É obrigatório inserir um email válido.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="telefone">Telefone</label>
                        <input type="number" class="form-control" id="telefone" name="telefone" placeholder="(XX) 9XXXX-XXXX" value="<?php echo $dado['telefone']; ?>" required="">
                        <div class="invalid-feedback">
                            É obrigatório inserir um número válido.
                        </div>
                    </div>
                </div>

                <hr class="mb-4">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <h4 class="mb-3">Gênero</h4>
                        <div class="custom-control custom-radio">
                            <input id="masculino" name="genero_aluno" type="radio" class="custom-control-input" required="" checked="" value="1">
                            <label class="custom-control-label" for="masculino">Masculino</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="feminino" name="genero_aluno" type="radio" class="custom-control-input" required="" value="2">
                            <label class="custom-control-label" for="feminino">Feminino</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="outro" name="genero_aluno" type="radio" class="custom-control-input" required="" value="3">
                            <label class="custom-control-label" for="outro">Outro</label>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="mb-3">
                            <h4 class="mb-3">Data de nascimento</h4>
                            <label for="data_nascimento"></label>
                            <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required="">
                            <div class="invalid-feedback">
                                É obrigatório inserir uma data de nascimento.
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Atualizar</button>
                <input class="btn btn-primary btn-lg btn-block" type="button" onclick="removerAluno()" value="Remover">
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