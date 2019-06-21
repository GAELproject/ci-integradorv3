<?php
class Usuario_model extends CI_Model
{
	public $id_usuario;
	public $nome;
	public $tipo;
	public $login;
	public $senha;
	public $imagem;
	public $email;
	public $cpf;
	public $turno;
	public $usuario_bolsista;
	public $meta_id_meta;

	public function __construct(){
		 parent::__construct();
	}
	public function inserir()
	{
		$dados = array("nome" => $this->nome,"tipo" => $this->tipo,"login" => $this->login,"senha" => $this->senha, "email" => $this->email,  "cpf" => $this->cpf,"turno" => $this->turno, "usuario_bolsista" => $this->usuario_bolsista, "meta_id_meta" => $this->meta_id_meta);
		/*
		$dados = array();
		$dados = array();
		$dados = array();
		$dados = array();
		$dados = array();
		$dados = array();
		$dados = array();
		$dados = array();
		$dados = array();*/
		return $this->db->insert('usuario',$dados);
	}
	public function recuperar(){
		$query = $this->db->get('usuario');
		return $query->result();
	}
}