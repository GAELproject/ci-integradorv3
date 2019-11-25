<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laudo extends CI_Controller {

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
		
        $dados['laudos'] = $this->Laudo_model->recuperar();
        $dados['equipamentos'] = $this->Equipamento_model->recuperar();
		
		$dados['pagina'] = "Laudos";
		$dados['title'] = 'Listagem de laudos';
		return $this->load->view('laudos/index_laudo', $dados);
    }
    public function formLaudoAdd(){
        $this->Usuario_model->id_usuario = $this->session->userdata('usuario_logado')['id_usuario']; 
		
		$dados['foto'] = $this->Usuario_model->recuperarFotoPerfil();
        $dados['equipamentos'] = $this->Equipamento_model->recuperar();
        
		$dados['laudos'] = $this->Laudo_model->recuperar();
		
		$dados['pagina'] = "Adicionar novo laudo";
		$dados['title'] = 'Adição de laudos';
		return $this->load->view('laudos/add_laudos', $dados);

    }
    public function salvar(){
     
        $this->Laudo_model->possiveis_defeitos = $_POST['possiveis_defeitos'];
        $this->Laudo_model->possiveis_causas = $_POST['possiveis_causas'];
        $this->Laudo_model->possiveis_solucoes = $_POST['possiveis_solucoes'];
        $this->Laudo_model->data_entrega = $_POST['data_entrega'];
        $this->Laudo_model->cliente = $_POST['cliente'];
        $this->Laudo_model->destino = $_POST['destino'];
        $this->Laudo_model->equipamento_laudo_id = $_POST['equipamento_laudo_id'];
        $this->Laudo_model->inserir();

        $this->session->set_flashdata('success','Laudo inserido com sucesso!');
        redirect('index.php/laudo/index');	

    
    }
    public function delete($id){
        $this->Laudo_model->delete($id);
        $this->session->set_flashdata('success','Laudo excluído com sucesso!');
        redirect('index.php/laudo/index');	

    }
}