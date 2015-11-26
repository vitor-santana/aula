<?php

class Pedido{
    public $pedidoID, $data, $valorTotal, $clienteID, $entregaID, $freteID;
    
    
    public function __construct(){
            $this->pedidoID = $pedidoID;
            $this->data = $data;
            $this->valorTotal = $valorTotal;
            $this->clienteID = $clienteID;
            $this->entregaID = $entregaID;
            $this->freteID = $freteID;
    }
    
    public function __set($pedidoID, $value){
        $this->$pedidoID = $pedidoID;
    }
    
    public function __get($pedidoID){
        return $this->$pedidoID;
    }
    
    public function __set($data, $value){
        $this->$data = $data;
    }
    
    public function __get($data){
        return $this->$data;
    }
    
    public function __set($valorTotal, $value){
        $this->$valorTotal = $valorTotal;
    }
    
    public function __get($valorTotal){
        return $this->$valorTotal;
    }
    
    public function __set($clienteID, $value){
        $this->$clienteID = $clienteID;
    }
    
    public function __get($clienteID){
        return $this->$clienteID;
    }
    
    public function __set($entregaID, $value){
        $this->$entregaID = $entregaID;
    }
    
    public function __get($entregaID){
        return $this->$entregaID;
    }
    
    public function __set($freteID, $value){
        $this->$freteID = $freteID;
    }
    
    public function __get($freteID){
        return $this->$freteID;
    }
}
