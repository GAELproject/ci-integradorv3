<?php
class Doacao_model extends CI_Model
{
    public $id_doacao;
    public $origem;
    public $defeito;
    public $observacoes;
    public $situacao_final;
    public $equipamento_doado_id;
   
    
    public function __construct(){
        parent::__construct();
    }

    public function inserir(){
        $dados = array("origem" => $this->origem,
        "defeito" => $this->defeito,
        "observacoes" => $this->observacoes,
        "situacao_final" => $this->situacao_final,
        "equipamento_doado_id" => $this->equipamento_doado_id);

        return $this->db->insert('doacao',$dados);
    }

}