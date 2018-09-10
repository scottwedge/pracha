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
		$data['meta_title'] = 'Pracha Technologies Blog';
		$data['meta_description'] = 'Through this blog we share latest updates, best practices, tips and tricks, upcoming things, case studies and many more interesting things to gain much insights.';
		$data['meta_keywords'] = 'blogging, how to write a blog, ';
		$data['currentURL'] = current_url();
		$this->load->view('header',$data);
		$this->load->view('blog');
		$this->load->view('footer');
	}
	public function how_to_create_manage_and_optimize_a_youtube_channel()
	{
		
		
		$data['meta_title'] = 'How to  Optimize a Youtube Channel | Prachatech Web Designing Company';
		$data['meta_description'] = 'How to Create, Manage and Optimize a Youtube Channel? - If you have the desire to attract audience attention across the world with your creative ideas and videos, then this article is for you.';
		$data['meta_keywords'] = 'How to optimize a youtube channel, how to create a youtube channel, how to manage a youtube channel.';
		$commets['comments_list']=$this->Blog_model->get_all_commets(1);
		//echo '<pre>';print_r($commets);exit;
		$data['currentURL'] = current_url();
		$this->load->view('header',$data);
		$this->load->view('blog_details',$commets);
		$this->load->view('footer');
	}
	public function what_is_onpage_and_offpage_optimization()
	{
		$data['meta_title'] = 'What Is Onpage and Offpage SEO | Prachatech web designing company';
		$data['meta_description'] = 'What is onpage and offpage SEO? - SEO is of two types, namely On-Page Optimization and Off-Page Optimization.On page optimization deals with the aspects of a website or blog post that can be optimized to read by the search engines. Though it is a time taking process yet this kind of optimization...';
		$data['meta_keywords'] = 'what is onpage and offpage seo, onpage and offpage seo, onpage and offpage optimization, onpage optimization and offpage optimization, onpage-and-offpage-optimization';
		$commets['comments_list']=$this->Blog_model->get_all_commets(2);
		$data['currentURL'] = current_url();
		$this->load->view('header',$data);
		$this->load->view('blog2_details',$commets);
		$this->load->view('footer');
	}
	public function social_media_marketing_and_its_benefits()
	{
		$data['meta_title'] = 'Social Media Marketing and its benefits';
		$data['meta_description'] = 'Social Media can make you or break you! Social Media is the computer-mediated tool that allow people to create, share or exchange information, pictures, videos, ideas in virtual communities and networks. Social Media Marketing is the process of getting attention through social media sites.';
		$data['meta_keywords'] = 'social media marketing and its benefits, social media marketing, social media marketing strategies, social media.';
		$commets['comments_list']=$this->Blog_model->get_all_commets(3);
		$data['currentURL'] = current_url();
		$this->load->view('header',$data);
		$this->load->view('blog3_details',$commets);
		$this->load->view('footer');
	}
	public function what_is_ecommerce_and_its_types()
	{
		$data['meta_title'] = 'What is eCommerce and how many types of eCommerce are there?';
		$data['meta_description'] = 'Electronic Commerce is the buying and selling of goods and services, or transmitting of data or funds majorly on the internet, in simple eCommerce is the purchase of goods or services on the internet which takes place in between organisations, merchants and consumers.';
		$data['meta_keywords'] = 'how many types of ecommerce, types of ecommerce, types of ecommerce websites, ecommerce websites';
		$commets['comments_list']=$this->Blog_model->get_all_commets(3);
		$data['currentURL'] = current_url();
		$this->load->view('header',$data);
		$this->load->view('blog4_details',$commets);
		$this->load->view('footer');
	}
	public function Web_development_a_practical_guide_to_a_Web_developer()
	{
		$data['meta_title'] = 'Web Development - A Practical Guide To A Web Developer';
		$data['meta_description'] = 'Web development is the term that we apply to develop a website. Either a single static page or the most complex website must undergo web development. There are 3 kinds of web development specializations namely  Front-end, Back-end and Full-stack web developers.';
		$data['meta_keywords'] = 'web development, practical guide to web development, practical guide to web developer, web developers guide.';
		$commets['comments_list']=$this->Blog_model->get_all_commets(3);
		$data['currentURL'] = current_url();
		$this->load->view('header',$data);
		$this->load->view('web_development_blog',$commets);
		$this->load->view('footer');
	}
	public function importance_of_mobile_apps_in_business()
	{
		$data['meta_title'] = 'Importance Of Mobile Apps In Business';
		$data['meta_description'] = 'The majority of mobile users who use mobile apps are more than them that access the internet on a personal computer. That means if you are only  using a website as a marketing tool without any mobile app related to your business, then you are missing your potential customers in a large range';
		$data['meta_keywords'] = 'importance of mobile apps in business, importance of mobile apps, mobile apps importance, why mobile apps are essential, why mobile apps are essential in business';
		$commets['comments_list']=$this->Blog_model->get_all_commets(3);
		$data['currentURL'] = current_url();
		$this->load->view('header',$data);
		$this->load->view('blog5_details',$commets);
		$this->load->view('footer');
	}
	public function key_elements_to_design_a_best_website()
	{
		$data['meta_title'] = 'Key Elements To Be Considered While Designing A  Website';
		$data['meta_description'] = "In this digital age the internet is so intertwined with people's ls lives, and it isn't exaggerating to mention we are literally dwelling online! Maximum number of the customers check online before they purchase the product or service...";
		$data['meta_keywords'] = 'key elements to be considered while designing a website, designing a website, how to design a website, steps to design a website';
		$commets['comments_list']=$this->Blog_model->get_all_commets(3);
		$data['currentURL'] = current_url();
		$this->load->view('header',$data);
		$this->load->view('key_elements_to_design_a_best_website',$commets);
		$this->load->view('footer');
	}
	public function how_to_start_and_earn_in_affiliate_marketing()
	{
		$data['meta_title'] = 'How To Start And Earn In Affiliate Marketing';
		$data['meta_description'] = 'Have you ever thought of making money by referring people to Amazon or any other ecommerce website? If you are new to affiliate marketing then this article is especially for you.';
		$data['meta_keywords'] = 'affiliate marketing, digital marketing, how to earn in affiliate marketing, amazon affiliate, flipkart affiliate, become an affiliate.';
		$commets['comments_list']=$this->Blog_model->get_all_commets(3);
		$data['currentURL'] = current_url();
		$this->load->view('header',$data);
		$this->load->view('how_to_start_and_earn_in_affiliate_marketing',$commets);
		$this->load->view('footer');
	}
	public function top_five_social_neworking_sites()
	{
		$data['meta_title'] = 'Top 5 Social Networking Sites';
		$data['meta_description'] = 'This article is especially for dummies who are not aware of social media platforms. In this article you will find the top 5 social networking sites with their basic information.';
		$data['meta_keywords'] = 'top 5 social networking sites, top five social networking sites, top 5 social media platforms, top five social media platforms, top 5 social media channels, top five social media channels.';
		$commets['comments_list']=$this->Blog_model->get_all_commets(3);
		$data['currentURL'] = current_url();
		$this->load->view('header',$data);
		$this->load->view('top_five_social_neworking_sites',$commets);
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
