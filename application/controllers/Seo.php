<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seo extends CI_Controller {

	public function __construct() 
		{

		parent::__construct();	
		$this->load->helper(array('url','html','form'));
		$this->load->library('session','form_validation');
		$this->load->library('email');
		$this->load->library('pdf');
	}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('seo');
		$this->load->view('footer');
	}
	
	public function readmore()
	{
	$this->load->view('header');
	$this->load->view('seoreadmore');
	$this->load->view('footer');
	}
	public function ppc()
	{
	$this->load->view('header');
	$this->load->view('ppc');
	$this->load->view('footer');
	}public function affilatemanagement()
	{
	$this->load->view('header');
	$this->load->view('affilatemanagement');
	$this->load->view('footer');
	}
	public function affilatemanagementpdf()
	{
		 $path = rtrim(FCPATH,"/");
		//echo '<pre>';print_r($list);exit;
		//echo '<pre>';print_r($data['details']);exit;
		$file_name = 'affilatemanagement.pdf'; 
		$data['name']=$file_name;		
		$pdfFilePath = $path."/assets/downloads/".$file_name;
		ini_set('memory_limit','320M'); // boost the memory limit if it's low <img src="https://s.w.org/images/core/emoji/72x72/1f609.png" alt="??" draggable="false" class="emoji">
		$html =$this->load->view('affilatemanagement',$data, true); // render the view into HTML
		//echo '<pre>';print_r($html);exit;
		$stylesheet1 = file_get_contents(base_url('assets/vendor/css/bootstrap.min.css')); // external css
		$stylesheet6 = file_get_contents('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
		$this->load->library('pdf');
		$pdf = $this->pdf->load();
		$pdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date('M-d-Y')); // Add a footer for good measure <img src="https://s.w.org/images/core/emoji/72x72/1f609.png" alt="??" draggable="false" class="emoji">
		$pdf->SetDisplayMode('fullpage');
		$pdf->list_indent_first_level = 0;	// 1 or 0 - whether to indent the first level of a list
		$pdf->WriteHTML($html); // write the HTML into the PDF
		$pdf->Output($pdfFilePath, 'F'); 
	}
	
	
}
