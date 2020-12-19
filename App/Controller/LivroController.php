<?php

require_once ('../Models/LivroDao.php');
require_once ('../Models/Livro.php');

require_once ('../Models/Conexao.php');
session_start();


 Class LivroController
 {

     // 	public function __contstruct(){

     // 	}
     public function insereLivro()
     {
         $titulo = $_POST['titulo'];
         $descricao = $_POST['descricao'];
         $autores = $_POST['autores'];
         $livro = new \App\Models\Livro();
         $livro->setTitulo($titulo);
         $livro->setDescricao($descricao);
         $livro->setAutores($autores);
         $livroDao = new \App\Models\LivroDao();
         $livroDao->createLivro($livro);
     }

     public function editLivro()
     {
         $id = $_POST['id'];
         $titulo = $_POST['titulo'];
         $descricao = $_POST['descricao'];
         $autores = $_POST['autores'];
         $livro = new \App\Models\Livro();
         $livro->setId($id);
         $livro->setTitulo($titulo);
         $livro->setDescricao($descricao);
         $livro->setAutores($autores);
         $livroDao = new \App\Models\LivroDao();
         $livroDao->updateLivro($livro);
     }

     public function deletLivro()

     {
//         foreach ( $autorDao->readAut() as $autor):

//             if ($autor['id'] == $_GET['id']):
         $id = $_GET['id'];
//         $titulo = $_GET['titulo'];
//         $descricao = $_GET['descricao'];
//         $autores = $_GET['autores'];
         $livro = new \App\Models\Livro();
         $livro->setId($id);
//         $livro->setTitulo($titulo);
//         $livro->setDescricao($descricao);
//         $livro->setAutores($autores);
         $livroDao = new \App\Models\LivroDao();
         $livroDao->deleteLivro($livro);
     }


 }

$lcontroler = new LivroController;
if(isset($_POST['btn-cadastrar'])):
    $lcontroler->insereLivro();
    $_SESSION['mensagem'] = "Cadastrado com sucesso!";
    header('Location: ../View/ViewLivro.php');

elseif (isset($_POST['btn-editar'])):

    $lcontroler->editLivro();
    $_SESSION['mensagem'] = "Editado com sucesso!";
    header('Location: ../View/ViewLivro.php');

elseif (isset($_POST['btn-delete'])):
    $lcontroler->deletLivro();
    $_SESSION['mensagem'] = "Deletado com sucesso!";
    header('Location: ../View/ViewLivro.php');
    endif;

