<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class evaluacion extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Equipo/equipo_model','eq');
		$this->load->model('Cuadrilla/cuadrilla_model','cu');
		$this->load->model('Personal/personal_model','pe');
		$this->load->model('Evaluacion/evaluacion_model','ev');
	}
	
	
	function index(){
		$data="";
		$data['listar_equio'] = $this->eq->listar_todos();
		$data['listar_persona'] = $this->pe->listar_todos();
		$data["listar_cuadrilla"]= $this->cu->listar_todos();
		$dataCuerpo['cuerpo'] = $this->load->view('menu/Evaluacion/evaluacion',$data,true);
		$this->load->view("menu/template",$dataCuerpo);
	}

	function registrar(){
		if($this->input->is_ajax_request()){
			if( $_POST['select_Equipo']!="" && $_POST['select_Persona']!="" && $_POST['select_cuadrilla']!="" 
				&& $_POST['puesta_marcha']!="" ){
				$evaluacion = array(
						'equipo' => $this->input->post('select_Equipo',true),
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
						'lista_OB'=>$this->input->post(json_decode($this->input->post('lista_observacion',true)))
				);
				$rs=$this->ev->insert($evaluacion);
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

}