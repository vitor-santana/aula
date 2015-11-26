<?php

class ItensPedido{
    public $pedidoID, $refeicaoID, $quantidade;
    
    
    public function __construct(){
            $this->pedidoID = $pedidoID;
            $this->refeicaoID = $refeicaoID;
            $this->quantidade = $quantidade;
    }
    
    public function __set($pedidoID, $value){
        $this->$pedidoID = $pedidoID;
    }
    
    public function __get($pedidoID){
        return $this->$pedidoID;
    }
    
    public function __set($refeicaoID, $value){
        $this->$refeicaoID = $refeicaoID;
    }
    
    public function __get($refeicaoID){
        return $this->$refeicaoID;
    }
    
    public function __set($quantidade, $value){
        $this->$quantidade = $quantidade;
    }
    
    public function __get($quantidade){
        return $this->$quantidade;
    }
}
}