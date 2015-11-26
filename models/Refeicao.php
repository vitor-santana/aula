<?php

class Refeicao{
    public $refeicaoID, $nome, $descricao, $valorUnitario;
    
    
    public function __construct(){
            $this->refeicaoID = $refeiçãoID;
            $this->preco = $nome;
            $this->descricao = $descricao;
            $this->valorUnitario = $valorUnitario;
    }
    
    public function __set($refeiçãoID, $value){
        $this->$refeiçãoID = $refeiçãoID;
    }
    
    public function __get($refeicaoID){
        return $this->$refeicaoID;
    }
    
    public function __set($nome, $value){
        $this->$nome = $nome;
    }
    
    public function __get($nome){
        return $this->$nome;
    }
    
    public function __set($descricao, $value){
        $this->$descricao = $descricao;
    }
    
    public function __get($descricao){
        return $this->$descricao;
    }
    
    public function __set($valorUnitario, $value){
        $this->$valorUnitario = $valorUnitario;
    }
    
    public function __get($valorUnitario){
        return $this->$valorUnitario;
    }
    
}