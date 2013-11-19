<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class personal_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}
	
	function insert($data){

		$query = $this->db->query("exec spi_personal '".$data['nombre']."'".","."'".$data['apellido']."'"
			.","."'".$data['dni']."'".","."'".$data['direccion']."'".","."'".$data['telefono']."'".","."'".$data['sexo']."'"
			.",".$data['cargo'].",".$data['ubigeo']."");
		return $query->row();

	}

	function listar_todos(){

		$query = $this->db->query("exec spc_personal_all ");
		return $query->result();

	}
}

?>