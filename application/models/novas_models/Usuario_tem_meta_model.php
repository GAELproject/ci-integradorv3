<?php
class Usuario_tem_meta_model extends CI_Model
{
	//Esssa tabela serve para ligar 
	//a tabela usuário e meta
	//para que o usuário possa ter mais de uma meta
	public $id_usuario_meta;
	public $usuario_id;
	public $meta_id;
	public $data_criacao;


	public function __construct(){
		 parent::__construct();
	}


	public function inserir()
	{
		$dados = array("id_usuario_meta" => $this->id_usuario_meta,
						"usuario_id" => $this->usuario_id,
						"meta_id" => $this->meta_id,
						"data_criacao" => $this->data_criacao
						);
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
		return $this->db->insert('usuario_tem_meta', $dados);
	}
	public function recuperar(){
		$query = $this->db->get('usuario_tem_meta');
		return $query->result();
	}

    public function delete($id)
    {
        $this->db->where('id_usuario_meta', $id);
        $this->db->delete('usuario_tem_meta');
    }

	public function recuperarUm($id){
        $this->db->where('id_usuario_meta',$id);
        $query = $this->db->get('usuario_tem_meta');
        return $query->row();
    }
    public function update(){
        $this->db->set('usuario_id', $this->usuario_id); 
        $this->db->set('meta_id', $this->meta_id);
        $this->db->set('data_criacao', $this->data_criacao);

        $this->db->where('id_usuario_meta', $this->id_usuario_meta);
        $this->db->update('usuario_tem_meta');

    }

}