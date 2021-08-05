<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('login') == FALSE) {
			redirect(base_url("login"));
		}
		$this->load->model('m_skck');
		$this->load->model('m_penghasilan');
		$this->load->model('m_domisili');
    }
	
	public function skck()
	{
		if ($this->uri->segment('3') == "tambah") {
			if ($this->input->post('tambah_skck')) {
				$data = array(
					'nik' => $this->input->post('nik'),
					'id_pejabat' => $this->input->post('pejabat'),
					'tanggal_skck' => date('Y-m-d'),
				);
				$this->m_skck->tambah_skck($data);
				$this->session->set_flashdata('sukses', 'Data berhasil ditambahkan.');
				redirect(base_url('surat/skck/'));
			} else {
				$data['title'] = "Surat Keterangan SKCK - Desa Suci";
				$data['penduduk'] = $this->m_skck->penduduk();
				$data['pejabat'] = $this->m_skck->pejabat();
				$this->load->view('header', $data);
				$this->load->view('surat/tambah_skck', $data);
				$this->load->view('footer');
			}
		} elseif ($this->uri->segment('3') == "edit") {
			if ($this->input->post('edit_skck')) {
				$data = array(
					'nik' => $this->input->post('nik'),
					'id_pejabat' => $this->input->post('pejabat'),
				);
				$where = array(
					'id_skck' => $this->input->post('id'),
				);
				$this->m_skck->proses_edit_skck($where, $data);
				$this->session->set_flashdata('sukses', 'Data berhasil diedit.');
				redirect(base_url('surat/skck/'));
			} else {
				$data['title'] = "Surat Keterangan SKCK - Desa Suci";
				$data['penduduk'] = $this->m_skck->penduduk();
				$data['pejabat'] = $this->m_skck->pejabat();
				$data['skck'] = $this->m_skck->edit_skck($this->uri->segment('4'));
				$this->load->view('header', $data);
				$this->load->view('surat/edit_skck', $data);
				$this->load->view('footer');
			}
		} elseif ($this->uri->segment('3') == "cetak") {
			$data['skck'] = $this->m_skck->cetak_skck($this->uri->segment('4'));
			$this->load->view('surat/cetak_skck', $data);
		} elseif ($this->uri->segment('3') == "hapus") {
			$this->m_skck->hapus_skck($this->uri->segment('4'));
			$this->session->set_flashdata('sukses', 'Data berhasil dihapus.');
			redirect(base_url('surat/skck'));
		} else {
			$data['title'] = "Surat Keterangan SKCK - Desa Suci";
			$data['surat'] = $this->m_skck->daftar_skck();
			$mutasi = $this->load->view('header', $data);
			$this->load->view('surat/daftar_skck');
			$this->load->view('footer');
		}
	}

	public function penghasilan()
	{
		if ($this->uri->segment('3') == "tambah") {
			if ($this->input->post('tambah_penghasilan')) {
				$data = array(
					'nik' => $this->input->post('nik'),
					'id_pejabat' => $this->input->post('pejabat'),
					'jumlah_penghasilan' => $this->input->post('jumlah'),
					'keperluan_penghasilan' => $this->input->post('keperluan'),
					'tanggal_penghasilan' => date('Y-m-d'),
				);
				$this->m_penghasilan->tambah_penghasilan($data);
				$this->session->set_flashdata('sukses', 'Data berhasil ditambahkan.');
				redirect(base_url('surat/penghasilan/'));
			} else {
				$data['title'] = "Surat Keterangan Penghasilan - Desa Suci";
				$data['penduduk'] = $this->m_penghasilan->penduduk();
				$data['pejabat'] = $this->m_penghasilan->pejabat();
				$this->load->view('header', $data);
				$this->load->view('surat/tambah_penghasilan', $data);
				$this->load->view('footer');
			}
		} elseif ($this->uri->segment('3') == "edit") {
			if ($this->input->post('edit_penghasilan')) {
				$data = array(
					'nik' => $this->input->post('nik'),
					'id_pejabat' => $this->input->post('pejabat'),
					'jumlah_penghasilan' => $this->input->post('jumlah'),
					'keperluan_penghasilan' => $this->input->post('keperluan'),
				);
				$where = array(
					'id_penghasilan' => $this->input->post('id'),
				);
				$this->m_penghasilan->proses_edit_penghasilan($where, $data);
				$this->session->set_flashdata('sukses', 'Data berhasil diedit.');
				redirect(base_url('surat/penghasilan/'));
			} else {
				$data['title'] = "Surat Keterangan Penghasilan - Desa Suci";
				$data['penduduk'] = $this->m_penghasilan->penduduk();
				$data['pejabat'] = $this->m_penghasilan->pejabat();
				$data['penghasilan'] = $this->m_penghasilan->edit_penghasilan($this->uri->segment('4'));
				$this->load->view('header', $data);
				$this->load->view('surat/edit_penghasilan', $data);
				$this->load->view('footer');
			}
		} elseif ($this->uri->segment('3') == "cetak") {
			$data['penghasilan'] = $this->m_penghasilan->cetak_penghasilan($this->uri->segment('4'));
			$this->load->view('surat/cetak_penghasilan', $data);
		} elseif ($this->uri->segment('3') == "hapus") {
			$this->m_penghasilan->hapus_penghasilan($this->uri->segment('4'));
			$this->session->set_flashdata('sukses', 'Data berhasil dihapus.');
			redirect(base_url('surat/penghasilan'));
		} else {
			$data['title'] = "Surat Keterangan Penghasilan - Desa Suci";
			$data['surat'] = $this->m_penghasilan->daftar_penghasilan();
			$mutasi = $this->load->view('header', $data);
			$this->load->view('surat/daftar_penghasilan');
			$this->load->view('footer');
		}
	}

	public function domisili()
	{
		if ($this->uri->segment('3') == "tambah") {
			if ($this->input->post('tambah_domisili')) {
				$data = array(
					'nik' => $this->input->post('nik'),
					'no_surat_rt' => $this->input->post('pengantar'),
					'id_pejabat' => $this->input->post('pejabat'),
					'tanggal_domisili' => date('Y-m-d'),
				);
				$this->m_domisili->tambah_domisili($data);
				$this->session->set_flashdata('sukses', 'Data berhasil ditambahkan.');
				redirect(base_url('surat/domisili/'));
			} else {
				$data['title'] = "Surat Keterangan Domisili - Desa Suci";
				$data['penduduk'] = $this->m_domisili->penduduk();
				$data['pejabat'] = $this->m_domisili->pejabat();
				$this->load->view('header', $data);
				$this->load->view('surat/tambah_domisili', $data);
				$this->load->view('footer');
			}
		} elseif ($this->uri->segment('3') == "edit") {
			if ($this->input->post('edit_domisili')) {
				$data = array(
					'nik' => $this->input->post('nik'),
					'id_pejabat' => $this->input->post('pejabat'),
					'no_surat_rt' => $this->input->post('pengantar'),
				);
				$where = array(
					'id_domisili' => $this->input->post('id'),
				);
				$this->m_domisili->proses_edit_domisili($where, $data);
				$this->session->set_flashdata('sukses', 'Data berhasil diedit.');
				redirect(base_url('surat/domisili/'));
			} else {
				$data['title'] = "Surat Keterangan Domisili - Desa Suci";
				$data['penduduk'] = $this->m_domisili->penduduk();
				$data['pejabat'] = $this->m_domisili->pejabat();
				$data['domisili'] = $this->m_domisili->edit_domisili($this->uri->segment('4'));
				$this->load->view('header', $data);
				$this->load->view('surat/edit_domisili', $data);
				$this->load->view('footer');
			}
		} elseif ($this->uri->segment('3') == "cetak") {
			$data['domisili'] = $this->m_domisili->cetak_domisili($this->uri->segment('4'));
			$this->load->view('surat/cetak_domisili', $data);
		} elseif ($this->uri->segment('3') == "hapus") {
			$this->m_domisili->hapus_domisili($this->uri->segment('4'));
			$this->session->set_flashdata('sukses', 'Data berhasil dihapus.');
			redirect(base_url('surat/domisili'));
		} else {
			$data['title'] = "Surat Keterangan Domisili - Desa Suci";
			$data['surat'] = $this->m_domisili->daftar_domisili();
			$mutasi = $this->load->view('header', $data);
			$this->load->view('surat/daftar_domisili');
			$this->load->view('footer');
		}
	}

}