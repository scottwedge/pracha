<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pracha_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}

	public function save_contactus($data){
		$this->db->insert('contactus', $data);
		return $insert_id = $this->db->insert_id();
	}
	


}