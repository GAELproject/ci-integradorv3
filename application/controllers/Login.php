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
    //    $verificar['u_nome'] = $usuario;
   
        if ($verificar){
            $this->session->set_userdata('usuario_logado', $u_email);
         
            $this->session->set_flashdata('success', 'Usuario logado');
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