<?php

class contato{
    public $contatoID, $tipoAssunto, $nome, $email, $mensagem;

    public function __construct(){
            $this->contadoID = $contatoID;
            $this->tipoAssunto = $tipoAssunto;
            $this->nome = $nome;
            $this->email = $email;
            $this->mensagem = $mensagem;
    }
    
    public function __set($contatoID, $value){
        $this->$contatoID = $contatoID;
    }
    
    public function __get($contatoID){
        return $this->$contatoID;
    }
    
    public function __set($tipoAssunto, $value){
        $this->$tipoAssunto = $tipoAssunto;
    }
    
    public function __get($tipoAssunto){
        return $this->$tipoAssunto;
    }
    
    public function __set($nome, $value){
        $this->$nome = $nome;
    }
    
    public function __get($nome){
        return $this->$nome;
    }
    
    public function __set($email, $value){
        $this->$email = $email;
    }
    
    public function __get($email){
        return $this->$email;
    }
    
    public function __set($mensagem, $value){
        $this->$mensagem = $mensagem;
    }
    
    public function __get($mensagem){
        return $this->$mensagem;
    }

}
