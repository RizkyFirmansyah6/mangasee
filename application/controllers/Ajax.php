<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('manga_model');
		$this->load->helper('url','form');
		$this->load->library('form_validation');
	}

	public function index()
	{
		
	}

	public function alter()
	{
		$id = $this->input->post('id');
		$chapter = $this->input->post('chapter');
		$page = $this->input->post('page');
		$data=$this->manga_model->alter($id,$chapter,$page);
		echo json_encode($data);
	}

	public function alterChapter()
	{
		$id = $this->input->post('id');
		$chapter = $this->input->post('chapter');
		$data=$this->manga_model->alterChapter($id,$chapter);
		echo json_encode($data);
	}

	public function alterPrev()
	{
		$id = $this->input->post('id');
		$chapter = $this->input->post('chapter');
		$data=$this->manga_model->alterPrev($id,$chapter);
		echo json_encode($data);
	}

	public function getPage()
	{
		$id = $this->input->post('id');
		$chapter = $this->input->post('chapter');
		$data=$this->manga_model->getPage($id,$chapter);
		echo json_encode($data);
	}

	public function mangaDetail()
	{
		$id = $this->input->post('id');
		$data=$this->manga_model->manga_detail($id);
		echo json_encode($data);
	}

	public function mangaDate()
	{
		$id = $this->input->post('id');
		$chapter = $this->input->post('chapter');
		$data=$this->manga_model->dateChapter($id,$chapter);
		echo json_encode($data);
	}

	public function mangaGenre()
	{
		$id = $this->input->post('id');
		$data=$this->manga_model->genre($id);
		echo json_encode($data);
	}

}

/* End of file Ajax.php */
/* Location: ./application/controllers/Ajax.php */