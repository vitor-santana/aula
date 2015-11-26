<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control extends CI_Controller {

	
	// /index.php/controller/welcome_message
	public function index() {
		$this->load->view('welcome_message');
	}
	
	// /index.php/controller/index
	public function home() {
		$this->load->view('home');
	}
	
	// /index.php/controller/reserva
	public function reserva() {
		$this->load->view('reserva');
	}
	
	// /index.php/controller/menu
	public function menu() {
		$this->load->view('menu');
	}
	
	// /index.php/controller/contato
	public function formcontato() {
		$this->load->view('formcontato');
	}
	
	// /index.php/control/listar
	public function listar() {
		require_once APPPATH."models/reserva.php";
		$this->load->model('reserva');
		$x = $this->reserva;
		$reserva = $x->searchAll();
		$data['reserva'] = reserva;
		$this->load->view("lista", $data);
	}
	

}