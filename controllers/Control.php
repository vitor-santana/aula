<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {

	
	// /index.php/controller/welcome_message
	public function index() {
		$this->load->view('welcome_message');
	}
	
	// /index.php/controller/index
	public function home() {
		$this->load->view('home');
	}
	
	// /index.php/controller/reserva
	public function formreserva() {
		$this->load->view('formreserva');
	}
	
	// /index.php/controller/menu
	public function menu() {
		$this->load->view('menu');
	}
	
	// /index.php/controller/contato
	public function formcontato() {
		$this->load->view('formcontato');
	}
	
	
	public function forma(){
    	$this->load->view('cli');
    }
    
    public function forma2(){
    	$this->load->view('cont');
    }
    
    public function forma3(){
    	$this->load->view('entr');
    }
    
    public function forma4(){
    	$this->load->view('fret');
    }
	
	public function forma5(){
    	$this->load->view('intped');
    }
    
    public function forma6(){
    	$this->load->view('log');
    }
    
    public function forma7(){
    	$this->load->view('ped');
    }
    
    public function forma8(){
    	$this->load->view('ref');
    }
    
    public function forma9(){
    	$this->load->view('res');
    }
    
	
	// /index.php/control/doPost
	public function doPost(){
		 require_once APPPATH."models/cliente.php";
		 $this->load->model('clientedao');
		 $a = $this->clientedao;
		 $clienteID = $_POST["clienteID"];
		 $nome = $_POST["nome"];
		 $cpf = $_POST["cpf"];
		 $endereco = $_POST["endereco"];
		 $cidade = $_POST["cidade"];
		 $estado = $_POST["estado"];
    	 $cep = $_POST["cep"];
		 $numeroContato = $_POST["numeroContato"];
		 $email = $_POST["email"];
		 $loginID = $_POST["loginID"];
		 $a->insert($cli);
		 require_once APPPATH."models/contato.php";
		 $this->load->model('contatodao');
		 $b = $this->contatodao;
		 $contatoID = $_POST["contatoID"];
		 $tipoAssunto = $_POST["tipoAssunto"];
		 $nome = $_POST["nome"];
		 $email = $_POST["email"];
		 $mensagem = $_POST["mensagem"];
		 $b->insert($cont);
		 require_once APPPATH."models/entrega.php";
		 $this->load->model('entregadao');
		 $c = $this->clientedao;
		 $entregaID = $_POST["entregaID"];
		 $data = $_POST["data"];
		 $status = $_POST["status"];
		 $c->insert($entr);
		 require_once APPPATH."models/frete.php";
		 $this->load->model('fretedao');
		 $m = $this->fretedao;
		 $freteID = $_POST["freteID"];
		 $valor = $_POST["valor"];
		 $d->insert($fret);
		 require_once APPPATH."models/itenspedido.php";
		 $this->load->model('itenspedidodao');
		 $m = $this->itenspedidodao;
		 $pedidoID = $_POST["pedidoID"];
		 $refeicaoID = $_POST["refeicaoID"];
		 $quantidade = $_POST["quantidade"];
		 $d->insert($intped);
		 require_once APPPATH."models/login.php";
		 $this->load->model('logindao');
		 $e = $this->logindao;
		 $loginID = $_POST["loginID"];
		 $nomeLogin = $_POST["nomeLogin"];
		 $senha = $_POST["senha"];
		 $e->insert($log);
		 require_once APPPATH."models/pedido.php";
		 $this->load->model('pedidodao');
		 $f = $this->pedidodao;
		 $pedidoID = $_POST["pedidoID"];
		 $data = $_POST["data"];
		 $valorTotal = $_POST["valorTotal"];
		 $clienteID = $_POST["clienteID"];
		 $entregaID = $_POST["entregaID"];
		 $freteID = $_POST["freteID"];
		 $f->insert($ped);
		 require_once APPPATH."models/refeicao.php";
		 $this->load->model('refeicaodao');
		 $g = $this->refeicaodao;
		 $refeicaoID = $_POST["refeicaoID"];
		 $nome = $_POST["nome"];
		 $descricao = $_POST["descricao"];
		 $valorUnitario = $_POST["valorUnitario"];
		 $g->insert($ref);
		 require_once APPPATH."models/reserva.php";
		 $this->load->model('reservadao');
		 $h = $this->reservadao;
		 $reservaID = $_POST["reservaID"];
		 $data = $_POST["data"];
		 $hora = $_POST["hora"];
		 $nome = $_POST["nome"];
		 $quantidadePessoas = $_POST["quantidadePessoas"];
		 $h->insert($res);
	}
	
	// /index.php/control/listar
	public function listar() {
		require_once APPPATH."models/user.php";
		$this->load->model('model');
		$m = $this->model;
		//verificar se deu certo
		$usuarios = $m->searchAll();
		//$data é o dicionário do php
		$data['usuarios'] = $usuarios; //Obs: o nome ['usuarios'] deve ser o mesmo nome na view (lista.php) e no controllers (Control.php)
		//"lista" é o nome da view
		//$data é o vetor das variáveis usuários
		$this->load->view("lista", $data);
	}
	

}