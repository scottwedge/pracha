<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Chat extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();	
		$this->load->model('Pracha_model');	
	}
	public function index()
	{	
		  $this->load->view('footer',$data);
	}
	public  function get_chat_list(){
		$post=$this->input->post();
			$sent_data=array(
			'name'=>$post['name'],
			'email'=>$post['email'],
			'created_at'=>date('Y-m-d H:i:s'),	
			);
		$institue_sent=$this->Pracha_model->save_message($sent_data);
		if(count($institue_sent)>0){
		$message=array(
		'user_id'=>$institue_sent,
		'message'=>$post['message'],
		'created_at'=>date('Y-m-d H:i:s'),
		);
		$msg_sent=$this->Pracha_model->save_messages($message);
		
		if(count($msg_sent)>0){
						$data['msg_list']=$this->Pracha_model->get_customer_wise_sent_messages_list($post['user_id']);
						echo $this->db->last_query();
						//echo '<pre>';print_r($data);
						$this->load->view('footer_chat',$data);	
					}else{
						$data['msg_list']=$this->Pracha_model->get_customer_wise_sent_messages_list($post['user_id']);
						echo $this->db->last_query();exit;
						//echo '<pre>';print_r($data);exit;
						$this->load->view('footer_chat',$data);	
					}
		}
		
	}
}