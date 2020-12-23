<?php

require_once ('../Models/LivroDao.php');
require_once ('../Models/Livro.php');
require_once ('../Models/AutorDao.php');
require_once ('../Models/autor.php');


require_once ('../Models/Conexao.php');
session_start();


 Class LivroController
 {

     public function insereLivro()
     {
         $titulo = $_POST['titulo'];
         $descricao = $_POST['descricao'];
//         $autores = $_POST['autores'];
         $livro = new \App\Models\Livro();
         $livro->setTitulo($titulo);
         $livro->setDescricao($descricao);
//         $livro->setAutores($autores);
         $livroDao = new \App\Models\LivroDao();
         $livroDao->createLivro($livro);


     }
     //metodo de teste para usar a tabela auxiliar
//     public function insereLivroAut()
//     {
//         $id_a = $_POST['id_a'];
//         $id= $_POST['id'];
//         $livroDao = new \App\Models\LivroDao();
//         $livroDao->createLivro($id_a,$id);
//
//     }
     public function editLivro()
     {
         $id = $_POST['id'];
         $titulo = $_POST['titulo'];
         $descricao = $_POST['descricao'];
//         $autores = $_POST['autores'];
         $livro = new \App\Models\Livro();
         $livro->setId($id);
         $livro->setTitulo($titulo);
         $livro->setDescricao($descricao);
//         $livro->setAutores($autores);
         $livroDao = new \App\Models\LivroDao();
         $livroDao->updateLivro($livro);
     }

     public function deletLivro()

     {
//
         $id = $_GET['id'];
         $titulo = $_POST['titulo'];
         $descricao = $_POST['descricao'];
//         $autores = $_POST['autores'];
//
         $livro = new \App\Models\Livro();
         $livro->setId($id);
         $livro->setTitulo($titulo);
         $livro->setDescricao($descricao);
//         $livro->setAutores($autores);
         $livroDao = new \App\Models\LivroDao();
         $livroDao->deleteLivro($livro);
     }


 }

$lcontroler = new LivroController;
if(isset($_POST['btn-cadastrar'])):
    $lcontroler->insereLivro();
//    $lcontroler->insereLivroAut();
    $_SESSION['mensagem'] = "Cadastrado com sucesso!";
    header('Location: ../View/ViewLivro.php');

elseif (isset($_POST['btn-editar'])):

    $lcontroler->editLivro();
    $_SESSION['mensagem'] = "Editado com sucesso!";
    header('Location: ../View/ViewLivro.php');

elseif (isset($_POST['btn-delete'])):

    $l = $_POST['id'];
    $livroDao = new \App\Models\LivroDao();
    $livroDao->deleteLivro($l);
//    $aController->deletAutor($ad);
    $_SESSION['mensagem'] = "Deletado com sucesso!";
    header('Location: ../View/ViewLivro.php');
else:
    $_SESSION['mensagem'] = "Erro, volte para a tela Inicial!";
    echo "Redirecionando para a tela inicial!!";
    header('Location: ../../Main.php');
endif;

