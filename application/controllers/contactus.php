<?php
class contactus extends CI_Controller {

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
	  $data['view_homenews']=$this->user_model->view_homenewslimit();
	  $data['view_scrolling']=$this->user_model->view_scrolling();
	  $data['view_category']=$this->user_model->view_category();
	  $data['view_newsevents']=$this->user_model->view_newsevents();
	  $data['view_content']=$this->user_model->view_content(5);
	  $data['view_contact']=$this->user_model->view_content(4);
	  $data['view_clients']=$this->user_model->view_clients();
	  $data['view_links']=$this->user_model->view_links();
	  $this->load->view('contactus',$data);
	}
	
	
	function contact_form()
	{
		$this->form_validation->set_rules('name', 'Name','required|trim');
		$this->form_validation->set_rules('email', 'Email','required|trim|valid_email');
		$this->form_validation->set_rules('mobile', 'Mobile Number','required|');
		$this->form_validation->set_rules('message', 'Message','required|trim');
		$this->form_validation->set_rules('captcha', 'Security Code','required|callback_captcha_val');
		if($this->form_validation->run() == FALSE)
		{
	  $data['view_banner']=$this->user_model->view_banner();
	  $data['view_homenews']=$this->user_model->view_homenewslimit();
	  $data['view_scrolling']=$this->user_model->view_scrolling();
	  $data['view_category']=$this->user_model->view_category();
	  $data['view_newsevents']=$this->user_model->view_newsevents();
	  $data['view_content']=$this->user_model->view_content(5);
	  $data['view_contact']=$this->user_model->view_content(4);
	  $data['view_clients']=$this->user_model->view_clients();
	  $data['view_links']=$this->user_model->view_links();
	  $this->load->view('contactus',$data);
		 }
		 else
		 {
			$result=$this->user_model->contact();
			if($result==true)
			{
				//echo "insert";
		    //$this->session->set_flashdata('msg','You have successfully submitted your details,Thanq..! ');
		    //redirect("contact",'refresh');
			echo "<script>alert('You Are Successfully Submitted Your Details Thankyou')</script>";
			//redirect('home','refresh');
			$url = 'contactus';
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
	
	
	function captcha_val()
    {
	 $captcha_input = $this->input->post('captcha', TRUE);
      $captcha_text = $this->simple_captcha->get_captcha_text('signup');
      if ($captcha_input == $captcha_text) {
        //echo 'success';
		return true;
      } else {
        //echo 'wrong captcha';
		$this->form_validation->set_message('captcha_val', 'You Are Enter Capcha Code Wrong');
		return false;
      }
}
	
	
	
	
}
?>
