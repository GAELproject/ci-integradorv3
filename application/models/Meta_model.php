<?php
class Meta_model extends CI_Model
{
	public $id_meta;
	public $titulo;
	public $descricao;
	public $data_criacao;
	public $data_prazo_finalizacao;
	public $data_de_finalizacao;
	public $situacao_final;

	public function __construct(){
		 parent::__construct();
	}


	public function inserir()
	{
		$dados = array("titulo" => $this->titulo,"descricao" => $this->descricao,"data_prazo_finalizacao" => $this->data_prazo_finalizacao,"data_de_finalizacao" => $this->data_de_finalizacao, "situacao_final" => $this->situacao_final);
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
		return $this->db->insert('meta',$dados);
	}
	public function recuperar(){
		$query = $this->db->get('meta');
		return $query->result();
	}
}