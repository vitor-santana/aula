<?php

class Cliente{
    public $clienteID, $nome, $cpf, $endereco, $cidade, $estado, $cep, $numeroContato, $email, $loginID;
    
    public function __construct(){
            $this->clienteID = $clienteID;
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->endereco = $endereco;
            $this->cidade = $cidade;
            $this->estado = $estado;
            $this->cep = $cep;
            $this->numeroContato = $numeroContato;
            $this->email = $email;
            $this->loginID = $loginID;
    }
    
    public function __set($clienteID, $value){
        $this->$clienteID = $clienteID;
    }
    
    public function __get($clienteID){
        return $this->$clienteID;
    }
    
    public function __set($nome, $value){
        $this->$nome = $nome;
    }
    
    public function __get($nome){
        return $this->$nome;
    }
    
    public function __set($cpf, $value){
        $this->$cpf = $cpf;
    }
    
    public function __get($cpf){
        return $this->$cpf;
    }
    
    public function __set($endereco, $value){
        $this->$endereco = $endereco;
    }
    
    public function __get($endereco){
        return $this->$endereco;
    }
    
    public function __set($cidade, $value){
        $this->$cidade = $cidade;
    }
    
    public function __get($cidade){
        return $this->$cidade;
    }
    
    public function __set($estado, $value){
        $this->$estado = $estado;
    }
    
    public function __get($estado){
        return $this->$estado;
    }
    
    public function __set($cep, $value){
        $this->$cep = $cep;
    }
    
    public function __get($cep){
        return $this->$cep;
    }
    
    public function __set($numeroContato, $value){
        $this->$numeroContato = $numeroContato;
    }
    
    public function __get($numeroContato){
        return $this->$numeroContato;
    }
    
    public function __set($email, $value){
        $this->$email = $email;
    }
    
    public function __get($email){
        return $this->$email;
    }
    
    public function __set($loginID, $value){
        $this->$loginID = $loginID;
    }
    
    public function __get($loginID){
        return $this->$loginID;
    }
}