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
    <h3 class="ligth"> Autores</h3>
    <table class="striped">
      <thead>
        <tr>
          <th>Nome:</th>
          <th>Data de Nascimento:</th>
          <th>Livros:</th>

        </tr>
      </thead>
        <?php
        require_once ('../Models/AutorDao.php');
        require_once ('../Models/Autor.php.');
        require_once ('../Models/Conexao.php');
        $autor = new \App\Models\Autor();
        $autorDao = new \App\Models\AutorDao();
        $autorDao->readAut();
        foreach ($autorDao->readAut() as $autor):



            ?>
            <tr>
                <td><?php echo $autor['nome_autor']; ?></td>
                <td><?php echo $autor['data_nascimento']; ?></td>
                <td><?php echo $autor['livros']; ?></td>
                <td>
<!--                    --><?php
//                    $a = new \App\Models\Autor();
//                    $a->setIdAutor(intval($autor['id_a']));
//                    ?>
                <td> <a href="editar.php?id=<?php echo $autor['id_a']; ?>" class = "btn-floating orange"><i class="material-icons">edit</i></a></td>
                <td> <a href="" class = "btn-floating red"><i class="material-icons">delete</i></a></td>

                </td>

            </tr>
        <?php endforeach;?>
      </tbody>
    </table>
    <br>
    <a href="../../Adicionar.php" class = "btn">Adicionar livro</a>
    <a href="../../AdicionarAutor.php" class = "btn">Adicionar Autor</a>
  </div>
</div>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
  </html>