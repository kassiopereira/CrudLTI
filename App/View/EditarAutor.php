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
    require_once ('../Models/AutorDao.php');
    require_once ('../Models/Autor.php');
    require_once ('../Models/Conexao.php');
    session_start();
if(isset($_GET['id_a'])):
    $autor = new \App\Models\Autor();
    $autordao = new \App\Models\AutorDao();
    $autordao->readAut();
    foreach ($autordao->readAut() as $autor):
        if ($autor['id_a'] == $_GET['id_a']):
?>
            <div class="container">
                <div class="row">
                    <div class ="col sm-12 m push-m3">
                        <h3 class="ligth"> Editar Autor</h3>
                    <form action="../Controller/AutorController.php" method="POST">

                            <div class="input-field col s12">
                                <input type = 'hidden' name = 'id_a' value = "<?php echo $autor['id_a']?>">
                                <label for="nome_autor">Autor</label>
                                <input type="text" name="nome_autor" value="<?php echo $autor['nome_autor']?>" id="nome_autor">
                            </div>
                            <div class="input-field col s12">
                                <label for="data_nascimento">Data de Nascimento</label>
                                <input class="form-control" type="date" name="data_nascimento" value = "<?php echo $autor['data_nascimento']?>" id="data_nascimento">

                            </div>


                    <button type="submit" name="btn-editar-aut" class="btn">Atualizar</button>
                    </form>
                    </div>
                 </div>
            </div>
           <?php endif; endforeach;endif;?>
<body>


<!--JavaScript at end of body for optimized loading-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
