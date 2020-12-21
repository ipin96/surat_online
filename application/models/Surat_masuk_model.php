<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_masuk_model extends MY_Model {

	public function __construct()
	{
		parent::__construct();
		$this->table_name 	= "surat_masuk";
		$this->primary_key 	= "id_surat";
	}

	public function get_surat_orderBy_tanggal_entri()
	{
		$this->db->order_by('date_entry', 'desc');
		return $this->db->get($this->table_name)->result();
	}

	public function get_surat_with_sifat_surat($sifat)
	{
		return $this->db->get_where($this->table_name, ['sifat' => $sifat])->result();
	}

}

/* End of file Surat_masuk_model.php */
/* Location: ./application/models/Surat_masuk_model.php */