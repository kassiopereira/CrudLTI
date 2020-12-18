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
    <h3 class="ligth"> Livros</h3>
    <table class="striped">
      <thead>
        <tr>
          <th>Titulo:</th>
          <th>Descrição:</th>
          <th>Autor(es):</th>

        </tr>
      </thead>
      <tbody>
        <?php
        require_once ('../Models/LivroDao.php');
        require_once ('../Models/Livro.php');
        require_once ('../Models/Autor.php');
        require_once ('../Models/AutorDao.php');
        require_once ('../Models/Conexao.php');
        $livro = new \App\Models\Livro();
        $livrodao = new \App\Models\LivroDao();
        $livrodao->readLivro();
        $autor = new \App\Models\Autor();
        $autorDao = new \App\Models\AutorDao();
        $autorDao->readAut();
        foreach ($livrodao->readLivro() as $livro):



        ?>
        <tr>
          <td><?php echo $livro['titulo']; ?></td>
          <td><?php echo $livro['descricao']; ?></td>
            <td><?php echo $livro['autores']; ?></td>


            <td> <a href="EditarLivro.php?id=<?php echo $livro['id']; ?>" name="btn-editar" class = "btn-floating orange"><i class="material-icons">edit</i></a></td>
            <td> <a href="../Controller/LivroController.php<?php echo $livro['id']; ?>" class = "btn-floating red"><i class="material-icons">delete</i></a></td>
           

          
        </tr>
        <?php endforeach;?>
      </tbody>
    </table>
    <br>
    <a href="../../Adicionar.php" class = "btn">Adicionar livro</a>
  </div>
</div>
<!-- <?php
?> -->
    <body>


      <!--JavaScript at end of body for optimized loading-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
  </html>