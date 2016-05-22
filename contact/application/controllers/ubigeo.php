<?php ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');
class Ubigeo extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		// Call the CI_Model constructor
		parent::__construct();
		$this->load->model("ubigeo_model");
		
	}
	public function paises(){
		$rs = $this->ubigeo_model->listarPaises();
		//$data = array("result"=>$rs);
		$this->output->set_content_type('application/json')->set_output(json_encode($rs->result_array()));
	}
	
	public function regiones(){
		$idUbigeo = $this->uri->segment('3');
		$rs = $this->ubigeo_model->listarRegiones($idUbigeo);
		//$data = array("result"=>$rs);
		$this->output->set_content_type('application/json')->set_output(json_encode($rs->result_array()));
	}
	public function ciudades(){
		$idUbigeo = $this->uri->segment('3');
		$rs = $this->ubigeo_model->listarCiudades($idUbigeo);
		//$data = array("result"=>$rs);
		$this->output->set_content_type('application/json')->set_output(json_encode($rs->result_array()));
		
	}
	public function distritos(){
		$idUbigeo = $this->uri->segment('3');
		$rs = $this->ubigeo_model->listarDistritos($idUbigeo);
		//$data = array("result"=>$rs);
		$this->output->set_content_type('application/json')->set_output(json_encode($rs->result_array()));
	}
}