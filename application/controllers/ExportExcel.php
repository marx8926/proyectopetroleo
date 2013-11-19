<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ExportExcel extends CI_Controller {

	public function ExportExcel() {
		parent::__construct();
		$this->load->model('export/export_model','exp');//load the model
		$this->load->model('fichacosto/fichacosto_model','fc');
		$this->load->model('evaluacion/evaluacion_model','eva');
		$this->very_sesion();
	}
	
	function very_sesion(){
		if(!$this->session->userdata('username')){
			redirect(base_url().'inicio');
		}
	}
	
	function toExcelAll_fichaCosto($id) {
		$data['lista'] = $this->fc->select_fichaCosto_id($id);
		$data['data1'] = $this->exp->ExcelToAll_fichacosto($id);
		$this->load->view('menu/planificacionCosto/excel_fichaCosto',$data);
	}
	
	function toExcelAll_ResultadoEvaluacion() {
		$data["lstReporte1"] = $this->eva->select_reporte_1();
		$this->load->view('menu/evaluacion/excel_resultadoEvaluacion',$data);
	}
	
	function toPDF_fichaCosto($id){
			$this->load->library('mpdf53/mpdf');
			$mpdf=new mPDF('utf-8','A4');
			$data['lista'] = $this->fc->select_fichaCosto_id($id);
			$data['data1'] = $this->exp->ExcelToAll_fichacosto($id);
			$mpdf->WriteHTML($this->load->view('menu/planificacionCosto/pdf_fichaCosto',$data,true));
			$mpdf->Output();
	}

}
?>