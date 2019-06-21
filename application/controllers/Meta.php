<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Meta extends CI_Controller {

	public function index(){
		$this->load->model('Meta_model');
		$coisas['title']  = 'Listagem de metas';
        $coisas['pagina'] = 'Listagem de metas';
		$coisas['metas'] = $this->Meta_model->recuperar();
		$coisas ['title'] = 'listagem das metas - gael';
		$this->load->view('metas', $coisas);
	}

	public function salvar(){

		$this->load->model('Meta_model');
		$titulo = $_POST['titulo'];
		$descricao = $_POST['descricao'];
		$data_prazo_finalizacao = $_POST['data_prazo_finalizacao'];
		$data_prazo_finalizacao = implode("-", array_reverse(explode("/", $data_prazo_finalizacao)));
		$data_de_finalizacao = $_POST['data_de_finalizacao'];
		$situacao_final = $_POST['situacao_final'];
		$this->Meta_model->titulo = $titulo;
		$this->Meta_model->descricao = $descricao;
		$this->Meta_model->data_prazo_finalizacao = $data_prazo_finalizacao;
		$this->Meta_model->data_de_finalizacao = $data_de_finalizacao;
		$this->Meta_model->situacao_final = $situacao_final;
		

		$insertar = $this->Meta_model->inserir();

		if($insertar){
			$coisas['metas'] = $this->Meta_model->recuperar();
			$coisas['pagina'] = 'Listagem de metas';
			$coisas['title'] = 'Listagem de metas';
			$coisas['sucess'] = 'Meta inserida com sucesso!';

			return $this->load->view('metas', $coisas);
		}else{
			$coisas ['error'] = 'meta não inserida na base de dados';
			return $this->load->view('home');
		}
	}
    public function deletar(){
        //$coisas ['pagina'] = 'Listagem de usuário';
        //$coisas ['title'] = 'listagem de usuário - gael';
        $this->load->model('Meta_model');
        $id = $this->uri->segment(3);
        $this->Meta_model->delete($id);
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