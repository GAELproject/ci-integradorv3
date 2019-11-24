<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gael extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		if(!$this->session->userdata('usuario_logado')){
			redirect(base_url().'index.php/login/index');
		}
	}

	public function index()
	{	
		$this->Usuario_model->id_usuario = $this->session->userdata('usuario_logado')['id_usuario']; 
		$id_usuario = $this->session->userdata('usuario_logado')['id_usuario'];
		$dados['foto'] = $this->Usuario_model->recuperarFotoPerfil();
		$id_usuario = $this->session->userdata('usuario_logado')['id_usuario'];
		$dados['metas'] = $this->Meta_model->recuperar();
		$dados['usuarios'] = $this->Usuario_model->recuperarAdms();
		$dados['metas_vinculadas'] = $this->Usuario_tem_meta_model->metasVinculadas($id_usuario);
		$dados['pagina'] = "Página inicial";
		$dados['title'] = 'Página incial - gael';
		$this->load->view('home', $dados);
	}
	public function home(){
		$this->Usuario_model->id_usuario = $this->session->userdata('usuario_logado')['id_usuario']; 
		$id_usuario = $this->session->userdata('usuario_logado')['id_usuario'];
		$dados['foto'] = $this->Usuario_model->recuperarFotoPerfil();
		$dados['metas'] = $this->Meta_model->recuperar();
		$dados['usuarios'] = $this->Usuario_model->recuperarAdms();
		$dados['metas_vinculadas'] = $this->Usuario_tem_meta_model->metasVinculadas($id_usuario);
		$dados['pagina'] = "Página inicial";
		$dados['title'] = 'Página incial - gael';
		$this->load->view('home', $dados);
	}
	public function user(){
		$this->Usuario_model->id_usuario = $this->session->userdata('usuario_logado')['id_usuario']; 
                     
		$dados['foto'] = $this->Usuario_model->recuperarFotoPerfil();


		$this->load->model('Usuario_model');
		$dados['pagina'] = 'Usuários';
		$dados['usuarios'] = $this->Usuario_model->recuperar();
		$dados ['title'] = 'listagem de usuário - gael';
		return $this->load->view('user', $dados);
	}
	public function metas(){
		
		if($this->session->userdata('usuario_logado')['usuario_tipo']== "1"){
			$this->Usuario_model->id_usuario = $this->session->userdata('usuario_logado')['id_usuario']; 
                     
            $dados['foto'] = $this->Usuario_model->recuperarFotoPerfil();

		
		$dados['usuarios'] = $this->Usuario_model->recuperar();

		$dados['metas'] = $this->Meta_model->recuperar();
		$dados['usuario_tem_meta'] = $this->Usuario_tem_meta_model->recuperar();
		$dados['pagina'] = 'Listagem de metas';
		$dados['title'] = 'Listagem de metas';
		$dados['sucess'] = 'Meta inserida com sucesso!';
		return $this->load->view('metas', $dados);
		}else{
			//caso não seja, é lançada uma exceção
			redirect('index.php/errors/noPermissao');
		}
	}
	//exibe o fomrulário de inserção
	public function gerenciar_usuario(){
		$this->Usuario_model->id_usuario = $this->session->userdata('usuario_logado')['id_usuario']; 
                     
		$dados['foto'] = $this->Usuario_model->recuperarFotoPerfil();

		$dados['title'] = "Cadastramento de usuários";
		$dados['pagina'] = 'Gerenciar usuário';
		return $this->load->view('gerenciar_usuarios', $dados);
	}

	public function gerenciar_meta(){
		$this->Usuario_model->id_usuario = $this->session->userdata('usuario_logado')['id_usuario']; 
                     
		$dados['foto'] = $this->Usuario_model->recuperarFotoPerfil();

		$dados['title'] = 'Gerenciar meta';
		$dados['pagina'] = 'Gerenciar meta';
		
		//retorna apenas os usuários que são adm
		$dados['usuarios_adm'] = $this->Usuario_model->recuperarAdm();
		//retorna apenas usuários do tipo 1, isto é, administradores

		$dados['usuarios_comuns'] = $this->Usuario_model->recuperarNormais();
		//retorna apenas não administradores
		

		return $this->load->view('gerenciar_metas', $dados);
	}

	public function gerenciar_equipamento(){
		$this->Usuario_model->id_usuario = $this->session->userdata('usuario_logado')['id_usuario']; 
                     
		$dados['foto'] = $this->Usuario_model->recuperarFotoPerfil();

		$dados['pagina'] = 'Gerenciar equipamento';
		return $this->load->view('gerenciar_equipamentos', $dados);
	}

	public function realizar_equipamento(){
		$this->Usuario_model->id_usuario = $this->session->userdata('usuario_logado')['id_usuario']; 
                     
		$dados['foto'] = $this->Usuario_model->recuperarFotoPerfil();

		$dados['pagina'] = 'Realizar atividade em equipamento';
		return $this->load->view('realizar_equipamentos', $dados);
	}

}
