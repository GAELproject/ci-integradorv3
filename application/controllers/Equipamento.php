<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipamento extends CI_Controller {

	public function index(){
        $coisas['equipamentos'] = $this->Equipamento_model->recuperar();

		
        $coisas['pagina'] = 'Todos os equipamentos';
		
		$coisas ['title'] = 'listagem de todos os equipamentos - gael';
		$this->load->view('equipamentos/equipamentos', $coisas);
	}
    public function formAdd(){
        
        $dados['pagina'] = 'Adicionar de equipamento';
		
		$dados ['title'] = 'Adição de equipamentos';
        return $this->load->view('gerenciar_equipamentos', $dados);
    }
	public function salvar(){

		//$this->load->model('Meta_model');
		$equipamento_nome = $_POST['equipamento_nome'];
		$numero_serie = $_POST['numero_serie'];
		$marca = $_POST['marca'];		
		$modelo = $_POST['modelo'];
		$situacao = $_POST['situacao'];
		
		

		$this->Equipamento_model->equipamento_nome = $equipamento_nome;
		$this->Equipamento_model->numero_serie = $numero_serie;
		$this->Equipamento_model->marca = $marca;
		$this->Equipamento_model->modelo = $modelo;
		$this->Equipamento_model->situacao = $situacao;


		$insertar = $this->Equipamento_model->inserir();
		
		$dados['equipamentos'] = $this->Equipamento_model->recuperar();

		
		
		$dados['pagina'] = 'Listagem de equipamentos';
		$dados['title'] = 'Listagem de equipamentos';
		$dados['success'] = 'Equipamento cadastrado com sucesso!';
			
		return $this->load->view('equipamentos/equipamentos', $dados);
	}





    public function editar(){
		
        $id = $this->uri->segment(3);
		
        $dados['title'] = "Edição de equipamentos";
        $dados['pagina'] = "Edição de equipamentos";

		$dados['equipamento'] = $this->Equipamento_model->recuperarUm($id);

        return $this->load->view('equipamentos/editEquipamentos', $dados);
    }
    public function atualizar(){
		//($_POST);
		//exit();
		$this->Equipamento_model->id_equipamento = $_POST['id_equipamento'];
		$this->Equipamento_model->equipamento_nome = $_POST['equipamento_nome'];
		$this->Equipamento_model->numero_serie = $_POST['numero_serie'];
		$this->Equipamento_model->marca = $_POST['marca'];
		$this->Equipamento_model->modelo = $_POST['modelo'];
		$this->Equipamento_model->situacao = $_POST['situacao'];
	
       
		$this->Equipamento_model->update();
		
		
		$id_equipamento = $_POST['id_equipamento'];
		
		

		
        redirect('index.php/equipamento/index');
	}
	//deletar metas
	public function deletar($id){
        
		

		$this->Equipamento_realizou_atividade_model->deleteByIdEquipamento($id);	
		 $this->Equipamento_model->delete($id);
		 	

		
        redirect('index.php/equipamento/index',"refresh");
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
