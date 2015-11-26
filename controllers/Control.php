<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control extends CI_Controller {

	

	public function index() {
		$this->load->view('welcome_message');
	}
	

	public function home() {
		$this->load->view('home');
	}
	

	public function formreserva() {
		$this->load->view('formreserva');
	}
	

	public function menu() {
		$this->load->view('menu');
	}
	

	public function formcontato() {
		$this->load->view('formcontato');
	}
	
	public function login() {
		$this->load->view('formlogin');
	}
	
	public function lista() {
		$this->load->view('lista');
	}
	

	public function listar() {
		require_once APPPATH."models/reserva.php";
		$this->load->model('reserva');
		$x = $this->reserva;
		$reserva = $x->searchAll();
		$data['reserva'] = reserva;
		$this->load->view("lista", $data);
	}
	

}