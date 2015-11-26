<?php

class Entrega{
    public $entregaID, $data, $status;
    
    
    public function __construct(){
            $this->entregaID = $entregaID;
            $this->data = $data;
            $this->status = $status;
    }
    
    public function __set($entregaID, $value){
        $this->$entregaID = $entregaID;
    }
    
    public function __get($entregaID){
        return $this->$entregaID;
    }
    
    public function __set($data, $value){
        $this->$data = $data;
    }
    
    public function __get($data){
        return $this->$data;
    }
    
    public function __set($status, $value){
        $this->$status = $status;
    }
    
    public function __get($status){
        return $this->$status;
    }
}