<?php
class Equipamento_model extends CI_Model
{
	public $id_equipamento;
	public $equipamento_nome;
	public $numero_serie;
	public $marca;
	public $modelo;
	public $situacao;
	public $entregue;
	public $id_responsavel;
    
	public function __construct(){
		 parent::__construct();
	}


	public function inserir()
	{
        $dados = array("equipamento_nome" => $this->equipamento_nome,
                        "numero_serie" => $this->numero_serie,
						"marca" => $this->marca,
						"modelo" => $this->modelo,
						"situacao" => $this->situacao,
						"entregue" => $this->entregue,
						"id_responsavel" => $this->id_responsavel);

		return $this->db->insert('equipamento',$dados);
	}
	public function recuperar(){
		
		$query = $this->db->order_by('id_equipamento', 'DESC')->get('equipamento');
		
		return $query->result();
	}

   	public function recuperarUm($id){
        $this->db->where('id_equipamento',$id);
        $query = $this->db->get('equipamento');
        return $query->row();
	}
	//recupera apenas os equipamentos não-entregues
	public function recuperar_N_Entregues(){
		$this->db->where('entregue', '0');
		$query = $this->db->get('equipamento');
		return $query->result();
	}

	public function update(){
		$this->db->set('equipamento_nome', $this->equipamento_nome);
		$this->db->set('numero_serie', $this->numero_serie);
		$this->db->set('marca', $this->marca);
		$this->db->set('modelo', $this->modelo);
		$this->db->set('situacao', $this->situacao);
		$this->db->set('entregue', $this->entregue);
		$this->db->set('id_responsavel', $this->id_responsavel);
		
        $this->db->where('id_equipamento', $this->id_equipamento);
        $update = $this->db->update('equipamento');
		if($update){
			return true;
		}else{
			return false;
		}
	}
	//função para deletar uma meta.
	public function delete($id)
    {
        $this->db->where('id_equipamento', $id);
        $this->db->delete('equipamento');
        return true;
    }

}