<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OS extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		
		if(!$this->session->userdata('usuario_logado')){
			redirect(base_url().'index.php/login/index');
		}
	}


	public function index(){
		$this->Usuario_model->id_usuario = $this->session->userdata('usuario_logado')['id_usuario']; 
                     
		$dados['foto'] = $this->Usuario_model->recuperarFotoPerfil();


		$dados['usuarios'] = $this->Usuario_model->recuperar();
		$dados['equipamentos'] = $this->Equipamento_model->recuperar();
		$dados['OS'] = $this->OS_model->recuperar();
		$dados['usuario_tem_meta'] = $this->Usuario_tem_meta_model->recuperar();

		$dados['title']  = 'Listagem de os';
        $dados['pagina'] = 'Listagem de os';
		
		$dados ['title'] = 'listagem das OS - gael';
		$this->load->view('OS/listOS', $dados);
	}

	public function formcadastrar(){
		$this->Usuario_model->id_usuario = $this->session->userdata('usuario_logado')['id_usuario']; 
                     
		$dados['foto'] = $this->Usuario_model->recuperarFotoPerfil();


		$dados['title'] = 'Gerenciar Ordem de Serviços';
		$dados['pagina'] = 'Gerenciar Ordem de Serviços';
		$this->load->model('Equipamento_model');
		$dados['equipamentos'] = $this->Equipamento_model->recuperar();
		$this->load->model('Usuario_model');
		$dados['responsaveis'] = $this->Usuario_model->recuperar();
		$this->load->view('OS/gerenciar_os', $dados);
	}

	public function cadastrar(){
		//$responsavel = $_POST['responsavel'];
	
		$responsavel = $this->session->userdata('usuario_logado')['id_usuario'];
		$equipamento_id = $_POST['equipamento_id'];
		$numero_OS = $_POST['numero_OS'];		
		$cpf_cliente = $_POST['cpf_cliente'];
		$cliente_nome = $_POST['cliente_nome'];
		$cliente_numero_telefone = $_POST['cliente_numero_telefone'];
		$cliente_email = $_POST['cliente_email'];
	
		$this->OS_model->responsavel = $responsavel;
 		$this->OS_model->equipamento_id = $equipamento_id;
		$this->OS_model->numero_OS = $numero_OS;
		//$this->OS_model->data_criacao = $data_criacao;
		$this->OS_model->cpf_cliente = $cpf_cliente;
		$this->OS_model->cliente_nome = $cliente_nome;
		$this->OS_model->cliente_numero_telefone = $cliente_numero_telefone;
		$this->OS_model->cliente_email = $cliente_email;
		//Inserir
		$this->OS_model->inserir();
		$this->session->set_flashdata('success','Ordem de serviço inserida com sucesso!');
		
		redirect(base_url('index.php/OS/index'));
	}


	//Abrir página para editar OS's
    public function editar($id){
		$this->Usuario_model->id_usuario = $this->session->userdata('usuario_logado')['id_usuario']; 
                     
		$dados['foto'] = $this->Usuario_model->recuperarFotoPerfil();

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
	

    	$this->OS_model->id_os 			= $id;
        $this->OS_model->responsavel = $this->session->userdata('usuario_logado')['id_usuario'];
        $this->OS_model->equipamento_id = $_POST['equipamento_id'];
        $this->OS_model->numero_OS 		= $_POST['numero_OS'];
        $this->OS_model->cpf_cliente 	= $_POST['cpf_cliente'];
		$this->OS_model->cliente_nome 	= $_POST['cliente_nome'];
		$this->OS_model->cliente_numero_telefone 	= $_POST['cliente_numero_telefone'];
		$this->OS_model->cliente_email 	= $_POST['cliente_email'];

        

        $this->OS_model->update($id);

		//redirect(base_url('index.php/os/editar/' . $id));
		$this->session->set_flashdata('success','Ordem de serviço atualizada com sucesso!');
		redirect(base_url('index.php/OS'));
	}


	//deletar metas
	public function deletar($id){
       // $this->load->model('OS_model');
		$this->OS_model->delete($id);
		$this->session->set_flashdata('success','Ordem de serviço excluída com sucesso!');
        redirect(base_url('index.php/OS'));
	}

	public function view($id){
		$this->Usuario_model->id_usuario = $this->session->userdata('usuario_logado')['id_usuario']; 
                     
		$dados['foto'] = $this->Usuario_model->recuperarFotoPerfil();


		$dados['meta'] = $this->Meta_model->recuperarUm($id);
		$dados['usuario_tem_meta'] = $this->Usuario_tem_meta_model->recuperarUsuariosMeta($id);
		$dados['bolsistas'] = $this->Usuario_model->recuperarNormais();
		$dados['pagina'] = 'Visualização de meta';
		$dados['title'] = 'Visualizar meta';
		return $this->load->view('metas/viewMeta',$dados); 
	}
	
}