<?php
class Perfil{
	public $id_perfil;
	public $key;
	public $valor;
	public $estado;
	public $auditoria;
	
	public function __construct()
	{
		$this->auditoria = new Auditoria();
	}
	
	public function __get($property) {
		if (property_exists($this, $property)) {
			return $this->$property;
		}
	}
	
	public function __set($property, $value) {
		if (property_exists($this, $property)) {
			$this->$property = $value;
		}
	
		return $this;
	}
	
	
	
}