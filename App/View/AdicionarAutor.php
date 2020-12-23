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
        <h3 class="ligth"> Novo Autor</h3>
        <form action="../Controller/AutorController.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="nome_autor" id="nome_autor">
                <label for="nome_autor">Nome</label>
            </div>
            <div class="input-field col s12">
                <input class="form-control" type="date"  name="data_nascimento" id="data_nascimento">
                <label for="data_nascimento">Data de Nascimento</label>
            </div>

            <button type="submit" name="btn-cadastrar-aut" class="btn">Cadastrar</button>
            <a href="ViewAutor.php" class="btn green">Lista de Autores</a>
        </form>

    </div>
</div>
<body>


<!--JavaScript at end of body for optimized loading-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>