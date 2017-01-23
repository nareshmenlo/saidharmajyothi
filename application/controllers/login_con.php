<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_con extends CI_Controller 
{
	function __construct()
	{
	   parent::__construct();
	   $this->load->model('login_model','',TRUE);
	}
	
	public function index()
	{
		if (!empty($_SERVER['HTTP_CLIENT_IP'])) {   //check ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {   //to check ip is pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } 
		else if(!empty($_SERVER['HTTP_X_FORWARDED']))
		{
         $ip = $_SERVER['HTTP_X_FORWARDED'];
		}
     else if(!empty($_SERVER['HTTP_FORWARDED_FOR']))
	 {
         $ip = $_SERVER['HTTP_FORWARDED_FOR'];
	 }
     else if(!empty($_SERVER['HTTP_FORWARDED']))
	 {
         $ip = $_SERVER['HTTP_FORWARDED'];
	 }
		else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
		
   $data['ipadd']=$ip;
   $date=date('Y-m-d',time());
   $data['date']=$date;
   $this->db->insert('login_ip',$data);
  // return true;	
		 $this->load->library('form_validation');
		 $this->form_validation->set_rules('username', 'username', 'trim|required|xss_clean');
   	$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
   	
   	if($this->form_validation->run() == FALSE)
   	{
     //Field validation failed.  User redirected to login page
     $this->load->view('admin/login1');
   	}
   	else
   	{
     //Go to private area
	 //echo "welcome";

     redirect('admin/dashboard','refresh');
   	}
		
}
	
	function check_database($password)
	{
		 
		//echo $;
		//exit;
		
	   //Field validation succeeded.  Validate against database
	    $username = $this->input->post('username');
	   //query the database
	    $result = $this->login_model->login_ip($username,$password);
		//var_dump($result);exit;
	    if($result)
	    {
		 $sess_array = array();
		foreach($result as $row){
		   	$sess_array = array(
				'maven_id' => $row->id,
				'username' => $row->username
		   	);
		   	$this->session->set_userdata('logged_in', $sess_array);
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