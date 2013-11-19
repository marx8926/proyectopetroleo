<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class evaluacion_model extends CI_Model {

	function __construct() {
		parent::__construct();
		
	}
	
	function insert($data){

		$this->db->trans_start();
		$this->db->trans_complete(); 
		/*'equipo' => $this->input->post('select_Equipo',true),
						'persona' => $this->input->post('select_Persona',true),
						'cuadrilla' => $this->input->post('select_cuadrilla',true),
						'fecEjecucion' => $this->input->post('fec_ejecucion',true),
						'estadoEncontrado'=>$this->input->post('select_estadoEncontrado',true),
						'colorCable'=>$this->input->post('selectColorCable',true),
						'horaInicio'=>$this->input->post('hora_inicio',true),
						'horaFin'=>$this->input->post('hora_fin',true),
						'problematica'=>$this->input->post('problematica',true),
						'tiempoCiclo'=>$this->input->post('tiempo_ciclo',true),
						'FugaCabezal'=>$this->input->post('selectFuga_cabezal',true),
						'odt'=>$this->input->post('odt',true),
						'valeElect'=>$this->input->post('valeElect',true),
						'columFluido'=>$this->input->post('colum_fluido',true),
						'psiTotCiclo'=>$this->input->post('psi_totalciclo',true),
						'eficbba'=>$this->input->post('efic_bba',true),
						'lista_NCB'=>$this->input->post(json_decode($this->input->post('lista_nivelciclobomba',true))),
						'lista_VM'=>$this->input->post(json_decode($this->input->post('lista_valorMedicion',true))),
						'lista_TR'=>$this->input->post(json_decode($this->input->post('lista_trabajoRealizado',true))),
						'lista_OB'=>$this->input->post(json_decode($this->input->post('lista_observacion',true)))*/
		$query = $this->db->query("exec spi_evaluacion '".$data['codigo']."','".$data['bateria']."',".$data['select_tipo'].
			",'".$data['puesta_marcha']."','".$data['serie']."',".$data['select_modelo_cable'].",".$data['long_cable'].",'".
			$data['carrete']."',".$data['select_tipoColector'].",".$data['select_tipoContrapeso']);
		return $query->row();

		/*$this->db->trans_start();
		$this->db->query('UNA CONSULTA SQL...');
		$this->db->query('OTRA CONSULTA...');
		$this->db->query('Y TODAVÍA OTRA CONSULTA...');
		$this->db->trans_complete(); */

	}

	function listar_todos(){
		//$query = $this->db->query("exec spc_equipo_all ");
		//return $query->result();
	}

}

?>