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
        var_dump($query);
        exit();
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
