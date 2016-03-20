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
	public function login(){
		
		$user = $this->input->post("usuario");
		$pass =  $this->input->post("clave");
		
		$this->usuario_model->setUsuario($user);
		$this->usuario_model->setClave($pass);
		$rs = $this->usuario_model->doLogin();
		
		if($rs->num_rows()>0){
			//existe user
			$data = null;
			foreach ($rs->result() as $row)
			{
				$data = array("nombre"=>$row->nombre,
						"apellidos"=>$row->apellidos,
						"nick"=>$row->nick,
						"avatar"=>$row->avatar,
						"id_usuario"=>$row->id_usuario
				);
				//echo $row->nombre;
				//echo $row->apellidos;
				//echo $row->nick;
				//echo $row->avatar;
			}
			
			$this->load->view("usuario/home",$data);
		}else{
			//
			echo "No existe Usuario";
		}
		
		
		
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
	
	public function registrarse(){
		$data = array();
		$this->load->view("usuario/registro",$data);
	}
	
	public function doRegistrar(){
		
		$email = $this->input->post("email");
		$usuario =  $this->input->post("usuario");
		$password =  $this->input->post("password");
		
		$this->usuario_model->setEmail($email);
		$this->usuario_model->setUsuario($usuario);
		$this->usuario_model->setClave($password);
		$this->usuario_model->setTipo("1");
		
		$rs = $this->usuario_model->registrar();
		if($rs){
			redirect('/usuario', 'refresh');
		}else{
			echo "Error al registrar";
		}
		
	}
	public function  profile(){
		$this->load->view("usuario/profile");
		
	}
	
}
