<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->helper('url','form');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->home();
	}

	public function home()
	{
		$data['genre']=$this->admin_model->getAllGenre();

		$this->load->view('admin/home',$data);
	}

	public function chapter($id_manga)
	{
		$data['detail']=$this->admin_model->getMangaTitle($id_manga);

		$this->load->view('admin/chapter',$data);
	}

	public function page($id_manga,$chapter)
	{
		$data['detail']=$this->admin_model->getMangaTitle($id_manga);

		$this->load->view('admin/page',$data);
	}

	public function getManga()
	{
		$data=$this->admin_model->getAllManga();
        echo json_encode($data);
	}

	public function getChapter()
	{
		$id_manga = $this->input->post('id_manga');
		$data=$this->admin_model->getAllChapter($id_manga);
        echo json_encode($data);
	}

	public function getPage()
	{
		$id_manga = $this->input->post('id_manga');
		$chapter = $this->input->post('chapter');
		$data=$this->admin_model->getAllPage($id_manga,$chapter);
        echo json_encode($data);
	}

	public function check()
	{
		$id_manga = $this->input->post('idM');
		$checkBox = $this->input->post('genre_check');
		$n = count($checkBox);
		for ($i=0; $i<$n; $i++){
			// if (isset($this->input->post('genre_check')[$i]){
		    	$ceklish = $checkBox[$i];
		    	$this->admin_model->saveGenre($id_manga,$ceklish);
			// }
		}
	}

	public function getGenre()
	{
		$id_manga = $this->input->post('id_manga');
		$data=$this->admin_model->getGenre($id_manga);
        echo json_encode($data);
	}

	public function getMangaId()
	{
		$title = $this->input->post('title');
		$data=$this->admin_model->getMangaId($title);
		echo json_encode($data);
	}

	public function recomend_manga()
	{
		$id_manga = $this->input->post('id_manga');
		$this->admin_model->unrecomend();
		$data = $this->admin_model->recomend($id_manga);
		echo json_encode($data);
	}

	public function delete_manga()
	{
		$id_manga = $this->input->post('id_manga');
		$title = $this->input->post('title');
		$dir = './assets/images/manga/'.$title;
		$this->delTree($dir);
		// $data = $this->admin_model->delete($id_manga);
		echo json_encode($data);
	}

	function delTree($dir)
    { 
        $files = array_diff(scandir($dir), array('.', '..')); 

        foreach ($files as $file) { 
            (is_dir("$dir/$file")) ? delTree("$dir/$file") : unlink("$dir/$file"); 
        }

        return rmdir($dir); 
    }

	public function delete_chapter()
	{
		$id_manga = $this->input->post('id_manga');
		$chapter = $this->input->post('chapter');
		$title = $this->input->post('title');
		$dir = './assets/images/manga/'.$title.'/'.$title.' '.$chapter;
		$this->delTree($dir);
		$data = $this->admin_model->delete_chapter($id_manga,$chapter);
		echo json_encode($data);
	}

	public function upload_manga()
	{
		$config['upload_path']="./assets/images/cover"; //path folder file upload
		$config['allowed_types']='gif|jpg|png'; //type file yang boleh di upload

		$this->load->library('upload', $config); //call library upload
		if ($this->upload->do_upload("file")){ //upload file
			$data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload

			$title = $this->input->post('title'); //get title
			$alt_name = $this->input->post('alt_name'); //get alt_name
			$author = $this->input->post('author'); //get author
			$year = $this->input->post('year'); //get year
			$status = $this->input->post('status'); //get status
			$description = $this->input->post('description'); //get description
			$image = $data['upload_data']['file_name']; //set file name ke variable image
			$key = $this->input->post('key');

			$this->admin_model->save_manga($title,$alt_name,$author,$year,$status,$description,$image); //kirim value ke model admin_model	
			if (!is_dir('./assets/images/manga/'.$title.'/')) {
			    mkdir('./assets/images/manga/'.$title.'/', 0777, TRUE);
			}
		}
	}

	public function edit_manga()
	{
		$id_manga = $this->input->post('id_manga_edit'); //get id_manga
		$title = $this->input->post('title_edit'); //get title
		$alt_name = $this->input->post('alt_name_edit'); //get alt_name
		$author = $this->input->post('author_edit'); //get author
		$year = $this->input->post('year_edit'); //get year
		$status = $this->input->post('status_edit'); //get status
		$description = $this->input->post('description_edit'); //get description
		$hapus = $this->input->post('lcover'); //get lcover

		$config['upload_path']="./assets/images/cover"; //path folder file upload
		$config['allowed_types']='gif|jpg|png'; //type file yang boleh di upload

		$this->load->library('upload', $config); //call library upload
		if ($this->upload->do_upload("file")){ //upload file
			$data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload

			$image = $data['upload_data']['file_name']; //set file name ke variable image

			$this->admin_model->edit_manga($id_manga,$title,$alt_name,$author,$year,$status,$description,$image);
			unlink('./assets/images/cover/'.$hapus);
		}
		else {
			$this->admin_model->edit_manga($id_manga,$title,$alt_name,$author,$year,$status,$description,$hapus);
		}
		$this->admin_model->delete_genre($id_manga);
		$checkBox = $this->input->post('genre_check');
		$n = count($checkBox);
		for ($i=0; $i<$n; $i++){
			// if (isset($this->input->post('genre_check')[$i]){
		    	$ceklish = $checkBox[$i];
		    	$this->admin_model->saveGenre($id_manga,$ceklish);
			// }
		}
	}

	public function upload_page()
	{
		$id_manga = $this->input->post('idManga');
		$chapter = $this->input->post('cpt');
		$title = $this->input->post('tite');
		$loop = $this->input->post('loop');
		if (!is_dir('./assets/images/manga/'.$title.'/'.$title.' '.$chapter.'/')) {
		    mkdir('./assets/images/manga/'.$title.'/'.$title.' '.$chapter.'/', 0777, TRUE);
		}

		$config['upload_path']="./assets/images/manga/".$title."/".$title." ".$chapter; //path folder file upload
		$config['allowed_types']='gif|jpg|png'; //type file yang boleh di upload

		$this->load->library('upload', $config); //call library upload
		for ($i=1; $i <=$loop ; $i++) { 
            if ($this->upload->do_upload("file".$i)){ //upload file
				$data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload

				$image = $data['upload_data']['file_name']; //set file name ke variable image

				$this->admin_model->save_chapter($id_manga,$chapter,$i,$image); //kirim value ke model admin_model	
			}
        }
	}

	public function edit_page()
	{
		$id_manga = $this->input->post('id_manga_edit');
		$chapter = $this->input->post('chapter_edit');
		$title = $this->input->post('title_edit');
		$page = $this->input->post('page_edit');
		$limage = $this->input->post('limage_edit');

		unlink("./assets/images/manga/".$title."/".$title." ".$chapter."/".$limage);

		$config['upload_path']="./assets/images/manga/".$title."/".$title." ".$chapter; //path folder file upload
		$config['allowed_types']='gif|jpg|png'; //type file yang boleh di upload

		$this->load->library('upload', $config); //call library upload
        if ($this->upload->do_upload("file")){ //upload file
			$data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload

			$image = $data['upload_data']['file_name']; //set file name ke variable image

			$this->admin_model->edit_page($id_manga,$chapter,$page,$image); //kirim value ke model admin_model	
		}
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */