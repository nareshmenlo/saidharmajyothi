<?php
class lakshadeepaharati extends CI_Controller {

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
	  
	  $data['view_lakshadeepaharatiimg']=$this->user_model->view_lakshadeepaharatiimg();
	  $data['view_banner']=$this->user_model->view_banner();
	  $data['view_homenews']=$this->user_model->view_homenewslimit();
	  $data['view_scrolling']=$this->user_model->view_scrolling();
	  $data['view_category']=$this->user_model->view_category();
	  $data['view_newsevents']=$this->user_model->view_newsevents();
	  $data['view_content']=$this->user_model->view_content(14);
	  $data['view_contact']=$this->user_model->view_content(4);
	  $data['view_clients']=$this->user_model->view_clients();
	  $data['view_links']=$this->user_model->view_links();
	  $this->load->view('lakshadeepaharati',$data);
	}
	
	
	function lakshadeepaharati_form()
	{
		
			$result=$this->user_model->lakshadeepaharati_form();
			if($result==true)
			{
				//echo "insert";
		    //$this->session->set_flashdata('msg','You have successfully submitted your details,Thanq..! ');
		    //redirect("contact",'refresh');
			echo "<script>alert('Your details successfully submitted for participation Thankyou!!')</script>";
			//redirect('home','refresh');
			$url = 'lakshadeepaharati';
				  echo'
				  <script>
				  window.location.href = "'.base_url().$url.'";
				  </script>
				  ';
			}
			else
			{
				echo "not";
			}
		}
	
	
	
	
}
?>
