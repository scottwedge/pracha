<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

public function __construct() 
	{
		parent::__construct();	
		$this->load->helper(array('url','html','form'));
		$this->load->library('session','form_validation');
		$this->load->library('email');
		$this->load->model('Pracha_model');
		$this->load->model('Blog_model');
		$this->load->library('user_agent');
	}
	public function index()
	{
		$data['currentURL'] = current_url();
		$this->load->view('header',$data);
		$this->load->view('blog');
		$this->load->view('footer');
	}
	public function how_to_create_manage_and_optimize_a_youtube_channel()
	{
		
		
		$commets['comments_list']=$this->Blog_model->get_all_commets(1);
		//echo '<pre>';print_r($commets);exit;
		$data['currentURL'] = current_url();
		$this->load->view('header',$data);
		$this->load->view('blog_details',$commets);
		$this->load->view('footer');
	}
	public function what_is_onpage_and_offpage_optimization()
	{
		$commets['comments_list']=$this->Blog_model->get_all_commets(2);
		$data['currentURL'] = current_url();
		$this->load->view('header',$data);
		$this->load->view('blog2_details',$commets);
		$this->load->view('footer');
	}
	public function registerpost(){
		
			$post=$this->input->post();
			//echo '<pre>';print_r($post);exit; 
			
			$trendsdata=array(
				'name'=>isset($post['name'])?$post['name']:'',
				'email'=>isset($post['email'])?$post['email']:'',
				'mobile'=>isset($post['mobile'])?$post['mobile']:'',
				'create_at'=>date('Y-m-d H:i:s')
			);
				//echo '<pre>';print_r($msgdata);exit;
			$users=$this->Blog_model->save_treands_users($trendsdata);
			if(count($users)>0){
				$this->session->set_flashdata('success','Your request Successfully submitted');
				redirect($this->agent->referrer());
			}else{
				$this->session->set_flashdata('error','Technical problem will occurred .please try again');
				redirect($this->agent->referrer());
			}
			
				
	}
	public function addcomment(){
			$post=$this->input->post();
			//echo '<pre>';print_r($post);exit; 
			$comments=array(
				'post_id'=>isset($post['p_id'])?$post['p_id']:'',
				'email'=>isset($post['email'])?$post['email']:'',
				'name'=>isset($post['name'])?$post['name']:'',
				'comment'=>isset($post['message'])?$post['message']:'',
				'create_at'=>date('Y-m-d H:i:s')
			);
			$save_comments=$this->Blog_model->save_comments($comments);
			if(count($save_comments)>0){
				$this->session->set_flashdata('success','Your comment Successfully submitted');
				redirect($this->agent->referrer());
			}else{
				$this->session->set_flashdata('error','Technical problem will occurred .please try again');
				redirect($this->agent->referrer());
			}
	}
	public function replaycomments(){
			$post=$this->input->post();
			//echo '<pre>';print_r($post);exit; 
			$replaycomments=array(
				'comment_id'=>isset($post['replay_comment_id'])?$post['replay_comment_id']:'',
				'name'=>isset($post['name'])?$post['name']:'',
				'email'=>isset($post['email'])?$post['email']:'',
				'comment'=>isset($post['comment'])?$post['comment']:'',
				'create_at'=>date('Y-m-d H:i:s')
			);
			$save_comments=$this->Blog_model->save_replaycomments($replaycomments);
			if(count($save_comments)>0){
				$this->session->set_flashdata('success','Your comment Successfully submitted');
				redirect($this->agent->referrer());
			}else{
				$this->session->set_flashdata('error','Technical problem will occurred .please try again');
				redirect($this->agent->referrer());
			}
	}
	
	public function likecount(){
		$post=$this->input->post();
		$details=$this->Blog_model->get_like_count($post['postid']);
		$data=array(
		'like'=>$details['like']+1,
		);
		$details=$this->Blog_model->update_like_count($post['postid'],$data);
		$countdetails=$this->Blog_model->get_like_count($post['postid']);
		if(count($details) > 0)
				{
				$data['msg']=$countdetails['like'];
				echo json_encode($data);	
				}
		
	}
	
}
