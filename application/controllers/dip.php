<?php
session_start(); 
class Dip extends CI_Controller 
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
		$sql="select * from ipadd where ipadd='$ip'";
$query=$this->db->query($sql);
if($query->num_rows()== 1){		
	die;
}
   $data['ipadd']=$ip;
   $this->db->insert('ipadd',$data);
   return true;	
}




/*$sql="select * from ipadd where ipadd='$ip'";
$query=$this->db->query($sql);
if($query->num_rows()== 1){		
	die;
}

$qr="insert into ipadd (ipadd)values('$ipadd')";
$rs=mysql_query($qr) or die("Error :".mysql_error());*/
		//$this->load->view('admin/dip');
		//echo "hellow welcome";
}
?>