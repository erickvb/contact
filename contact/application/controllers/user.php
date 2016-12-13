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
		if(!is_numeric($idUser)){
			exit();
		}
		echo "idUser:: ".$idUser;
	
		$usuario =  $this->usuario_model->obtenerById($idUser);
		log_message('info', $this->db->last_query());
		$rs =       $this->usuario_model->obtenerGaleriaFotos($idUser);
		//$rs->row();
		$rs2 =  $this->usuario_model->obtenerPerfil($idUser);
		//print_r($usuario);
		//exit();
		
		log_message('info', $this->db->last_query());
		//echo json_encode($rs2->result_array());
		$data_user = array(
				"nick"=>$usuario->nick,
				"nombre"=>$usuario->nombre,
				"presentacion"=>"2",
				"precioBase"=>"",
				"telefonoContacto"=>$usuario->telefono,
				"miembroDesde"=>"",
				
				"fotoPrincipal"=>$usuario->foto_principal,
				"listaFotosPublico"=>"",
				"acercaDe"=>"",
				"ubicacion"=>"",
				"listaAtributos"=>"",
				
		);
		$this->load->view("usuario/detalle_user",$data_user);
	}
}
