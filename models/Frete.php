<?php

class Frete{
    public $freteID, $valor;
    
    
    public function __construct(){
            $this->freteID = $freteID;
            $this->valor = $valor;
    }
    
    public function __set($freteID, $value){
        $this->$freteID = $freteID;
    }
    
    public function __get($freteID){
        return $this->$freteID;
    }
    
    public function __set($valor, $value){
        $this->$valor = $valor;
    }
    
    public function __get($valor){
        return $this->$valor;
    }
}