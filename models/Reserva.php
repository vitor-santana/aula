<?php

class Reserva{
    public $reservaID, $data, $hora, $nome, $quantidadePessoas;
    
    
    public function __construct(){
            $this->reservaID = $reservaID;
            $this->data = $data;
            $this->hora = $hora;
            $this->nome = $nome;
            $this->quantidadePessoas = $quantidadePessoas;
    }
    
    public function __set($reservaID, $value){
        $this->$reservaID = $reservaID;
    }
    
    public function __get($reservaID){
        return $this->$reservaID;
    }
    
    public function __set($data, $value){
        $this->$data = $data;
    }
    
    public function __get($data){
        return $this->$data;
    }
    
    public function __set($nome, $value){
        $this->$nome = $nome;
    }
    
    public function __get($nome){
        return $this->$nome;
        
    }
    
    public function __set($quantidadePessoas, $value){
        $this->$quantidadePessoas = $quantidadePessoas;
    }
    
    public function __get($quantidadePessoas){
        return $this->$quantidadePessoas;
    }
}