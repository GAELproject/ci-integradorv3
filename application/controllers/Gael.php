<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gael extends CI_Controller {

	public function __construct()	{
		parent::__construct();
		$this->load->helper('url');
	}
	public function index()
	{
		$this->load->view('auth/index');
	}
	public function home(){
		$coisas['pagina'] = "Página inicial";
		$coisas ['title'] = 'Página incial - gael';
		$this->load->view('home', $coisas);
	}
	public function user(){
		$this->load->model('Usuario_model');
		$coisas['pagina'] = 'Usuários';
		$coisas['usuarios'] = $this->Usuario_model->recuperar();
		$coisas ['title'] = 'listagem de usuário - gael';
		return $this->load->view('user', $coisas);
	}
	public function metas(){
		return $this->load->view('metas');
	}

}
