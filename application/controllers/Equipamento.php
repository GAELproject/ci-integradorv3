<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipamento extends CI_Controller {

	public function index(){
        $coisas['equipamentos'] = $this->Equipamento_model->recuperar();

		
        $coisas['pagina'] = 'Listagem de equipamentos';
		
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
		
        $dados['title'] = "Ediçãode metas";
        $dados['pagina'] = "Edição de metas";

		$dados['meta'] = $this->Meta_model->recuperarUm($id);
		$dados['usuario_tem_meta'] = $this->Usuario_tem_meta_model->recuperarUsuariosMeta($id);
		$dados['bolsistasall'] = $this->Usuario_model->recuperarNormais();
		$dados['adms'] = $this->Usuario_model->recuperarAdms();

        return $this->load->view('metas/editMeta', $dados);
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
	public function deletar($id){
        
		

		
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