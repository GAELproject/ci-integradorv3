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
    //    var_dump($query);
      //  exit();
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
	
	public function deleteByIdEquipamento($id){
		$this->db->where('equipamento_id_equipamento', $id);
        $this->db->delete('equipamento_realizou_atividade');
		
	}


}