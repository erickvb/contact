<?php ob_start();	
defined('BASEPATH') OR exit('No direct script access allowed');
class Micuenta extends CI_Controller {

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
	
	public function doRegisterProfile(){
		$this->load->model("perfil_model");
		$curruser = $this->session->userdata('usuario');
		
		$auditoria = new Auditoria();
		$auditoria->usuarioCreacion = 'juan';
		
//Obtener la session de los atributos y recorrer en foreach------------------------------------
		
		$a = new Atributo();
		$a->key = "presentacion";
		$b = new Atributo();
		$b->key = "detalle";
		$c = new Atributo();
		$c->key = "estatura";
		$d = new Atributo();
		$d->key = "peso";
		$e = new Atributo();
		$e->key = "contextura";
		$f = new Atributo();
		$f->key = "color_piel";
		$g = new Atributo();
		$g->key = "color_cabello";
		$h = new Atributo();
		$h->key = "color_ojo";
		$i = new Atributo();
		$i->key = "medidas";
		$j = new Atributo();
		$j->key = "servicios";
		$k = new Atributo();
		$k->key = "precio";
		$l = new Atributo();
		$l->key = "horario";
		
		$atributos = array($a, $b, $c,$d, $e,$f, $g,$h, $i,$j, $k,$l);
//-----------------------------------------------------------------------------		
		
		$cboPeso = $this->input->post("cboPeso");
		$cboContextura = $this->input->post("cboContextura");
		$cboEstatura = $this->input->post("cboEstatura");
		$cboColorPiel = $this->input->post("cboColorPiel");
		$cboColorOjo = $this->input->post("cboColorOjo");
		$cboColorCabello = $this->input->post("cboColorCabello");
		$cboMoneda = $this->input->post("cboMoneda");		
		
		foreach ($atributos as $value) {					
			$profile = new Perfil();
			$profile->key = $value->key;
			
			if($value->key == "presentacion"){
			$profile->valor =  $this->input->post("presentacion");
			}elseif ($value->key == "detalle"){
			$profile->valor =  $this->input->post("detalle");
			}elseif ($value->key == "estatura"){
			$profile->valor = $cboEstatura;
			}elseif ($value->key == "peso"){
			$profile->valor = $cboPeso;
			}elseif ($value->key == "contextura"){
			$profile->valor =  $cboContextura;			
			}elseif ($value->key == "color_piel"){
			$profile->valor =  $cboColorPiel;
			}elseif ($value->key == "color_cabello"){
			$profile->valor =  $cboColorCabello;
			}elseif ($value->key == "color_ojo"){
			$profile->valor =  $cboColorOjo;
			}elseif ($value->key == "medidas"){
			$profile->valor =  $this->input->post("busto"). ",".$this->input->post("cintura").",".$this->input->post("cadera");
			}elseif ($value->key == "servicios"){
			$profile->valor =  $this->input->post("a"). ",".$this->input->post("v").",".$this->input->post("or");
			}elseif ($value->key == "precio"){
			$profile->valor =  $cboMoneda . ",".$this->input->post("precioDesde"). ",".$this->input->post("precioHasta");
			}elseif ($value->key == "horario"){
			$profile->valor = $this->input->post("horario") ;
			}
			
			$profile->estado =  1;
			$profile->auditoria = $auditoria;
			$rs = $this->perfil_model->register($profile);
		}

		echo $rs;
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
	
	public function updateInformation(){
		$usuario = new Usuario();
		//exit("llego aki");
		$curruser = $this->session->userdata('usuario');
		
		$usuario->id_nacionalidad =  $this->input->post("cboNacionalidad");
		$usuario->id_pais = $this->input->post("cboPais");
		$usuario->id_ciudad = $this->input->post("cboCiudad");
		$usuario->id_distrito = $this->input->post("cboDistrito");
		$usuario->nombre = $this->input->post("nombre");
		$usuario->apellidos = $this->input->post("apellidos");
		$usuario->sexo = $this->input->post("sexo");
		$usuario->email = $this->input->post("email");
		$usuario->nick = $this->input->post("nick");
		$usuario->telefono = $this->input->post("telefono");
		$usuario->id_usuario = $curruser->id_usuario;
		
		
		
		$tipo = Tipo_usuario::CLIENTE;
		
	
		
		 
		$rs = $this->usuario_model->actualizarInformacion($usuario);
		echo $rs;
		
		
	//	if($rs){
		
	}
}
