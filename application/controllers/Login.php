<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
        return $this->load->view('auth/index');
    }
    public function autenticar(){
        $u_email = $this->input->post('u_email');
        $senha = $this->input->post('senha');
        
        $verificar = $this->Usuario_model->logar($u_email, $senha);
        
   
        if ($verificar){
            $arrayUser = array(
                'id_usuario' => $verificar['id_usuario'],
                'u_nome' => $verificar['u_nome'],
                'u_email' => $u_email,
                'usuario_tipo' =>  $verificar['usuario_tipo']
            );
            $this->session->set_userdata('usuario_logado', $arrayUser);
         
            $this->session->set_flashdata('success', 'Usuario logado');

            //var_dump($this->session->userdata('usuario_logado')['u_nome']); 
            //  exit();
            redirect(base_url().'index.php/gael/index');
        }else{
            $this->session->set_flashdata('error', 'Usuario ou senha incorrentos');
            /*
            echo "non";
            echo "<br>";
            if($this->session->flashdata('error')){
                var_dump($this->session->flashdata('error'));
            }else{
                echo "retorna false";
            }
            
            
            exit();
            */
            redirect(base_url().'index.php/login/');
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url().'index.php/login/index');
    }
}