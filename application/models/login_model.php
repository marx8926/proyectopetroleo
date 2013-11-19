<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}
	
	function verificar_usuario($data){
		$query = $this->db->where('NombreUsuario',$data['NombreUsuario']);
		$query = $this->db->where('Contrasenia',$data['Contrasenia']);
		$query = $this->db->get('usuario');
		return $query->row();
	}
	
}

?>