<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mantenimiento_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}
	
	function insert($data){

		$query = $this->db->query("exec spi_mantenimiento ".$data['tipo'].","."'".$data['fec_pro']."'".",'".$data['equipo']."',"."'".$data['estado']."'");
		return $query->row();

	}

	function listar_todos(){

		$query = $this->db->query("exec spc_mantenimiento_all ");
		return $query->result();

	}
}

?>