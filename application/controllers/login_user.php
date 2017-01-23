<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_user extends CI_Controller 
{
	function __construct()
	{
	   parent::__construct();
	   $this->load->model('user_model','',TRUE);
	}
	
	public function index()
	{
		 $username=$this->input->post('username');
		 $password=$this->input->post('password');
	   //query the database
	   $result = $this->user_model->login($username,$password);
	
	   if($result)
	   {
		 $sess_array = array();
		 foreach($result as $row)
		 {
		   $sess_array = array(
			 'sno' => $row->sno,
			 'username' => $row->username
		   );
		  // print_r($sess_array);
		   //exit;
		   $this->session->set_userdata('logged_user',$sess_array);
          // print_r($this->session->userdata('logged_user'));
		   //echo $data;
		   //exit;
		   $url ='categories';
		echo'
		<script>
		window.location.href = "'.base_url().$url.'";
		</script>
		';
		  
		 }
		 return TRUE;
	 }
	 else
	   {
		 $this->form_validation->set_message('check_database', 'Invalid username or password');
		 return false;
	   }
		
}
	
	/*function check_database($password)
	{
	   //Field validation succeeded.  Validate against database
	   $username=$this->input->post('username');
	   //query the database
	   $result = $this->user_model->login($username,$password);
	
	   if($result)
	   {
		 $sess_array = array();
		 foreach($result as $row)
		 {
		   $sess_array = array(
			 'sno' => $row->sno,
			 'username' => $row->username
		   );
		   //print_r($sess_array);
		   //exit;
		   $this->session->set_userdata('logged_user',$sess_array);
         //print_r($this->session->userdata('logged_in'));
		   //echo $data;
		  
		 }
		 return TRUE;
	 }
	 else
	   {
		 $this->form_validation->set_message('check_database', 'Invalid username or password');
		 return false;
	   }
	}*/
	
	function kumar()
	{
		echo "eojoprjw";
	}
}

?>