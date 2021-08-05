<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kartu extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('login') == FALSE) {
			redirect(base_url("login"));
		}
		$this->load->model('m_kartu');
		$this->load->library('form_validation');
	}

	public function tampil() {
		$data['title'] = "Data Kartu Keluarga - Desa Suci";
		$data['kartu'] = $this->m_kartu->tampil();

		$mutasi = $this->load->view('header', $data);
		$this->load->view('kartu/tampil_kartu');
		$this->load->view('footer');
	}

	public function tampil_kartu() {
		$data['title'] = "Data Kartu Keluarga - Desa Suci";
		$data['kartu'] = $this->m_kartu->tampil();

		$mutasi = $this->load->view('header', $data);
		$this->load->view('kartu/tampil_kartu2');
		$this->load->view('footer');
	}

	public function tambah() {
		$data['title'] = "Tambah kartu - Desa Suci";

		$this->load->view('header', $data);
		$this->load->view('kartu/tambah_kartu');
		$this->load->view('footer');
	}

	public function proses_tambah() {

		$no_kk = $this->input->post('no_kk');
		$nik = $this->input->post('nik');
		$kepala_keluarga = $this->input->post('kepala_keluarga');
		$alamat = $this->input->post('alamat');
		$jenis_kelamin = $this->input->post('jenis_kelamin');

		$data = array(	
			'no_kk' => $no_kk,
			'nik' => $nik,
			'kepala_keluarga' => $kepala_keluarga,
			'alamat' => ucwords($alamat),
			'jenis_kelamin' => $jenis_kelamin,
		);
		$this->m_kartu->tambah($data);

		$this->session->set_flashdata('sukses', 'Data Dengan NO. KK ' . $no_kk . ' berhasil ditambahkan.');
		redirect(base_url('kartu/tampil'));
	}

	public function edit($no_kk) {
		$data['title'] = "Edit kartu - Desa Suci";
		$data['kartu'] = $this->m_kartu->edit($no_kk);

		$this->load->view('header', $data);
		$this->load->view('kartu/edit_kartu');
		$this->load->view('footer');
	}

	public function proses_edit() {
		$no_kk = $this->input->post('no_kk');
		$nik = $this->input->post('nik');
		$kepala_keluarga = $this->input->post('kepala_keluarga');
		$alamat = $this->input->post('alamat');
		$jenis_kelamin = $this->input->post('jenis_kelamin');

		$data = array(	
			'no_kk' => $no_kk,
			'nik' => $nik,
			'kepala_keluarga' => $kepala_keluarga,
			'alamat' => ucwords($alamat),
			'jenis_kelamin' => $jenis_kelamin,
		);
		$where = array(
			'no_kk' => $no_kk,
		);
		$this->m_kartu->proses_edit($where, $data);

		$this->session->set_flashdata('sukses', 'Data Dengan NO. KK ' . $no_kk . ' berhasil diedit.');
		redirect(base_url('kartu/tampil/' . $no_kk));
	}

	public function hapus($no_kk) {
		$this->m_kartu->hapus($no_kk);
		$this->session->set_flashdata('sukses', 'Data Dengan NO. KK ' . $no_kk . ' berhasil dihapus.');
		redirect(base_url('kartu/tampil'));
	}

	public function detail($no_kk) {

		$data['title'] = "Detail Kartu Keluarga - Desa Suci";
		$this->load->model('m_kartu');
		$detail = $this->m_kartu->detail($no_kk);
		$data['detail'] = $detail;
		$this->load->view('header', $data);
		$this->load->view('kartu/detail_kartu', $data);
		$this->load->view('footer');
	}

}