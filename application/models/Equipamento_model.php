<?php
class Equipamento_model extends CI_Model
{
	public $id_equipamento;
	public $equipamento_nome;
	public $numero_serie;
	public $marca;
	public $modelo;
    public $situacao;
    
	public function __construct(){
		 parent::__construct();
	}


	public function inserir()
	{
        $dados = array("equipamento_nome" => $this->equipamento_nome,
                        "numero_serie" => $this->numero_serie,
						"marca" => $this->marca,
						"modelo" => $this->modelo,
                        "situacao" => $this->situacao);

		return $this->db->insert('equipamento',$dados);
	}
	public function recuperar(){
		$query = $this->db->get('equipamento');
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