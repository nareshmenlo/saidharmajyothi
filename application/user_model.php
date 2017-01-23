<?php
Class User_model extends CI_Model
{
	
	
	function view_content($id)
	{
		$sql=$this->db->get_where('tbl_content',array('content_id'=>$id));
		return $sql->row_array();
	}
	
	
	function view_telugucontent($id)
	{
		$sql=$this->db->get_where('tbl_apartments',array('sno'=>$id));
		return $sql->row_array();
	}
	
	
	function view_images($id)
	{
		$sql=$this->db->get_where('tbl_uploads',array('sno'=>$id));
		return $sql->row_array();
	}
	
	function view_banner()
	{
		$this->db->order_by('sno','desc');
		$sql=$this->db->get('tbl_banner');
		return $sql->result();
	}
	
	
	function view_impoints()
	{
		$sql=$this->db->get('tbl_strategies');
		return $sql->result();
	}
	
	
	function view_scrolling()
	{
		$this->db->order_by('id','desc');
		$sql=$this->db->get('tbl_strategies');
		return $sql->result();
	}
	
	
	function view_audiogallery($id)
	{
		$this->db->order_by('sno','desc');
		$sql=$this->db->get_where('tbl_testimonials',array('lan_id'=>$id));
		return $sql->result();
	}
	
	function view_saipravanchanalu($id)
	{
		$sql=$this->db->get_where('tbl_testimonials',array('sno'=>$id));
		return $sql->row_array();
	}
	
	function view_what()
	{
		$sql=$this->db->get('tbl_area');
		return $sql->result();
	}
	
	
	function view_projecttypes()
	{
		$sql=$this->db->get('tbl_area');
		return $sql->result();
	}
	
	
	function view_projects($id)
	{
		$this->db->order_by('sno','desc');
		$sql=$this->db->get_where('tbl_projects',array('cat_id'=>$id));
		return $sql->result();
	}
	
	
	function get_related_slidercount($id)
	{
		$sql=$this->db->get_where('tbl_slider',array('project_id'=>$id));
		return $sql->num_rows();
	}
	
	
	function get_related_sliderimages($id)
	{
		$this->db->order_by('sno','desc');
		$sql=$this->db->get_where('tbl_slider',array('project_id'=>$id));
		return $sql->result();
	}
	
	
	function view_features($id)
	{
		$this->db->order_by('sno','desc');
		$this->db->limit(1);
		$sql=$this->db->get_where('tbl_project_details',array('project_id'=>$id));
		return $sql->result();
	}
	
	
	function view_projectphotos($id)
	{
		$this->db->order_by('sno','desc');
		$sql=$this->db->get_where('tbl_floor_planes',array('project_id'=>$id));
		return $sql->result();
	}
	
	
	
	function view_layout($id)
	{
		$this->db->order_by('sno','desc');
		$sql=$this->db->get_where('tbl_layout',array('project_id'=>$id));
		return $sql->result();
	}
	
	
	function view_locationmap($id)
	{
		$this->db->order_by('sno','desc');
		$sql=$this->db->get_where('tbl_location_map',array('project_id'=>$id));
		return $sql->result();
	}
	
	
	function view_brochure($id)
	{
		$this->db->order_by('sno','desc');
		$this->db->limit(1);
		$sql=$this->db->get_where('tbl_brochure',array('project_id'=>$id));
		return $sql->result();
	}
	
	
	function property_enquiry()
	{
		$sql=$this->db->get('tbl_setting');
			 $row=$sql->result_array();
		foreach($row as $rec)
		{
			$default_email=$rec['default_email'];
			//echo $ema;
			//exit;
		}
		    $this->load->library('email');
			
			$id=$this->input->post('id');
			$property_title=$this->input->post('property_name');
			
			$name=$this->input->post('name');
			$mobile=$this->input->post('number');
			$email=$this->input->post('email');
			//$sub=$this->input->post('subject');
			$message=addslashes($this->input->post('message'));
			//$fax=$this->input->post('fax');
			$subject = "Users Enquiry $property_title";
			$message = "
		<html>
		<head>
		</head>
		<body>
	<table cellpadding='10' cellspacing='10' border='0' width='100%'>
	
	<tr><td>Project Title : </td><td>$property_title</td></tr>
	
	<tr><td>User Name : </td><td>$name</td></tr>
	<tr><td>Email : </td><td>$email </td></tr>
	<tr><td>Mobile Mumber: </td><td>$mobile </td></tr>
    <tr><td>Message : </td><td>$message </td></tr>
  
 
 </table>
   </body>
		</html>
		";
			$to = $default_email;
			//$to='yuvaraj950@gmail.com';
			$email_from = "info@rrventuresanddevelopers.com";
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
			$headers .= 'From: '.$email_from. "\r\n";
			$headers .= 'Reply-To: '.$email_from. "\r\n";
            $mail=mail($to, $subject,$message, $headers);
            return true;
	}
	
	function view_projectype($id)
	{
		$sql=$this->db->get_where('tbl_area',array('sno'=>$id));
		return $sql->row_array();
	}
	
	function project_view($id)
	{
		$sql=$this->db->get_where('tbl_projects',array('sno'=>$id));
		return $sql->row_array();
	}
	
	
	function view_media($id)
	{
		$sql=$this->db->get_where('tbl_area',array('sno'=>$id));
		return $sql->row_array();
	}
	
	function view_media_what($id)
	{
		$sql_rr=$this->db->get_where('tbl_address',array('sno'=>$id));
		$result=$sql_rr->row_array();
		$cat_id=$result['area'];
		
		$sql=$this->db->get_where('tbl_area',array('sno'=>$cat_id));
		return $sql->row_array();
	}
	
	
	function view_lists($id)
	{
		$sql=$this->db->get_where('tbl_address',array('area'=>$id));
		return $sql->result();
	}
	
	
	function view_lists_what($id)
	{
		
		$sql_rr=$this->db->get_where('tbl_address',array('sno'=>$id));
		$result=$sql_rr->row_array();
		$cat_id=$result['area'];
		
		$sql=$this->db->get_where('tbl_address',array('area'=>$cat_id));
		return $sql->result();
		
		
	}
	
	
	function view_listings($id)
	{
		$sql=$this->db->get_where('tbl_facts',array('sub_id'=>$id));
		return $sql->result();
	}
	
	function view_newsevents()
	{
		$this->db->order_by('sno','desc');
		$sql=$this->db->get('tbl_testimonials');
		return $sql->result();
	}
	
	function view_newsevnts_view($id)
	{
		$sql=$this->db->get_where('tbl_testimonials',array('sno'=>$id));
		return $sql->row_array();
	}
	
	
	function our_programes($id)
	{
		$sql=$this->db->get_where('tbl_products',array('sno'=>$id));
		return $sql->row_array();
	}
	
	function view_homenewslimit()
	{
		$this->db->order_by('sno','desc');
		$this->db->limit(10);
		$sql=$this->db->get('tbl_news');
		return $sql->result();
	}
	
	function view_articles()
	{
		$sql=$this->db->get('tbl_scrolling');
		return $sql->result();
	}
	
	
	function view_nithya()
	{
		$this->db->order_by('sno','desc');
		$sql=$this->db->get_where('tbl_awards',array('type'=>'English'));
		return $sql->result();
	}
	
	
	function view_latestevents()
	{
		$this->db->order_by('sno','desc');
		$this->db->limit(1);
		$sql=$this->db->get('tbl_address');
		return $sql->result();
	}
	
	
	function view_upcomingevents()
	{
		$sql=$this->db->get('tbl_address');
		$sql="SELECT * FROM `tbl_address` WHERE day(from_date) between day((curdate() + INTERVAL 1 DAY)) and day((curdate() + INTERVAL 2 DAY))";
	    $query=$this->db->query($sql);
	    return $query->result();
	}
	
	
	function view_nithya_telugu()
	{
		$this->db->order_by('sno','desc');
		$sql=$this->db->get_where('tbl_awards',array('type'=>'Telugu'));
		return $sql->result();
	}
	
	
	function view_programes()
	{
		$sql=$this->db->get('tbl_products');
		return $sql->result();
	}
	
	function articles_view($id)
	{
		$sql=$this->db->get_where('tbl_scrolling',array('sno'=>$id));
		return $sql->row_array();
	}
	
	
	function view_homeservices()
	{
		$this->db->limit(20);
		$sql=$this->db->get('tbl_awards');
		return $sql->result();
	}
	
	
	function view_documentscat()
	{
		$sql=$this->db->get('tbl_area');
		return $sql->result();
	}
	
	function get_legaldocuments($id)
	{
		$this->db->order_by('sno','desc');
		$sql=$this->db->get_where('tbl_scrolling',array('cat_id'=>$id));
		return $sql->result();
	}
	
	function newsevents_view($id)
	{
		$sql=$this->db->get_where('tbl_testimonials',array('sno'=>$id));
		return $sql->row_array();
	}
	
	
	function view_services()
	{
		//$this->db->order_by('sno','desc');
		$sql=$this->db->get('tbl_awards');
		return $sql->result();
	}
	
	
	function under_services($id)
	{
		$sql=$this->db->get_where('tbl_address',array('cat_id'=>$id));
		return $sql->result();
	}
	
	
	function service_view($id)
	{
		$sql=$this->db->get_where('tbl_apartments',array('sno'=>$id));
		return $sql->row_array();
	}
	
	function view_testimonilas()
	{
		$this->db->order_by('sno','desc');
		$sql=$this->db->get('tbl_testimonials');
		return $sql->result();
	}
	
	function view_categories()
	{
		$this->db->order_by('sno','desc');
		$sql=$this->db->get('tbl_area');
		return $sql->result();
	}
	
	
	function view_dealerlist()
	{
		$this->db->order_by('sno','desc');
		$sql=$this->db->get('tbl_awards');
		return $sql->result();
	}
	
	function view_clients()
	{
		//$this->db->limit(6);
		$this->db->order_by('sno','desc');
		$sql=$this->db->get('tbl_clients');
		return $sql->result();
	}
	
	function view_education()
	{
		$this->db->order_by('sno','desc');
		$sql=$this->db->get('tbl_testimonials');
		return $sql->result();
	}
	
	function search_products()
	{
		$search=$this->input->post('search');
		$sql="select * from `tbl_products` where `name` like '%$search%' or `content` like '%$search%' or `content1` like '%$search%' or `content2` like '%$search%'";
		$query=$this->db->query($sql);
		return $query->result();
	}
	
	function education_training($id)
	{
		$sql=$this->db->get_where('tbl_testimonials',array('sno'=>$id));
		return $sql->row_array();
	}
	
	
	function view_principles()
	{
		$this->db->order_by('sno','desc');
		$sql=$this->db->get('tbl_clients');
		return $sql->result();
	}
	
	
	function view_dgsdrc()
	{
		$this->db->order_by('sno','desc');
		$sql=$this->db->get('tbl_scrolling');
		return $sql->result();
	}
	
	
	function certificate_count()
	{
		$sql=$this->db->get('tbl_scrolling');
		return $sql->num_rows();
	}
	
	
	function view_certificate($limit,$start)
	{
		$this->db->limit($limit,$start);
		$this->db->order_by('sno','desc');
		$sql=$this->db->get('tbl_scrolling');
		return $sql->result();
	}
	
	
	function view_maingallery()
	{
		$this->db->order_by('sno','desc');
		$sql=$this->db->get('tbl_awards');
		return $sql->result();
	}
	
	function gallery_count()
	{
		$sql=$this->db->get('tbl_gallery');
		return $sql->num_rows();
	}
	
	function view_gallery($limit,$start)
	{
		$this->db->limit($limit,$start);
		$this->db->order_by('sno','desc');
		$sql=$this->db->get('tbl_gallery');
		return $sql->result();
	}
	
	
	function view_gallery_view()
	{
		$this->db->order_by('sno','desc');
		$this->db->group_by('cat_id');
		$sql=$this->db->get('tbl_gallery');
		return $sql->result();
	}
	
	
	function view_subphotogallery($id)
	{
		$this->db->order_by('sno','desc');
		$sql=$this->db->get_where('tbl_gallery',array('cat_id'=>$id));
		return $sql->result();
	}
	
	
	function view_galcategory($id)
	{
		$sql=$this->db->get_where('tbl_category',array('sno'=>$id));
		return $sql->row_array();
	}
	
	function view_videogallery()
	{
		$this->db->order_by('sno','desc');
		$sql=$this->db->get('tbl_video');
		return $sql->result();
	}
	
	
	function view_rarephotos()
	{
		$this->db->order_by('sno','desc');
		$sql=$this->db->get('tbl_clients');
		return $sql->result();
	}
	
	function view_photos()
	{
		$this->db->order_by('sno','desc');
		$sql_rr=$this->db->get('tbl_gallery');
		$result=$sql_rr->row_array();
		$cat_id=$result['cat_id'];
		
		$this->db->order_by('sno','desc');
		$sql=$this->db->get_where('tbl_gallery',array('cat_id'=>$cat_id));
		return $sql->result();
	}
	
	
	function photos_album($id)
	{
		$this->db->order_by('sno','desc');
		$sql=$this->db->get_where('tbl_gallery',array('cat_id'=>$id));
		return $sql->result();
	}
	
	
	function view_videos()
	{
		$this->db->order_by('sno','desc');
		$sql_rr=$this->db->get('tbl_video');
		$result=$sql_rr->row_array();
		$cat_id=$result['cat_id'];
		
		$this->db->order_by('sno','desc');
		$sql=$this->db->get_where('tbl_video',array('cat_id'=>$cat_id));
		return $sql->result();
	}
	
	
	function view_videos_view()
	{
		$this->db->order_by('sno','desc');
		$sql=$this->db->get('tbl_video');
		return $sql->result();
	}
	
	function videos_album($id)
	{
		$this->db->order_by('sno','desc');
		$sql=$this->db->get_where('tbl_video',array('cat_id'=>$id));
		return $sql->result();
	}
	
	function get_category_name($id)
	{
		$sql=$this->db->get_where('tbl_category',array('sno'=>$id));
		return $sql->row_array();
	}
	
	function get_vidcategory_name($id)
	{
		$sql=$this->db->get_where('tbl_area',array('sno'=>$id));
		return $sql->row_array();
	}
	
	function view_testimonial()
	{
		$this->db->order_by('sno','desc');
		$sql=$this->db->get('tbl_testimonials');
		return $sql->result();
	}
	
	function view_homevideo()
	{
		$sql=$this->db->get('tbl_feavideo');
		return $sql->row_array();
	}
	
	
	function view_homeimages()
	{
		$this->db->order_by('sno','desc');
		$sql=$this->db->get('tbl_clients');
		return $sql->result();
	}
	
	function view_certificates()
	{
		$this->db->order_by('sno','desc');
		$sql=$this->db->get('tbl_awards');
		return $sql->result();
	}
	
	function view_products()
	{
		$this->db->order_by('sno','desc');
		$sql=$this->db->get('tbl_products');
		return $sql->result();
	}
	
	function get_product_categoryname($id)
	{
		$sql=$this->db->get_where('tbl_area',array('sno'=>$id));
		return $sql->row_array();
	}
	
	function home_products()
	{
		$this->db->limit(4);
		$this->db->order_by('sno','desc');
		$sql=$this->db->get('tbl_products');
		return $sql->result();
	}
	
	
	function home_projects()
	{
		$this->db->limit(4);
		$this->db->order_by('sno','desc');
		$sql=$this->db->get('tbl_projects');
		return $sql->result();
	}
	
	function view_category()
	{
		$this->db->order_by('category');
		$sql=$this->db->get('tbl_area');
		return $sql->result();
	}
	
	function view_gallerycategory()
	{
		$this->db->order_by('name');
		$sql=$this->db->get('tbl_category');
		return $sql->result();
	}
	
	function view_category_limit()
	{
		$this->db->limit(4);
		$sql=$this->db->get('tbl_area');
		return $sql->result();
	}
	
	
	function get_subcategoryname($id)
	{
		$sql=$this->db->get_where('tbl_address',array('area'=>$id));
		return $sql->result();
	}
	
	
	function get_product_pdf($id)
	{
		$sql=$this->db->get_where('tbl_products_img',array('product_id'=>$id));
		return $sql->result();
	}
	
	
	function get_sub_categoryname($id)
	{
		$sql=$this->db->get_where('tbl_address',array('sno'=>$id));
		return $sql->row_array();
	}
	
	
	function get_product_name($id)
	{
		$sql=$this->db->get_where('tbl_facts',array('sno'=>$id));
		return $sql->row_array();
	}
	
	function product_view($id)
	{
		$sql=$this->db->get_where('tbl_products',array('sno'=>$id));
		return $sql->row_array();
	}
	
	function get_slider_images($id)
	{
		$sql=$this->db->get_where('tbl_products_img',array('product_id'=>$id));
		return $sql->result();
	}
	
	function product_list($id)
	{
		$this->db->order_by('sno','desc');
		$sql=$this->db->get_where('tbl_facts',array('sub_id'=>$id));
		return $sql->result();
	}
	
	function view_apartments()
	{
		$this->db->order_by('sno','desc');
		$this->db->limit(4);
		$sql=$this->db->get_where('tbl_apartments',array('location'=>'HYDERABAD'));
		return $sql->result();
	}
	
	
	function view_testimonil()
	{
		$this->db->order_by('sno','desc');
		$sql=$this->db->get('tbl_testimonials');
		return $sql->result();
	}
	
	function view_awards()
	{
		$this->db->order_by('sno','desc');
		$sql=$this->db->get('tbl_awards');
		return $sql->result();
	}
	
	function view_partners()
	{
		$this->db->order_by('sno','desc');
		$sql=$this->db->get('tbl_clients');
		return $sql->result();
	}
	
	
	function view_apartments_chennai()
	{
		$this->db->order_by('sno','desc');
		$this->db->limit(4);
		$sql=$this->db->get_where('tbl_apartments',array('location'=>'CHENNAI'));
		return $sql->result();
	}
	
	function view_apartments_bangualore()
	{
		$this->db->order_by('sno','desc');
		$this->db->limit(4);
		$sql=$this->db->get_where('tbl_apartments',array('location'=>'BANGALORE'));
		return $sql->result();
	}
	
	function newsletter()
	{
		$data['newsletter']=$this->input->post('signupnewsletter');
		$date=date('Y-m-d',time());
		$data['date']=$date;
		$this->db->insert('tbl_newsletter',$data);
		return true;
	}
	
	
	
	function view_links()
	{
		$sql=$this->db->get('tbl_setting');
		return $sql->row_array();
	}
	
function view_serveimg()
{
	$this->db->order_by('sno','desc');
	$sql=$this->db->get('tbl_clients');
	return $sql->result();
}

function view_news()
{
	$this->db->order_by('sno','desc');
	//$this->db->limit(1);
	$sql=$this->db->get('tbl_news');
	return $sql->result();
}

function view_facts()
{
	$this->db->order_by('sno','desc');
	$sql=$this->db->get('tbl_facts');
	return $sql->result();
}

function view_factery()
{
	$sql=$this->db->get('tbl_corporate');
	return $sql->result();
}

function view_contact()
{
	$sql=$this->db->get('tbl_group');
	return $sql->result();
}

function login($username,$password)
	   {
	   $this -> db -> select('sno,username,password');
	   $this -> db -> from('tbl_users_registration');
       $this -> db -> where('username', $username);
	   $this -> db -> where('password',$password);
	   $this -> db -> limit(1);
	 
	   $query = $this -> db -> get();
	 
	   if($query -> num_rows() == 1)
	   {
	     return $query->result();
	   }
	   else
	   {
	     //return false;
		 echo "<script>alert('Invalid username or password!')</script>";
		$url ='home#modal';
		echo'
		<script>
		window.location.href = "'.base_url().$url.'";
		</script>
		';
	   }
}



function contact()
	{
		$sql=$this->db->get('tbl_setting');
			 $row=$sql->result_array();
		foreach($row as $rec)
		{
			$default_email=$rec['default_email'];
			//echo $ema;
			//exit;
		}
		    $this->load->library('email');
			$name=$this->input->post('name');
			$mobile=$this->input->post('mobile');
			$email=$this->input->post('email');
			$message=addslashes($this->input->post('message'));
			//$sub=$this->input->post('subject');
			$subject = "User Contact Details";
			$message = "User Contact Details<br />
             Name : $name <br />
             Email : $email <br />
			 Phone Number : $mobile <br />
             Message: $message <br />";
			$to = $default_email;
			//$to='yuvaraj950@gmail.com';
			$email_from = "info@saidharmajyothi.com";
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
			$headers .= 'From: '.$email_from. "\r\n";
			$headers .= 'Reply-To: '.$email_from. "\r\n";
            $mail=mail($to, $subject,$message, $headers);
            return true;
			//$header="Content-type: text/html; charset=iso-8859-1; Content-Transfer-Encoding =7bit"."\r\n";
	}
	
	function send_enquiry()
	{
		$sql=$this->db->get('tbl_setting');
			 $row=$sql->result_array();
		foreach($row as $rec)
		{
			$default_email=$rec['default_email'];
			//echo $ema;
			//exit;
		}
		    $this->load->library('email');
			$product_name=$this->input->post('product_name');
			$name=$this->input->post('name');
			$email=$this->input->post('email');
			$message=addslashes($this->input->post('message'));
			$mobile=$this->input->post('mobile');
			//$fax=$this->input->post('fax');
			$subject = "User Enquiry Details For Products";
			$message = "User Enquiry Details For Products<br />
			 Product Name: $product_name <br />
			 Name :$name <br />
             Email :$email <br />
			 Mobile  :$mobile <br />
			 Message  :$message <br />";
			$to = $default_email;
			//$to='yuvaraj950@gmail.com';
			$email_from = "info@vinprotechindia.com";
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
			$headers .= 'From: '.$email_from. "\r\n";
			$headers .= 'Reply-To: '.$email_from. "\r\n";
            $mail=mail($to, $subject,$message, $headers);
            return true;
	}
	
	
	function quick_enquiry()
	{
		$sql=$this->db->get('tbl_setting');
			 $row=$sql->result_array();
		foreach($row as $rec)
		{
			$default_email=$rec['default_email'];
			//echo $ema;
			//exit;
		}
		    $this->load->library('email');
			$name=$this->input->post('name');
			$mobile=$this->input->post('mobile');
			$email=$this->input->post('email');
			$message=addslashes($this->input->post('message'));
			$sub=$this->input->post('subject');
			//$fax=$this->input->post('fax');
			$subject = "User Quick Enquiry Details";
			$message = "User Quick Enquiry Details<br />
             Name : $name <br />
             Email : $email <br />
			 Mobile : $mobile <br />
             Message : $message <br />";
			$to = $default_email;
			//$to='yuvaraj950@gmail.com';
			$email_from = "info@vinprotechindia.com";
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
			$headers .= 'From: '.$email_from. "\r\n";
			$headers .= 'Reply-To: '.$email_from. "\r\n";
            $mail=mail($to, $subject,$message, $headers);
            return true;
	}
	
	function recycle_locations()
	{
		$data['name']=$this->input->post('name');
		$data['email']=$this->input->post('email');
		$data['phone']=$this->input->post('phone');
		$data['subject']=$this->input->post('subject');
		$data['block']=$this->input->post('block');
		$data['road']=$this->input->post('road');
		$data['area']=$this->input->post('area');
		$data['message']=addslashes($this->input->post('message'));
		$date=date('Y-m-d',time());
		$data['date']=$date;
		$this->db->insert('tbl_recycle_locations',$data);
		return true;
	}
	
	function inquiry_form()
	{
		$data['name']=$this->input->post('name');
		$data['email']=$this->input->post('email');
		$data['phone']=$this->input->post('phone');
		$data['subject']=$this->input->post('subject');
		$data['block']=$this->input->post('block');
		$data['road']=$this->input->post('road');
		$data['area']=$this->input->post('area');
		$data['message']=addslashes($this->input->post('message'));
		$date=date('Y-m-d',time());
		$data['date']=$date;
		$this->db->insert('tbl_enquiry_form',$data);
		return true;
	}
	
	function view_area()
	{
		$this->db->order_by('sno','desc');
		$sql=$this->db->get('tbl_area');
		return $sql->result();
	}
	
	function view_address()
	{
		
	  	$qs=$_REQUEST['val'];
	  $sql="select * from `tbl_address` where `area`='$qs' order by category";
	  $query=$this->db->query($sql);
	  //return $query->result();
	  if($query -> num_rows() == 0)
	  {
		  //echo "no city are available";
		  return false;
	  }
	  else
	  {
		  return $query->result();
	  }
  }
  
  
  function view_location()
	{
		
	  	$qs=$_REQUEST['val'];
	  $sql="select * from `tbl_bin_locations` where `address`='$qs' order by `sno` desc";
	  $query=$this->db->query($sql);
	  //return $query->result();
	  if($query -> num_rows() == 0)
	  {
		  //echo "no city are available";
		  //return false;
		  redirect('recycle/no_bin_location');
	  }
	  else
	  {
		  return $query->result();
	  }
  }
  
  function view_project()
  {
	  
    $this->db->order_by('sno','desc');
	$sql=$this->db->get('tbl_projects');
	return $sql->result();  
  }
  
  function channel_form()
  {
	  $name=$this->input->post('name');
	  $year=$this->input->post('year');
	  $property=$this->input->post('property');
	  $number=$this->input->post('number');
	  $data['name']=$name;
	  $data['year']=$year;
	  $data['property']=$property;
	  $data['number']=$number;
	  $date=date('d-m-Y',time());
	  $data['date']=$date;
	  $this->db->insert('tbl_chammel_partner',$data);
	  return true;
  }
  
  function registration_form()
  {
	  $name=$this->input->post('name');
	  $year=$this->input->post('year');
	  $property=$this->input->post('property');
	  $number=$this->input->post('number');
	  $data['name']=$name;
	  $data['year']=$year;
	  $data['property']=$property;
	  $data['number']=$number;
	  $date=date('d-m-Y',time());
	  $data['date']=$date;
	  $this->db->insert('tbl_vender_registration',$data);
	  return true;
  }
  
  function agency_form()
  {
	  $name=$this->input->post('name');
	  $year=$this->input->post('year');
	  $property=$this->input->post('property');
	  $number=$this->input->post('number');
	  $data['name']=$name;
	  $data['year']=$year;
	  $data['property']=$property;
	  $data['number']=$number;
	  $date=date('d-m-Y',time());
	  $data['date']=$date;
	  $this->db->insert('tbl_agency',$data);
	  return true;
  }


function view_compleated($id)
{
	//$this->db->order_by('sno','desc');
	$this->db->order_by('priority','asc') && $this->db->order_by('sno','desc');
	$this->db->limit(5);
	$sql=$this->db->get_where('tbl_projects',array('type_id'=>$id));
	return $sql->result();
}

function view_all_projects($id)
{
	$this->db->order_by('priority','asc') && $this->db->order_by('sno','desc');
	$sql=$this->db->get_where('tbl_projects',array('type_id'=>$id));
	return $sql->result();
}


function projectview($id)
{
	$sql=$this->db->get_where('tbl_over_view',array('project_id'=>$id));
	return $sql->result();
}

function get_project_details($id)
{
	$sql=$this->db->get_where('tbl_projects',array('sno'=>$id));
	return $sql->result();
}

function view_project_details($id)
{
	$sql=$this->db->get_where('tbl_project_details',array('project_id'=>$id));
	return $sql->result();
}


function view_project_slide($id)
{
	$sql=$this->db->get_where('tbl_slider',array('project_id'=>$id));
	return $sql->result();
}

function get_main_slider($id)
{
	$sql=$this->db->get_where('tbl_slider',array('project_id'=>$id));
	return $sql->num_rows();
}

function why_ramky($id)
{
	$sql=$this->db->get_where('tbl_why_ramky',array('project_id'=>$id));
	return $sql->result();
}

function amenities($id)
{
	$sql=$this->db->get_where('tbl_amentics',array('project_id'=>$id));
	return $sql->result();
}

function specifications($id)
{
	$sql=$this->db->get_where('tbl_specifications',array('project_id'=>$id));
	return $sql->result();
}

function locationmap($id)
{
	$sql=$this->db->get_where('tbl_location_map',array('project_id'=>$id));
	return $sql->result();
}

function layout($id)
{
	$sql=$this->db->get_where('tbl_layout',array('project_id'=>$id));
	return $sql->result();
}

function floorplanes($id)
{
	$sql=$this->db->get_where('tbl_floor_planes',array('project_id'=>$id));
	return $sql->result();
}


function get_project_images()
{
	$this->db->limit(15);
	$this->db->order_by('sno','desc');
	$sql=$this->db->get('tbl_scrolling');
	return $sql->result();
}

function search_item()
{
	$keyword=$this->input->post('search');
	$sql="select * from `tbl_area` where `category` like '%$keyword%' order by `sno` desc";
	$query=$this->db->query($sql);
	return $query->result();
}


}
	?>