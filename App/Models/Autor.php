<?php

namespace App\Models;

Class Autor{
	private $id_a ,  $nome_autor, $data_nascimento ,$livros ;
	
	public function getNome(){
		return $this->NomeAutor;
	}

	public function setNome($nome_autor){
		$this->nome_autor = $nome_autor;
	}
	public function getIdAutor(){
		return $this->id_a ;
	}

//	public function setIdAutor($id){
//		$this->id = $id;
//	}
	public function getDataNacinto(){
		return $this->data_nascimento;
	}

	public function setDataNacimento($data_nascimento){
		$this->data_nascimento = $data_nascimento ;
	}
	public function getLivros(){
		return $this-> livros ;
	}

	public function setLivros($livros){
		$this->livros = $livros ;
	}
	
	

}