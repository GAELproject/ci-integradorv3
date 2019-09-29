<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OS extends CI_Controller {

	public function index(){
		$coisas['usuarios'] = $this->Usuario_model->recuperar();

		$coisas['OS'] = $this->OS_model->recuperar();
		$coisas['usuario_tem_meta'] = $this->Usuario_tem_meta_model->recuperar();

		$coisas['title']  = 'Listagem de os';
        $coisas['pagina'] = 'Listagem de os';
		
		$coisas ['title'] = 'listagem das OS - gael';
		$this->load->view('OS/listOS', $coisas);
	}

	public function formcadastrar(){
		$dados['title'] = 'Gerenciar Ordem de Serviços';
		$dados['pagina'] = 'Gerenciar Ordem de Serviços';
		$this->load->model('Equipamento_model');
		$dados['equipamentos'] = $this->Equipamento_model->recuperar();
		$this->load->model('Usuario_model');
		$dados['responsaveis'] = $this->Usuario_model->recuperar();
		$this->load->view('OS/gerenciar_os', $dados);
	}

	public function cadastrar(){
		$responsavel = $_POST['responsavel'];
		$equipamento_id = $_POST['equipamento_id'];
		$numero_OS = $_POST['numero_OS'];		
		$cpf_cliente = $_POST['cpf_cliente'];
		//$data_criacao = implode("-", array_reverse(explode("/", $_POST['data_criacao'])));
		//$data_criacao = $_POST['data_criacao'];
		//Carregar a model
		//$this->load->model('OS_model');
		//Informando os dados
		$this->OS_model->responsavel = $responsavel;
 		$this->OS_model->equipamento_id = $equipamento_id;
		$this->OS_model->numero_OS = $numero_OS;
		//$this->OS_model->data_criacao = $data_criacao;
		$this->OS_model->cpf_cliente = $cpf_cliente;
		//Inserir
		$this->OS_model->inserir();
		$dados['title'] = 'Gerenciar Ordem de Serviços';
		$dados['pagina'] = 'Gerenciar Ordem de Serviços';
		$dados['Alert'] = 'Ordem de Serviço cadastrada com sucesso!!!';
		redirect(base_url('index.php/OS/index'));
	}


	//Abrir página para editar OS's
    public function editar($id){
	//	$this->load->model('Equipamento_model');
    //	$this->load->model('Usuario_model');
	//	$this->load->model('OS_model');

    	$dados['title'] 	= 'Editar Ordem de Serviços';
		$dados['pagina'] 	= 'Editar Ordem de Serviços';
		$dados['equipamentos'] = $this->Equipamento_model->recuperar();
		$dados['responsaveis'] = $this->Usuario_model->recuperar();
		$dados['os'] 		= $this->OS_model->recuperarUm($id);

        return $this->load->view('OS/editOS', $dados);
    }


    //Salvar edições do OS's
    public function atualizar($id){
    	//$this->load->model('OS_model');

    	$this->OS_model->id_os 			= $id;
        $this->OS_model->responsavel 	= $_POST['responsavel'];
        $this->OS_model->equipamento_id = $_POST['equipamento_id'];
        $this->OS_model->numero_OS 		= $_POST['numero_OS'];
        $this->OS_model->cpf_cliente 	= $_POST['cpf_cliente'];
        $this->OS_model->data_criacao 	= $_POST['data_criacao'];

        

        $this->OS_model->update($id);

		//redirect(base_url('index.php/os/editar/' . $id));
		redirect(base_url('index.php/OS'));
	}


	//deletar metas
	public function deletar($id){
       // $this->load->model('OS_model');
        $this->OS_model->delete($id);
        redirect(base_url('index.php/OS'));
	}

	public function view($id){
		$dados['meta'] = $this->Meta_model->recuperarUm($id);
		$dados['usuario_tem_meta'] = $this->Usuario_tem_meta_model->recuperarUsuariosMeta($id);
		$dados['bolsistas'] = $this->Usuario_model->recuperarNormais();
		$dados['pagina'] = 'Visualização de meta';
		$dados['title'] = 'Visualizar meta';
		return $this->load->view('metas/viewMeta',$dados); 
	}
	
}