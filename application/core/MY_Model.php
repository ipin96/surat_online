<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {

	protected $table_name;
	protected $primary_key;

	public function get()
	{
		return $this->db->get($this->table_name)->result();
	}

	public function find($id)
	{
		return $this->db->get_where($this->table_name, [$this->primary_key => $id])->row();
	}

	public function save($data)
	{
		$this->db->insert($this->table_name, $data);
	}

	public function delete($id)
	{
		$this->db->where($this->primary_key, $id)->delete($this->table_name);
	}

	public function update($id, $data)
	{
		$this->db->where($this->primary_key, $id)->update($this->table_name, $data);
	}

}

/* End of file MY_Model.php */
/* Location: ./application/core/MY_Model.php */