<?php
 namespace App\Models;

class Livro{
	private $id , $titulo, $descricao, $autores;
	public function getTitulo(){
		return $this->titulo;
	}
	public function getDescricao(){
		return $this->descricao;
	}
	public function getAutores(){
		return $this->autores;
	}

	public function getId(){
		return $this->id ;
	}

	public function setId($id){
		$this->id  = $id  ;
	}
	public function setTitulo($titulo){
		$this->titulo = $titulo ;
	}


	public function setDescricao($descricao){
		$this->descricao = $descricao ;
	}
	public function setAutores($autores ){
		$this->autores = $autores ;
	}
}
?>