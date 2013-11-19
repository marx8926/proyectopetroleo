<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class personal extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Personal/personal_model','pe');
	}
	
	
	function index(){
		$data['listar_todos']=$this->pe->listar_todos();
		$dataCuerpo['cuerpo'] = $this->load->view('menu/soporte/personal',$data,true);
		$this->load->view("menu/template",$dataCuerpo);
	}

	function registrar(){
		
		if($this->input->is_ajax_request()){
			if($_POST['nombres']!="" && $_POST['dni']!="" && $_POST['apellidos']!=""
				&& $_POST['selectSexo']!="" && $_POST['selectCargo']!="" && $_POST['selectDist']!="" && $_POST['direccion']!="" ){
				$personal = array(
						'nombre' => $this->input->post('nombres',true),
						'dni' => $this->input->post('dni',true),
						'telefono' => $this->input->post('telefono',true),
						'apellido' => $this->input->post('apellidos',true),
						'sexo' => $this->input->post('selectSexo',true),
						'cargo' => $this->input->post('selectCargo',true),
						'ubigeo' => $this->input->post('selectDist',true),
						'direccion' => $this->input->post('direccion',true),
				);
				$rs=$this->pe->insert($personal);
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
			redirect(base_url().'personal/', 'refresh');
		}

	}
	
}