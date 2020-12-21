<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends MY_Model {

	public function __construct()
	{
		parent::__construct();
		$this->table_name 	= "admin";
		$this->primary_key 	= "id_admin";
	}

	public function validation($username, $password){

	 	$this->db->where(['username' => $username]);
	 	$query = $this->db->get($this->table_name);

	 	if ($query->num_rows() == 1) {

	  		$hash = $query->row('password');

	  		if (password_verify($password, $hash)){
	   			return $query->row();
	  		}

	 	}
	}

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */