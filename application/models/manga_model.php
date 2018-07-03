<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manga_model extends CI_Model {

	public function rekomendasi()
	{
		$this->db->where('is_recomended', 1);
		$query = $this->db->get('manga');
		return $query->result();
	}

	public function all_manga()
	{
		$this->db->select('*');
		$this->db->from('manga');
		$query = $this->db->get();
		return $query->result();
	}

	public function genre_rec()
	{
		$this->db->select('g.genre');
		$this->db->from('genre_manga as gm');
		$this->db->join('manga as m', 'm.id_manga = gm.id_manga');
		$this->db->join('genre as g', 'gm.id_genre = g.id_genre');
		$this->db->where('m.is_recomended', 1);
		$query = $this->db->get();
		return $query->result();
	}

	public function genre($id_manga)
	{
		$this->db->select('g.genre');
		$this->db->from('genre_manga as gm');
		$this->db->join('genre as g', 'gm.id_genre = g.id_genre');
		$this->db->where('gm.id_manga', $id_manga);
		$query = $this->db->get();
		return $query->result();
	}

	public function latestChapter()
	{
		$this->db->select('isi_manga.id_manga,title,chapter,date_posted,cover');
		$this->db->from('isi_manga');
		$this->db->join('manga', 'isi_manga.id_manga = manga.id_manga');
		$this->db->group_by('isi_manga.id_manga,chapter');
		$this->db->order_by('date_posted', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function manga_detail($id_manga)
	{
		$this->db->where('id_manga', $id_manga);
		$query = $this->db->get('manga');
		return $query->result();
	}

	public function manga_chapter($id_manga)
	{
		$this->db->select('id_manga,chapter,date_posted');
		$this->db->from('isi_manga');
		$this->db->where('id_manga', $id_manga);
		$this->db->group_by('chapter');
		$this->db->order_by('chapter', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_chapter($id_manga)
	{
		$this->db->select('id_manga,chapter');
		$this->db->from('isi_manga');
		$this->db->where('id_manga', $id_manga);
		$this->db->group_by('chapter');
		$query = $this->db->get();
		return $query->result();
	}

	public function manga_page($id_manga,$chapter)
	{
		$this->db->select('isi_manga.id_manga,chapter,page,image,title');
		$this->db->from('isi_manga');
		$this->db->join('manga', 'isi_manga.id_manga = manga.id_manga');
		$this->db->where('isi_manga.id_manga', $id_manga);
		$this->db->where('chapter', $chapter);
		$this->db->order_by('page');
		$query = $this->db->get();
		return $query->result();
	}

	public function alter($id,$chapter,$page)
	{
		$this->db->select('id_manga,chapter,page,image');
		$this->db->from('isi_manga');
		$this->db->where('id_manga', $id);
		$this->db->where('chapter', $chapter);
		$this->db->where('page', $page);
		$this->db->order_by('page');
		$query = $this->db->get();
		return $query->result();
	}

	public function alterChapter($id,$chapter)
	{
		$this->db->select('id_manga,chapter,page,image');
		$this->db->from('isi_manga');
		$this->db->where('id_manga', $id);
		$this->db->where('chapter', $chapter);
		$this->db->order_by('page');
		$query = $this->db->get();
		return $query->result();
	}

	public function alterPrev($id,$chapter)
	{
		$this->db->select('id_manga,chapter,page,image');
		$this->db->from('isi_manga');
		$this->db->where('id_manga', $id);
		$this->db->where('chapter', $chapter);
		$this->db->order_by('page', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function getPage($id,$chapter)
	{
		$this->db->select('page');
		$this->db->from('isi_manga');
		$this->db->where('id_manga', $id);
		$this->db->where('chapter', $chapter);
		$this->db->order_by('page');
		$query = $this->db->get();
		return $query->result();
	}

	public function dateChapter($id,$chapter)
	{
		$this->db->select('date_posted');
		$this->db->from('isi_manga');
		$this->db->where('id_manga', $id);
		$this->db->where('chapter', $chapter);
		$this->db->group_by('chapter');
		$query = $this->db->get();
		return $query->result();
	}

}

/* End of file manga_model.php */
/* Location: ./application/models/manga_model.php */