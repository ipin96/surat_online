<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_keluar_model extends MY_Model {

	public function __construct()
	{
		parent::__construct();
		$this->table_name 	= "surat_keluar";
		$this->primary_key 	= "id_surat";
	}

	public function get_surat_orderBy_tanggal_surat()
	{
		$this->db->order_by('tgl_surat', 'desc');
		return $this->db->get($this->table_name)->result();
	}

}

/* End of file Surat_keluar_model.php */
/* Location: ./application/models/Surat_keluar_model.php */