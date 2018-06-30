<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Custom_model extends CI_Model {

	function simpan_upload($judul,$tempat,$provinsi,$image,$deskripsi)
	{
		$data = array(
				'judul' => $judul,
				'tempat' => $tempat,
				'provinsi' => $provinsi,
				'gambar' => $image,
				'deskripsi' => $deskripsi
			);
		$result = $this->db->insert('wisata', $data);
		return $result;
	}

	function simpan($judul,$tempat,$provinsi,$deskripsi)
	{
		$data = array(
				'judul' => $judul,
				'tempat' => $tempat,
				'provinsi' => $provinsi,
				'deskripsi' => $deskripsi
			);
		$result = $this->db->insert('wisata', $data);
		return $result;
	}

	public function readWisata()
	{
		$query = $this->db->get('wisata');
		return $query->result();
	}

	//membuat (method/function untuk) ambil data wisata by id
	public function getWisata($id)
	{
		//fungsi ini untuk menampilkan data sesuai data yang kita pilih dengan parameternya id,
		//code diatas sama seperti SELECT * FROM wisata WHERE id = '$id'
		$this->db->where('id', $id);
		$query = $this->db->get('wisata');
		return $query->result();
		return $query->row();

	}

	public function UpdateWith($id,$judul,$tempat,$provinsi,$image,$deskripsi)
	{
		$data = array(
				'judul' => $judul,
				'tempat' => $tempat,
				'provinsi' => $provinsi,
				'gambar' => $image,
				'deskripsi' => $deskripsi
		);
		$this->db->where('id', $id);
		$this->db->update('wisata', $data);
	}

	public function delete($id)
	{
		$row = $this->db->where('id', $id)->get('wisata')->row();
		$this->db->where('id', $id);
		$this->db->delete('wisata');
		unlink('./assets/images/'.$row->gambar);
	}

	public function totalRecord()
	{
		$query = $this->db->get('wisata');
		$total = $query->num_rows();
		return $total;
	}

	public function top7()
	{
		$this->db->order_by('tanggal', 'desc');
		$query = $this->db->get('wisata', 7);
		return $query->result();
	}

	public function getWisataObject($jumlah,$offset)
	{
		$query=$this->db->get('wisata',$jumlah,$offset);
		return $query->result();
	}

}

/* End of file Custom_model.php */
/* Location: ./application/models/Custom_model.php */