<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
	}
	public function index()
	{
		$judul['atas'] = "Dashboard Of Administrator";
		$judul['menuatas'] = "Beranda";
		$data['s'] = $this->db->get('siswa')->num_rows();
		$data['g'] = $this->db->get('guru')->num_rows();
		$data['k'] = $this->db->get('kelas')->num_rows();
		$this->load->view('template/header', $judul);
		$this->load->view('beranda', $data);
		$this->load->view('template/footer');
	}

	public function siswa()
	{
		$judul['atas'] = " Student Of System Analyst";
		$judul['menuatas'] = "System Analyst Student";
		$this->load->view('template/header', $judul);
		$this->load->view('siswa');
		$this->load->view('template/footer');
	}

	public function guru()
	{
		$judul['atas'] = "Lecture Of SI";
		$judul['menuatas'] = "System Analyst Lecture";
		$this->load->view('template/header', $judul);
		$this->load->view('guru');
		$this->load->view('template/footer');
	}

	public function kelas()
	{
		$judul['atas'] = "Class Of System Analyst";
		$judul['menuatas'] = "System Analyst Grade";
		$this->load->view('template/header', $judul);
		$this->load->view('kelas');
		$this->load->view('template/footer');
	}

	// bagian yang saya perbaiki
	// 
	public function tahunajaran()
	{
		// kuperbaiki cara penulisannya
		$judul = [
			"atas" => "System Analyst School year",
			"menuatas" => "School Year "
		];
		// saya rapikan untuk datanya
		$data = [
			"th" => $this->Admin_model->tampildata('tahun_pelajaran', 'id_tahun_pelajaran')
		];

		$this->load->view('template/header', $judul);
		$this->load->view('tahunajaran', $data);
		$this->load->view('template/footer');
	}
	public function tambah_th()
	{
		$judul['atas'] = "Form Add Scholl Year";
		$judul['menuatas'] = "Form Add Scholl Year";
		$this->load->view('template/header', $judul);
		$this->load->view('form_th');
		$this->load->view('template/footer');
	}
	public function simpan_th()
	{
		$this->form_validation->set_rules('th', 'Tahun Ajaran', 'required');
		if ($this->form_validation->run() == FALSE) {
			$judul = [
				'atas' => "Form Add Scholl Year",
				'menuatas' => "Form Add Scholl Year"
			];
			$this->load->view('template/header', $judul);
			$this->load->view('form_th');
			$this->load->view('template/footer');
		} else {
			$data = array(
				'tahun_pelajaran' => $this->input->post('th')
			);
			$query = $this->Admin_model->simpandata('tahun_pelajaran', $data);

			if ($query) {
				// yang bener pakai $this->session->set_flashdata() bukan $this->session->set->flashdata()
				$this->session->set_flashdata('info', 'Data Tahun Pelajaran Berhasil Tersimpan');
				redirect('admin/tahunajaran');
			} else {
				$this->session->set_flasdata(
					'info',
					'Data Tahun Pelajaran Gagal Tersimpan'
				);
				redirect('admin/tahunajaran');
			}
		}
	}
}
