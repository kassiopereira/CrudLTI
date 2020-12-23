<?php
namespace App\Models;

class AutorDao
{

    public function createAut(Autor $a)
    {
        $sql = 'INSERT INTO autor (nome_autor,data_nascimento) VALUES (?,?)';
        $cadastrarAutor = Conexao::getConn()->prepare($sql);
        $cadastrarAutor->bindValue(1, $a->getNome());
        $cadastrarAutor->bindValue(2, $a->getDataNascimento());
        $cadastrarAutor->execute();
    }
    public function readAut()
    {
        $sql = 'SELECT * FROM autor';
        $readbanco = Conexao::getConn()->prepare($sql);
        $readbanco->execute();

        if ($readbanco->rowCount() > 0):
            $resultado = $readbanco->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        else:
            return [];
        endif;

    }
    public function updateAut(Autor $a)
    {
        $sql = 'UPDATE autor SET nome_autor = ?, data_nascimento = ? WHERE id_a = ?';
        $updatequery = Conexao::getConn()->prepare($sql);
        $updatequery->bindValue(1, $a->getNome());
        $updatequery->bindValue(2, $a->getDataNascimento());

        $updatequery->bindValue(3, $a->getIdAutor());
        $updatequery->execute();


    }
    public function deleteAut($a)
    {
        $sql = 'DELETE FROM autor WHERE id_a = ?';
        $deletequery = Conexao::getConn()->prepare($sql);
        $deletequery->bindValue(1, $a);
        $deletequery->execute();


    }
//metodos precisando de Ajuste
    public function readAut_l()
    {
        $sql = 'SELECT autor_nome FROM autor 
    inner join autor_livro on autor.id_a = autor_livro.id_a 
';
        $readbanco = Conexao::getConn()->prepare($sql);
        $readbanco->execute();

        if ($readbanco->rowCount() > 0):
            $resultado = $readbanco->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        else:
            return [];
        endif;


    }
    public function buscaAutor(){
        $sql = 'SELECT nome_autor FROM autor INNER JOIN autor_livro ON autor.id_a = autor_livro.id_a';
        $buscarquery = Conexao::getConn()->prepare($sql);

        $buscarquery->execute();

        if($buscarquery->rowCount()>0):
            $resultado = $buscarquery->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        else:
            return [];
        endif;

    }
}
?>