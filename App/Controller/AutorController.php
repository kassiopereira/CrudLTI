<?php


require_once ('../Models/LivroDao.php');
require_once ('../Models/Livro.php');
require_once ('../Models/AutorDao.php');
require_once ('../Models/Autor.php');
require_once ('../Models/Conexao.php');
session_start();


//
Class AutorController
{
//
// public function __contstruct(){
//
// 	}

    public function insereAutor()
    {

        $nome = $_POST['nome'];
        $dataNascimento = $_POST['dataNascimento'];
        $livros = $_POST['livros'];
        $autor = new \App\Models\Autor();
        $autor->setNome($nome);
        $autor->setDataNacimento($dataNascimento);
        $autor->setLivros($livros);
        $autorDao = new \App\Models\AutorDao();
        $autorDao->createAut($autor);
    }

    public function editAut()
    {
        $nome = $_POST['nome'];
        $dataNascimento = $_POST['dataNascimento'];
        $livros = $_POST['livros'];
        $autor = new \App\Models\Autor();
        $autor->setNome($nome);
        $autor->setDataNacimento($dataNascimento);
        $autor->setLivros($livros);
        $autorDao = new \App\Models\AutorDao();
        $autorDao->updateAut($autor);
    }

    public function deletAutor()
    {
        $nome = $_POST['nome'];
        $dataNascimento = $_POST['dataNascimento'];
        $livros = $_POST['livros'];
        $autor = new \App\Models\Autor();
        $autor->setNome($nome);
        $autor->setDataNacimento($dataNascimento);
        $autor->setLivros($livros);
        $autorDao = new \App\Models\AutorDao();
        $autorDao->deleteAut($autor);
//        $id = $_GET['id'];
//         $titulo = $_POST['titulo'];
//         $descricao = $_POST['descricao'];
//         $autores = $_POST['autores'];
//         $livro = new \App\Models\Livro();
//         $livro->setId($id);
//         $livro->setTitulo($titulo);
//         $livro->setDescricao($descricao);
//         $livro->setAutores($autores);
//        $livroDao = new \App\Models\LivroDao();
//        $livroDao->deleteLivro($id);
    }
}
$aController = new AutorController();

if (isset($_POST['btn-cadastrar-aut'])):
$aController->insereAutor();
$_SESSION['mensagem'] = "Cadastrado com sucesso!";
header('Location: ../View/ViewAutor.php');

elseif (isset($_POST['btn-editar-aut'])):
    $aController->editAut();
    $_SESSION['mensagem'] = "Editado com sucesso!";
    header('Location: ../View/ViewAutor.php');
elseif (isset($_POST['btn-delete-aut'])):
    $aController->deletAutor();
    $_SESSION['mensagem'] = "Editado com sucesso!";
    header('Location: ../View/ViewAutor.php');
endif;







