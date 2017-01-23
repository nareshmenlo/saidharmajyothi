<?php
class t_nenundagabhayamela extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('admin_model','',TRUE);
		$this->load->model('login_model','',TRUE);
		$this->load->model('user_model','',TRUE);
		$this->load->library('simple_captcha');
	}
	 
	 
	public function index()
	{
	  
	  $data['view_banner']=$this->user_model->view_banner();
	  $data['view_impoints']=$this->user_model->view_impoints();
	  $data['view_homenews']=$this->user_model->view_homenewslimit();
	  $data['view_scrolling']=$this->user_model->view_scrolling();
	  $data['view_category']=$this->user_model->view_category();
	  $data['view_newsevents']=$this->user_model->view_newsevents();
	  $data['view_homeheading']=$this->user_model->view_content(10);
	  $data['view_image1']=$this->user_model->view_telugucontent(12);
	  $data['view_image2']=$this->user_model->view_telugucontent(13);
	  $data['view_contact']=$this->user_model->view_content(4);
	  $data['view_clients']=$this->user_model->view_clients();
	  $data['view_links']=$this->user_model->view_links();
	  $this->load->view('telugu/t-nenundagabhayamela',$data);
	}
}
?>