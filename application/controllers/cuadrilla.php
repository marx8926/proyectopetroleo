<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cuadrilla extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Cuadrilla/cuadrilla_model','cu');
	}
	
	
	function index(){
		$data["listar_todos"]= $this->cu->listar_todos();
		$dataCuerpo['cuerpo'] = $this->load->view('menu/soporte/cuadrilla',$data,true);
		$this->load->view("menu/template",$dataCuerpo);
	}
	
	function registrar(){
		if($this->input->is_ajax_request()){
			if($_POST['nombre']!=""){
				$cuadrilla = array(
						'nombre' => $this->input->post('nombre',true)
				);
				$rs=$this->cu->insert($cuadrilla);
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
			redirect(base_url().'cuadrilla/', 'refresh');
		}
		
	}

}