<?php
namespace App\View;

?>

      <!DOCTYPE html>
      <html>
      <head>
        <meta charset="utf-8">
        <title>Teste LTI CRUD</title>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      </head>

      <div class="row">
        <div class ="col s12 m6 push-m3">
          <h3 class="ligth"> Novo Livro</h3>
          <form action="App/Controller/LivroController.php" method="POST">
            <div class="input-field col s12">
              <input type="text" name="titulo" id="titulo">
              <label for="titulo">Título</label>
            </div>
            <div class="input-field col s12">
              <input type="text" name="descricao" id="descricao">
              <label for="descricao">Descrição</label>
            </div>
            <div class="input-field col s12">
              <input type="text" name="autores" id="livros">
              <label for="autores">Autores</label>
            </div>
            <button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
            <a href="App/View/ViewLivro.php" class="btn green">Lista de Livros</a>
          </form>

        </div>
      </div>
      <body>


        <!--JavaScript at end of body for optimized loading-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      </body>
      </html>