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
	
	public function save_message($data){
		$this->db->insert('users', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function save_messages($data){
		$this->db->insert('user_chat', $data);
		return $insert_id = $this->db->insert_id();
	}
	

	public  function get_customer_wise_sent_messages_list($user_id){
		$this->db->select('user_chat.id,user_chat.user_id,user_chat.message,users.name,users.email')->from('user_chat');
		$this->db->join('users', 'users.id = user_chat.user_id', 'left');
		$this->db->where('user_chat.user_id',$user_id);
		$this->db->where('user_chat.message!=','');
		return $this->db->get()->result_array();
	}
	
	
	
	
	
	

}