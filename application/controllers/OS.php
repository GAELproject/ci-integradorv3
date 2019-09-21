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
		$data_criacao = implode("-", array_reverse(explode("/", $_POST['data_criacao'])));
		$data_criacao = $_POST['data_criacao'];
		//Carregar a model
		$this->load->model('OS_model');
		//Informando os dados
		$this->OS_model->responsavel = $responsavel;
 		$this->OS_model->equipamento_id = $equipamento_id;
		$this->OS_model->numero_OS = $numero_OS;
		$this->OS_model->data_criacao = $data_criacao;
		$this->OS_model->cpf_cliente = $cpf_cliente;
		//Inserir
		$this->OS_model->inserir();
		$dados['title'] = 'Gerenciar Ordem de Serviços';
		$dados['pagina'] = 'Gerenciar Ordem de Serviços';
		$dados['Alert'] = 'Ordem de Serviço cadastrada com sucesso!!!';
		redirect(base_url('index.php/os/formcadastrar'));
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
	public function deletar(){
        //$coisas ['pagina'] = 'Listagem de usuário';
		//$coisas ['title'] = 'listagem de usuário - gael';
		$id = $this->uri->segment(3);

		$usuarios_tem_meta = $this->Usuario_tem_meta_model->recuperarUsuariosMeta($id);
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