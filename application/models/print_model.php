<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Print_model extends CI_Model {

	public function view($id_manga, $chapter)
		{
			$this->db->select('*');
			$this->db->from('isi_manga');
			$this->db->where('id_manga', $id_manga);
			$this->db->where('chapter', $chapter);
			$query = $this->db->get();
			return $query->result();
		}	

	public function getTitle($id_manga)
	{
		$this->db->select('title');
			$this->db->from('manga');
			$this->db->where('id_manga', $id_manga);
			$query = $this->db->get();
			return $query->result();
	}

}

/* End of file print_model.php */
/* Location: ./application/models/print_model.php */