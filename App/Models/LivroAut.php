<?php


namespace App\Models;


class LivroAut
{
    //tabela auxiliar com problema
    private $id_a , $id;
    public function getIDl(){
        return $this->id;
    }
    public function setIDl($id){
        $this->id  = $id  ;
    }
    public function getIDla(){
        return $this->id_a;
    }
    public function setIDla($id_a){
        $this->id_a  = $id_a  ;
    }
    public function createLivroA(LivroAut $l){
        $sql = 'INSERT INTO livros (id_a,id VALUES (?,?)';
        $cadastrar = Conexao::getConn()->prepare($sql);
        $cadastrar->bindValue(1,$l->getIDla());
        $cadastrar->bindValue(2,$l->getIDl());
        $cadastrar->execute();
    }

}