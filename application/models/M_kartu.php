<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_kartu extends CI_Model
{
	public function tampil()
	{
		return $this->db->get('kartu')->result();
	}

	public function cari($no_kk)
	{
		$this->db->where('no_kk', $no_kk);
		$query = $this->db->get('kartu');
		if ($query->num_rows() > 0) {
			return false;
		} else {
			return true;
		}
	}

	public function tambah($data)
	{
		return $this->db->insert('kartu', $data);
	}

	public function edit($no_kk)
	{
		$this->db->where('no_kk', $no_kk);
		return $this->db->get('kartu')->row();
	}

	public function proses_edit($where, $data)
	{
		$this->db->where($where);
		return $this->db->update('kartu', $data);
	}

	public function hapus($no_kk)
	{
		$this->db->where('no_kk', $no_kk);
		return $this->db->delete('kartu');
	}
	public function detail($no_kk = NULL)
	{
		$query = $this->db->get_where('kartu', array('no_kk' => $no_kk))->row();
		return $query;
	}
}