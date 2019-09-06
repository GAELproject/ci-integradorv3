<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gael extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('auth/index');
	}
	public function home(){
		$this->load->model('Usuario_model');
		$this->load->model('Meta_model');
		$coisas['usuarios'] = $this->Usuario_model->recuperar();
		$coisas['metas'] = $this->Meta_model->recuperar();
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
		$this->load->model('Meta_model');
		$coisas['metas'] = $this->Meta_model->recuperar();
		$coisas['pagina'] = 'Listagem de metas';
		$coisas['title'] = 'Listagem de metas';
		$coisas['sucess'] = 'Meta inserida com sucesso!';
		return $this->load->view('metas', $coisas);
	}
	public function gerenciar_usuario(){
		$coisas['pagina'] = 'Gerenciar usuário';
		return $this->load->view('gerenciar_usuarios', $coisas);
	}

	public function gerenciar_meta(){
		$coisas['pagina'] = 'Gerenciar meta';
		return $this->load->view('gerenciar_metas', $coisas);
	}

	public function gerenciar_equipamento(){
		$coisas['pagina'] = 'Gerenciar equipamento';
		return $this->load->view('gerenciar_equipamentos', $coisas);
	}

	public function realizar_equipamento(){
		$coisas['pagina'] = 'Realizar atividade em equipamento';
		return $this->load->view('realizar_equipamentos', $coisas);
	}

}
