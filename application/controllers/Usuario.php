<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function index(){
		$this->load->model('Usuario_model');
		var_dump($dados['usuarios'] = $this->Usuario_model->recuperar());
		exit();
		$coisas ['title'] = 'listagem de usuário - gael';
		$this->load->view('user', $coisas, $dados);
	}

	public function salvar(){

		$this->load->model('Usuario_model');
		$nome = $_POST['nome'];
		$tipo = $_POST['tipo'];
		$login = $_POST['login'];
		$senha = $_POST['senha'];
		$imagem = $_POST['imagem'];
		$email = $_POST['email'];
		$cpf = $_POST['cpf'];
		$turno = $_POST['turno'];
		$usuario_bolsista = $_POST['usuario_bolsista']; 
		$meta_id_meta = $_POST['meta_id_meta']; 
		$this->Usuario_model->nome = $nome;
		$this->Usuario_model->tipo = $tipo;
		$this->Usuario_model->login = $login;
		$this->Usuario_model->senha = $senha;
		$this->Usuario_model->imagem = $imagem;
		$this->Usuario_model->email = $email;
		$this->Usuario_model->cpf = $cpf;
		$this->Usuario_model->turno = $turno;
		$this->Usuario_model->usuario_bolsista = $usuario_bolsista;
		$this->Usuario_model->meta_id_meta = $meta_id_meta;
		$insertar = $this->Usuario_model->inserir();

		if($insertar){
			$coisas['usuarios'] = $this->Usuario_model->recuperar();
			$coisas['pagina'] = 'Listagem de usuários';
			$coisas['title'] = 'Listagem de usuários';
			$coisas['sucess'] = 'Usuário inserido com sucesso!';

			return $this->load->view('user', $coisas);
		}else{
			$coisas ['error'] = 'usuário não inserido na base de dados';
			return $this->load->view('home');
		}
	}
}