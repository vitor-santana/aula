<?php  

class Restaurante extends CI_Controller{
    
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
		 $tipoAssunto = $_POST["assunto"];
		 $nome = $_POST["nome"];
		 $email = $_POST["email"];
		 $tituloMensagem = $_POST["tituloMensagem"];
		 $conteudoMensagem = $_POST["conteudoMensagem"];
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
		 $d = $this->fretedao;
		 $freteID = $_POST["freteID"];
		 $valor = $_POST["valor"];
		 $d->insert($fret);
		 require_once APPPATH."models/itenspedido.php";
		 $this->load->model('itenspedidodao');
		 $e = $this->itenspedidodao;
		 $pedidoID = $_POST["pedidoID"];
		 $refeicaoID = $_POST["refeicaoID"];
		 $quantidade = $_POST["quantidade"];
		 $e->insert($intped);
		 require_once APPPATH."models/login.php";
		 $this->load->model('logindao');
		 $f = $this->logindao;
		 $loginID = $_POST["loginID"];
		 $nomeLogin = $_POST["nomeLogin"];
		 $senha = $_POST["senha"];
		 $f->insert($log);
		 require_once APPPATH."models/pedido.php";
		 $this->load->model('pedidodao');
		 $g = $this->pedidodao;
		 $pedidoID = $_POST["pedidoID"];
		 $data = $_POST["data"];
		 $valorTotal = $_POST["valorTotal"];
		 $clienteID = $_POST["clienteID"];
		 $entregaID = $_POST["entregaID"];
		 $freteID = $_POST["freteID"];
		 $g->insert($ped);
		 require_once APPPATH."models/refeicao.php";
		 $this->load->model('refeicaodao');
		 $h = $this->refeicaodao;
		 $refeicaoID = $_POST["refeicaoID"];
		 $nome = $_POST["nome"];
		 $descricao = $_POST["descricao"];
		 $valorUnitario = $_POST["valorUnitario"];
		 $h->insert($ref);
		 require_once APPPATH."models/reserva.php";
		 $this->load->model('reservadao');
		 $i = $this->reservadao;
		 $reservaID = $_POST["reservaID"];
		 $data = $_POST["data"];
		 $hora = $_POST["hora"];
		 $nome = $_POST["nome"];
		 $quantidadePessoas = $_POST["quantidadePessoas"];
		 $i->insert($res);
	}
	
	public function mostra(){
	     $this->load->model('clientedao');
		 $a = $this->clientedao;
	     $q1 = $a->queryAll();
		 $data['lista'] = $q;
		 $this->load->view('mostra',$data);
    }
    
    public function mostra2(){
	     $this->load->model('contatodao');
		 $b = $this->contatodao;
	     $q2 = $b->queryAll();
		 $data['lista'] = $q2;
		 $this->load->view('mostra2',$data);
    }
    
    public function mostra3(){
	     $this->load->model('entregadao');
		 $c = $this->entregadao;
	     $q3 = $c->queryAll();
		 $data['lista'] = $q3;
		 $this->load->view('mostra3',$data);
    }
    
    public function mostra4(){
	     $this->load->model('fretedao');
		 $d = $this->fretedao;
	     $q4 = $d->queryAll();
		 $data['lista'] = $q4;
		 $this->load->view('mostra4',$data);
    }
    
    public function mostra5(){
	     $this->load->model('itenspedidodao');
		 $e = $this->itenspedidodao;
	     $q5 = $e->queryAll();
		 $data['lista'] = $q5;
		 $this->load->view('mostra5',$data);
    }
    
    public function mostra6(){
	     $this->load->model('logindao');
		 $f = $this->logindao;
	     $q6 = $f->queryAll();
		 $data['lista'] = $q6;
		 $this->load->view('mostra6',$data);
    }
    
    public function mostra7(){
	     $this->load->model('pedidodao');
		 $g = $this->pedidodao;
	     $q7 = $g->queryAll();
		 $data['lista'] = $q7;
		 $this->load->view('mostra7',$data);
    }
    
    public function mostra8(){
	     $this->load->model('refeicaodao');
		 $h = $this->refeicaodao;
	     $q8 = $h->queryAll();
		 $data['lista'] = $q8;
		 $this->load->view('mostra8',$data);
    }
    
    public function mostra9(){
	     $this->load->model('reservadao');
		 $i = $this->reservadao;
	     $q9 = $i->queryAll();
		 $data['lista'] = $q9;
		 $this->load->view('mostra9',$data);
    }
    
    
}