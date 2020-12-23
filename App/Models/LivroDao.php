<?php
namespace App\Models;

class LivroDao{
	
	public function createLivro(Livro $l){
		$sql = 'INSERT INTO livro (titulo,descricao) VALUES (?,?)';
		$cadastrar = Conexao::getConn()->prepare($sql);
		$cadastrar->bindValue(1,$l->getTitulo());
		$cadastrar->bindValue(2,$l->getDescricao());
//		$cadastrar->bindValue(3,$l->getAutores());
		$cadastrar->execute();
	}
    public function readLivro(){
		$sql = 'SELECT * FROM livro';
		$readbanco = Conexao::getConn()->prepare($sql);
		$readbanco->execute();

		if($readbanco->rowCount()>0):
			$resultado = $readbanco->fetchAll(\PDO::FETCH_ASSOC);
			return $resultado;
		else:
			return [];
		endif;

	}
   	public function updateLivro(Livro $l){
		$sql = 'UPDATE livro SET titulo = ?, descricao = ? WHERE id = ?';
		$updatequery = Conexao::getConn()->prepare($sql);
		$updatequery->bindValue(1,$l->getTitulo());
		$updatequery->bindValue(2,$l->getDescricao());
//		$updatequery->bindValue(3,$l->getAutores());
		$updatequery->bindValue(3,$l->getId());
		$updatequery->execute();


	}
	public function deleteLivro($id){
		$sql = 'DELETE FROM livro WHERE id = ?';
		$deletquery = Conexao::getConn()->prepare($sql);
		$deletquery->bindValue(1,$id);
		$deletquery->execute();


	}
//metodos precisando de ajustes
    public function createLivroAut($id_a, $id){
        $sql = 'INSERT INTO livros (id_a,id VALUES (?,?)';
        $cadastrar = Conexao::getConn()->prepare($sql);
        $cadastrar->bindValue(1,$id_a);
        $cadastrar->bindValue(2,$id);
        $cadastrar->execute();
    }
    public function addAutor($l, $a){
        $sql = 'INSERT INTO livros (LivroID,AutorID) VALUES (?,?)';
        $cadastrar = Conexao::getConn()->prepare($sql);
        $cadastrar->bindValue(1,$l);
        $cadastrar->bindValue(2,$a);
        $cadastrar->execute();
    }
    public function buscaLivro(){
        $sql = 'SELECT titulo FROM livro INNER JOIN autor_livro ON livro.id = autor_livro.id';
        $buscarquery = Conexao::getConn()->prepare($sql);

        $buscarquery->execute();

        if($buscarquery->rowCount()>0):
            $resultado = $buscarquery->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        else:
            return [];
        endif;

    }
    public function readLivro_id($id){
        $sql = 'SELECT * FROM livro WHERE id = ?';

        $readbanco = Conexao::getConn()->prepare($sql);
        $readbanco->bindValue(1,$id,PDO::PARAM_INIT);
        $readbanco->execute();
        return $readbanco->fetch();

//        if($readbanco->rowCount()>0):
//            $resultado = $readbanco->fetchAll(\PDO::FETCH_ASSOC);
//            return $resultado;
//        else:
//            return [];
//        endif;

    }



}

?>