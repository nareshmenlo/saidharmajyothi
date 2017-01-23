<?php
class audiogallery extends CI_Controller {

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
	  
	  $data['view_audiogallery']=$this->user_model->view_audiogallery(1);
	  $data['view_banner']=$this->user_model->view_banner();
	  $data['view_homenews']=$this->user_model->view_homenewslimit();
	  $data['view_scrolling']=$this->user_model->view_scrolling();
	  $data['view_category']=$this->user_model->view_category();
	  $data['view_newsevents']=$this->user_model->view_newsevents();
	  $data['view_content']=$this->user_model->view_content(5);
	  $data['view_contact']=$this->user_model->view_content(4);
	  $data['view_clients']=$this->user_model->view_clients();
	  $data['view_links']=$this->user_model->view_links();
	  $this->load->view('audiogallery',$data);
	}
	
	
	function saipravanchanalu($id)
	{
	  $data['view_saipravanchanalu']=$this->user_model->view_saipravanchanalu($id);
      $data['view_banner']=$this->user_model->view_banner();
	  $data['view_homenews']=$this->user_model->view_homenewslimit();
	  $data['view_scrolling']=$this->user_model->view_scrolling();
	  $data['view_category']=$this->user_model->view_category();
	  $data['view_newsevents']=$this->user_model->view_newsevents();
	  $data['view_content']=$this->user_model->view_content(5);
	  $data['view_contact']=$this->user_model->view_content(4);
	  $data['view_clients']=$this->user_model->view_clients();
	  $data['view_links']=$this->user_model->view_links();
	  $this->load->view('saipravanchanaluone',$data);
	}
	
	
	
	
}
?>
