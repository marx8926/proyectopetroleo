<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mantenimiento extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Mantenimiento/mantenimiento_model','ma');
		$this->load->model('Equipo/equipo_model','eq');
	}
	
	
	function index(){
		$data="";
		$data['listar_mantenimiento'] = $this->ma->listar_todos();
		$data['listar_equio'] = $this->eq->listar_todos();
		$dataCuerpo['cuerpo'] = $this->load->view('menu/Mantenimiento/mantenimiento',$data,true);
		$this->load->view("menu/template",$dataCuerpo);
	}
	
	function registrar(){
		if($this->input->is_ajax_request()){
			if( $_POST['select_tipo']!="" && $_POST['select_Equipo']!="" && $_POST['fec_pro']!="" ){
				$mantenimiento = array(
						'tipo' => $this->input->post('select_tipo',true),
						'equipo' => $this->input->post('select_Equipo',true),
						'fec_pro' => $this->input->post('fec_pro',true),
						'estado'=> $this->input->post('select_Estado',true)
				);
				$rs=$this->ma->insert($mantenimiento);
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
			redirect(base_url().'mantenimiento/', 'refresh');
		}
		
	}

}