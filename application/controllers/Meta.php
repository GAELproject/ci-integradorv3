<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Meta extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		
		if(!$this->session->userdata('usuario_logado')){
			redirect(base_url().'index.php/login/index');
		}
	}


	public function index(){
		if($this->session->userdata('usuario_logado')['usuario_tipo']== "1"){
			$dados['usuarios'] = $this->Usuario_model->recuperar();
			$id = $this->session->userdata('usuario_logado')['id_usuario'];
			
			$dados['metas'] = $this->Meta_model->myMetas($id);
			$dados['usuario_tem_meta'] = $this->Usuario_tem_meta_model->recuperar();

			$dados['title']  = 'Listagem de metas';
			$dados['pagina'] = 'Listagem de metas';
			
			$dados ['title'] = 'listagem das metas - gael';
			$this->load->view('metas', $dados);
		}else{
			//caso não seja, é lançada uma exceção
			redirect('index.php/errors/noPermissao');
		}
	}

	public function salvar(){


		if($this->session->userdata('usuario_logado')['usuario_tipo']== "1"){

		$titulo = $_POST['titulo'];
		$descricao = $_POST['descricao'];
		$turno = $_POST['turno'];		
		$data_prazo_finalizacao = $_POST['data_prazo_finalizacao'];
		$data_prazo_finalizacao = implode("-", array_reverse(explode("/", $data_prazo_finalizacao)));
		$data_finalizacao = $_POST['data_finalizacao'];
		$data_finalizacao = implode("-", array_reverse(explode("/", $data_finalizacao)));
		$situacao_final = $_POST['situacao_final'];
		$id_usuarios = $_POST['id_usuarios'];
	

		$criador_id = $this->session->userdata('usuario_logado')['id_usuario'];		

		
		$this->Meta_model->titulo = $titulo;
		$this->Meta_model->descricao = $descricao;
		
		$this->Meta_model->data_prazo_finalizacao = $data_prazo_finalizacao;
		$this->Meta_model->data_finalizacao = $data_finalizacao;
		$this->Meta_model->situacao = $situacao_final;
		$this->Meta_model->turno = $turno;
		$this->Meta_model->id_criador = $criador_id;
		$insertar = $this->Meta_model->inserir();
	
		

		if(!is_null($insertar)){
		
			
			//$id_meta_id = $this->Usuario_tem_meta_model->getIdMeta($titulo, $criador_id);
					$meta_id = $insertar;

					
					if(!empty($id_usuarios)){
						foreach ($id_usuarios as $user) {
							$this->Usuario_tem_meta_model->meta_id = $meta_id;
							$this->Usuario_tem_meta_model->usuario_id = $user;
							$this->Usuario_tem_meta_model->inserir();
						}
					}
					
					$this->session->set_flashdata('success','Meta inserida com sucesso!');
					redirect(base_url().'index.php/gael/metas/');
				
			}else{
						
				$this->session->set_flashdata('error','Meta inserida com sucesso!');
				redirect(base_url().'index.php/gael/metas/');

			}
		}else{
			//caso não seja, é lançada uma exceção
			redirect('index.php/errors/noPermissao');
		}
	
	
	}





    public function editar($id){
		if($this->session->userdata('usuario_logado')['usuario_tipo']== "1"){
		
			$dados['title'] = "Ediçãode metas";
			$dados['pagina'] = "Edição de metas";

			$dados['meta'] = $this->Meta_model->recuperarUm($id);
			//var_dump($dados['meta']);
			// exit();
			$dados['usuario_tem_meta'] = $this->Usuario_tem_meta_model->recuperarUsuariosMeta($id);
			$dados['bolsistasall'] = $this->Usuario_model->recuperarNormais();
			$dados['adms'] = $this->Usuario_model->recuperarAdms();

			return $this->load->view('metas/editMeta', $dados);
		}else{
			//caso não seja, é lançada uma exceção
			redirect('index.php/errors/noPermissao');
		}

    }
    public function atualizar(){
		if($this->session->userdata('usuario_logado')['usuario_tipo']== "1"){
		
		$this->Meta_model->id_meta = $_POST['id_meta'];
		
		

        $this->Meta_model->titulo = $_POST['titulo'];
		$this->Meta_model->descricao = $_POST['descricao'];
		$this->Meta_model->turno = $_POST['turno'];
		$this->Meta_model->data_criacao = $_POST['data_criacao'];

        //$this->Meta_model->data_criacao = $_POST['data_criacao'];
        $this->Meta_model->data_prazo_finalizacao = $_POST['data_prazo_finalizacao'];
        $this->Meta_model->data_finalizacao = $_POST['data_finalizacao'];
		$this->Meta_model->situacao = $_POST['situacao'];
		$this->Meta_model->id_criador = $this->session->userdata('usuario_logado')['id_usuario'];
		$this->Meta_model->update();
		
		
		$id_meta = $_POST['id_meta'];
		
		//usuarios que vieram marcados
		$arrayUsuarios = $_POST['id_usuarios'];
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

		redirect('index.php/meta/index');
		}else{
			//caso não seja, é lançada uma exceção
			redirect('index.php/errors/noPermissao');
		}

	}
	//deletar metas
	public function deletar(){
		if($this->session->userdata('usuario_logado')['usuario_tipo']== "1"){
		$id = $this->uri->segment(3);
		$usuarios_tem_meta = $this->Usuario_tem_meta_model->recuperarUsuariosMeta($id);
		$deleteone = $this->Usuario_tem_meta_model->delete($id);

			$this->Meta_model->delete($id);
			$this->session->set_flashdata('success','Meta excluída com sucesso!');
			redirect('index.php/meta/index');
		}else{
			//caso não seja, é lançada uma exceção
			redirect('index.php/errors/noPermissao');
		}
	}
	public function view($id){
		if($this->session->userdata('usuario_logado')['usuario_tipo']== "1"){
			$dados['meta'] = $this->Meta_model->recuperarUm($id);
			
			$dados['usuarios'] = $this->Usuario_model->recuperar();
			$dados['usuario_tem_meta'] = $this->Usuario_tem_meta_model->recuperarUsuariosMeta($id);
			$dados['bolsistas'] = $this->Usuario_model->recuperarNormais();
			$dados['pagina'] = 'Visualização de meta';
			$dados['title'] = 'Visualizar meta';
		return $this->load->view('metas/viewMeta',$dados); 
		}else{
			//caso não seja, é lançada uma exceção
			redirect('index.php/errors/noPermissao');
		}
	}
	
}