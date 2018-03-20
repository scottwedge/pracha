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
		$gmail=$List['email'].'?alt=json';
		$url='http://picasaweb.google.com/data/entry/api/user/'.$gmail;
			$curl = curl_init();
			curl_setopt($curl, CURLOPT_URL, $url);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_HEADER, false);
			$str = curl_exec($curl);
			$pic=json_decode($str, TRUE);
			curl_close($curl);
			$lke=$this->get_like_count($List['id']);
			$lis[$List['id']]=$List;
			$lis[$List['id']]['imagurl']=isset($pic['entry']['gphoto$thumbnail']['$t'])?$pic['entry']['gphoto$thumbnail']['$t']:'';
			$lis[$List['id']]['count']=$this->get_replaycomments($List['id']);
			$lis[$List['id']]['likecount']=$lke['like'];
			
		}
		if(!empty($lis))
		{
		return $lis;
		}
		
	}
	public function get_replaycomments($comment_id){
		$this->db->select('*')->from('replay_comments');
		$this->db->where('comment_id', $comment_id);	
		$return= $this->db->get()->result_array();
		foreach($return as $List){ 
			$gmail=$List['email'].'?alt=json';
			$url='http://picasaweb.google.com/data/entry/api/user/'.$gmail;
			$curl = curl_init();
			curl_setopt($curl, CURLOPT_URL, $url);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_HEADER, false);
			$str = curl_exec($curl);
			$pic=json_decode($str, TRUE);
			curl_close($curl);
		//echo '<pre>';print_r($pic);exit;
		$lis[$List['id']]=$List;
		$lis[$List['id']]['replyimagurl']=isset($pic['entry']['gphoto$thumbnail']['$t'])?$pic['entry']['gphoto$thumbnail']['$t']:'';
		
		}
		if(!empty($lis))
		{
		return $lis;
		}
	}
	
	public function get_like_count($id){
		$this->db->select('comments.like')->from('comments');		
		$this->db->where('id', $id);
		return $this->db->get()->row_array();
	}
	public function update_like_count($cid,$data){
		$this->db->where('id', $cid);
		return $this->db->update('comments', $data);
	}


}