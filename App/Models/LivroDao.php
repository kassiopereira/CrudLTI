<?php
namespace App\Models;

class LivroDao{
	
	public function createLivro(Livro $l){
		$sql = 'INSERT INTO livro (titulo,descricao,autores) VALUES (?,?,?)';
		$cadastrar = Conexao::getConn()->prepare($sql);
		$cadastrar->bindValue(1,$l->getTitulo());
		$cadastrar->bindValue(2,$l->getDescricao());
		$cadastrar->bindValue(3,$l->getAutores());
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
    public function readLivro_id($l){
        $sql = 'SELECT * FROM livro WHERE id = ?';

        $readbanco = Conexao::getConn()->prepare($sql);
        $readbanco->bindValue(1,$l);
        $readbanco->execute();

        if($readbanco->rowCount()>0):
            $resultado = $readbanco->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        else:
            return [];
        endif;

    }
	public function updateLivro(Livro $l){
		$sql = 'UPDATE livro SET titulo = ?, descricao = ?, autores = ? WHERE id = ?';
		$updatequery = Conexao::getConn()->prepare($sql);
		$updatequery->bindValue(1,$l->getTitulo());
		$updatequery->bindValue(2,$l->getDescricao());
		$updatequery->bindValue(3,$l->getAutores());
		$updatequery->bindValue(4,$l->getId());
		$updatequery->execute();


	}
	public function deleteLivro($l){
		$sql = 'DELETE * FROM livro WHERE id = ?';
		$deletquery = Conexao::getConn()->prepare($sql);
		$deletquery->bindValue(1,$l);
		$deletquery->execute();


	}


	}

?>