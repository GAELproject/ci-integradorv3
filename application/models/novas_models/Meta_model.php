<?php
class Meta_model extends CI_Model
{
	public $id_meta;
	public $titulo;
	public $descricao;
    public $id_criador;
    public $data_criacao;
	public $data_prazo_finalizacao;
	public $data_de_finalizacao;
	public $situacao;

	public function __construct(){
		 parent::__construct();
	}


	public function inserir()
	{
        $dados = array("titulo" => $this->titulo,
                        "descricao" => $this->descricao,
                        "id_criador" => $this->id_criador,
                        "data_criacao" => $this->data_criacao,
                        "data_prazo_finalizacao" => $this->data_prazo_finalizacao,
                        "data_de_finalizacao" => $this->data_de_finalizacao, 
                        "situacao" => $this->situacao
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
		return $this->db->insert('meta',$dados);
	}
	public function recuperar(){
		$query = $this->db->get('meta');
		return $query->result();
	}

    public function delete($id)
    {
        $this->db->where('id_meta', $id);
        $this->db->delete('meta');
    }

	public function recuperarUm($id){
        $this->db->where('id_meta',$id);
        $query = $this->db->get('meta');
        return $query->row();
    }
    /*
    public function update(){
        $this->db->set('titulo', $this->nome);
        $this->db->set('descricao', $this->descricao);
        $this->db->set('data_criacao', $this->data_criacao);
        $this->db->set('data_prazo_finalizacao', $this->data_prazo_finalizacao);
        $this->db->set('data_de_finalizacao',$this->data_de_finalizacao);
        $this->db->set('situacao_final', $this->situacao_final);
        $this->db->where('id_meta', $this->id_meta);
        $this->db->update('meta');

    }
    */

}