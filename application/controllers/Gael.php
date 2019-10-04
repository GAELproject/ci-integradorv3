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
		$coisas['usuarios'] = $this->Usuario_model->recuperar();
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
		
		
		$coisas['usuarios'] = $this->Usuario_model->recuperar();

		$coisas['metas'] = $this->Meta_model->recuperar();
		$coisas['usuario_tem_meta'] = $this->Usuario_tem_meta_model->recuperar();
		$coisas['pagina'] = 'Listagem de metas';
		$coisas['title'] = 'Listagem de metas';
		$coisas['sucess'] = 'Meta inserida com sucesso!';
		return $this->load->view('metas', $coisas);
	}
	//exibe o fomrulário de inserção
	public function gerenciar_usuario(){
		$dados['title'] = "Cadastramento de usuários";
		$dados['pagina'] = 'Gerenciar usuário';
		return $this->load->view('gerenciar_usuarios', $dados);
	}

	public function gerenciar_meta(){
		$coisas['title'] = 'Gerenciar meta';
		$coisas['pagina'] = 'Gerenciar meta';
		
		//retorna apenas os usuários que são adm
		$coisas['usuarios_adm'] = $this->Usuario_model->recuperarAdm();
		//retorna apenas usuários do tipo 1, isto é, administradores

		$coisas['usuarios_comuns'] = $this->Usuario_model->recuperarNormais();
		//retorna apenas não administradores
		

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
