<?php
class Laudo_model extends CI_Model
{
	public $id_laudo;
	public $possiveis_defeitos;
	public $possiveis_causas;
	public $possiveis_solucoes;
	public $data_entrega;
	public $cliente;
	public $destino;
	public $equipamento_laudo_id;

	public function __construct(){
		 parent::__construct();
    }
    
    public function inserir(){
        $dados = array(
            "possiveis_defeitos" => $this->possiveis_defeitos,
            "possiveis_causas" => $this->possiveis_causas,
            "possiveis_solucoes" => $this->possiveis_solucoes,
            "data_entrega" => $this->data_entrega,
            "cliente" => $this->cliente,
            "destino" => $this->destino, 
            "equipamento_laudo_id" => $this->equipamento_laudo_id
        );
        $this->db->insert('laudo',$dados);
        return $this->db->insert_id();
    }
    public function recuperar(){
        $query = $this->db->order_by('id_laudo', 'DESC')->get('laudo');	
		return $query->result();
	
    }
    public function recuperarUm($id){
        $this->db->where('id_laudo', $id);
        $query = $this->db->get('laudo');
       
        return $query->row();
    
    }
    public function update(){
        $this->db->set('equipamento_laudo_id',$this->equipamento_laudo_id);
        $this->db->set('possiveis_causas',$this->possiveis_causas);
        $this->db->set('possiveis_defeitos',$this->possiveis_defeitos);
        $this->db->set('possiveis_solucoes',$this->possiveis_solucoes);
        $this->db->set('data_entrega',$this->data_entrega);
        $this->db->set('cliente',$this->cliente);
        $this->db->set('destino',$this->destino);

        $this->db->where('id_laudo', $this->id_laudo);
        $this->db->update('laudo');

    }
    public function delete($id){
        $this->db->where('id_laudo', $id);
        $this->db->delete('laudo');
        
    }


}