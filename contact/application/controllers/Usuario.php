<?php ob_start();	
defined('BASEPATH') OR exit('No direct script access allowed');
class Usuario extends CI_Controller {

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
		$this->load->model("usuario_model");
	}
	
	
	public function index()
	{
		$this->load->view('usuario/login');
	}
	
	public function listarUsuarios(){
		$rs = $this->usuario_model->listar();
		$data = array("result"=>$rs);
		$this->load->view("usuario/listado_user",$data);
	}
	
	public function editar(){
		$idUser = $this->uri->segment('3');
		$rs =$this->usuario_model->obtenerById($idUser);
		//obtienne el primer row
		$row = $rs->row();
		echo $row->nombre."<br>";
		echo $row->apellidos."<br>";
		echo $row->nick."<br>";
		echo $row->avatar."<br>";
		
		//$data = array("result"=>$rs);
		//$this->load->view("usuario/listado_user",$data);
	
	}
	
	
	public function  profile(){
		$this->load->view("usuario/profile");
		
	}
	
	public function information(){
		$this->load->view("usuario/information");
		
	}
	
	public function account(){
		$this->load->view("usuario/micuenta");
	
	}
	
	public function picture(){
		$this->load->view("usuario/pictures");
	}
}
