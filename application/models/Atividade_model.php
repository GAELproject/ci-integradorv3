<?php
class Atividade_model extends CI_Model
{
    public $id_atividade;
    public $descricao_servico_realizado;
    public $qtd_item_substituido;
    public $nome_item_substituido;
    public $situacao_final;
    public $atividade_defeito;
    public $observacoes;
    
    public function __construct(){
        parent::__construct();
    }


    public function inserir()
    {
        $dados = array("descricao_servico_realizado" => $this->descricao_servico_realizado,
            "qtd_item_substituido" => $this->qtd_item_substituido,
            "nome_item_substituido" => $this->nome_item_substituido,
            "situacao_final" => $this->situacao_final,
            "atividade_defeito" => $this->atividade_defeito,
            "observacoes" => $this->observacoes);

         $this->db->insert('atividade',$dados);
        return $this->db->insert_id();
    }
    public function recuperar()
    {
        $query = $this->db->get('atividade');
        return $query->result_array();
    }
  

    public function recuperarUm($id){
        $this->db->where('id_atividade',$id);
        $query = $this->db->get('atividade');
    
        return $query->row();
    }
    public function update(){
        $this->db->set('descricao_servico_realizado', $this->descricao_servico_realizado);
        $this->db->set('qtd_item_substituido', $this->qtd_item_substituido);
        $this->db->set('nome_item_substituido', $this->nome_item_substituido);
        $this->db->set('situacao_final', $this->situacao_final);
        $this->db->set('atividade_defeito', $this->atividade_defeito);
        $this->db->set('observacoes', $this->observacoes);
        
        $this->db->where('id_atividade', $this->id_atividade);
        $this->db->update('atividade');

    }
    //função para deletar uma meta.
    public function delete($id)
    {
        $this->db->where('id_atividade', $id);
        $this->db->delete('atividade');
    }

}
