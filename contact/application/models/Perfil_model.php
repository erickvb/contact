<?php
class Perfil_model extends CI_Model{
	
	
	public function __construct()
	{
		// Call the CI_Model constructor
		parent::__construct();
	}
	
	public function register(Perfil $perfil){
	
		$data = array(
				'key' => $this->db->escape_str($perfil->key) ,
				'valor' => $this->db->escape_str($perfil->valor) ,
				'estado' => $this->db->escape_str($perfil->estado),
				'usuario_creacion' => $this->db->escape_str($perfil->auditoria->usuarioCreacion)
		);
	
		$rs = $this->db->insert('perfil', $data);
		// 		echo "return:".$rs;
		return $rs;
	
	}
	
	
}