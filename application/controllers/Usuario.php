<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function index(){
		$this->load->model('Usuario_model');

		$coisas['usuarios'] = $this->Usuario_model->recuperar();
		$coisas ['title'] = 'listagem de usuário - gael';
        $coisas ['pagina'] = 'Listagem de usuários';
		$this->load->view('user', $coisas);
	}

	public function salvar()
    {

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

        if ($insertar) {
            $coisas['usuarios'] = $this->Usuario_model->recuperar();
            $coisas['pagina'] = 'Listagem de usuários';
            $coisas['title'] = 'Listagem de usuários';
            $coisas['sucess'] = 'Usuário inserido com sucesso!';

            return $this->load->view('user', $coisas);
        } else {
            $coisas ['error'] = 'usuário não inserido na base de dados';
            return $this->load->view('home');
        }
    }
		public function deletar(){
            //$coisas ['pagina'] = 'Listagem de usuário';
            //$coisas ['title'] = 'listagem de usuário - gael';
            $this->load->model('Usuario_model');
            $id = $this->uri->segment(3);
            $this->Usuario_model->delete($id);
            redirect('index.php/usuario/index');
        }
        public function editar(){
	        $this->load->model('Usuario_model');
            $this->load->model('Meta_model');
	        $id = $this->uri->segment(3);
	        $usuario = $this->Usuario_model->recuperarUm($id);

            $dados['title'] = "Edição de usuarios";
            $dados['pagina'] = "Edição de usuarios";
            $dados['usuarios'] = $this->Usuario_model->recuperarUm($id);
            $dados['meta'] = $this->Meta_model->recuperarUm($usuario->meta_id_meta);
            $dados['metas'] = $this->Meta_model->recuperar();


	        return $this->load->view('editUser', $dados);
        }
        public function atualizar(){
            $this->load->model('Usuario_model');
            $this->Usuario_model->id_usuario = $_POST['id_usuario'];
            $this->Usuario_model->nome = $_POST['nome'];
            $this->Usuario_model->tipo = $_POST['tipo'];
            $this->Usuario_model->login = $_POST['login'];
            $this->Usuario_model->senha = $_POST['senha'];
            $this->Usuario_model->imagem = $_POST['imagem'];
            $this->Usuario_model->email = $_POST['email'];;
            $this->Usuario_model->cpf = $_POST['cpf'];
            $this->Usuario_model->turno = $_POST['turno'];
            $this->Usuario_model->usuario_bolsista = $_POST['usuario_bolsista'];
            $this->Usuario_model->meta_id_meta = $_POST['meta_id_meta'];
            $this->Usuario_model->update();
            redirect('index.php/usuario/index');
        }
}