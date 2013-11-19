<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cambio extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Equipo/equipo_model','eq');
		$this->load->model('Cambio/cambio_model','ca');
	}
	
	
	function index(){
		$data="";
		$data['listar_cambio'] = $this->ca->listar_todos();
		$data['listar_equio'] = $this->eq->listar_todos();
		$dataCuerpo['cuerpo'] = $this->load->view('menu/Cambio/cambio',$data,true);
		$this->load->view("menu/template",$dataCuerpo);
	}

	function registrar(){
		if($this->input->is_ajax_request()){
			if( $_POST['selectEquipo']!="" && $_POST['nro_Cam']!="" && $_POST['selectComponente']!=""){
				$cambio = array(
						'equipo' => trim($this->input->post('selectEquipo',true)),
						'nro_Cam' => trim($this->input->post('nro_Cam',true)),
						'componente' => $this->input->post('selectComponente',true),
						'fec_cam' => $this->input->post('fec_cam',true),
						'observacion' => $this->input->post('observacion',true)
				);
				$rs=$this->ca->insert($cambio);
				if($rs)
				{
					echo "guardo";
				}else{
					echo "no guardo";
				}
			}else{
				echo "no guardo";
			}
		}else{
			redirect(base_url().'equipo/', 'refresh');
		}
		
	}

	function listar_componentes_byEquipo(){
		if($this->input->is_ajax_request()){
			echo json_encode($this->eq->listar_componente_byEquipo($this->input->post('select_Equipo',true)));
		}else{
			redirect(base_url().'equipo/', 'refresh');
		}
	}

}

?>