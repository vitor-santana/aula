<?php

class contato{
    public $contatoID, $assunto, $nome, $email, $tituloMensagem, $conteudoMensagem;

    public function __construct(){
            $this->contadoID = $contatoID;
            $this->assunto = $assunto;
            $this->nome = $nome;
            $this->email = $email;
            $this->conteudoMensagem = $conteudoMensagem;
    }
    
    public function __set($contatoID, $value){
        $this->$contatoID = $contatoID;
    }
    
    public function __get($contatoID){
        return $this->$contatoID;
    }
    
    public function __set($assunto, $value){
        $this->$assunto = $assunto;
    }
    
    public function __get($assunto){
        return $this->$assunto;
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
    
    public function __set($tituloMensagem, $value){
        $this->$tituloMensagem = $tituloMensagem;
    }
    
    public function __get($tituloMensagem){
        return $this->$tituloMensagem;
    }
    
    public function __set($conteudoMensagem, $value){
        $this->$conteudoMensagem = $conteudoMensagem;
    }
    
    public function __get($conteudoMensagem){
        return $this->$conteudoMensagem;
    }

}
