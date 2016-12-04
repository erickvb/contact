<?php ob_start();	
defined('BASEPATH') OR exit('No direct script access allowed');
class Inicio extends CI_Controller {
	public function __construct()
	{
		// Call the CI_Model constructor
		parent::__construct();
		//$this->load->model("usuario_model");
	}
	
	
	public function index()
	{  
		
		$curruser = $this->session->userdata('usuario');
		
		if(($this->session->has_userdata('usuario'))){
			$this->load->view('home');
		}else{
			$this->load->view('offline');
		}
		
		//
//		$this->load->view('offline');
		
// 		$this->load->view('home');
	}
	
	
}