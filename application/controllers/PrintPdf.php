<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PrintPdf extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('print_model');
		$this->load->library('dompdf_gen');
		$this->load->helper('file');
	}

	public function index()
	{
		
	}

	public function pdfPrint($id_manga,$chapter)
	{
		$data['manga']=$this->print_model->view($id_manga,$chapter);
		$data['title']=$this->print_model->getTitle($id_manga);
		$this->load->view('print/print', $data);
		$paper_size = 'A4'; //paper size
		$orientation = 'potrait'; //tipe format kertas
		$html = $this->output->get_output();

		//$this->dompdf->set($paper_size,$orientation);		//Convert to PDF
		$dompdf = new DOMPDF();
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream($data['title'][0]->title." ".$chapter.".pdf");
		unset($html);
		unset($dompdf);
	}

}

/* End of file PrintPdf.php */
/* Location: ./application/controllers/PrintPdf.php */