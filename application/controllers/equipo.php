<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class equipo extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Equipo/equipo_model','eq');
	}
	
	
	function index(){
		$data="";
		$data['listar_equio'] = $this->eq->listar_todos();
		$dataCuerpo['cuerpo'] = $this->load->view('menu/Equipo/equipo',$data,true);
		$this->load->view("menu/template",$dataCuerpo);
	}

	function registrar(){
		if($this->input->is_ajax_request()){
			if( $_POST['codigo_eq']!="" && $_POST['serie_eq']!="" && $_POST['bateria']!="" && $_POST['puesta_marcha']!="" ){
				$equipo = array(
						'codigo' => $this->input->post('codigo_eq',true),
						'serie' => $this->input->post('serie_eq',true),
						'bateria' => $this->input->post('bateria',true),
						'select_tipo' => $this->input->post('select_tipo',true),
						'puesta_marcha'=>$this->input->post('puesta_marcha',true),
						'select_modelo_cable'=>$this->input->post('select_modelo_cable',true),
						'long_cable'=>$this->input->post('long_cable',true),
						'carrete'=>$this->input->post('carrete',true),
						'select_tipoColector'=>$this->input->post('select_tipoColector',true),
						'select_tipoContrapeso'=>$this->input->post('select_tipoContrapeso',true)
				);
				$rs=$this->eq->insert($equipo);
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

	function registrar_componente(){
		if($this->input->is_ajax_request()){
			if( $_POST['select_Equipo']!="" && $_POST['select_ubicacion']!="" && $_POST['descripcion_comp']!=""){
				$equipo_componente = array(
						'select_Equipo' => $this->input->post('select_Equipo',true),
						'select_ubicacion' => $this->input->post('select_ubicacion',true),
						'descripcion_comp' => $this->input->post('descripcion_comp',true),
						'cod_petrobras' => $this->input->post('cod_petrobras',true),
						'num_partes' => $this->input->post('num_partes',true)
				);
				$rs=$this->eq->insert_componente($equipo_componente);
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

	function registrar_item(){
		if($this->input->is_ajax_request()){
			if( $_POST['select_Equipo_item']!="" && $_POST['select_Componente_item']!="" && $_POST['caracteristicas']!=""){
				$equipo_componente_item = array(
						'equipo' => trim($this->input->post('select_Equipo_item',true)),
						'componente' => trim($this->input->post('select_Componente_item',true)),
						'caracteristicas' => $this->input->post('caracteristicas',true),
						'un_medida' => $this->input->post('un_medida',true),
						'desccripcion_item' => $this->input->post('desccripcion_item',true)
				);
				$rs=$this->eq->insert_item($equipo_componente_item);
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
	
	function listar_item_byEquipoComponente(){
		if($this->input->is_ajax_request()){
			echo json_encode($this->eq->listar_item_byEquipoComponente($this->input->post('select_Equipo',true),$this->input->post('select_Componente',true)));
		}else{
			redirect(base_url().'equipo/', 'refresh');
		}
		
	}
}
