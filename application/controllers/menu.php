<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class menu extends CI_Controller {

	function __construct() {
		parent::__construct();
	}
	
	
	function index(){
		$dataCuerpo['cuerpo'] = '';
		$this->load->view("menu/template",$dataCuerpo);
	}
	
}

?>