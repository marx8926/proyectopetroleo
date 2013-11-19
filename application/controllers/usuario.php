<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class usuario extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('usuario_model','usu');
		$this->load->model('Personal/personal_model','pe');
	}
	
	
	function index(){
		$data="";
		$data['listar_todos']=$this->pe->listar_todos();
		$dataCuerpo['cuerpo'] = $this->load->view('menu/soporte/usuario',$data,true);
		$this->load->view("menu/template",$dataCuerpo);
	}
	
}