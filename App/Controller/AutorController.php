<?php


require_once ('../Models/LivroDao.php');
require_once ('../Models/Livro.php');
require_once ('../Models/AutorDao.php');
require_once ('../Models/Autor.php');
require_once ('../Models/Conexao.php');
$aController = new AutorController();
$autor = new \App\Models\Autor();
$autorDao = new \App\Models\AutorDao();


Class AutorController
{


    public function insereAutor()
    {
        echo $_GET['nome_autor'];
        $nome_autor = $_POST['nome_autor'];
        $dataNascimento = $_POST['data_nascimento'];
        $livros = $_POST['livros'];
        $autor = new \App\Models\Autor();
        $autor->setNome($nome_autor);
        $autor->setDataNascimento($dataNascimento);
        $autor->setLivros($livros);
        $autorDao = new \App\Models\AutorDao();
        $autorDao->createAut($autor);

    }

    public function editAut()
    {
        $id_a = $_POST['id_a'];
        $nome = $_POST['nome_autor'];
        $dataNascimento = $_POST['data_nascimento'];

        $autor = new \App\Models\Autor();
        $autor->setIdAutor($id_a);
        $autor->setNome($nome);
        $autor->setDataNascimento($dataNascimento);

        $autorDao = new \App\Models\AutorDao();
        $autorDao->updateAut($autor);
    }

    public function deletAutor($id)
    {
////        $id_a = $id;
////        $nome = $_POST['nome_autor'];
////        $dataNascimento = $_POST['data_nascimento'];
////        $livros = $_POST['livros'];
//        $autor = new \App\Models\Autor();
//        $autor->setIdAutor($id);
////        $autor->setNome($nome);
////        $autor->setDataNacimento($dataNascimento);
////        $autor->setLivros($livros);
        $autorDao = new \App\Models\AutorDao();
        $autorDao->deleteAut($id);

    }
}


if (isset($_POST['btn-cadastrar-aut'])):

$aController->insereAutor();
$_SESSION['mensagem'] = "Cadastrado com sucesso!";
header('Location: ../View/ViewAutor.php');

elseif (isset($_POST['btn-editar-aut'])):
    $aController->editAut();
    $_SESSION['mensagem'] = "Editado com sucesso!";
    header('Location: ../View/ViewAutor.php');
elseif (isset($_POST['btn-delete-aut'])):

    $ad = $_POST['id_a'];
    $autorDao->deleteAut($ad);
//    $aController->deletAutor($ad);
    $_SESSION['mensagem'] = "Deletado com sucesso!";
    header('Location: ../View/ViewAutor.php');
else:
    $_SESSION['mensagem'] = "Erro, volte para a tela Inicial!";
    echo "Redirecionando para a tela inicial!!";
    header('Location: ../../Main.php');
endif;








