<?php

class Cliente{
    public $id, $nome, $endereco, $telefone, $email;
    
    public function __construct(){
            $this->id = $id;
            $this->nome = $nome;
            $this->endereco = $endereco;
            $this->telefone = $telefone;
            $this->email = $email;
    }
    
    public function fazerPedido(){ //aline, depois fala pra mim se esta função está certa
      $this->pedido->id; 
    }
    
}

class Reserva{
    public $id, $nome, $data, $horario, $nm_pessoas;
    
    public function __construct(){
            $this->id = $id;
            $this->quantidade = $nome;
            $this->id = $data;
            $this->quantidade = $horario;
            $this->id = $id;
            $this->nm_pessoas = $nm_pessoas;
    }
    
}

class Frete{
    public $id, $preco;
    
    public function __construct(){
            $this->id = $id;
            $this->preco = $preco;
    }
    
    public function calcPrecoFrete() {
		return 2.00+calPreco();
	}
	
}

class Menu{
    public $id;
    
    public function __construct(){
            $this->id = $id;
    }
}

class Vegano extends Menu{
    public $id;
    
    public function __construct(){
            $this->id = $id;
    }
}

class Vegetariano extends Menu{
    public $id;
    
    public function __construct(){
            $this->id = $id;
    }
}

class Carnivoro extends Menu{
    public $id;
    
    public function __construct(){
            $this->id = $id;
    }
}

abstract class Refeicao{
    public $id, $preco;
    
    public abstract function calcPreco();
    
    /*public function __construct(){ //não sei se numa classe abstrata tem construtor
            $this->id = $id;
            $this->preco = $preco;
    }*/ 
}

class Principal extends Refeicao{
    public $id, $nome, $preco, $quantidade;
    
    public function __construct(){
            $this->id = $id;
            $this->nome = $nome;
            $this->preco = $preco;
            $this->quantidade = $quantidade;
    }
    
    public function calcPreco() {
		return 27.90;
	}
}

class Saladas extends Refeicao{
    public $id, $nome, $preco, $quantidade;
    
    public function __construct(){
            $this->id = $id;
            $this->nome = $nome;
            $this->preco = $preco;
            $this->quantidade = $quantidade;
    }
    
    public function calcPreco() {
		return 10.90;
	}
}

class Lanches extends Refeicao{
    public $id, $nome, $preco, $quantidade;
    
    public function __construct(){
            $this->id = $id;
            $this->nome = $nome;
            $this->preco = $preco;
            $this->quantidade = $quantidade;
    }

    public function calcPreco() {
		return 7.90;
	}
}

class Porcoes extends Refeicao{
    public $id, $nome, $preco, $quantidade;
    
    public function __construct(){
            $this->id = $id;
            $this->nome = $nome;
            $this->preco = $preco;
            $this->quantidade = $quantidade;
    }
    
    public function calcPreco() {
		return 23.90;
	}
}

class Sobremesas extends Refeicao{
    public $id, $nome, $preco, $quantidade;
    
    public function __construct(){
            $this->id = $id;
            $this->nome = $nome;
            $this->preco = $preco;
            $this->quantidade = $quantidade;
    }
    
    public function calcPreco() {
		return 12.90;
	}
}

class Bebidas extends Refeicao{
    public $id, $nome, $preco, $quantidade;
    
    public function __construct(){
            $this->id = $id;
            $this->nome = $nome;
            $this->preco = $preco;
            $this->quantidade = $quantidade;
    }
    
    public function calcPreco() {
		return 4.90;
	}
}