<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}

	public function save_replaycomments($data){
		$this->db->insert('replay_comments', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function save_treands_users($data){
		$this->db->insert('trends_user', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function save_comments($data){
		$this->db->insert('comments', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function get_all_commets($pid){
		$this->db->select('*')->from('comments');
		$this->db->where('post_id', $pid);	
		$return=$this->db->get()->result_array();
		foreach($return as $List){ 
		//$url='http://picasaweb.google.com/data/entry/api/user/'.$List['email'].'?alt=json';
		//$cc=file_get_contents($url);
		//$pic=json_decode($cc, TRUE);
		//echo '<pre>';print_r($pic);exit;
		$lis[$List['id']]=$List;
		$lis[$List['id']]['count']=$this->get_replaycomments($List['id']);
		
		}
		if(!empty($lis))
		{
		return $lis;
		}
		
	}
	public function get_replaycomments($comment_id){
		$this->db->select('*')->from('replay_comments');
		$this->db->where('comment_id', $comment_id);	
		return $this->db->get()->result_array();
		
	}
	


}