<?php
class Usuario_model extends CI_Model
{
	public $id_usuario;
	public $u_nome;
	public $u_email;
    public $senha;
    public $cpf;
    public $usuario_tipo;
    public $usuario_bolsista;
	public $turno_atividades;
	

	public function __construct(){
		 parent::__construct();
	}
	public function inserir()
	{
        $dados = array("u_nome" => $this->u_nome,
                        "u_email" => $this->u_email,
                        "senha" => $this->senha,
                        "cpf" => $this->cpf,
                        "usuario_tipo" => $this->usuario_tipo,  
                        "usuario_bolsista" => $this->usuario_bolsista, 
                        "turno_atividades" => $this->turno_atividades);
		return $this->db->insert('usuario',$dados);
	}
	public function recuperar(){
		$query = $this->db->get('usuario');
		return $query->result();
	}
	//retorna adms
	public function recuperarAdm()
	{
		$this->db->where('usuario_tipo','1');
		$query = $this->db->get('usuario');
		return $query->result_array();
	}

	//retorna não adms
	public function recuperarNormais()
	{
		$this->db->where('usuario_tipo','2');
		$query = $this->db->get('usuario');
		return $query->result_array();
	}
    
    public function recuperarAdms()
	{
		$this->db->where('usuario_tipo','1');
		$query = $this->db->get('usuario');
		return $query->result_array();
	}
    
    public function delete($id)
    {
        $this->db->where('id_usuario', $id);
		$this->db->delete('usuario');
		return true;
    }
    public function recuperarUm($id){
        $this->db->where('id_usuario',$id);
        $query = $this->db->get('usuario');
        return $query->row();
    }
    public function update(){
		
        $this->db->set('u_nome', $this->u_nome);
        $this->db->set('u_email', $this->u_email);
        $this->db->set('senha', $this->senha);
        $this->db->set('cpf', $this->cpf);
        $this->db->set('usuario_tipo', $this->usuario_tipo);
        $this->db->set('usuario_bolsista', $this->usuario_bolsista);
        $this->db->set('turno_atividades',$this->turno_atividades);

        $this->db->where('id_usuario', $this->id_usuario);
        $this->db->update('usuario');
		return true;
	}
	
	//autenticação
	public function logar($u_email, $senha){
		$this->db->where('u_email', $u_email);
        $this->db->where('senha', $senha);

        $usuario = $this->db->get('usuario')->row_array();
        return $usuario;
	}
}