<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Elixo extends CI_Controller {


	public function index()
	{	
		$dados['eqp_nao_entregues'] = $this->Equipamento_model->recuperar_N_Entregues();
		$dados['OSs'] = $this->OS_model->recuperar();	
		return $this->load->view('n-autenticado/elixo', $dados);
	}
	public function home(){
		
	}
	

}
