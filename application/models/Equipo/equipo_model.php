<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class equipo_model extends CI_Model {

	function __construct() {
		parent::__construct();
		
	}
	
	function insert($data){

		$query = $this->db->query("exec spi_equipo '".$data['codigo']."','".$data['bateria']."',".$data['select_tipo'].
			",'".$data['puesta_marcha']."','".$data['serie']."',".$data['select_modelo_cable'].",".$data['long_cable'].",'".
			$data['carrete']."',".$data['select_tipoColector'].",".$data['select_tipoContrapeso']);
		return $query->row();

	}

	function insert_componente($data){
		$query = $this->db->query("exec spi_equipo_componente ".$data['select_ubicacion'].",'"
								  .$data['descripcion_comp']."','".$data['num_partes']."','"
								  .$data['cod_petrobras']."','".$data['select_Equipo']."'");
		return $query->row();
	}

	function insert_item($data){
		$query = $this->db->query("exec spi_equipo_componente_item '".$data['caracteristicas']."','".$data['un_medida'].
			"','".$data['desccripcion_item']."','".$data['componente']."','".$data['equipo']."'");
		return $query->row();
	}

	function listar_todos(){
		$query = $this->db->query("exec spc_equipo_all ");
		return $query->result();
	}

	function listar_componente_byEquipo($equipo){
		$query = $this->db->query("exec spf_equipo_componente_byId '".$equipo."'");
		return $query->result();
	}
	
	function listar_item_byEquipoComponente($equipo,$componente){
		$query = $this->db->query("exec spf_equipo_componente_Item_byEquipoComponente '".$equipo."','".$componente."'");
		return $query->result();
	}
}

?>