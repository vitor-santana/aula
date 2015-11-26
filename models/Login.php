<?php

class Login{
    public $loginID, $nomeLogin, $senha;
    
    
    public function __construct(){
            $this->loginID = $loginID;
            $this->nomeLogin = $nomeLogin;
            $this->senha = $senha;
    }
    
    public function __set($loginID, $value){
        $this->$loginID = $loginID;
    }
    
    public function __get($loginID){
        return $this->$loginID;
    }
    
    public function __set($nomeLogin, $value){
        $this->$nomeLogin = $nomeLogin;
    }
    
    public function __get($nomeLogin){
        return $this->$nomeLogin;
    }
    
    public function __set($senha, $value){
        $this->$senha = $senha;
    }
    
    public function __get($senha){
        return $this->$senha;
    }
}