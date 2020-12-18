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
<?php
    require_once ('../Models/LivroDao.php');
    require_once ('../Models/Livro.php');
    require_once ('../Models/Conexao.php');
    session_start();
if(isset($_GET['id'])):
$livro = new \App\Models\Livro();
$livrodao = new \App\Models\LivroDao();
$livrodao->readLivro();
foreach ($livrodao->readLivro() as $livro):

        if ($livro['id'] == $_GET['id']):


?>
<div class="container">
    <div class="row">
        <div class ="col sm-12 m push-m3">
            <h3 class="ligth"> Editar Livro</h3>


        <form action="../Controller/LivroController.php" method="POST">

            <div class="input-field col s12">
                <input type = 'hidden' name = 'id' value = "<?php echo $livro['id']?>">
                <label for="titulo">Título</label>
                <input type="text" name="titulo" value="<?php echo $livro['titulo']?>" id="titulo">
            </div>
            <div class="input-field col s12">

                <input type="text" name="descricao" value = "<?php echo $livro['descricao']?>" id="descricao">
                <label for="descricao">Descrição</label>
            </div>
            <div class="input-field col s12"">
                <input type="text" name="autores" value="<?php echo $livro['autores']?>" id="autores">
                <label for="autores">Autores</label>
            </div>
            <button type="submit" name="btn-editar" class="btn">Atualizar</button>
        </form>
    </div>





</div>






<!--        --><?php endif; endforeach;endif;?>

<!-- <?php
?> -->
<body>


<!--JavaScript at end of body for optimized loading-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
