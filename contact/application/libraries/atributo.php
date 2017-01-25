<?php
class Atributo{
	public $id_atributo;
	public $key;
	public $descripcion;
	public $description;
	public $estado;
	
	public function __construct()
	{	
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