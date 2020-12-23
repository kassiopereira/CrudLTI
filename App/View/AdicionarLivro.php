<?php
namespace App\View;
use App\Models\Autor;

require_once ('../Models/AutorDao.php');
require_once ('../Models/Autor.php');
require_once ('../Models/Conexao.php');
$autor = new \App\Models\Autor();
$autorDao = new \App\Models\AutorDao();
$autorDao->readAut();

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
<!--      <script>$(document).ready(function(){-->
<!--      $('select').formSelect();-->
<!--      });-->
<!--      </script>-->

      <body>
      <div class="row">
          <div class ="col s12 m6 push-m3">
              <h3 class="ligth"> Novo Livro</h3>
              <form action="../Controller/LivroController.php" method="POST">
                  <div class="input-field col s12">
                      <input type="text" name="titulo" id="titulo">
                      <label for="titulo">Título</label>
                  </div>
                  <div class="input-field col s12">
                      <input type="text" name="descricao" id="descricao">
                      <label for="descricao">Descrição</label>
                  </div>

<!--                  <div class="col s12 m6 push-m3">-->
<!--                      <label for="autores">Autores</label>-->
<!--            Drop com busca do banco      <select id="autores" class="form-control" name="autores" required>-->
<!--                         <option value = "0"> --- </option>-->
<!--                          --><?php //foreach ($autorDao->readAut() as $autor){ ?>
<!---->
<!--                          <option value ="--><?php //echo $autor["id_a"]?><!--">--><?php //echo $autor["nome_autor"]?><!-- </option>-->
<!--                          --><?php //}?>
<!---->
<!--                      </select>-->

<!--                  </div>-->


                      <button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
                      <a href="ViewLivro.php" class="btn green">Lista de Livros</a>


              </form>
          </div>
      </div>

        <!--JavaScript at end of body for optimized loading-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>


      </body>
      </html>