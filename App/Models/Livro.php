<?php
 namespace App\Models;

class Livro{
//A
	private $id , $titulo, $descricao;
	public function getTitulo(){
		return $this->titulo;
	}
	public function getDescricao(){
		return $this->descricao;
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

}
?>