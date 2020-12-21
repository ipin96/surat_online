<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_keluar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');

		$this->load->model(['Surat_keluar_model', 'Surat_masuk_model']);

		if ($this->session->userdata('status') != 'AKTIF') {
			$this->session->set_flashdata('message_warning', 'Anda harus login terlebih dahulu');
			redirect('login','refresh');
		}
	}

	// List all your items
	public function index()
	{
		$data 		= [
			'surat_keluar'	=> $this->Surat_keluar_model->get_surat_orderBy_tanggal_surat()
		];
		$title 		= "DATA SURAT KELUAR";
		$content	= $this->load->view('surat_keluar/index', $data, TRUE);
		$this->load->view('layouts/master', compact('title', 'content'));
	}

	public function form()
	{
		$data 		= [];
		$title 		= "FORM SURAT KELUAR";
		$content	= $this->load->view('surat_keluar/form', $data, TRUE);
		$this->load->view('layouts/master', compact('title', 'content'));
	}

	public function find($id)
	{
		$data 		= [
			'find_data' => $this->Surat_keluar_model->find($id)
		];
		$title 		= "FORM EDIT SURAT KELUAR";
		$content	= $this->load->view('surat_keluar/edit', $data, TRUE);
		$this->load->view('layouts/master', compact('title', 'content'));
	}

	// Add a new item
	public function add()
	{
		$this->rules();

		if ($this->form_validation->run() == FALSE) {
			
			$data 		= [];
			$title 		= "FORM SURAT KELUAR";
			$content	= $this->load->view('surat_keluar/form', $data, TRUE);
			$this->load->view('layouts/master', compact('title', 'content'));

		} else {
			$this->Surat_keluar_model->save($this->input->post());
			$this->session->set_flashdata('message_success', 'Data berhasil disimpan');
			redirect('surat_keluar','refresh');
		}
	}

	//Update one item
	public function update($id)
	{
		$this->rules();

		if ($this->form_validation->run() == FALSE) {

			$data 		= [
				'find_data' => $this->Surat_keluar_model->find($id)
			];
			$title 		= "FORM EDIT SURAT KELUAR";
			$content	= $this->load->view('surat_keluar/edit', $data, TRUE);
			$this->load->view('layouts/master', compact('title', 'content'));

		}else{
			$this->Surat_keluar_model->update($id, $this->input->post());
			$this->session->set_flashdata('message_info', 'Data berhasil diubah');
			redirect('surat_keluar','refresh');
		}
	}

	//Delete one item
	public function delete($id)
	{
		$this->Surat_keluar_model->delete($id);
		$this->session->set_flashdata('message_info', 'Data berhasil dihapus');
		redirect('surat_keluar','refresh');
	}

	public function ajaxDetail($sifat_surat)
	{
		$convert_url = str_replace('%20', ' ', $sifat_surat);

		$data['surat_masuk'] = $this->Surat_masuk_model->get_surat_with_sifat_surat($convert_url); 
		$this->load->view('surat_keluar/ajaxDetail', $data);
	}

	public function rules()
	{
		$this->form_validation->set_rules('tgl_surat', 'Tanggal surat', 
			'trim|required', ['required' => '%s harus diisi']);
		$this->form_validation->set_rules('perihal', 'Perihal surat', 
			'trim|required', ['required' => '%s harus diisi']);
		$this->form_validation->set_rules('sifat', '', 
			'callback_select_sifat');
	}

	public function select_sifat($sifat)
	{
		if ($sifat == '') {
			$this->form_validation->set_message('select_sifat', 'Sifat surat belum dipilih');
			return false;
		}else{
			return true;
		}
	}
}

/* End of file Surat_keluar.php */
/* Location: ./application/controllers/Surat_keluar.php */
