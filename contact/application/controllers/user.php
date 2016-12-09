<?php ob_start();	
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
	public function __construct()
	{
		// Call the CI_Model constructor
		parent::__construct();
		$this->load->model("usuario_model");
	}
	
	public function show(){
		$rs = $this->usuario_model->listar();
		//$data = array("result"=>$rs);
		//$this->load->view("usuario/listado_user",$data);
		
		$this->output->set_content_type('application/json')->set_output(json_encode($rs));
	}
	
	public  function detail(){
		$idUser = $this->uri->segment('3');
		$rs = $this->usuario_model->obtenerGaleriaFotos($idUser);
		//$rs->row();
		$rs2 =  $this->usuario_model->obtenerPerfil($idUser);
		log_message('info', $this->db->last_query());
		echo json_encode($rs2->result_array());
		
	}
}
