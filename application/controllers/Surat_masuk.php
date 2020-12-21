<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_masuk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');

		$this->load->model('Surat_masuk_model');
		
		if ($this->session->userdata('status') != 'AKTIF') {
			$this->session->set_flashdata('message_warning', 'Anda harus login terlebih dahulu');
			redirect('login','refresh');
		}
	}

	// List all your items
	public function index()
	{
		$data 		= [
			'surat_masuk'	=> $this->Surat_masuk_model->get_surat_orderBy_tanggal_entri()
		];
		$title 		= "DATA SURAT MASUK";
		$content	= $this->load->view('surat_masuk/index', $data, TRUE);
		$this->load->view('layouts/master', compact('title', 'content'));
	}

	public function form()
	{
		$data 		= [];
		$title 		= "FORM SURAT MASUK";
		$content	= $this->load->view('surat_masuk/form', $data, TRUE);
		$this->load->view('layouts/master', compact('title', 'content'));
	}

	public function find($id)
	{
		$data 		= [
			'find_data' 	=> $this->Surat_masuk_model->find($id)
		];
		$title 		= "FORM EDIT SURAT MASUK";
		$content	= $this->load->view('surat_masuk/edit', $data, TRUE);
		$this->load->view('layouts/master', compact('title', 'content'));
	}

	// Add a new item
	public function add()
	{
		$this->rules();

		if ($this->form_validation->run() == FALSE) {
			
			$data 		= [];
			$title 		= "FORM SURAT MASUK";
			$content	= $this->load->view('surat_masuk/form', $data, TRUE);
			$this->load->view('layouts/master', compact('title', 'content'));

		} else {
			$this->Surat_masuk_model->save($this->input->post());
			$this->session->set_flashdata('message_success', 'Data barhasil disimpan');
			redirect('surat_masuk','refresh');
		}
	}

	//Update one item
	public function update($id)
	{
		$this->rules();

		if ($this->form_validation->run() == FALSE) {

			$data 		= [
				'find_data' 	=> $this->Surat_masuk_model->find($id)
			];
			$title 		= "FORM EDIT SURAT MASUK";
			$content	= $this->load->view('surat_masuk/edit', $data, TRUE);
			$this->load->view('layouts/master', compact('title', 'content'));

		}else{
			$this->Surat_masuk_model->update($id, $this->input->post());
			$this->session->set_flashdata('message_info', 'Data barhasil diubah');
			redirect('surat_masuk','refresh');
		}
	}

	//Delete one item
	public function delete($id)
	{
		$this->Surat_masuk_model->delete($id);
		$this->session->set_flashdata('message_info', 'Data barhasil dihapus');
		redirect('surat_masuk','refresh');
	}

	public function rules()
	{
		$this->form_validation->set_rules('tgl_surat', 'Tanggal surat', 
			'trim|required', ['required' => '%s harus diisi']);
		$this->form_validation->set_rules('tgl_diterima', 'Tanggal diterima', 
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

/* End of file Surat_masuk.php */
/* Location: ./application/controllers/Surat_masuk.php */
