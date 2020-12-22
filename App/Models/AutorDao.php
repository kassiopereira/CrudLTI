<?php
namespace App\Models;

class AutorDao{
	
	public function createAut(Autor $a){
		$sql = 'INSERT INTO autor (nome_autor,data_nascimento,livros) VALUES (?,?,?)';
		$cadastrarAutor = Conexao::getConn()->prepare($sql);
		$cadastrarAutor->bindValue(1,$a->getNome());
		$cadastrarAutor->bindValue(2,$a->getDataNascimento());
		$cadastrarAutor->bindValue(3,$a->getLivros());
		$cadastrarAutor->execute();
	}
	public function readAut(){
		$sql = 'SELECT * FROM autor';
		$readbanco = Conexao::getConn()->prepare($sql);
		$readbanco->execute();

        if($readbanco->rowCount()>0):
            $resultado = $readbanco->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        else:
            return [];
        endif;

    }
	public function updateAut(Autor $a){
		$sql = 'UPDATE autor SET nome_autor = ?, data_nascimento = ?, livros = ? WHERE id_a = ?';
		$updatequery = Conexao::getConn()->prepare($sql);
		$updatequery->bindValue(1,$a->getNome());
		$updatequery->bindValue(2,$a->getDataNascimento());
		$updatequery->bindValue(3,$a->getLivros());
		$updatequery->bindValue(4,$a->getIdAutor());
		$updatequery->execute();


	}
	public function deleteAut($a){
		$sql = 'DELETE FROM autor WHERE id_a = ?';
		$deletequery = Conexao::getConn()->prepare($sql);
		$deletequery->bindValue(1,$a);
		$deletequery->execute();


	}


	}

?>