<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_admin extends CI_Controller 
{
	function __construct()
	{
	   parent::__construct();
	  $this->load->model('login_model','',TRUE);
	}
	
	public function index()
	{
		 $this->load->library('form_validation');
		 $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   	$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
   	if($this->form_validation->run() == FALSE)
   	{
     //Field validation failed.  User redirected to login page
	
     $this->load->view('admin/login');
   	}
   	else
   	{
     //Go to private area
	 //echo "welcome";
     redirect('admin/dashboard','refresh');
   	}
		
}
	
	function check_database()
	{
	   //Field validation succeeded.  Validate against database
	   $username = $this->input->post('username');
	   //query the database
	  $password=md5($this->input->post('password'));
	   $result = $this->login_model->login($username,$password);
	
	   if($result)
	   {
		 $sess_array = array();
		 foreach($result as $row)
		 {
		   $sess_array = array(
			 'maven_id' => $row->admin_id,
			 'username' => $row->username,
		   );
		  // print_r($sess_array);
		   //exit;
		   $this->session->set_userdata('logged_in',$sess_array);
        // print_r($this->session->userdata('logged_in'));
		  // echo $data;
		 }
		 return TRUE;
	 }
	 else
	   {
		 $this->form_validation->set_message('check_database', 'Invalid username or password');
		 return false;
	   }
	}
	
	function kumar()
	{
		echo "eojoprjw";
	}
}

?>