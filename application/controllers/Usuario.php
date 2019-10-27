<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		
		if(!$this->session->userdata('usuario_logado')){
			redirect(base_url().'index.php/login/index');
		}
	}


	public function index(){
    //	$this->load->model('Usuario_model');
      
        if($this->session->userdata('usuario_logado')['usuario_tipo']== "1"){
            $dados['usuarios'] = $this->Usuario_model->recuperar();
            $dados ['title'] = 'listagem de usuário - gael';
            $dados ['pagina'] = 'Listagem de usuários';
            $this->load->view('users/user', $dados);
        }else{
            redirect('index.php/errors/noPermissao');
        }
		
	}

	public function salvar()
    {
        //verificação de se é administrador
        if($this->session->userdata('usuario_logado')['usuario_tipo']== "1"){
      
        $u_nome = $_POST['u_nome'];
        $u_email = $_POST['u_email'];
        $senha = $_POST['senha'];
        $cpf = $_POST['cpf'];
        $usuario_tipo = $_POST['usuario_tipo'];
        $usuario_bolsista = $_POST['usuario_bolsista'];
        $turno_atividades = $_POST['turno_atividades'];
        
        //$meta_id_meta = $_POST['meta_id_meta'];
        $this->Usuario_model->u_nome = $u_nome;
        $this->Usuario_model->u_email = $u_email;
        $this->Usuario_model->senha = $senha;
        $this->Usuario_model->cpf = $cpf;
        $this->Usuario_model->usuario_tipo = $usuario_tipo;
        $this->Usuario_model->usuario_bolsista = $usuario_bolsista;
        $this->Usuario_model->turno_atividades = $turno_atividades; 
        //$this->Usuario_model->meta_id_meta = $meta_id_meta;
        $insertar = $this->Usuario_model->inserir();

        if ($insertar) {
            

            return redirect('index.php/usuario/index');
        } else {
            $coisas ['error'] = 'usuário não inserido na base de dados';
            return $this->load->view('home');
        }
        }else{
            //caso não seja, é lançada uma exceção
            redirect('index.php/errors/noPermissao');
        }
    }
		public function deletar(){
            if($this->session->userdata('usuario_logado')['usuario_tipo']== "1"){
            $this->load->model('Usuario_model');
            $id = $this->uri->segment(3);
            $this->Usuario_model->delete($id);
            redirect('index.php/usuario/index');
            }else{
                //caso não seja, é lançada uma exceção
                redirect('index.php/errors/noPermissao');
            }
        }

        public function editar(){
            if($this->session->userdata('usuario_logado')['usuario_tipo']== "1"){
	        $this->load->model('Usuario_model');
            $this->load->model('Meta_model');
            $id = $this->uri->segment(3);
            $dados['id_usuario'] = $id;
            $dados['title'] = "Edição de usuarios";
            $dados['pagina'] = "Edição de usuarios";
            $dados['usuarios'] = $this->Usuario_model->recuperarUm($id);
           // $dados['meta'] = $this->Meta_model->recuperarUm($usuario->meta_id_meta);
            //$dados['metas'] = $this->Meta_model->recuperar();
            return $this->load->view('editUser', $dados);
            }else{
                //caso não seja, é lançada uma exceção
                redirect('index.php/errors/noPermissao');
            }
        }   

        public function atualizar(){
            

            if($this->session->userdata('usuario_logado')['usuario_tipo']== "1"){
            $this->Usuario_model->id_usuario = $_POST['id_usuario'];
            $this->Usuario_model->u_nome = $_POST['u_nome'];

            $this->Usuario_model->usuario_tipo = $_POST['usuario_tipo'];
            $this->Usuario_model->senha = $_POST['senha'];
            $this->Usuario_model->u_email = $_POST['u_email'];;
            $this->Usuario_model->cpf = $_POST['cpf'];
            $this->Usuario_model->turno_atividades = $_POST['turno_atividades'];
            $this->Usuario_model->usuario_bolsista = $_POST['usuario_bolsista'];
            $this->Usuario_model->update();
            redirect('index.php/usuario/index');
            }else{
                //caso não seja, é lançada uma exceção
                redirect('index.php/errors/noPermissao');
            }
        }

        
	public function view(){
        //verificação de se o usuário é administrador
        if($this->session->userdata('usuario_logado')['usuario_tipo']== "1"){
        $this->load->model('Usuario_model');
        $this->load->model('Meta_model');
        $id = $this->uri->segment(3);
        $dados['id_usuario'] = $id;
        $dados['title'] = "Visualizar usuarios";
        $dados['pagina'] = "Visualizar usuarios";
        $dados['usuarios'] = $this->Usuario_model->recuperarUm($id);
       // $dados['meta'] = $this->Meta_model->recuperarUm($usuario->meta_id_meta);
        //$dados['metas'] = $this->Meta_model->recuperar();
        return $this->load->view('/users/visualizarUsuario', $dados);
        }else{
            //caso não seja, é lançada uma exceção
            redirect('index.php/errors/noPermissao');
        }
	}
}