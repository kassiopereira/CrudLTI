<?php
namespace App\Models;

class AutorDao{
	
	public function createAut(Autor $a){
		$sql = 'INSERT INTO autor (nome_autor,data_nascimento,livros) VALUES (?,?,?)';
		$cadastrarAutor = Conexao::getConn()->prepare($sql);
		$cadastrarAutor->bindValue(1,$a->getNome($_POST['nome']));
		$cadastrarAutor->bindValue(2,$a->setDataNacimento($_POST['dataNascimento']));
		$cadastrarAutor->bindValue(3,$a->getLivros($_POST['livros']));
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
		$updatequery->bindValue(2,$a->getDataNacinto());
		$updatequery->bindValue(3,$a->getLivros());
		$updatequery->bindValue(4,$a->getIdAutor());
		$updatequery->execute();


	}
	public function deleteAut($id){
		$sql = 'DELETE FROM autor WHERE id = ?';
		$deletquery = Conexao::getConn()->prepare($sql);
		$deletquery->bindValue(1,$id);
		$deletquery->execute();


	}


	}

?>