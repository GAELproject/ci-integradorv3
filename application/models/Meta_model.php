<?php
class Meta_model extends CI_Model
{
	public $id_meta;
	public $titulo;
	public $descricao;
	public $id_criador;
	public $turno;
	public $data_criacao;
	public $data_prazo_finalizacao;
	public $data_finalizacao;
	public $situacao;

	public function __construct(){
		 parent::__construct();
	}


	public function inserir()
	{
        $dados = array("titulo" => $this->titulo,
                        "descricao" => $this->descricao,
						"id_criador" => $this->id_criador,
						"turno" => $this->turno,
                        "data_prazo_finalizacao" => $this->data_prazo_finalizacao,
                        "data_finalizacao" => $this->data_finalizacao, 
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

   

	public function recuperarUm($id){
        $this->db->where('id_meta',$id);
        $query = $this->db->get('meta');
        return $query->row();
    }
	public function update(){
        $this->db->set('titulo', $this->titulo);
        $this->db->set('descricao', $this->descricao);
		$this->db->set('turno', $this->turno);
		$this->db->set('data_criacao', $this->data_criacao);
        $this->db->set('data_prazo_finalizacao', $this->data_prazo_finalizacao);
        $this->db->set('data_finalizacao', $this->data_finalizacao);
        $this->db->set('situacao', $this->situacao);
        $this->db->set('id_criador',$this->id_criador);

        $this->db->where('id_meta', $this->id_meta);
        $this->db->update('meta');

	}
	//função para deletar uma meta.
	public function delete($id)
    {
        $this->db->where('id_meta', $id);
        $this->db->delete('meta');
    }

}