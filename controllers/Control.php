<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control extends CI_Controller {

	
	public function index() {
		$this->load->view('welcome_message');
	}
	
	// /index.php/control/home
	public function home() {
		$this->load->view('home');
	}
	
	// /index.php/control/sobre
	public function sobre() {
		$this->load->view('sobre');
	}
	// /index.php/control/doPost
	public function doPost() {
		//controller enxerga o model 
		//APPPATH onde está o CodeIgnitor
		require_once APPPATH."models/usuario.php";
		//'model' é o Model se passa com letra mínuscula
		$this->load->model('model');
		$m = $this->model;
		//new Usuario representa a classe Usuario do arquivo user.php
		$m->insert(new Usuario($_POST["tnome"])); //"tnome" é o campo name do form do qual se extrai a informação para gravar no banco

	}
	// /index.php/control/listar
	public function listar() {
		require_once APPPATH."models/usuario.php";
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
	
	// /index.php/control/forms
	
    public function forms() {
    	$this->load->view('forms');
    }
	
}


//http://github.com/romefeller/phpci -> repositório do professor - conteúdo das aulas - entregar aplicação funcionando 
//e o repositório do github