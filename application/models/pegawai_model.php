<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	
	public function insertPegawai()
	{
		$object = array
		('nama' =>$this->input->post('nama'),
			'nip' =>$this->input->post('nip'),
			'tanggal' =>$this->input->post('tanggal'),
			'alamat' =>$this->input->post('alamat'));
		$this->db->insert('pegawai', $object);
	}

	public function readPegawai()
	{
		$query = $this->db->get('pegawai');
		return $query->result();
	}

	//membuat (method/function untuk) ambil data pegawai by id
	public function getPegawai($id)
	{
		//fungsi ini untuk menampilkan data sesuai data yang kita pilih dengan parameternya id,
		//code diatas sama seperti SELECT * FROM pegawai WHERE id = '$id'
		$this->db->where('id', $id);
		$query = $this->db->get('pegawai');
		return $query->result();
		return $query->row();

	}

	public function UpdateById($id)
	{
		$data = array
		(
			'nama' =>$this->input->post('nama'),
			'nip' =>$this->input->post('nip'),
			'tanggal' =>$this->input->post('tanggal'),
			'alamat' =>$this->input->post('alamat')
		);
		$this->db->where('id', $id);
		$this->db->update('pegawai', $data);
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('pegawai');
	}

}

/* End of file pegawai_model.php */
/* Location: ./application/models/pegawai_model.php */