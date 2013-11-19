<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cuadrilla_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}
	
	function insert($data){

		$query = $this->db->query("exec spi_cuadrilla '".$data['nombre']."'");
		return $query->row();

	}

	function listar_todos(){

		$query = $this->db->query("exec spc_cuadrilla_all ");
		return $query->result();

	}
	
}

?>