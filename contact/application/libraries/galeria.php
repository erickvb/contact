<?php
class Galeria {
	
	public $id_galeria;
	public $imagen;
	public $video;
	public $pagina_web;
	public $estado;
	public $imagen_privado;
	public $tipo_galeria;
	public $tipo_acceso;
	
	public function __set($name, $value)
	{
		// 		if ($name === 'last_login')
			// 		{
			// 			$this->last_login = DateTime::createFromFormat('U', $value);
			// 		}
		//$this->x[$name] = $value;	
		////
		
	}
	
	public function __get($name)
	{
		if (isset($this->$name))
		{
			return $this->$name;
		}
	}
	
}