<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Meta extends CI_Controller {

	public function index(){
		$coisas['usuarios'] = $this->Usuario_model->recuperar();

		$coisas['metas'] = $this->Meta_model->recuperar();
		$coisas['usuario_tem_meta'] = $this->Usuario_tem_meta_model->recuperar();

		$coisas['title']  = 'Listagem de metas';
        $coisas['pagina'] = 'Listagem de metas';
		
		$coisas ['title'] = 'listagem das metas - gael';
		$this->load->view('metas', $coisas);
	}

	public function salvar(){

		//$this->load->model('Meta_model');
		$titulo = $_POST['titulo'];
		$descricao = $_POST['descricao'];
		$turno = $_POST['turno'];		
		$data_prazo_finalizacao = $_POST['data_prazo_finalizacao'];
		$data_prazo_finalizacao = implode("-", array_reverse(explode("/", $data_prazo_finalizacao)));
		$data_finalizacao = $_POST['data_finalizacao'];
		$data_finalizacao = implode("-", array_reverse(explode("/", $data_finalizacao)));
		$situacao_final = $_POST['situacao_final'];
		
		$criador_id = $_POST['criador_id'];		
		$id_usuarios = $_POST['id_usuario'];
	
		

		$this->Meta_model->titulo = $titulo;
		$this->Meta_model->descricao = $descricao;
		$this->Meta_model->data_prazo_finalizacao = $data_prazo_finalizacao;
		$this->Meta_model->data_finalizacao = $data_finalizacao;
		$this->Meta_model->situacao = $situacao_final;
		$this->Meta_model->turno = $turno;
		$this->Meta_model->id_criador = $criador_id;
		$insertar = $this->Meta_model->inserir();



		if($insertar){
			$id_meta_id = $this->Usuario_tem_meta_model->getIdMeta($titulo, $criador_id);
			$meta_id = '';

			if (!empty($id_meta_id)) {
				foreach ($id_meta_id as $meta) {
					$meta_id = $meta['id_meta'];
				}
					foreach ($id_usuarios as $user) {
						$this->Usuario_tem_meta_model->meta_id = $meta_id;
						$this->Usuario_tem_meta_model->usuario_id = $user;
						$this->Usuario_tem_meta_model->inserir();
					}
				
			}else{
				//se o array estiver vazio
				$coisas['title'] = 'Gerenciar meta';
				$coisas['pagina'] = 'Gerenciar meta';
				echo "tá entrando";
				//retorna apenas os usuários que são adm
				$coisas['usuarios_adm'] = $this->Usuario_model->recuperarAdm();
				//retorna apenas usuários do tipo 1, isto é, administradores

				$coisas['usuarios_comuns'] = $this->Usuario_model->recuperarNormais();
					//retorna apenas não administradores
				$coisas ['error'] = 'meta não inserida na base de dados';
				return $this->load->view('gerenciar_metas',$coisas);
			}
			
		$coisas['usuarios'] = $this->Usuario_model->recuperar();

		$coisas['metas'] = $this->Meta_model->recuperar();
		$coisas['usuario_tem_meta'] = $this->Usuario_tem_meta_model->recuperar();
			$coisas['pagina'] = 'Listagem de metas';
			$coisas['title'] = 'Listagem de metas';
			$coisas['success'] = 'Meta inserida com sucesso!';
			
			return $this->load->view('metas', $coisas);
		}else{
			$coisas ['error'] = 'meta não inserida na base de dados';
			return $this->load->view('home',$coisas);
		}
	}
    public function deletar(){
        //$coisas ['pagina'] = 'Listagem de usuário';
        //$coisas ['title'] = 'listagem de usuário - gael';
		$id = $this->uri->segment(3);
		$deletar = false;
		$id_row = '';
		$usuario_tem_meta = $this->Usuario_tem_meta_model->recuperar();
		foreach ($usuario_tem_meta as $utm) {
			if($utm->meta_id == $id ){
				$deletar = true;
				$id_row = $utm->id_usuario_tem_meta;
			}
		}
		//$this->Usuario_tem_meta_model->delete($id_row);
		if ($this->Meta_model->delete($id)) {
			$this->session->set_flashdata('mensagem', "<div class='alert alert-warning'> Produto deletado com sucesso</div>");
			redirect('index.php/gael/	');
		} else {
			$this->session->set_flashdata('mensagem', "<div class='alert alert-danger'> Erro ao deletar Produto</div>");
		}
		
		//$this->Meta_model->delete($id);
        redirect('index.php/meta/index');
    }


    public function editar(){
        $this->load->model('Meta_model');

        $id = $this->uri->segment(3);


        $dados['title'] = "Ediçãode metas";
        $dados['pagina'] = "Edição de metas";

        $dados['meta'] = $this->Meta_model->recuperarUm($id);

        return $this->load->view('editMeta', $dados);
    }
    public function atualizar(){
        $this->load->model('Usuario_model');
        $this->Meta_model->titulo= $_POST['id_usuario'];
        $this->Meta_model->descricao = $_POST['nome'];
        $this->Meta_model->data_criacao= $_POST['data_criacao'];
        $this->Meta_model->data_prazo_finalizacao = $_POST['data_prazo_finalizacao'];
        $this->Meta_model->data_de_finalizacao = $_POST['data_de_finalizacao'];
        $this->Meta_model->situacao_final = $_POST['situacao_final'];

        $this->Meta_model->update();
        redirect('index.php/meta/index');
    }
}