<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Realizar_atividade_equipamento extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		
		if(!$this->session->userdata('usuario_logado')){
			redirect(base_url().'index.php/login/index');
		}
	}


	public function index()
    {
		$dados['equipamento_realizou_atividades'] = $this->Equipamento_realizou_atividade_model->recuperar();
		$dados['atividades'] = $this->Atividade_model->recuperar();
		$dados['equipamentos'] = $this->Equipamento_model->recuperar();
		$dados['pagina'] = 'Listagem de atividades';
		$dados['title'] = 'Listagem de atividades';
		$dados['success'] = 'Atividade inserida com sucesso!';
		$this->load->view('equipamento_realizou_atividade/homeAtividadeEquipamento', $dados);
	}
    //função que chama a view de inserir nova atividade
	public function add(){

	    $dados['equipamentos'] = $this->Equipamento_model->recuperar();
        $dados['title']  = 'Cadastramento de atividade em equipamento';
        $dados['pagina'] = 'Cadastramento das atividades';
	    return $this->load->view('equipamento_realizou_atividade/realizar_atividade',$dados);
    }

	public function salvar(){

		//$this->load->model('Meta_model');
        $descricao_servico_realizado = $_POST['descricao_servico_realizado'];
		$qtd_item_substituido = $_POST['qtd_item_substituido'];
		$nome_item_substituido = $_POST['nome_item_substituido'];
		$situacao_final = $_POST['situacao_final'];
        $atividade_defeito = $_POST['atividade_defeito'];
		$observacoes = $_POST['observacoes'];
        //equipamento de referência
        $equipamento_id_equipamento = $_POST['equipamento_id_equipamento'];
        $this->Atividade_model->descricao_servico_realizado = $descricao_servico_realizado;
		$this->Atividade_model->nome_item_substituido = $nome_item_substituido;
        $this->Atividade_model->qtd_item_substituido = $qtd_item_substituido;
        $this->Atividade_model->situacao_final = $situacao_final;
        $this->Atividade_model->atividade_defeito = $atividade_defeito;
        $this->Atividade_model->observacoes = $observacoes;
		$insertar['id_atividade'] = $this->Atividade_model->inserir();
		if($insertar != null){
			
			$this->Equipamento_realizou_atividade_model->equipamento_id_equipamento = $equipamento_id_equipamento;
			$this->Equipamento_realizou_atividade_model->atividade_id_atividade = $insertar['id_atividade'];

			$this->Equipamento_realizou_atividade_model->inserir();

			$this->session->set_flashdata('success','Atividade inserida com sucesso!');

			redirect(base_url().'index.php/realizar_atividade_equipamento/index');		
		}else{
			$this->session->set_flashdata('error','Erro ao cadastrar atividade!');
			return $this->load->view('home',$dados);
		}

	}





    public function editar($id){
		   
		$dados['title'] = "Ediçãode atividades em equipamento";
        $dados['pagina'] = "Editar atividade";
        $era = $this->Equipamento_realizou_atividade_model->recuperarOne($id);
		$id_atividade = $era->atividade_id_atividade;
		$id_atividade = intval($id_atividade);
		//recuperando o id do equipamento
		$id_equipamento = $era->equipamento_id_equipamento;
		

		$dados['era'] = $era;
		$dados['id_equipamento'] = $id_equipamento = intval($id_equipamento);
		$dados['equipamento'] = $this->Equipamento_model->recuperarUm($id_equipamento);
		$dados['id_atividade'] = $id_atividade;
		$dados['id_equipamento_realizou_atividade'] = $id;
		$dados['equipamentos'] = $this->Equipamento_model->recuperar();
		$dados['atividade'] = $this->Atividade_model->recuperarUm($id_atividade);
		
		
		
        return $this->load->view('equipamento_realizou_atividade/editarRealizarEquipamentos', $dados);
    }
    public function atualizar(){
	//	var_dump($_POST);
	//	exit();
		$this->Equipamento_realizou_atividade_model->id_equipamento_realizou_atividade = $_POST['id_equipamento_realizou_atividade'];
		$this->Equipamento_realizou_atividade_model->equipamento_id_equipamento = $_POST['equipamento_id_equipamento'];
		$this->Equipamento_realizou_atividade_model->update();		
		
		$this->Atividade_model->id_atividade = $_POST['id_atividade'];

		$this->Atividade_model->descricao_servico_realizado = $_POST['descricao_servico_realizado'];
		$this->Atividade_model->nome_item_substituido = $_POST['nome_item_substituido'];
		$this->Atividade_model->qtd_item_substituido = $_POST['qtd_item_substituido'];
		$this->Atividade_model->situacao_final = $_POST['situacao_final'];
		$this->Atividade_model->atividade_defeito = $_POST['atividade_defeito'];
		$this->Atividade_model->observacoes = $_POST['observacoes'];
		$this->Atividade_model->update();
		
		$this->session->set_flashdata('success','Atividade atualizada com sucesso!');
        redirect('index.php/realizar_atividade_equipamento/index');
	}
	//deletar metas
	public function deletar($id){
		$era = $this->Equipamento_realizou_atividade_model->recuperarOne($id);
		$id_atividade = $era->atividade_id_atividade;
		$this->Equipamento_realizou_atividade_model->delete($id);
		$this->Atividade_model->delete($id_atividade);
		
		$this->session->set_flashdata('success','Atividade excluída com sucesso!');
		redirect(base_url().'index.php/realizar_atividade_equipamento/index');		
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