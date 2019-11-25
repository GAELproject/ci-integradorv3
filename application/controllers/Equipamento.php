<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipamento extends CI_Controller {
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


		$dados['equipamentos'] = $this->Equipamento_model->recuperar();
		//carregamento dos usuários do sistema
		$dados['usuarios'] = $this->Usuario_model->recuperar();
		$dados['pagina'] = 'Todos os equipamentos';
		$dados ['title'] = 'listagem de todos os equipamentos - gael';
		$this->load->view('equipamentos/equipamentos', $dados);
	}
    public function formAdd(){
		
		$this->Usuario_model->id_usuario = $this->session->userdata('usuario_logado')['id_usuario']; 
                     
		$dados['foto'] = $this->Usuario_model->recuperarFotoPerfil();

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
		$entregue = $_POST['entregue'];
		

		$this->Equipamento_model->equipamento_nome = $equipamento_nome;
		$this->Equipamento_model->numero_serie = $numero_serie;
		$this->Equipamento_model->marca = $marca;
		$this->Equipamento_model->modelo = $modelo;
		$this->Equipamento_model->situacao = $situacao;
		$this->Equipamento_model->entregue = $entregue;
		$this->Equipamento_model->id_responsavel =  $this->session->userdata('usuario_logado')['id_usuario'];

		$insertar = $this->Equipamento_model->inserir();
	
		$this->session->set_flashdata('success','Equipamento cadastrado com sucesso!');
		redirect(base_url().'index.php/equipamento/index/');
				
	}





    public function editar(){
		
        $id = $this->uri->segment(3);
	
		$this->Usuario_model->id_usuario = $this->session->userdata('usuario_logado')['id_usuario']; 
                     
		$dados['foto'] = $this->Usuario_model->recuperarFotoPerfil();

        $dados['title'] = "Edição de equipamentos";
        $dados['pagina'] = "Edição de equipamentos";

		$dados['equipamento'] = $this->Equipamento_model->recuperarUm($id);

        return $this->load->view('equipamentos/editEquipamentos', $dados);
    }
    public function atualizar(){
		
		$this->Equipamento_model->id_equipamento = $_POST['id_equipamento'];
		$this->Equipamento_model->equipamento_nome = $_POST['equipamento_nome'];
		$this->Equipamento_model->numero_serie = $_POST['numero_serie'];
		$this->Equipamento_model->marca = $_POST['marca'];
		$this->Equipamento_model->modelo = $_POST['modelo'];
		$this->Equipamento_model->situacao = $_POST['situacao'];
		$this->Equipamento_model->entregue = $_POST['entregue'];
		$this->Equipamento_model->id_responsavel = $this->session->userdata('usuario_logado')['id_usuario'];
		
       
		$update =  $this->Equipamento_model->update();
		if($update){
			$this->session->set_flashdata('success','Equipamento editado com sucesso!');
			redirect('index.php/equipamento/index');
		}else{
			$this->session->set_flashdata('error','Equipamento não editado!');
			redirect('index.php/equipamento/index');
		}
	}
	//deletar metas
	public function deletar($id){
 
		$OSes = $this->OS_model->recuperar();
		foreach ($OSes as $OS) {
			if($OS->equipamento_id == $id){
				$this->OS_model->delete($OS->id_os);
			}
		}
		$this->Equipamento_realizou_atividade_model->deleteByIdEquipamento($id);	
		$delete  = $this->Equipamento_model->delete($id);
		if($delete){
			$this->session->set_flashdata('success','Equipamento deletado com sucesso!');
			redirect('index.php/equipamento/index');	
		}else{
			$this->session->set_flashdata('error','Equipamento deletado com sucesso!');
			redirect('index.php/equipamento/index');	
		}
		
        
	}
	public function view($id){
		$this->Usuario_model->id_usuario = $this->session->userdata('usuario_logado')['id_usuario']; 
                     
		$dados['foto'] = $this->Usuario_model->recuperarFotoPerfil();

		$dados['equipamento'] = $this->Equipamento_model->recuperarUm($id);
		
		$dados['pagina'] = 'Visualização de equipamentos';
		$dados['title'] = 'Visualizar equipamento';
		return $this->load->view('equipamentos/viewEquipamentos',$dados); 
	}

	public function indexDoacoes(){
		$this->Usuario_model->id_usuario = $this->session->userdata('usuario_logado')['id_usuario']; 
                     
		$dados['foto'] = $this->Usuario_model->recuperarFotoPerfil();
		$dados['pagina'] = 'Listagem de doações';
		$dados['title'] = 'Cadastrar doação';
		return $this->load->view('doacoes_laudo/index', $dados);
	}

	
}
