<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function getAllGenre()
	{
		$query=$this->db->get('genre');
       	return $query->result();
	}

	public function getAllUser()
	{
		$query=$this->db->get('user');
       	return $query->result();
	}

	public function getGenre($id_manga)
	{
		$this->db->where('id_manga', $id_manga);
		$query=$this->db->get('genre_manga');
       	return $query->result();
	}

	public function getAllChapter($id_manga)
	{
		$this->db->select('id_manga,chapter');
		$this->db->from('isi_manga');
		$this->db->where('id_manga', $id_manga);
		$this->db->group_by('chapter');
		$query=$this->db->get();
       	return $query->result();
	}

	public function getAllManga()
	{
		$query=$this->db->get('manga');
       	return $query->result();
	}

	public function checkChapter($id_manga,$chapter)
	{
		$this->db->select('*');
		$this->db->from('isi_manga');
		$this->db->where('id_manga', $id_manga);
		$this->db->where('chapter', $chapter);
		$query = $this->db->get();
		if ($query->num_rows()>=1) {
			return $query->result();
		}else{
			return false;
		}
	}

	public function checkTitle($title)
	{
		$this->db->select('*');
		$this->db->from('manga');
		$this->db->where('title', $title);
		$query = $this->db->get();
		if ($query->num_rows()>=1) {
			return $query->result();
		}else{
			return false;
		}
	}

	public function getAllPage($id_manga,$chapter)
	{
		$this->db->where('id_manga', $id_manga);
		$this->db->where('chapter', $chapter);
		$this->db->order_by('page');
		$query=$this->db->get('isi_manga');
       	return $query->result();
	}

	public function getMangaTitle($id_manga)
	{
		$this->db->where('id_manga', $id_manga);
		$query=$this->db->get('manga');
       	return $query->result();
	}

	public function getMangaId($title)
	{
		$this->db->select('id_manga');
		$this->db->from('manga');
		$this->db->where('title', $title);
		$query = $this->db->get();
		return $query->result();
	}

	public function saveGenre($id_m,$id_g)
	{
		$data = array(
			'id_manga' => $id_m,
	        'id_genre' => $id_g
		);

		$result = $this->db->insert('genre_manga', $data);
		return $result;
	}

	public function delete_genre($id_manga)
	{
		$this->db->where('id_manga', $id_manga);
		$result = $this->db->delete('genre_manga');
		return $result;
	}

	public function save_manga($title,$alt_name,$author,$year,$status,$description,$image){
        $data = array(
                'title'  => $title, 
                'alt_name'  => $alt_name, 
                'author' => $author, 
                'year' => $year,
                'status' => $status,
                'description' => $description,
                'cover' => $image,
            );
        $result=$this->db->insert('manga',$data);
        return $result;
    }	

    public function edit_manga($id_manga,$title,$alt_name,$author,$year,$status,$description,$image){
        $data = array(
                'title'  => $title, 
                'alt_name'  => $alt_name, 
                'author' => $author, 
                'year' => $year,
                'status' => $status,
                'description' => $description,
                'cover' => $image,
            );
        $this->db->where('id_manga', $id_manga);
        $result=$this->db->update('manga',$data);
        return $result;
    }

    public function save_chapter($id_manga,$chapter,$page,$image){
        $data = array(
                'id_manga'  => $id_manga, 
                'chapter'  => $chapter, 
                'page' => $page, 
                'image' => $image,
            );
        $result=$this->db->insert('isi_manga',$data);
        return $result;
    }

    public function edit_page($id_manga,$chapter,$page,$image){
        $data = array(
                'image' => $image,
            );
        $this->db->where('id_manga', $id_manga);
        $this->db->where('chapter', $chapter);
        $this->db->where('page', $page);
        $result=$this->db->update('isi_manga',$data);
        return $result;
    }

    public function unrecomend()
	{
		$data = array(
				'is_recomended' => 0
		);
		$this->db->update('manga', $data);
	}

    public function recomend($id_manga)
	{
		$data = array(
				'is_recomended' => 1
		);
		$this->db->where('id_manga', $id_manga);
		$result = $this->db->update('manga', $data);
		return $result;
	}

	public function promote($id_user)
	{
		$data = array(
				'is_admin' => 1,
				'is_suspended' => 0
		);
		$this->db->where('id_user', $id_user);
		$result = $this->db->update('user', $data);
		return $result;
	}

	public function dismiss($id_user)
	{
		$data = array(
				'is_admin' => 0
		);
		$this->db->where('id_user', $id_user);
		$result = $this->db->update('user', $data);
		return $result;
	}

	public function suspend($id_user)
	{
		$data = array(
				'is_suspended' => 1
		);
		$this->db->where('id_user', $id_user);
		$result = $this->db->update('user', $data);
		return $result;
	}

	public function revoke($id_user)
	{
		$data = array(
				'is_suspended' => 0
		);
		$this->db->where('id_user', $id_user);
		$result = $this->db->update('user', $data);
		return $result;
	}

    public function delete($id_manga)
	{
		$row = $this->db->where('id_manga', $id_manga)->get('manga')->row();
		$this->db->where('id_manga', $id_manga);
		$this->db->delete('genre_manga');
		$this->db->where('id_manga', $id_manga);
		$this->db->delete('isi_manga');
		$this->db->where('id_manga', $id_manga);
		$result = $this->db->delete('manga');
		unlink('./assets/images/cover/'.$row->cover);
		return $result;
	}

	public function delete_chapter($id_manga,$chapter)
	{
		$this->db->where('id_manga', $id_manga);
		$this->db->where('chapter', $chapter);
		$result = $this->db->delete('isi_manga');
		return $result;
	}

}

/* End of file admin_model.php */
/* Location: ./application/models/admin_model.php */