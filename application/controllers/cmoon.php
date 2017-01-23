<?php
session_start(); 
class Cmoon extends CI_Controller 
{
	function __construct()
	{
		parent:: __construct();
		$this->load->model('user_model','',TRUE);
		$this->load->model('admin_model','',TRUE);
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
       // echo $ip;
		//exit;
		
		$result=$this->admin_model->ip_add($ip);
		if($result==true)
		{
		redirect('admin/cmoon','refresh');
		}
		else
		{
	    //$this->session->set_flashdata('msg','Ip DoesNot Match');		
		//redirect('cmoon','refresh');
		echo "<h3>You Cant Access Specify Dip<h3>";

		}
		
	}
}
	?>