<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doacao extends CI_Controller {

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
		
		$dados['foto'] = $this->Usuario_model->recuperarFotoPerfil();
		
        $dados['doacoes'] = $this->Doacao_model->recuperar();
        $dados['equipamentos'] = $this->Equipamento_model->recuperar();
		
		$dados['pagina'] = "Doações";
		$dados['title'] = 'Listagem de doações';
		return $this->load->view('doacao/index_doacao', $dados);
    }
    public function formDoacaoAdd(){

        $this->Usuario_model->id_usuario = $this->session->userdata('usuario_logado')['id_usuario']; 
		
		$dados['foto'] = $this->Usuario_model->recuperarFotoPerfil();
			
		$dados['pagina'] = "Doações";
		$dados['title'] = 'Listagem de doações';
    }
}