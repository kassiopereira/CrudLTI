<?php

namespace App\Models;

Class Autor
{

    private $id_a, $nome_autor, $data_nascimento;

    public function getNome()
    {
        return $this->nome_autor;
    }
    public function getIdAutor()
    {
        return $this->id_a;
    }
    public function getDataNascimento()
    {
        return $this->data_nascimento;
    }
   public function getLivros()
    {
        return $this->livros;
    }
    public function setNome($nome_autor)
    {
        $this->nome_autor = $nome_autor;
    }
    public function setIdAutor($id_a)
    {
        $this->id_a = $id_a;
    }
    public function setDataNascimento($data_nascimento)
    {
        $this->data_nascimento = $data_nascimento;
    }
    public function setLivros($livros)
    {
        $this->livros = $livros;
    }


}