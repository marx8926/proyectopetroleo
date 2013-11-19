<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cambio_model extends CI_Model {

	function __construct() {
		parent::__construct();
		
	}
	
	function insert($data){

		$query = $this->db->query("exec spi_cambio ".$data['nro_Cam'].",'".$data['fec_cam']."','".$data['observacion']."','".
			$data['componente']."','".$data['equipo']."'");
		return $query->row();

	}

	function listar_todos(){
		$query = $this->db->query("exec spc_registroCambio_all ");
		return $query->result();
	}

}