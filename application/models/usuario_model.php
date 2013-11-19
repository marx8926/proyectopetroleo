<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class usuario_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}
	
	function select_all_usuario(){
		$query_udp = $this->db->query('exec spListaCase');
		// $query_udp->row_array();
		return $query_udp->result();
	}
	
}

?>