<?php
Class Login_model extends CI_Model
{
	function login($username,$password)
	{
	$this->db->select('*');
   $this->db->from('tbl_admin');
   $this->db->where('username', $username);
   $this->db->where('password',$password);
   $this->db->limit(1);
   $query=$this->db->get();
   if($query->num_rows()==1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
	}
	
	function login_ip($username,$password)
	{
		//echo $password;exit;
		$this->db->select('*');
   $this->db->from('tbl_admin');
   $this->db->where('username', $username);
   $this->db->where('password', md5($password));
   $this->db->limit(1);
   $query=$this->db->get();
   if($query->num_rows()==1)
   {
     return $query->result();
   }
   else
   {
	   
  // return true;	
     return false;
   }
	}
}
?>