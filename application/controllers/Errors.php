<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Errors extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		if(!$this->session->userdata('usuario_logado')){
			redirect(base_url().'index.php/login/index');
		}
	}

    public function noPermissao(){
		$this->Usuario_model->id_usuario = $this->session->userdata('usuario_logado')['id_usuario']; 
                     
		$dados['foto'] = $this->Usuario_model->recuperarFotoPerfil();

		$dados['pagina'] = "Página de erro";
        $this->load->view('errors/noPermission',$dados);
    }

}
