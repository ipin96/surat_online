<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
	}

	public function index()
	{
		$this->load->view('login/form');		
	}

	public function validate()
	{
		$this->rules();

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('login/form');
		
		} else {

			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$check_account = $this->Admin_model->validation($username, $password);

			if (empty($check_account)) {
				$this->session->set_flashdata('message_warning', 'Akun tidak ditemukan, harap login dengan akun yang terdaftar');
				redirect('login','refresh');
			} else {
				
				$this->session->set_userdata([
					'nama_admin'	=> $check_account->nama_admin,
					'status'		=> 'AKTIF'
				]);
				$this->session->set_flashdata('message_info', 'Anda berhasil login sebagai ADMIN');
				redirect('surat_masuk','refresh');
			}
			

		}
	}

	public function logout()
	{
		$this->session->unset_userdata(['nama_admin', 'status']);
		$this->session->set_flashdata('message_success', 'Anda berhasil keluar');
		redirect('login','refresh');
	}

	public function rules()
	{
		$this->form_validation->set_rules('username', 'Username',
		 	'trim|required', ['required' => '%s harus diisi']);
		$this->form_validation->set_rules('password', 'Password',
		 	'trim|required', ['required' => '%s harus diisi']);
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */