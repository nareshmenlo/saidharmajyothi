<?php
class photogallery extends CI_Controller {

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
	  
	  $data['view_gallery']=$this->user_model->view_gallery_view();
	  $data['view_banner']=$this->user_model->view_banner();
	  $data['view_homenews']=$this->user_model->view_homenewslimit();
	  $data['view_scrolling']=$this->user_model->view_scrolling();
	  $data['view_category']=$this->user_model->view_category();
	  $data['view_newsevents']=$this->user_model->view_newsevents();
	  $data['view_content']=$this->user_model->view_content(5);
	  $data['view_contact']=$this->user_model->view_content(4);
	  $data['view_clients']=$this->user_model->view_clients();
	  $data['view_links']=$this->user_model->view_links();
	  $this->load->view('photogallery',$data);
	}
	
	function subphotogallery($id)
	{
	  $data['view_gallery']=$this->user_model->view_subphotogallery($id);
	  $data['view_banner']=$this->user_model->view_banner();
	  $data['view_homenews']=$this->user_model->view_homenewslimit();
	  $data['view_scrolling']=$this->user_model->view_scrolling();
	  $data['view_category']=$this->user_model->view_category();
	  $data['view_newsevents']=$this->user_model->view_newsevents();
	  $data['view_content']=$this->user_model->view_content(5);
	  $data['view_contact']=$this->user_model->view_content(4);
	  $data['view_clients']=$this->user_model->view_clients();
	  $data['view_links']=$this->user_model->view_links();
	  $this->load->view('subphotogallery',$data);
	}
	
	
	
	
	
}
?>
