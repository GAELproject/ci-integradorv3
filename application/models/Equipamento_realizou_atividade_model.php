<?php
class Equipamento_realizou_atividade_model extends CI_Model
{
	public $id_equipamento_realizou_atividade;
	public $equipamento_id_equipamento;
	public $atividade_id_atividade;
	public $data_hora_atividade;

    
	public function __construct(){
		 parent::__construct();
	}


	public function inserir()
	{
        $dados = array(
                        "equipamento_id_equipamento" => $this->equipamento_id_equipamento,
						"atividade_id_atividade" => $this->atividade_id_atividade);

		return $this->db->insert('equipamento_realizou_atividade',$dados);
	}
	public function recuperar(){
		$query = $this->db->get('equipamento_realizou_atividade');
		
		return $query->result();
	}

   

	public function recuperarOne($id){
        $this->db->where('id_equipamento_realizou_atividade',$id);
        $query = $this->db->get('equipamento_realizou_atividade');
        return $query->row();
    }
	public function update(){
		$this->db->set('equipamento_id_equipamento', $this->equipamento_id_equipamento);    
        $this->db->where('id_equipamento_realizou_atividade', $this->id_equipamento_realizou_atividade);
        $this->db->update('equipamento_realizou_atividade');

	}
	//função para deletar uma meta.
	public function delete($id)
    {
        $this->db->where('id_equipamento_realizou_atividade', $id);
        $this->db->delete('equipamento_realizou_atividade');
	}
	
	public function deleteByIdEquipamento($id){
		$this->db->where('equipamento_id_equipamento', $id);
        $this->db->delete('equipamento_realizou_atividade');
		
	}


}