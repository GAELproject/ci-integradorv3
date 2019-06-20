<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Meta extends CI_Controller {

	public function index(){
		$this->load->model('Meta_model');
		$coisas['usuarios'] = $this->Usuario_model->recuperar();
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
}