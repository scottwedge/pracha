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
			'message'=>$post['message'],
			'created_at'=>date('Y-m-d H:i:s'),	
			);
		$institue_sent=$this->Pracha_model->save_message($sent_data);
		
		$message=array(
		'message'=>$post['message'],
		'created_at'=>date('Y-m-d H:i:s'),
		);
		$msg_sent=$this->Pracha_model->save_messages($message);
		
		
		
		
		
		$this->load->view('footer',$data);
	}
}