<?php
class Meta_model extends CI_Model
{
	public $id_meta;
	public $titulo;
	public $descricao;
	public $id_criador;
	public $turno;
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

    public function delete($id)
    {
        $this->db->where('id_meta', $id);
		//$this->db->delete('meta');
		$db_debug = $this->db->db_debug; //salve a configuração
		$this->db->db_debug = FALSE; //desabilita o debug para consultas
	
		if ( !$this->db->delete('meta') )
		{
			$error = $this->db->error();
	
			// Tratativa de erro aqui
			/*
			 * Seu código...
			 */
			$this->db->db_debug = $db_debug; //restaure a configuração de debug
	
			return $error;
		}
	
		return $this->db->affected_rows();
    }

	public function recuperarUm($id){
        $this->db->where('id_meta',$id);
        $query = $this->db->get('meta');
        return $query->row();
    }
  

}