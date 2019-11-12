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


			$dados['equipamento_realizou_atividades'] = $this->Equipamento_realizou_atividade_model->recuperar();
			$dados['atividades'] = $this->Atividade_model->recuperar();
			$dados['equipamentos'] = $this->Equipamento_model->recuperar();
			
			
			$dados['pagina'] = 'Listagem de atividades';
			$dados['title'] = 'Listagem de atividades';
			$dados['success'] = 'Atividade inserida com sucesso!';
				
			return $this->load->view('equipamento_realizou_atividade/homeAtividadeEquipamento', $dados);
		}else{
			$dados ['error'] = 'atividade não inserida na base de dados';
			return $this->load->view('home',$dados);
		}

	}





    public function editar(){
		
        $id = $this->uri->segment(3);
		
        $dados['title'] = "Ediçãode metas";
        $dados['pagina'] = "Edição de metas";
        //$this->load->model('Equipamento_realizou_atividade_model');

		 
		 $era = $this->Equipamento_realizou_atividade_model->recuperarOne($id);
		$id_atividade = $era->atividade_id_atividade;
		$id_atividade = intval($id_atividade);
		$id_equipamento = $era->equipamento_id_equipamento;
		$dados['id_equipamento'] = $id_equipamento = intval($id_equipamento);
		 //$era['idatividade_id_atividade'];
		$dados['atividade'] = $this->Atividade_model->recuperarUm($id_atividade);

		
		
        return $this->load->view('equipamento_realizou_atividade/editarRealizarEquipamentos', $dados);
    }
    public function atualizar(){
		//($_POST);
		//exit();
		$this->Meta_model->id_meta = $_POST['id_meta'];
		
		

        $this->Meta_model->titulo = $_POST['titulo'];
		$this->Meta_model->descricao = $_POST['descricao'];
		$this->Meta_model->turno = $_POST['turno'];
		$this->Meta_model->data_criacao = $_POST['data_criacao'];

        //$this->Meta_model->data_criacao = $_POST['data_criacao'];
        $this->Meta_model->data_prazo_finalizacao = $_POST['data_prazo_finalizacao'];
        $this->Meta_model->data_finalizacao = $_POST['data_finalizacao'];
		$this->Meta_model->situacao = $_POST['situacao'];
		$this->Meta_model->id_criador = $_POST['id_criador'];
		$this->Meta_model->update();
		
		
		$id_meta = $_POST['id_meta'];
		
		//usuarios que vieram marcados
		$arrayUsuarios = $_POST['id_usuario'];
		//todos os vínculos dos usuários com essa meta
		$usuarios_tem_meta = $this->Usuario_tem_meta_model->recuperarUsuariosMeta($id_meta);
				

		
		//deletar todos os campos que estão ligados com esssa meta	
		$this->Usuario_tem_meta_model->delete($id_meta);
		//inserindo todos que estão vindo
		if(!empty($arrayUsuarios)){
			foreach ($arrayUsuarios as $idarray) {
				$this->Usuario_tem_meta_model->usuario_id  = $idarray;
				$this->Usuario_tem_meta_model->meta_id  = $id_meta;
				$this->Usuario_tem_meta_model->inserir();
			}	
		}


		/*
		if(!empty($usuarios_tem_meta)){	
			foreach ($usuarios_tem_meta as $utm) {
				foreach ($arrayUsuarios as $idarray) {
					if($idarray == $utm->usuario_id){
						
					}else{
						$this->Usuario_tem_meta_model->usuario_id  = $idarray;
						$this->Usuario_tem_meta_model->meta_id  = $id_meta;
						$this->Usuario_tem_meta_model->inserir();
					}
				}
			}
		}	
		*/
        redirect('index.php/meta/index');
	}
	//deletar metas
	public function deletar(){
        //$coisas ['pagina'] = 'Listagem de usuário';
		//$coisas ['title'] = 'listagem de usuário - gael';
		$id = $this->uri->segment(3);

		$usuarios_tem_meta = $this->Equipamento_realziou_atividade_model->recuperarUsuariosMeta($id);
		$deleteone = $this->Usuario_tem_meta_model->delete($id);

		/*
		$deletar = false;
		$id_row = '';
	
		foreach ($usuario_tem_meta as $utm) {
			if($utm->meta_id == $id ){
				$deletar = true;
				$id_row = $utm->id_usuario_tem_meta;
			}
		}
		*/
		
		 
		
		//$this->Usuario_tem_meta_model->delete($id_row);
		$this->Meta_model->delete($id);

			$coisas['usuarios'] = $this->Usuario_model->recuperar();
			$coisas['metas'] = $this->Meta_model->recuperar();
			$coisas['usuario_tem_meta'] = $this->Usuario_tem_meta_model->recuperar();
			$coisas['pagina'] = 'Listagem de metas';
			$coisas['title'] = 'Listagem de metas';
			$coisas['success'] = 'Meta excluída com sucesso!';
			
			return $this->load->view('metas', $coisas);
			/*
		} else {
			$coisas['usuarios'] = $this->Usuario_model->recuperar();
			$coisas['metas'] = $this->Meta_model->recuperar();
			$coisas['usuario_tem_meta'] = $this->Usuario_tem_meta_model->recuperar();
			$coisas['pagina'] = 'Listagem de metas';
			$coisas['title'] = 'Listagem de metas';
			$coisas['error'] = 'Meta não excluída!';
			
			return $this->load->view('metas',$coisas);
		}*/
		
		//$this->Meta_model->delete($id);
        //redirect('index.php/meta/index');
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