<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manga extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('manga_model');
		$this->load->helper('url','form');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->home();
	}

	public function home()
	{
		$data['recomended']=$this->manga_model->rekomendasi();
		$data['rec_genre']=$this->manga_model->genre_rec();
		$data['late']=$this->manga_model->latestChapter();

		$this->load->view('main/home',$data);
	}

	public function directory()
	{
		$data['manga']=$this->manga_model->all_manga();

		$this->load->view('main/directory',$data);
	}

	public function search()
	{
		$this->load->view('main/search');
	}

	public function manga($id_manga)
	{
		$data['detail']=$this->manga_model->manga_detail($id_manga);
		$data['genre']=$this->manga_model->genre($id_manga);
		$data['chapter']=$this->manga_model->manga_chapter($id_manga);

		$this->load->view('manga/manga',$data);
	}

	public function readOnline($id_manga,$chapter)
	{
		$data['chapter']=$this->manga_model->get_chapter($id_manga);
		$data['detail']=$this->manga_model->manga_page($id_manga,$chapter);

		$this->load->view('reader/read_online',$data);
	}

	public function readOnIine($id_manga,$chapter)
	{
		$data['chapter']=$this->manga_model->get_chapter($id_manga);
		$data['detail']=$this->manga_model->manga_page($id_manga,$chapter);

		$this->load->view('readerAll/read_onIine',$data);
	}

	public function getAllManga()
	{
		$data = $this->manga_model->all_manga();
		echo json_encode($data);
	}

}

/* End of file Manga.php */
/* Location: ./application/controllers/Manga.php */