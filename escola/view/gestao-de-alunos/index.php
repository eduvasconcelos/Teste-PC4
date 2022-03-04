<?php
require_once "../../model/conexao.php";
require_once "../../model/exibir.php";
?>
<!DOCTYPE html>
<html lang="pt-br" class="h-100">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Escola - Gestão de Alunos</title>

   <!-- Bootstrap core CSS -->
   <link href="../../css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

   <!-- Custom styles for this template -->
   <link href="../../css/style.css" rel="stylesheet">
</head>
<body class="d-flex h-100 text-center text-white bg-dark">
   <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="mb-auto">
         <div>
            <h3 class="float-md-start mb-0">Escola</h3>
            <nav class="nav nav-masthead justify-content-center float-md-end">
               <a class="nav-link" aria-current="page" href="alunos">Alunos</a>
               <a class="nav-link" href="professores">Professores</a>
               <a class="nav-link" href="#">Disciplinas</a>
            </nav>
         </div>
      </header>

      <main class="px-3">
         <h1>Gestão de alunos.</h1>
         <p class="lead">Aqui você poderá exercer todo o gerenciamento de <strong>alunos</strong>, <strong>professores</strong> e, também, <strong>disciplinas</strong>, presentes na nossa escola.</p>
         <p class="lead">
            <a href="gerenciador.php" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Abrir Gerenciador</a>
         </p>
      </main>

      <footer class="mt-auto text-white-50">
         <p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p>
      </footer>
   </div>

   <!-- JavaScript (Opcional) -->
   <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>