<?php
Class Admin_model extends CI_Model
{
	
	//-------------------CONTENT START HERE-----------------------------//
	
	function ip_add($ip)
{
     $sql=$this->db->get_where('ipadd',array('ipadd'=>$ip));
     return $sql->result();
	 }
	 
  
	function add_content()
	{
		
		 $config['upload_path']='public/content/';
		 $config['max_size']='9000';
		 $config['allowed_types']='jpg|png|jpeg|gif';
		 $config['encrypt_name']=true;
		 $this->load->library('upload',$config);
		 $this->load->library('image_lib');
	     $this->upload->do_upload('banner');
		 $upload_data = $this->upload->data();
		 
		
		 $img=$upload_data['file_name'];
		 $data['image']=$img;
		 
		$data['content']=addslashes($this->input->post('Content'));
		$data['content_arabic']=addslashes($this->input->post('content_arabic'));
		$data['content_name']=$this->input->post('name');
		$date=date('Y-m-d',time());
		$data['date']=$date;
		$this->db->insert('tbl_content',$data);
		return true;
	}
	
	function select_content()
	{
		$sql=$this->db->get('tbl_content');
		return $sql->result();
	}
	
	function view_priority()
	{
		$sql=$this->db->get('tbl_priority');
		return $sql->result();
	}
	
	function view_priority_arabic()
	{
		$sql=$this->db->get_where('tbl_priority',array('type'=>'Arabic'));
		return $sql->result();
	}
	
	function edit_content_view($id)
	{
		
		$sql="select * from `tbl_content` where content_id='$id'";
		$query=$this->db->query($sql);
		return $query->result();
	}
	
	function view_content_popup($id)
	{
		$sql="select * from `tbl_content` where content_id='$id'";
		$query=$this->db->query($sql);
		return $query->result();
    }
	
	function view_content_arabic_popup($id)
	{
		$sql="select * from `tbl_content` where content_id='$id'";
		$query=$this->db->query($sql);
		return $query->result();
	}
	
	function edit_content()
	{
		$id=$this->input->post('id');
		
		 $old_img=$this->input->post('old_image');
	     $new_img=$_FILES['banner']['name'];
	     if($new_img!='')
	     {
			 if($old_img!='') {
		 $path="public/content/".$old_img;
		 unlink($path);
			 }
		 $config['upload_path']='public/content/';
		  $config['max_size']='9000';
		 $config['allowed_types']='jpg|png|jpeg|gif';
		 $config['encrypt_name']=true;
		 $this->load->library('upload',$config);
	     $this->upload->do_upload('banner');
		 $file_data=$this->upload->data();
		 $img=$file_data['file_name'];
	     }
	     else
	    {
		$img=$old_img;
	    }
	    $data['image']=$img;
		
		
		$data['content']=addslashes($this->input->post('Content'));
		$data['content_arabic']=addslashes($this->input->post('content_arabic'));
		$data['content_name']=$this->input->post('name');
		$date=date('Y-m-d',time());
		$data['date']=$date;
		$this->db->update('tbl_content',$data,array('content_id'=>$id));
		return true;
	}
	
	//-------------------CONTENT END HERE-----------------------------//
	
	//------------------BANNERS START HERE----------------------------------------------//
       function add_banner($img)
	   {
		
		$data['name']=$this->input->post('name');
		$data['link']=$this->input->post('link');
		//$data['price']=$this->input->post('price');
		$data['content']=addslashes($this->input->post('content'));
		$data['image']=$img;
		$data['status']='y';
		$this->db->insert('tbl_banner',$data);
		return true;
	   }
	   
	   function view_banner()
	   {
		   $this->db->order_by('sno','desc');
		  $sql=$this->db->get('tbl_banner');
		  return $sql->result(); 
	   }
	   
	   function view_banner_popup($id)
	   {
		    $sql=$this->db->get_where('tbl_banner',array('sno'=>$id));
		    return $sql->result(); 
	   }

	   
	   function edit_baneer_view($id)
	   {
		  $sql=$this->db->get_where('tbl_banner',array('sno'=>$id));
		  return $sql->result(); 
	   }
	   
	   function edit_banner()
	   {
	     $id=$this->input->post('id');
	     $old_img=$this->input->post('old_image');
	     $new_img=$_FILES['banner']['name'];
	     if($new_img!='')
	     {
		 $path="public/banner/".$old_img;
		 unlink($path);
		 $config['upload_path']='public/banner/';
		  $config['max_size']='9000';
		 $config['allowed_types']='jpg|png|jpeg|gif';
		 $config['encrypt_name']=true;
		 $this->load->library('upload',$config);
	     $this->upload->do_upload('banner');
		 $file_data=$this->upload->data();
		 $img=$file_data['file_name'];
	     }
	     else
	    {
		$img=$old_img;
	    }
	    $data['image']=$img;
		//$data['status']='y';
		$data['name']=$this->input->post('name');
		$data['link']=$this->input->post('link');
		//$data['price']=$this->input->post('price');
		$data['content']=addslashes($this->input->post('content'));
	    $this->db->update('tbl_banner',$data,array('sno'=>$id));
	    return true;
	   }
	   
	   

	//------------------BANNERS END HERE----------------------------------------------//
	
	
	
	//------------------TESTIMONIALS START HERE----------------------------------------------//
       function add_testimonials($img)
	   {
		
		$data['lan_id']=$this->input->post('lan_id');
		$data['name']=$this->input->post('name');
		$data['qualification']=$this->input->post('qualification');
		$data['url']=url_title($this->input->post('name'));
		$data['link']=$this->input->post('link');
		$data['content']=addslashes($this->input->post('content'));
		$data['image']=$img;
		$date=date('Y-m-d',time());
		$data['date']=$date;
		$data['status']='y';
		$this->db->insert('tbl_testimonials',$data);
		return true;
	   }
	   
	   function testimonial_count($id)
	   {
		  $sql=$this->db->get_where('tbl_testimonials',array('lan_id'=>$id));
		  return $sql->num_rows(); 
	   }
	   
	   function select_testimonials($id,$limit,$start)
	   {
		  $this->db->limit($limit,$start); 
		  $this->db->order_by('sno','desc');
		  $sql=$this->db->get_where('tbl_testimonials',array('lan_id'=>$id));
		  return $sql->result(); 
	   }
	   
	   function view_testimonial_popup($id)
	   {
		    $sql=$this->db->get_where('tbl_testimonials',array('sno'=>$id));
		    return $sql->result(); 
	   }

	   
	   function edit_testimonial_view($id)
	   {
		  $sql=$this->db->get_where('tbl_testimonials',array('sno'=>$id));
		  return $sql->result(); 
	   }
	   
	   function edit_testimonial()
	   {
	     $id=$this->input->post('id');
	     /*$old_img=$this->input->post('old_image');
	     $new_img=$_FILES['banner']['name'];
	     if($new_img!='')
	     {
		 $path="public/testimonial/".$old_img;
		 unlink($path);
		 $config['upload_path']='public/testimonial/';
		 $config['max_size']='9000';
		 $config['allowed_types']='jpg|png|jpeg|gif';
		 $config['encrypt_name']=true;
		 $this->load->library('upload',$config);
	     $this->upload->do_upload('banner');
		 $file_data=$this->upload->data();
		 $img=$file_data['file_name'];
	     }
	     else
	    {
		$img=$old_img;
	    }
	    $data['image']=$img;*/
		//$id=$this->input->post('id');
		$date=date('Y-m-d',time());
		$data['date']=$date;
		$data['status']='y';
		$data['lan_id']=$this->input->post('lan_id');
		$data['name']=$this->input->post('name');
		$data['qualification']=$this->input->post('qualification');
		$data['url']=url_title($this->input->post('name'));
		$data['link']=$this->input->post('link');
		$data['content']=addslashes($this->input->post('content'));
	    $this->db->update('tbl_testimonials',$data,array('sno'=>$id));
	    return true;
	   }
	   
	   

	//------------------TESTIMONIALS END HERE----------------------------------------------//
	
	
	//------------------AWARDS START HERE----------------------------------------------//
       function add_awards($img)
	   {
		
		$data['name']=$this->input->post('name');
		$data['type']=$this->input->post('type');
		//$data['link']=$this->input->post('link');
		$data['content']=addslashes($this->input->post('content'));
		$data['image']=$img;
		$date=date('Y-m-d',time());
		$data['date']=$date;
		$data['status']='y';
		$this->db->insert('tbl_awards',$data);
		return true;
	   }
	   
	   function awards_count()
	   {
		  $sql=$this->db->get('tbl_awards');
		  return $sql->num_rows(); 
	   }
	   
	   function select_awards($limit,$start)
	   {
		  $this->db->limit($limit,$start); 
		  $this->db->order_by('sno','desc');
		  $sql=$this->db->get('tbl_awards');
		  return $sql->result(); 
	   }
	   
	  /* function view_testimonial_popup($id)
	   {
		    $sql=$this->db->get_where('tbl_testimonials',array('sno'=>$id));
		    return $sql->result(); 
	   }*/

	   
	   function edit_awards_view($id)
	   {
		  $sql=$this->db->get_where('tbl_awards',array('sno'=>$id));
		  return $sql->result(); 
	   }
	   
	   function edit_awards()
	   {
	     $id=$this->input->post('id');
	     $old_img=$this->input->post('old_image');
	     $new_img=$_FILES['banner']['name'];
	     if($new_img!='')
	     {
		 $path="public/awards/".$old_img;
		 unlink($path);
		 $config['upload_path']='public/awards/';
		  $config['max_size']='9000';
		 $config['allowed_types']='jpg|png|jpeg|gif';
		 $config['encrypt_name']=true;
		 $this->load->library('upload',$config);
	     $this->upload->do_upload('banner');
		 $file_data=$this->upload->data();
		 $img=$file_data['file_name'];
	     }
	     else
	    {
		$img=$old_img;
	    }
	    $data['image']=$img;
		$date=date('Y-m-d',time());
		$data['date']=$date;
		$data['status']='y';
		$data['name']=$this->input->post('name');
		$data['type']=$this->input->post('type');
		//$data['link']=$this->input->post('link');
		$data['content']=addslashes($this->input->post('content'));
	    $this->db->update('tbl_awards',$data,array('sno'=>$id));
	    return true;
	   }
	   
	   

	//------------------AWARDS END HERE----------------------------------------------//
	
	
	//------------------PROJECTS START HERE----------------------------------------------//
	
	
	function view_project_type()
	{
		$sql=$this->db->get('tbl_project_type');
		return $sql->result();
	}
	
	function view_project_location()
	{
		$sql=$this->db->get('tbl_project_location');
		return $sql->result();
	}
	
	  function add_projects($img)
	   {
		   
		/*$id=$this->input->post('type');
		$sql=$this->db->get_where('tbl_project_type',array('sno'=>$id));
		$result=$sql->row_array();
		$project_type=$result['type'];
		$data['type_id']=$this->input->post('type');*/
		
		/*$cat_id=$this->input->post('cat_id');
		$sql=$this->db->get_where('tbl_area',array('sno'=>$cat_id));
		$result=$sql->row_array();
		$data['category']=$result['name'];
		$data['cat_id']=$this->input->post('cat_id');*/
		
		$data['image']=$img;
		//$data['project_date']=$this->input->post('project_date');
		
		$data['top_news']=$this->input->post('top_news');
		$priority=$this->input->post('priority');
		$data['name']=$this->input->post('name');
		$data['url']=url_title($this->input->post('name'));
		$data['content']=addslashes($this->input->post('content'));
		$date=date('Y-m-d',time());
		$data['date']=$date;
	/*	if($priority=="")
		{
			$data['priority']=100000;
		}
		else
		{
			$data['priority']=$priority;
		}*/
		$this->db->insert('tbl_projects',$data);
		return true;
	   }
	   
	   function projects_count()
	   {
		  $sql=$this->db->get('tbl_projects');
		  return $sql->num_rows(); 
	   }
	   
	   function select_projects($limit,$start)
	   {
		  $this->db->limit($limit,$start);
		  $this->db->order_by('sno','desc');
		  $sql=$this->db->get('tbl_projects');
		  return $sql->result(); 
	   }
	   
	  

	   
	   function edit_projects_view($id)
	   {
		  $sql=$this->db->get_where('tbl_projects',array('sno'=>$id));
		  return $sql->result(); 
	   }
	   
	   function edit_projects()
	   {
	     $id=$this->input->post('id');
	     $old_img=$this->input->post('old_image');
	     $new_img=$_FILES['banner']['name'];
	     if($new_img!='')
	     {
		 $path="public/project/".$old_img;
		 unlink($path);
		 $config['upload_path']='public/project/';
		  $config['max_size']='9000';
		 $config['allowed_types']='jpg|png|jpeg|gif|mp3';
		 $config['encrypt_name']=true;
		 $this->load->library('upload',$config);
	     $this->upload->do_upload('banner');
		 $file_data=$this->upload->data();
		 $img=$file_data['file_name'];
	     }
	     else
	    {
		$img=$old_img;
	    }
		/*$type=$this->input->post('type');
		$sql=$this->db->get_where('tbl_project_type',array('sno'=>$type));
		$result=$sql->row_array();
		$project_type=$result['type'];
		$data['type_id']=$this->input->post('type');
		$data['type_name']=$project_type;*/
		
		/*$cat_id=$this->input->post('cat_id');
		$sql=$this->db->get_where('tbl_area',array('sno'=>$cat_id));
		$result=$sql->row_array();
		$data['category']=$result['name'];
		$data['cat_id']=$this->input->post('cat_id');*/
		
		$data['top_news']=$this->input->post('top_news');
		$priority=$this->input->post('priority');
		//$data['project_date']=$this->input->post('project_date');
		$data['name']=$this->input->post('name');
		$data['url']=url_title($this->input->post('name'));
		$data['content']=addslashes($this->input->post('content'));
	    $data['image']=$img;
		$date=date('Y-m-d',time());
		$data['date']=$date;
		/*if($priority=="")
		{
			$data['priority']=100000;
		}
		else
		{
			$data['priority']=$priority;
		}*/
	    $this->db->update('tbl_projects',$data,array('sno'=>$id));
	    return true;
	   }

		function view_projet_popup($id)
		{
			$sql=$this->db->get_where('tbl_projects',array('sno'=>$id));
			return $sql->result();
		}
		
		//-------------------------PROJECTS OVER VIEW START HERE------------------------------//
		
		function project_over_view_id($id)
		{
			$sql=$this->db->get_where('tbl_projects',array('sno'=>$id));
			return $sql->result();
		}
		
		function project_over_view($id)
		{
			$this->db->order_by('sno','desc');
			$sql=$this->db->get_where('tbl_over_view',array('project_id'=>$id));
			return $sql->result();
		}
		
		function project_view_type()
		{
			
			$sql=$this->db->get('tbl_view_type');
		    return $sql->result(); 
		}
		
		function add_overview()
		{
			
		$data['project_id']=$this->input->post('id');
		$data['type']=$this->input->post('type');
		$data['bhk']=$this->input->post('bhk');
		$data['size']=$this->input->post('size');
		$data['price']=$this->input->post('price');
		$data['tower']=$this->input->post('tower');
		$date=date('Y-m-d',time());
		$data['date']=$date;
		$this->db->insert('tbl_over_view',$data);
		return true;
		}
		
		function edit_projects_overview($id)
		{
			$sql=$this->db->get_where('tbl_over_view',array('sno'=>$id));
			return $sql->result();
		}
		
		function edit_overview()
		{
			$id=$this->input->post('id');
			$data['type']=$this->input->post('type');
			$data['bhk']=$this->input->post('bhk');
			$data['size']=$this->input->post('size');
			$data['price']=$this->input->post('price');
			$data['tower']=$this->input->post('tower');
			$date=date('Y-m-d',time());
			$data['date']=$date;
			$this->db->update('tbl_over_view',$data,array('sno'=>$id));
			return true;
			}
		
		//-------------------------PROJECTS OVER VIEW START HERE------------------------------//
		
		
		//-------------------------PROJECTS WHY RAMKY START HERE------------------------------//
		
		function why_ramky($id)
		{
			$this->db->order_by('sno','desc');
			$sql=$this->db->get_where('tbl_why_ramky',array('project_id'=>$id));
			return $sql->result();
		}
		
		
		function add_why_ramky()
		{
			$id=$this->input->post('id');
			$data['project_id']=$id;
			$data['content']=addslashes($this->input->post('content'));
			$date=date('Y-m-d',time());
			$data['date']=$date;
			$this->db->insert('tbl_why_ramky',$data);
			return true;
		}
		
		
		function edit_whyramky_view($id)
		{
			$sql=$this->db->get_where('tbl_why_ramky',array('sno'=>$id));
			return $sql->result();
		}
		
		function edit_why_ramky()
		{
			$id=$this->input->post('id');
			$data['content']=addslashes($this->input->post('content'));
			$date=date('Y-m-d',time());
			$data['date']=$date;
			$this->db->update('tbl_why_ramky',$data,array('sno'=>$id));
			return true;
		}
		
		
		//-------------------------PROJECTS WHY RAMKY END HERE------------------------------//
		
		
		//-------------------------PROJECTS AMENTICS START HERE------------------------------//
		
		function amentics($id)
		{
			$this->db->order_by('sno','desc');
			$sql=$this->db->get_where('tbl_amentics',array('project_id'=>$id));
			return $sql->result();
		}
		
		
		function add_amentics()
		{
			$id=$this->input->post('id');
			$data['project_id']=$id;
			$data['content']=addslashes($this->input->post('content'));
			$date=date('Y-m-d',time());
			$data['date']=$date;
			$this->db->insert('tbl_amentics',$data);
			return true;
		}
		
		
		function edit_amentics_view($id)
		{
			$sql=$this->db->get_where('tbl_amentics',array('sno'=>$id));
			return $sql->result();
		}
		
		function edit_amentics()
		{
			$id=$this->input->post('id');
			$data['content']=addslashes($this->input->post('content'));
			$date=date('Y-m-d',time());
			$data['date']=$date;
			$this->db->update('tbl_amentics',$data,array('sno'=>$id));
			return true;
		}
		
		
		//-------------------------PROJECTS AMENTICS END HERE------------------------------//
		
		
		//-------------------------PROJECTS SPECIFICATIONS START HERE------------------------------//
		
		function specifications($id)
		{
			$this->db->order_by('sno','desc');
			$sql=$this->db->get_where('tbl_specifications',array('project_id'=>$id));
			return $sql->result();
		}
		
		
		function add_specifications()
		{
			$id=$this->input->post('id');
			$data['project_id']=$id;
			$data['content']=addslashes($this->input->post('content'));
			$date=date('Y-m-d',time());
			$data['date']=$date;
			$this->db->insert('tbl_specifications',$data);
			return true;
		}
		
		
		function edit_specifications_view($id)
		{
			$sql=$this->db->get_where('tbl_specifications',array('sno'=>$id));
			return $sql->result();
		}
		
		function edit_specifications()
		{
			$id=$this->input->post('id');
			$data['content']=addslashes($this->input->post('content'));
			$date=date('Y-m-d',time());
			$data['date']=$date;
			$this->db->update('tbl_specifications',$data,array('sno'=>$id));
			return true;
		}
		
		
		//-------------------------PROJECTS SPECIFICATIONS END HERE------------------------------//
		
		
		//-------------------------PROJECTS PROJECT DETAILS START HERE------------------------------//
		
		function project_details($id)
		{
			$this->db->order_by('sno','desc');
			$sql=$this->db->get_where('tbl_project_details',array('project_id'=>$id));
			return $sql->result();
		}
		
		
		function add_project_details()
		{
			
		   $config['upload_path']='public/brochure/';
		   $config['max_size']='9000';
		   $config['allowed_types']='jpg|png|jpeg|gif|pdf';
		   $config['encrypt_name']=true;
		   $this->load->library('upload',$config);
		   $this->load->library('image_lib');
		   $this->upload->do_upload('location_map');
		   $upload_data = $this->upload->data();
		   $img=$upload_data['file_name'];
		   $data['image']=$img;
		   
			$id=$this->input->post('id');
			$data['project_id']=$id;
			$data['content']=addslashes($this->input->post('content'));
			$data['name']=addslashes($this->input->post('name'));
			$date=date('Y-m-d',time());
			$data['date']=$date;
			$this->db->insert('tbl_project_details',$data);
			return true;
		}
		
		
		function edit_project_details_view($id)
		{
			$sql=$this->db->get_where('tbl_project_details',array('sno'=>$id));
			return $sql->result();
		}
		
		function edit_project_details()
		{
			$id=$this->input->post('id');
			
			$old_img=$this->input->post('old_img');
			 $new_img=$_FILES['location_map']['name'];
			 if($new_img!='')
			 {
				 if($old_img!='') {
			 $path="public/brochure/".$old_img;
			 unlink($path);
				 }
			 $config['upload_path']='public/brochure/';
			 $config['max_size']='9000';
			 $config['allowed_types']='jpg|png|jpeg|gif|pdf';
			 $config['encrypt_name']=true;
			 $this->load->library('upload',$config);
			 $this->upload->do_upload('location_map');
			 $file_data=$this->upload->data();
			 $img=$file_data['file_name'];
			 }
			 else
			{
			$img=$old_img;
			}
			$data['image']=$img;
			
			$data['content']=addslashes($this->input->post('content'));
			$data['name']=addslashes($this->input->post('name'));
			$date=date('Y-m-d',time());
			$data['date']=$date;
			$this->db->update('tbl_project_details',$data,array('sno'=>$id));
			return true;
		}
		
		
		//-------------------------PROJECTS PROJECT DETAILS END HERE------------------------------//
		
		
			//-------------------------PROJECTS E-BROCHURE START HERE------------------------------//
		
		function e_brochure($id)
		{
			$this->db->order_by('sno','desc');
			$sql=$this->db->get_where('tbl_brochure',array('project_id'=>$id));
			return $sql->result();
		}
		
		
		function add_brochure()
		{
		   $config['upload_path']='public/brochure/';
		   $config['max_size']='9000';
		   $config['allowed_types']='jpg|png|jpeg|gif|pdf';
		   $config['encrypt_name']=true;
		   $this->load->library('upload',$config);
		   $this->load->library('image_lib');
		   $this->upload->do_upload('location_map');
		   $upload_data = $this->upload->data();
		   $img=$upload_data['file_name'];
		   $data['image']=$img;
		   
			$id=$this->input->post('id');
			$data['project_id']=$id;
			$data['link']=($this->input->post('link'));
			$date=date('Y-m-d',time());
			$data['date']=$date;
			$this->db->insert('tbl_brochure',$data);
			return true;
		}
		
		
		function edit_brochure_view($id)
		{
			$sql=$this->db->get_where('tbl_brochure',array('sno'=>$id));
			return $sql->result();
		}
		
		function edit_brochure()
		{
			$id=$this->input->post('id');
			
			 $old_img=$this->input->post('old_img');
			 $new_img=$_FILES['location_map']['name'];
			 if($new_img!='')
			 {
				 if($old_img!='') {
			 $path="public/brochure/".$old_img;
			 unlink($path);
				 }
			 $config['upload_path']='public/brochure/';
			 $config['max_size']='9000';
			 $config['allowed_types']='jpg|png|jpeg|gif|pdf';
			 $config['encrypt_name']=true;
			 $this->load->library('upload',$config);
			 $this->upload->do_upload('location_map');
			 $file_data=$this->upload->data();
			 $img=$file_data['file_name'];
			 }
			 else
			{
			$img=$old_img;
			}
			$data['image']=$img;
			
			$data['link']=($this->input->post('link'));
			$date=date('Y-m-d',time());
			$data['date']=$date;
			$this->db->update('tbl_brochure',$data,array('sno'=>$id));
			return true;
		}
		
		
		//-------------------------PROJECTS E-BROCHURE END HERE------------------------------//
		
		
			//-------------------------PROJECTS LOCATION MAP START HERE------------------------------//
		
		function location_map($id)
		{
			
			$this->db->order_by('sno','desc');
			$sql=$this->db->get_where('tbl_location_map',array('project_id'=>$id));
			return $sql->result();
		}
		
		
		function add_location_map()
		{
			
		   $config['upload_path']='public/location_map/';
		   $config['max_size']='9000';
		   $config['allowed_types']='jpg|png|jpeg|gif';
		   $config['encrypt_name']=true;
		   $this->load->library('upload',$config);
		   $this->load->library('image_lib');
		   $this->upload->do_upload('location_map');
		   $upload_data = $this->upload->data();
		   $img=$upload_data['file_name'];
		 
			$id=$this->input->post('id');
			$data['project_id']=$id;
			$data['image']=$img;
			$date=date('Y-m-d',time());
			$data['date']=$date;
			$this->db->insert('tbl_location_map',$data);
			return true;
		}
		
		
		function edit_location_map_view($id)
		{
			$sql=$this->db->get_where('tbl_location_map',array('sno'=>$id));
			return $sql->result();
		}
		
		function edit_location_map()
		{
			$id=$this->input->post('id');
			$old_img=$this->input->post('old_img');
			 $new_img=$_FILES['location_map']['name'];
			 if($new_img!='')
			 {
			 $path="public/location_map/".$old_img;
			 unlink($path);
			 $config['upload_path']='public/location_map/';
			 $config['max_size']='9000';
			 $config['allowed_types']='jpg|png|jpeg|gif';
			 $config['encrypt_name']=true;
			 $this->load->library('upload',$config);
			 $this->upload->do_upload('location_map');
			 $file_data=$this->upload->data();
			 $img=$file_data['file_name'];
			 }
			 else
			{
			$img=$old_img;
			}
			$data['image']=$img;
			$date=date('Y-m-d',time());
			$data['date']=$date;
			$this->db->update('tbl_location_map',$data,array('sno'=>$id));
			return true;
		}
		
		
		//-------------------------PROJECTS LOCATION MAP END HERE------------------------------//
		
		
		//-------------------------PROJECTS LAYOUT START HERE------------------------------//
		
		function layout($id)
		{
			$this->db->order_by('sno','desc');
			$sql=$this->db->get_where('tbl_layout',array('project_id'=>$id));
			return $sql->result();
		}
		
		
		function add_layout()
		{
			
		   $config['upload_path']='public/layout/';
		   $config['max_size']='9000';
		   $config['allowed_types']='jpg|png|jpeg|gif';
		   $config['encrypt_name']=true;
		   $this->load->library('upload',$config);
		   $this->load->library('image_lib');
		   $this->upload->do_upload('location_map');
		   $upload_data = $this->upload->data();
		   $img=$upload_data['file_name'];
		 
			$id=$this->input->post('id');
			$data['project_id']=$id;
			$data['image']=$img;
			$date=date('Y-m-d',time());
			$data['date']=$date;
			$this->db->insert('tbl_layout',$data);
			return true;
		}
		
		
		function edit_layout_view($id)
		{
			$sql=$this->db->get_where('tbl_layout',array('sno'=>$id));
			return $sql->result();
		}
		
		function edit_layout()
		{
			$id=$this->input->post('id');
			$old_img=$this->input->post('old_img');
			 $new_img=$_FILES['location_map']['name'];
			 if($new_img!='')
			 {
			 $path="public/layout/".$old_img;
			 unlink($path);
			 $config['upload_path']='public/layout/';
			 $config['max_size']='9000';
			 $config['allowed_types']='jpg|png|jpeg|gif';
			 $config['encrypt_name']=true;
			 $this->load->library('upload',$config);
			 $this->upload->do_upload('location_map');
			 $file_data=$this->upload->data();
			 $img=$file_data['file_name'];
			 }
			 else
			{
			$img=$old_img;
			}
			$data['image']=$img;
			$date=date('Y-m-d',time());
			$data['date']=$date;
			$this->db->update('tbl_layout',$data,array('sno'=>$id));
			return true;
		}
		
		
		//-------------------------PROJECTS LAYOUT END HERE------------------------------//
		
		
		//-------------------------PROJECTS FLOOR PLANS START HERE------------------------------//
		
		function floor_planes($id)
		{
			$this->db->order_by('sno','desc');
			$sql=$this->db->get_where('tbl_floor_planes',array('project_id'=>$id));
			return $sql->result();
		}
		
		
		function add_floor_planes()
		{
			
		   $config['upload_path']='public/floor_plans/';
		   $config['max_size']='9000';
		   $config['allowed_types']='jpg|png|jpeg|gif|pdf';
		   $config['encrypt_name']=true;
		   $this->load->library('upload',$config);
		   $this->load->library('image_lib');
		   $this->upload->do_upload('location_map');
		   $upload_data = $this->upload->data();
		   $img=$upload_data['file_name'];
		 
			$id=$this->input->post('id');
			$data['project_id']=$id;
			$data['image']=$img;
			$data['name']=$this->input->post('name');
			$date=date('Y-m-d',time());
			$data['date']=$date;
			$this->db->insert('tbl_floor_planes',$data);
			return true;
		}
		
		
		function edit_floor_planes_view($id)
		{
			$sql=$this->db->get_where('tbl_floor_planes',array('sno'=>$id));
			return $sql->result();
		}
		
		function edit_floor_plans()
		{
			$id=$this->input->post('id');
			$old_img=$this->input->post('old_img');
			 $new_img=$_FILES['location_map']['name'];
			 if($new_img!='')
			 {
			 $path="public/floor_plans/".$old_img;
			 unlink($path);
			 $config['upload_path']='public/floor_plans/';
			 $config['max_size']='9000';
			 $config['allowed_types']='jpg|png|jpeg|gif|pdf';
			 $config['encrypt_name']=true;
			 $this->load->library('upload',$config);
			 $this->upload->do_upload('location_map');
			 $file_data=$this->upload->data();
			 $img=$file_data['file_name'];
			 }
			 else
			{
			$img=$old_img;
			}
			$data['image']=$img;
			$data['name']=$this->input->post('name');
			$date=date('Y-m-d',time());
			$data['date']=$date;
			$this->db->update('tbl_floor_planes',$data,array('sno'=>$id));
			return true;
		}
		
		
		//-------------------------PROJECTS FLOOR PLANS END HERE------------------------------//
		
		
		//-------------------------PROJECTS SLIDER IMAGES START HERE------------------------------//
		
		function slider($id)
		{
			$this->db->order_by('sno','desc');
			$sql=$this->db->get_where('tbl_slider',array('project_id'=>$id));
			return $sql->result();
		}
		
		
		function add_slider()
		{
			
		   $config['upload_path']='public/slider/';
		   $config['max_size']='9000';
		   $config['allowed_types']='jpg|png|jpeg|gif';
		   $config['encrypt_name']=true;
		   $this->load->library('upload',$config);
		   $this->load->library('image_lib');
		   $this->upload->do_upload('location_map');
		   $upload_data = $this->upload->data();
		   $img=$upload_data['file_name'];
		 
			$id=$this->input->post('id');
			$data['project_id']=$id;
			$data['image']=$img;
			$date=date('Y-m-d',time());
			$data['date']=$date;
			$this->db->insert('tbl_slider',$data);
			return true;
		}
		
		
		function edit_slider_view($id)
		{
			$sql=$this->db->get_where('tbl_slider',array('sno'=>$id));
			return $sql->result();
		}
		
		function edit_slider()
		{
			$id=$this->input->post('id');
			$old_img=$this->input->post('old_img');
			 $new_img=$_FILES['location_map']['name'];
			 if($new_img!='')
			 {
			 $path="public/slider/".$old_img;
			 unlink($path);
			 $config['upload_path']='public/slider/';
			 $config['max_size']='9000';
			 $config['allowed_types']='jpg|png|jpeg|gif';
			 $config['encrypt_name']=true;
			 $this->load->library('upload',$config);
			 $this->upload->do_upload('location_map');
			 $file_data=$this->upload->data();
			 $img=$file_data['file_name'];
			 }
			 else
			{
			$img=$old_img;
			}
			$data['image']=$img;
			$date=date('Y-m-d',time());
			$data['date']=$date;
			$this->db->update('tbl_slider',$data,array('sno'=>$id));
			return true;
		}
		
		
		//-------------------------PROJECTS SLIDER IMAGES END HERE------------------------------//
		
		
		
	//------------------PROJECTS END HERE----------------------------------------------//
	
	
	
	//------------------PROJECTS START HERE----------------------------------------------//
	
	
	function view_vategory()
	{
		$sql=$this->db->get('tbl_area');
		return $sql->result();
	}
	
	
	  function add_facts($img,$pdf)
	   {
		
		/*$cat_id=$this->input->post('category');
		$sql=$this->db->get_where('tbl_area',array('sno'=>$cat_id));
		$result=$sql->row_array();
		
		$sub_id=$this->input->post('address');
		$sql_sub=$this->db->get_where('tbl_address',array('sno'=>$sub_id));
		$result_sub=$sql_sub->row_array();
		
		
		$data['cat_id']=$cat_id;
		$data['sub_id']=$sub_id;
		$data['category']=$result['category'];
		$data['url_cat']=url_title($result['category']);
		$data['sub_category']=$result_sub['category'];
		$data['url_sub']=url_title($result_sub['category']);
		$data['url_cat']=url_title($result['category']);*/
		$data['name']=$this->input->post('name');
		$data['url']=url_title($this->input->post('name'));
		$data['content']=addslashes($this->input->post('content'));
		$data['image']=$img;
		$data['pdf']=$pdf;
		$date=date('Y-m-d',time());
		$data['date']=$date;
		$this->db->insert('tbl_facts',$data);
		return true;
	   }
	   
	   function facts_count()
	   {
		  $sql=$this->db->get('tbl_facts');
		  return $sql->num_rows(); 
	   }
	   
	   function select_facts($limit,$start)
	   {
		  $this->db->limit($limit,$start);
		  $this->db->order_by('sno','desc');
		  $sql=$this->db->get('tbl_facts');
		  return $sql->result(); 
	   }
	   
	  
	   function edit_facts_view($id)
	   {
		  $sql=$this->db->get_where('tbl_facts',array('sno'=>$id));
		  return $sql->result(); 
	   }
	   
	   function edit_facts()
	   {
	     $id=$this->input->post('id');
	     $old_img=$this->input->post('old_image');
	     $new_img=$_FILES['banner']['name'];
	     if($new_img!='')
	     {
		 $path="public/facts/".$old_img;
		 unlink($path);
		 $config['upload_path']='public/facts/';
		  $config['max_size']='9000';
		 $config['allowed_types']='jpg|png|jpeg|gif|';
		 $config['encrypt_name']=true;
		 $this->load->library('upload',$config);
	     $this->upload->do_upload('banner');
		 $file_data=$this->upload->data();
		 $img=$file_data['file_name'];
	     }
	     else
	    {
		$img=$old_img;
	    }
		
		
		
		/*$old_pdf=$this->input->post('old_pdf');
	     $new_img=$_FILES['pdf']['name'];
	     if($new_img!='')
	     {
		 $path="public/facts/".$old_pdf;
		 unlink($path);
		 $config['upload_path']='public/facts/';
		  $config['max_size']='9000';
		 $config['allowed_types']='jpg|png|jpeg|gif|pdf';
		 $config['encrypt_name']=true;
		 $this->load->library('upload',$config);
	     $this->upload->do_upload('pdf');
		 $file_data=$this->upload->data();
		 $pdf=$file_data['file_name'];
	     }
	     else
	    {
		$pdf=$old_pdf;
	    }*/
		
		/*$cat_id=$this->input->post('category');
		$sql=$this->db->get_where('tbl_area',array('sno'=>$cat_id));
		$result=$sql->row_array();
		
		$sub_id=$this->input->post('address');
		$sql_sub=$this->db->get_where('tbl_address',array('sno'=>$sub_id));
		$result_sub=$sql_sub->row_array();
		
		$data['cat_id']=$cat_id;
		$data['sub_id']=$sub_id;
		$data['category']=$result['category'];
		$data['sub_category']=$result_sub['category'];
		$data['url_sub']=url_title($result_sub['category']);
		$data['url_cat']=url_title($result['category']);*/
		$data['name']=$this->input->post('name');
		$data['url']=url_title($this->input->post('name'));
		$data['content']=addslashes($this->input->post('content'));
		
	    $data['image']=$img;
		//$data['pdf']=$pdf;
		$date=date('Y-m-d',time());
		$data['date']=$date;
	    $this->db->update('tbl_facts',$data,array('sno'=>$id));
	    return true;
	   }
	   
	   function view_facts_popup($id)
	   {
		   $sql=$this->db->get_where('tbl_facts',array('sno'=>$id));
		   return $sql->result();
	   }
	
			
	//------------------PROJECTS END HERE----------------------------------------------//
			
			
			
	
	  //-------------------GALLERY START HERE-----------------------------//
	  
	  
	  function view_gallery_category()
	  {
		 $this->db->order_by('name'); 
		 $sql=$this->db->get('tbl_category');
		 return $sql->result(); 
	  }
	  
	  
    function add_gallery()
		{
	$images=$_FILES['image']['name'];
	$this->load->library('upload');
	$this->load->library('image_lib');
	$upload_conf = array(
	'upload_path' => realpath('public/gallery'),
	'allowed_types' => '*',
	'max_size' => '30000',
	'encrypt_name' =>true,
	);
	$this->upload->initialize( $upload_conf );
	foreach($_FILES['image'] as $key=>$val)
	{
	$i = 1;
	foreach($val as $v)
	{
	$field_name = "file_".$i;
	$_FILES[$field_name][$key] = $v;
	$i++;
	}
	}
	  
	unset($_FILES['image']);
	$error = array();
	$success = array();
	foreach($_FILES as $field_name => $file)
	{
	if ( !$this->upload->do_upload($field_name))
	{
	$error['upload'][] = $this->upload->display_errors();
	}
	else
	{
	$upload_data = $this->upload->data();
	$resize_conf = array(
	'source_image' => $upload_data['full_path'],
	'new_image' => $upload_data['file_path'].'thumb/'.$upload_data['file_name'],
	'encrypt_name' =>true,
	'width' => 500,
	'height' => 300
	);
	$this->image_lib->initialize($resize_conf);
	if ( ! $this->image_lib->resize())
	{
	$error['resize'][]= $this->image_lib->display_errors();
	}
	else
	{
	$success[] = $upload_data;
	}
		$data['images']=$upload_data['file_name'];
		
		$cat_id=$this->input->post('cat_id');
		$sql=$this->db->get_where('tbl_category',array('sno'=>$cat_id));
		$result=$sql->row_array();
		$data['cat_id']=$cat_id;
		$data['category']=$result['name'];
		$data['url_cat']=url_title($result['name']);
		
		//echo $upload_data['file_name'];
		//exit;
	    $this->db->insert('tbl_gallery',$data);
	}
	}
//exit;
    $this->session->set_flashdata('msg',' Records Inserted Successfully.');
    return true;
	}
	
	function gallery_count()
	{
		$sql="SELECT * FROM tbl_gallery";
		$query=$this->db->query($sql);
		return $query->num_rows();
	}
	
	function select_gallery($limit,$start)
	{
		$sql="select * from tbl_gallery order by `sno` desc  limit $start,$limit";
		$query=$this->db->query($sql);
		return $query->result();
	}
	
	function edit_gallery_view($id)
	{
		 $sql=$this->db->get_where('tbl_gallery',array('sno'=>$id));
		 return $sql->result(); 
	}
	
	function edit_gallery()
	{
		 $id=$this->input->post('id');
	     $old_img=$this->input->post('old_image');
	     $new_img=$_FILES['image']['name'];
	     if($new_img!='')
	     {
		 $path="public/gallery/".$old_img;
		 $path1="public/gallery/thumb/".$old_img;
		 unlink($path);
		 unlink($path1);
		 $config['upload_path']='public/gallery/';
		 $config['max_size']='9000';
		 $config['allowed_types']='jpg|png|jpeg|gif';
		 $config['encrypt_name']=true;
		 $this->load->library('upload',$config);
		 $this->load->library('image_lib');
	     $this->upload->do_upload('image');
		 $upload_data = $this->upload->data();
		 $resize_conf = array(
	'source_image' => $upload_data['full_path'],
	'new_image' => $upload_data['file_path'].'thumb/'.$upload_data['file_name'],
	'encrypt_name' =>true,
	'width' => 500,
	'height' => 300
	);
	$this->image_lib->initialize($resize_conf);
	if ( ! $this->image_lib->resize())
	{
	$error['resize'][]= $this->image_lib->display_errors();
	}
	else
	{
	$success[] = $upload_data;
	}
		 $img=$upload_data['file_name'];
	 }
	 else
	 {
		$img=$old_img;
	 }
	    $data['images']=$img;
		
		$cat_id=$this->input->post('cat_id');
		$sql=$this->db->get_where('tbl_category',array('sno'=>$cat_id));
		$result=$sql->row_array();
		$data['cat_id']=$cat_id;
		$data['category']=$result['name'];
		$data['url_cat']=url_title($result['name']);
		
	    $this->db->update('tbl_gallery',$data,array('sno'=>$id));
	    return true;

	}

	
		  //-------------------GALLERY END HERE-----------------------------//
		  
		  
		  //------------------- CATEGORY  START HERE-----------------------------//
	
	function add_category()
	{
		$data['name']=$this->input->post('name');
		$data['url']=url_title($this->input->post('name'));
		$data['date']=date('Y-m-d',time());
		$this->db->insert('tbl_category',$data);
		return true;
	}
	
	function category_count()
	{
		$sql=$this->db->get('tbl_category');
		return $sql->num_rows();
	}
	
	
	function select_category($limit,$start)
	{
		$this->db->limit($limit,$start);
		$this->db->order_by('sno','desc');
		$sql=$this->db->get('tbl_category');
		return $sql->result();
	}
	
	function select_category_arabic()
	{
		$sql=$this->db->get_where('tbl_category',array('type'=>'Arabic'));
		return $sql->result();
	}
	
	
	function edit_category_view($id)
	{
		$sql=$this->db->get_where('tbl_category',array('sno'=>$id));
		return $sql->result();
	}
	
	function edit_category()
	{
		$id=$this->input->post('id');
		$data['name']=$this->input->post('name');
		$data['url']=url_title($this->input->post('name'));
		$data['date']=date('Y-m-d',time());
		$this->db->update('tbl_category',$data,array('sno'=>$id));
		return true;
	}
	
		//------------------- CATEGORY  END HERE-----------------------------//
		
		
		  //------------------SERVICES  START HERE----------------//
		  
		  function view_category_pro()
		  {
			  $sql=$this->db->get_where('tbl_category',array('type'=>'English'));
			  return $sql->result();
		  }
		  
		  function view_category_pro_arabic()
		  {
			 $sql=$this->db->get_where('tbl_category',array('type'=>'Arabic'));
			  return $sql->result(); 
		  }
		  
		  function view_period()
		  {
			  $sql=$this->db->get('tbl_period');
			  return $sql->result();
		  }
		  
          function add_services()
		  {
		 $config['upload_path']='public/services/';
		 $config['max_size']='9000';
		 $config['allowed_types']='jpg|png|jpeg|gif|pdf';
		 $config['encrypt_name']=true;
		 $this->load->library('upload',$config);
		 $this->load->library('image_lib');
	     $this->upload->do_upload('image');
		 $upload_data = $this->upload->data();
		
		
		 
		 
		/*$resize_conf = array(
	'source_image' => $upload_data['full_path'],
	'new_image' => $upload_data['file_path'].'thumb/'.$upload_data['file_name'],
	'encrypt_name' =>true,
	'width' => 300,
	'height' => 500
	);
	$this->image_lib->initialize($resize_conf);
	if ( ! $this->image_lib->resize())
	{
	$error['resize'][]= $this->image_lib->display_errors();
	}
	else
	{
	$success[] = $upload_data;
	}*/
	
		 $img=$upload_data['file_name'];
		 
		 
		 $config['upload_path']='public/services/';
		 $config['max_size']='9000';
		 $config['allowed_types']='jpg|png|jpeg|gif|pdf';
		 $config['encrypt_name']=true;
		 $this->load->library('upload',$config);
		 $this->load->library('image_lib');
	     $this->upload->do_upload('arabic');
		 $upload_data = $this->upload->data();
		 $img_arabic=$upload_data['file_name'];
		 
		 
		    $data['type']=$this->input->post('type');
			$data['name']=$this->input->post('name');
			$data['year']=$this->input->post('year');
			$data['category']=$this->input->post('category');
		    $data['image']=$img;
			$data['arabic']=$img_arabic;
			//$data['url']=url_title($this->input->post('name'));
			//$data['description']=$this->input->post('Content');
			$date=date('Y-m-d',time());
		    $data['date']=$date;
		    $data['status']='y';
		    $this->db->insert('tbl_services',$data);
		    return true;
		  }
		  
		  function services_count()
		  {
			  $sql="SELECT * FROM tbl_services where `type`='English'";
		      $query=$this->db->query($sql);
		      return $query->num_rows();
		  }
		  
		  function services_count_arabic()
		  {
			  $sql="SELECT * FROM tbl_services where `type`='Arabic'";
		      $query=$this->db->query($sql);
		      return $query->num_rows();
		  }
		  
		  function select_services($limit,$start)
		  {
			  
			  $this->db->limit($limit,$start);
			  $this->db->order_by('sno','desc');
			  $sql=$this->db->get_where('tbl_services',array('type'=>'English'));
			  return $sql->result();
		   /* $sql="select * from `tbl_services` t1 join `tbl_category` t2 on t2.cat_id=t1.category order by `sno` desc limit $start,$limit";
		$query=$this->db->query($sql);
		return $query->result();*/
		  }
		  
		  function select_newsletter_arabic($limit,$start)
		  {
			  
			  $this->db->limit($limit,$start);
			  $this->db->order_by('sno','desc');
			  $sql=$this->db->get_where('tbl_services',array('type'=>'Arabic'));
			  return $sql->result();
		  }
		  
		  function edit_services_id($id)
		  {
			   $sql=$this->db->get_where('tbl_services',array('sno'=>$id));
		       return $sql->result();
		  }
		  
		  function edit_services()
		  {
			  $id=$this->input->post('id');
	          $old_image=$this->input->post('old_eng');
	          $new_img=$_FILES['image']['name'];
	          if($new_img!=''){
			 $path1="public/services/".$old_image;
			 unlink($path1);
			 $config['upload_path']='public/services/';
		 $config['max_size']='9000';
		 $config['allowed_types']='jpg|png|jpeg|gif|pdf';
		 $config['encrypt_name']=true;
		 $this->load->library('upload',$config);
	     $this->upload->do_upload('image');
		 $this->load->library('image_lib');
		 $upload_data = $this->upload->data();
		
		 $img=$upload_data['file_name'];
	 }
	 else
	 {
		$img=$old_image;
	 }
	 
	 
	 $old_arabic=$this->input->post('old_arabic');
	          $new_img=$_FILES['arabic']['name'];
	          if($new_img!=''){
			 $path1="public/services/".$old_arabic;
			 unlink($path1);
			 $config['upload_path']='public/services/';
		 $config['max_size']='*';
		 $config['allowed_types']='jpg|png|jpeg|gif|pdf';
		 $config['encrypt_name']=true;
		 $this->load->library('upload',$config);
	     $this->upload->do_upload('arabic');
		 $this->load->library('image_lib');
		 $upload_data = $this->upload->data();
		
		 $img_arabic=$upload_data['file_name'];
	 }
	 else
	 {
		$img_arabic=$old_arabic;
	 }
	 
	        $data['type']=$this->input->post('type');
	        $data['name']=$this->input->post('name');
			$data['year']=$this->input->post('year');
			$data['category']=$this->input->post('category');
		    $data['image']=$img;
			$data['arabic']=$img_arabic;
			$data['description']=$this->input->post('Content');
			$date=date('Y-m-d',time());
		    $data['date']=$date;
		    $data['status']='y';
	 $this->db->update('tbl_services',$data,array('sno'=>$id));
	 return true;
		  }
		  
		  function service_name()
		  {
			  $sql=$this->db->get('tbl_services');
			  return $sql->result();
		  }
		  //------------------SERVICES  END HERE----------------//
		  
		  
		
		
		  
		    //------------------CLIENTS  START HERE----------------//
		  
		  function view_category_client()
		  {
			  $sql=$this->db->get('tbl_client_category');
			  return $sql->result();
		  }
		  
          function add_clients()
		  {
			   $config['upload_path']='public/clients/';
		 $config['max_size']='9000';
		 $config['allowed_types']='jpg|png|jpeg|gif';
		 $config['encrypt_name']=true;
		 $this->load->library('upload',$config);
		 $this->load->library('image_lib');
	     $this->upload->do_upload('image');
		 $upload_data = $this->upload->data();
		 
		$resize_conf = array(
	'source_image' => $upload_data['full_path'],
	'new_image' => $upload_data['file_path'].'thumb/'.$upload_data['file_name'],
	'encrypt_name' =>true,
	'width' => 300,
	'height' => 500
	);
	$this->image_lib->initialize($resize_conf);
	if ( ! $this->image_lib->resize())
	{
	$error['resize'][]= $this->image_lib->display_errors();
	}
	else
	{
	$success[] = $upload_data;
	}
		 $img=$upload_data['file_name'];
			
		    $data['image']=$img;
			$data['name']=$this->input->post('link');
			$date=date('Y-m-d',time());
		    $data['date']=$date;
		    $data['status']='y';
		    $this->db->insert('tbl_clients',$data);
		    return true;
		  }
		  
		  function clients_count()
		  {
			  $sql="select * from `tbl_clients`";
			  $query=$this->db->query($sql);
			  return $query->num_rows();
		  }
		  
		  function select_clients($limit,$start)
		  {
		    $sql="select * from `tbl_clients` order by `sno` desc limit $start,$limit";
		$query=$this->db->query($sql);
		return $query->result();
		  }
		  
		  function edit_clients_id($id)
		  {
			   $sql=$this->db->get_where('tbl_clients',array('sno'=>$id));
		       return $sql->result();
		  }
		  
		  function edit_clients()
		  {
			  $id=$this->input->post('id');
	          $old_image=$this->input->post('old_image');
	          $new_img=$_FILES['image']['name'];
	          if($new_img!=''){
			 $path1="public/clients/".$old_image;
			 $path2="public/clients/thumb/".$old_image;
			 unlink($path1);
			unlink($path2);
			 $config['upload_path']='public/clients/';
		 $config['max_size']='9000';
		 $config['allowed_types']='jpg|png|jpeg|gif';
		 $config['encrypt_name']=true;
		 $this->load->library('upload',$config);
	     $this->upload->do_upload('image');
		 $this->load->library('image_lib');
		 $upload_data = $this->upload->data();
		$resize_conf = array(
	'source_image' => $upload_data['full_path'],
	'new_image' => $upload_data['file_path'].'thumb/'.$upload_data['file_name'],
	'encrypt_name' =>true,
	'width' => 300,
	'height' => 200
	);
	$this->image_lib->initialize($resize_conf);
	if ( ! $this->image_lib->resize())
	{
	$error['resize'][]= $this->image_lib->display_errors();
	}
	else
	{
	$success[] = $upload_data;
	}
		 $img=$upload_data['file_name'];
	 }
	 else
	 {
		$img=$old_image;
	 }
	        
		    $data['image']=$img;
			$data['name']=$this->input->post('link');
			$date=date('Y-m-d',time());
		    $data['date']=$date;
		    $data['status']='y';
	 $this->db->update('tbl_clients',$data,array('sno'=>$id));
	 return true;
		  }
		  //------------------CLIENTS  END HERE----------------//
		  
		  //------------------NEWS  START HERE----------------//
		  
		  
          function add_news()
		  {
	     /*$config['upload_path']='public/news/';
		 $config['max_size']='9000';
		 $config['allowed_types']='jpg|png|jpeg|gif';
		 $config['encrypt_name']=true;
		 $this->load->library('upload',$config);
		 $this->load->library('image_lib');
	     $this->upload->do_upload('image');
		 $upload_data = $this->upload->data();
		 
		$resize_conf = array(
	'source_image' => $upload_data['full_path'],
	'new_image' => $upload_data['file_path'].'thumb/'.$upload_data['file_name'],
	'encrypt_name' =>true,
	'width' => 300,
	'height' => 500
	);
	$this->image_lib->initialize($resize_conf);
	if ( ! $this->image_lib->resize())
	{
	$error['resize'][]= $this->image_lib->display_errors();
	}
	else
	{
	$success[] = $upload_data;
	}
		 $img=$upload_data['file_name'];*/
			$data['title']=addslashes($this->input->post('name'));
			$data['url']=url_title($this->input->post('name'));
		    //$data['image']=$img;
		    $data['description']=addslashes($this->input->post('Content'));
			$date=date('Y-m-d',time());
		    $data['date']=$date;
		    $data['status']='y';
		    $this->db->insert('tbl_news',$data);
		    return true;
		  }
		  
		  function select_news($limit,$start)
		  {
		    $sql="select * from `tbl_news` order by `sno` desc limit $start,$limit";
		    $query=$this->db->query($sql);
		    return $query->result();
		    }
			
			function news_count()
			{
				$sql=$this->db->get('tbl_news');
				return $sql->num_rows();
			}
		  
		  function edit_news_id($id)
		  {
			   $sql=$this->db->get_where('tbl_news',array('sno'=>$id));
		       return $sql->result();
		  }
		  
		  function edit_news()
		  {
			  $id=$this->input->post('id');
	          /*$old_image=$this->input->post('old_image');
	          $new_img=$_FILES['image']['name'];
	          if($new_img!=''){
			 $path1="public/news/".$old_image;
			 $path2="public/news/thumb/".$old_image;
			 unlink($path1);
			unlink($path2);
			 $config['upload_path']='public/news/';
		 $config['max_size']='9000';
		 $config['allowed_types']='jpg|png|jpeg|gif';
		 $config['encrypt_name']=true;
		 $this->load->library('upload',$config);
	     $this->upload->do_upload('image');
		 $this->load->library('image_lib');
		 $upload_data = $this->upload->data();
		$resize_conf = array(
	'source_image' => $upload_data['full_path'],
	'new_image' => $upload_data['file_path'].'thumb/'.$upload_data['file_name'],
	'encrypt_name' =>true,
	'width' => 300,
	'height' => 200
	);
	$this->image_lib->initialize($resize_conf);
	if ( ! $this->image_lib->resize())
	{
	$error['resize'][]= $this->image_lib->display_errors();
	}
	else
	{
	$success[] = $upload_data;
	}
		 $img=$upload_data['file_name'];
	 }
	 else
	 {
		$img=$old_image;
	 }*/
	        $data['title']=addslashes($this->input->post('name'));
			$data['url']=url_title($this->input->post('name'));
		    //$data['image']=$img;
		    $data['description']=addslashes($this->input->post('Content'));
			$date=date('Y-m-d',time());
		    $data['date']=$date;
		    $data['status']='y';
	 $this->db->update('tbl_news',$data,array('sno'=>$id));
	 return true;
		  }
		  //------------------NEWS  END HERE----------------//
		  
		  //-------------------STRATEGIES START HERE-----------------------------//
	function add_strategies()
	{
		$data['content']=addslashes($this->input->post('Content'));
		$data['strategies_name']=$this->input->post('name');
		//$data['service_id']=$this->input->post('Service');
		$date=date('Y-m-d',time());
		$data['date']=$date;
		$this->db->insert('tbl_strategies',$data);
		return true;
	}
	
	function services_indiacount()
	{
		$sql="select * from `tbl_strategies`";
		$query=$this->db->query($sql);
		return $query->num_rows();
	}
	
	function select_strategies($limit,$start)
	{
		$sql="select * from `tbl_strategies` order by `id` desc limit $start,$limit";
		$query=$this->db->query($sql);
		return $query->result();
	}
	
	function edit_strategies_view($id)
	{
		$sql="select * from `tbl_strategies` where id='$id'";
		$query=$this->db->query($sql);
		return $query->result();
	}
	
	function edit_strategies()
	{
		$id=$this->input->post('id');
		$data['content']=addslashes($this->input->post('Content'));
		$data['strategies_name']=$this->input->post('name');
		//$data['service_id']=$this->input->post('Service');
		$date=date('Y-m-d',time());
		$data['date']=$date;
		$this->db->update('tbl_strategies',$data,array('id'=>$id));
		return true;
	}
	
	function view_services_popup($id)
	{
		$sql="select * from `tbl_strategies` where id='$id'";
		$query=$this->db->query($sql);
		return $query->result();
	}
	
	//-------------------STRATEGIES END HERE-----------------------------//
	
		 //------------------SETTINGS START HERE----------------//
		 
		 function settings_view()
	{
		$row=$this->db->get_where('tbl_setting',array('setting_id' =>1));
		return $row->result_array();
	}
	function edit_settings($id)
	{
		$data['company_title']=$this->input->post('company_title');
		$data['default_email']=$this->input->post('default_email');
		$data['mobile']=$this->input->post('mobile');
		$data['fblink']=$this->input->post('facebook');
		$data['twitter']=$this->input->post('twitter');
	    $data['Linkedin_link']=$this->input->post('Linkedin_link');
		$data['google_link']=$this->input->post('google_link');
		$data['you_tube']=$this->input->post('you_tube');
		$data['instagram']=$this->input->post('instagram');
		$data['Pinterestt']=$this->input->post('Pinterestt');
		$data['default_address']=$this->input->post('default_address');
		//$data['google_plus']=$this->input->post('google_plus');
		//$data['flicker']=$this->input->post('flicker');
		$data['meta_title']=$this->input->post('meta_title');
		$data['meta_desc']=$this->input->post('meta_desc');
		$data['meta_keywords']=$this->input->post('meta_keywords');
		if($this->db->update('tbl_setting',$data,array('setting_id' =>$id)))
		{
		 $data1['email_id']=$this->input->post('default_email');
		 $session_data=$this->session->userdata('logged_in');
		 $admin_id=$session_data['maven_id'];
		 $this->db->update('tbl_admin',$data1,array('admin_id' =>$admin_id));
		}
		$this->session->set_flashdata('msg','Update Successfully Completed');
		return true;	
	   }
		 
	     //------------------SETTINGS END HERE----------------//
		 
		  //------------------CAREERS START HERE----------------//
		  
		  function careers_count()
		  {
			  $sql="SELECT * FROM tbl_careers where `type`='English'";
		      $query=$this->db->query($sql);
		      return $query->num_rows();
		  }
		  
		   function careers_count_arabic()
		  {
			  $sql="SELECT * FROM tbl_careers where `type`='Arabic'";
		      $query=$this->db->query($sql);
		      return $query->num_rows();
		  }
		  
		  
		  function select_careers($limit,$start)
		  {
			  $sql="select * from tbl_careers where `type`='English' order by `sno` desc  limit $start,$limit";
		      $query=$this->db->query($sql);
		      return $query->result();
		  }
		  
		  function select_careers_arabic($limit,$start)
		  {
			  $sql="select * from tbl_careers where `type`='Arabic' order by `sno` desc  limit $start,$limit";
		      $query=$this->db->query($sql);
		      return $query->result();
		  }
		  
		  function view_career_popup($id)
		  {
			  $sql=$this->db->get_where('tbl_careers',array('sno'=>$id));
			  return $sql->result();
		  }
		  
         //------------------CAREERS END HERE----------------//
		 
		  //------------------CHANGE PASSWORD START HERE----------------//
       function change_pass($id)
      {
	   $old_pass=md5($this->input->post('old_password'));
	   $new_pass=md5($this->input->post('new_password'));
	   $query=$this->db->get_where('tbl_admin',array('password' =>$old_pass));
	   if($query->num_rows()!=0)
	   {
		//$data=array('password'=>$this->input->post('old_password'));
		//$password=$data['password'];
		$data['password']=md5($this->input->post('new_password'));
		//$this->db->where('sno',$id);
		  $this->db->update('tbl_admin',$data,array('admin_id'=>$id));
		// exit;
		return true;
	   }
       }

 		 //------------------CHANGE PASSWORD END HERE----------------//
		 
		//------------------FORGOT PASSWORD START HERE----------------//
      function Forgotpassword()
	{
	  $email=$this->input->post('email');
	   $this -> db -> select('email_id');
	   $this -> db -> from('tbl_admin');
       $this -> db -> where('email_id', $email);
	   $this -> db -> limit(1);
	 
	   $query = $this -> db -> get();
	// echo $query;
	 //exit;
	   if($query -> num_rows() == 1)
	   {
	    
		 //$user=$sql[0];
		// echo $user;
		$this->resetpassword();
		//$this->session->set_flashdata('msg',"Password has been reset and has been sent to email id: ". $email);
		//$info= "Password has been reset and has been sent to email id: ". $email;
		 //$this->db->update('tbl_admin',)
		 return $query->result();
	   }
	   else
	   {
		 $this->session->set_flashdata('msg',"The email id you entered not found on our database");
	     //$error= "The email id you entered not found on our database ";
	   }
	}
	
	
	private function resetpassword()
    {
	  date_default_timezone_set('GMT');
		$this->load->helper('string');
		$password=random_string('alnum',16);
		echo $password;
		$data1=array('email'=>$this->input->post('email'),'password'=>$password);
		$email=$data1['email'];
		//echo $email;
		//exit;
		//$this->db->where('email',$email);
		//echo $user->sno;
		//exit;
		$data['password']=md5($password);
		$this->db->update('tbl_admin',$data,array('email_id'=>($email)));
		$this->load->library('email');
		$this->email->from('cantreply@youdomain.com','Your name');
		$this->email->to($email); 	
		$this->email->subject('Password reset');
		$this->email->message('You have requested the new password, Here is you new password:'. $password);	
		$this->email->send();
  }

	    //------------------FORGOT PASSWORD START HERE----------------//
		
    //-----------------VIDEOS START HERE--------------------------//
	
	function add_video()
	{
		
		/*$cat_id=$this->input->post('cat_id');
		$sql=$this->db->get_where('tbl_area',array('sno'=>$cat_id));
		$result=$sql->row_array();
		$data['cat_id']=$cat_id;
		$data['category']=$result['category'];*/
		
		$data['name']=$this->input->post('name');
		$data['month']=$this->input->post('month');
		$data['year']=$this->input->post('year');
		$data['type']=$this->input->post('type');
		$data['link']=$this->input->post('link');
		$date=date('Y-m-d',time());
		$data['date']=$date;
		$this->db->insert('tbl_video',$data);
		return true;
	}
	
	function video_count()
	{
		$sql=$this->db->get_where('tbl_video',array('type'=>'English'));
		return $sql->num_rows();
	}
	
	function video_count_arabic()
	{
		$sql=$this->db->get_where('tbl_video',array('type'=>'Arabic'));
		return $sql->num_rows();
	}
	
	function select_video($limit,$start)
	{
		$this->db->order_by('sno','desc');
		$this->db->limit($limit,$start);
		$sql=$this->db->get('tbl_video');
		return $sql->result();
	}
	
	
	function select_video_arabic($limit,$start)
	{
		$this->db->order_by('sno','desc');
		$this->db->limit($limit,$start);
		$sql=$this->db->get_where('tbl_video',array('type'=>'Arabic'));
		return $sql->result();
	}
	
	function edit_video_view($id)
	{
		$sql=$this->db->get_where('tbl_video',array('sno'=>$id));
		return $sql->result();
	}
	
	function edit_video()
	{
		$id=$this->input->post('id');
		
		/*$cat_id=$this->input->post('cat_id');
		$sql=$this->db->get_where('tbl_area',array('sno'=>$cat_id));
		$result=$sql->row_array();
		$data['cat_id']=$cat_id;
		$data['category']=$result['category'];*/
		
		$data['name']=$this->input->post('name');
		$data['month']=$this->input->post('month');
		$data['year']=$this->input->post('year');
		$data['type']=$this->input->post('type');
		$data['link']=$this->input->post('link');
		$this->db->update('tbl_video',$data,array('sno'=>$id));
		return true;
	}
	
	//-----------------VIDEOS END HERE---------------------------------------//




		  
		  
		  //------------------MANAGE UPLOADS START HERE----------------------------------------------//
		  
		function uploads_count()
		{
		  $sql=$this->db->get('tbl_uploads');
		  return $sql->num_rows(); 
		}
		  
		  
       function add_uploads($img)
	   {
	    $path=base_url().'public/uploads/'.$img;
		$data['name']=$this->input->post('name');
		$data['image_url']=$path;
		$data['image']=$img;
		$date=date('Y-m-d',time());
		$data['date']=$date;
		$this->db->insert('tbl_uploads',$data);
		return true;
	   }
	   
	   function select_uploads($limit,$start)
	   {
		  $this->db->limit($limit,$start);
		  $this->db->order_by('sno','desc');
		  $sql=$this->db->get('tbl_uploads');
		  return $sql->result(); 
	   }
	   
	   function edit_upload_view($id)
	   {
		  $sql=$this->db->get_where('tbl_uploads',array('sno'=>$id));
		  return $sql->result(); 
	   }
	   
	   function edit_uploads()
	   {
	     $id=$this->input->post('id');
	     $old_img=$this->input->post('old_img');
	     $new_img=$_FILES['banner']['name'];
	     if($new_img!='')
	     {
		 $path="public/uploads/".$old_img;
		 $path1="public/uploads/thumb/".$old_img;
		 unlink($path);
		 unlink($path1);
		 $config['upload_path']='public/uploads/';
		  $config['max_size']='9000';
		 $config['allowed_types']='jpg|png|jpeg|gif';
		 $config['encrypt_name']=true;
		 $this->load->library('upload',$config);
		 $this->load->library('image_lib');
	     $this->upload->do_upload('banner');
		 $file_data=$this->upload->data();
		 
		 $resize_conf = array(
		'source_image' => $file_data['full_path'],
		'new_image' => $file_data['file_path'].'thumb/'.$file_data['file_name'],
		'encrypt_name' =>true,
		'width' => 300,
		'height' => 200
		);
		$this->image_lib->initialize($resize_conf);
		if ( ! $this->image_lib->resize())
		{
		$error['resize'][]= $this->image_lib->display_errors();
		}
		else
		{
		$success[] = $file_data;
		}
		
		 $img=$file_data['file_name'];
	     }
	     else
	    {
		$img=$old_img;
	    }
		$path3=base_url().'public/uploads/'.$img;
		$data['name']=$this->input->post('name');
		$data['image_url']=$path3;
	    $data['image']=$img;
		$date=date('Y-m-d',time());
		$data['date']=$date;
	    $this->db->update('tbl_uploads',$data,array('sno'=>$id));
	    return true;
	   }

	//------------------MANAGE UPLOADS END HERE----------------------------------------------//
	
	
			
		
		
		
		
		
		//------------------- SUPPORT  OFFICE START HERE-----------------------------//
	
	function add_support()
	{
		$data['type']=$this->input->post('type');
		$data['phone']=$this->input->post('phone');
	    $data['fax']=$this->input->post('fax');
	    $data['address']=($this->input->post('address'));
		$this->db->insert('tbl_support',$data);
		return true;
	}
	
	function select_support()
	{
		$this->db->order_by('sno','desc');
		$sql=$this->db->get_where('tbl_support',array('type'=>'English'));
		return $sql->result();
	}
	
	function select_support_arabic()
	{
		$this->db->order_by('sno','desc');
		$sql=$this->db->get_where('tbl_support',array('type'=>'Arabic'));
		return $sql->result();
	}
	
	function edit_support_view($id)
	{
		$sql=$this->db->get_where('tbl_support',array('sno'=>$id));
		return $sql->result();
	}
	
	function edit_support()
	{
	$id=$this->input->post('id');
	$data['type']=$this->input->post('type');
	$data['phone']=$this->input->post('phone');
	$data['fax']=$this->input->post('fax');
	$data['address']=($this->input->post('address'));
	$this->db->update('tbl_support',$data,array('sno'=>$id));
	return true;
    }
	
	
		//------------------- SUPPORT OFFICE END HERE-----------------------------//
		
		
		
		
		
		//------------------- CAREERS START HERE-----------------------------//
		
		function get_job_category()
		{
			$sql=$this->db->get('tbl_job_category');
			return $sql->result();
		}

	function job_careers_count()
	{
		$sql=$this->db->get('tbl_careers_job');
		return $sql->num_rows();
	}



	function add_careers()
	{
		$data['category']=$this->input->post('category');
		$data['url_cat']=url_title($this->input->post('category'));
		$data['title']=$this->input->post('title');
		$data['url']=url_title($this->input->post('title'));
		$data['location']=$this->input->post('location');
	    $data['address']=addslashes($this->input->post('address'));
		$date=date('Y-m-d',time());
		$data['posted_date']=$date;
		$this->db->insert('tbl_careers_job',$data);
		return true;
	}
	
	function select_careers_job($limit,$start)
	{
		$this->db->limit($limit,$start);
		$this->db->order_by('sno','desc');
		$sql=$this->db->get('tbl_careers_job');
		return $sql->result();
	}
	
	function edit_career_view($id)
	{
		$sql=$this->db->get_where('tbl_careers_job',array('sno'=>$id));
		return $sql->result();
	}
	
	function edit_careers()
	{
	$id=$this->input->post('id');
	$data['category']=$this->input->post('category');
	$data['url_cat']=url_title($this->input->post('category'));
	$data['title']=$this->input->post('title');
	$data['url']=url_title($this->input->post('title'));
	$data['location']=$this->input->post('location');
	$data['address']=addslashes($this->input->post('address'));
	$date=date('Y-m-d',time());
	$data['posted_date']=$date;
	$this->db->update('tbl_careers_job',$data,array('sno'=>$id));
	return true;
    }
	
	function view_career_job_popup($id)
	{
		$sql=$this->db->get_where('tbl_careers_job',array('sno'=>$id));
		return $sql->result();
	}
	
	
		//------------------- CAREERS END HERE-----------------------------//


 //------------------SPONSORSHIP START HERE----------------//
		  
		  function sponsorship_count()
		  {
			  $sql="SELECT * FROM tbl_sponsorship where `type`='English'";
		      $query=$this->db->query($sql);
		      return $query->num_rows();
		  }
		  
		  function sponsorship_count_arabic()
		  {
			  $sql="SELECT * FROM tbl_sponsorship where `type`='Arabic'";
		      $query=$this->db->query($sql);
		      return $query->num_rows();
		  }
		  
		  
		  function select_sponsorship($limit,$start)
		  {
			  $sql="select * from tbl_sponsorship where `type`='English' order by `sno` desc  limit $start,$limit";
		      $query=$this->db->query($sql);
		      return $query->result();
		  }
		  
		  function select_sponsorship_arabic($limit,$start)
		  {
			  $sql="select * from tbl_sponsorship where `type`='Arabic' order by `sno` desc  limit $start,$limit";
		      $query=$this->db->query($sql);
		      return $query->result();
		  }
		  
		  function view_sponsorship_popup($id)
		  {
			  $sql=$this->db->get_where('tbl_sponsorship',array('sno'=>$id));
			  return $sql->result();
		  }
		  
         //------------------SPONSORSHIP END HERE----------------//
		 
		  //-----------------VIDEOS FEATURED START HERE--------------------------//
	
	function add_feavideo()
	{
		$data['name']=$this->input->post('name');
		
		$data['type']=$this->input->post('type');
		$data['link']=$this->input->post('link');
		$date=date('Y-m-d',time());
		$data['date']=$date;
		$this->db->insert('tbl_feavideo',$data);
		return true;
	}
	
	function feavideo_count()
	{
		$sql=$this->db->get('tbl_feavideo');
		return $sql->num_rows();
	}
	
	function select_fea_videos($limit,$start)
	{
		$this->db->order_by('sno','desc');
		$this->db->limit($limit,$start);
		$sql=$this->db->get('tbl_feavideo');
		return $sql->result();
	}
	
	function edit_feavideo_view($id)
	{
		$sql=$this->db->get_where('tbl_feavideo',array('sno'=>$id));
		return $sql->result();
	}
	
	function edit_feavideo()
	{
		$id=$this->input->post('id');
		$data['name']=$this->input->post('name');
		
		$data['type']=$this->input->post('type');
		$data['link']=$this->input->post('link');
		$date=date('Y-m-d',time());
		$data['date']=$date;
		$this->db->update('tbl_feavideo',$data,array('sno'=>$id));
		return true;
	}
	
	//-----------------VIDEOS FEATURED  END HERE---------------------------------------//
	
	
	
	//----------------NEWS LETTER START HERE--------------------------------------//
	
	
	function letter_count()
	{
		$sql=$this->db->get('tbl_newsletter');
		return $sql->num_rows();
	}
	
	function select_newsletterdetails($limit,$start)
	{
		$this->db->order_by('sno','desc');
		$this->db->limit($limit,$start);
		$sql=$this->db->get('tbl_newsletter');
		return $sql->result();
	}
	
	//----------------NEWS LETTER END HERE--------------------------------------//
	
	
	//----------------GOOGLE ANALYTICS CODE START HERE--------------------------------------//
	
	//----------------GOOGLE ANALYTICS CODE END HERE--------------------------------------//
	
	function add_analytics_code()
	{
		$data['google']=addslashes($this->input->post('google'));
		//$data['type']=$this->input->post('type');
		$this->db->insert('tbl_google',$data);
		return true;
	}
	
	function select_google()
	{
		$sql=$this->db->get('tbl_google');
		return $sql->result();
	}
	 
	
	function edit_google_view($id)
	{
		$sql=$this->db->get_where('tbl_google',array('sno'=>$id));
		return $sql->result();
	}
	
	function edit_analytics_code()
	{
		$id=$this->input->post('id');
		$data['google']=addslashes($this->input->post('google'));
		//$data['type']=$this->input->post('type');
		$this->db->update('tbl_google',$data,array('sno'=>$id));
		return true;
	}
	
	//----------------GOOGLE ANALYTICS CODE END HERE--------------------------------------//
	
	
	//------------------- CORPORATE  OFFICE START HERE-----------------------------//
	
	function add_corporate()
	{
		$data['phone']=$this->input->post('phone');
	    $data['fax']=$this->input->post('fax');
	    $data['address']=addslashes($this->input->post('address'));
		$this->db->insert('tbl_corporate',$data);
		return true;
	}
	
	function select_corporate()
	{
		$sql=$this->db->get('tbl_corporate');
		return $sql->result();
	}
	
	function edit_corporate_view($id)
	{
		$sql=$this->db->get_where('tbl_corporate',array('sno'=>$id));
		return $sql->result();
	}
	
	function edit_corpate()
	{
	$id=$this->input->post('id');
	$data['phone']=$this->input->post('phone');
	$data['fax']=$this->input->post('fax');
	$data['email']=$this->input->post('email');
	$data['address']=addslashes($this->input->post('address'));
	$data['address_arabic']=($this->input->post('address_arabic'));
	$this->db->update('tbl_corporate',$data,array('sno'=>$id));
	return true;
    }
	
	
		//------------------- CORPORATE OFFICE END HERE-----------------------------//
		
		
		
		//------------------- GROUP  OFFICE START HERE-----------------------------//
	
	function add_group()
	{
		
		$data['type']=$this->input->post('type');
		$data['name']=$this->input->post('name');
		$data['phone']=$this->input->post('phone');
	    $data['fax']=$this->input->post('fax');
	    $data['address']=addslashes($this->input->post('address'));
		$this->db->insert('tbl_group',$data);
		return true;
	}
	
	function select_group()
	{
		$this->db->order_by('sno','desc');
		$sql=$this->db->get('tbl_group');
		return $sql->result();
	}
	
	function select_group_arabic()
	{
		$this->db->order_by('sno','desc');
		$sql=$this->db->get_where('tbl_group',array('type'=>'Arabic'));
		return $sql->result();
	}
	
	function edit_group_view($id)
	{
		$sql=$this->db->get_where('tbl_group',array('sno'=>$id));
		return $sql->result();
	}
	
	function edit_group()
	{
	$id=$this->input->post('id');
	$data['type']=$this->input->post('type');
	//$data['name']=$this->input->post('name');
	$data['phone']=$this->input->post('phone');
	$data['fax']=$this->input->post('fax');
	$data['address']=addslashes($this->input->post('address'));
	$this->db->update('tbl_group',$data,array('sno'=>$id));
	return true;
    }
	
	
		//------------------- GROUP OFFICE END HERE-----------------------------//
		
		
		 //------------------ RECYCLE BIN LOCATIONS START HERE----------------//
		 
		 
		 function bin_count()
		 {
		  $sql=$this->db->get('tbl_recycle_locations');
		  return $sql->num_rows();
		 }
		 
		 function manage_recycle_locations($limit,$start)
		 {
		  $this->db->order_by('sno','desc');
		  $this->db->limit($limit,$start);
		  $sql=$this->db->get('tbl_recycle_locations');
		  return $sql->result();
		 }
		 
		 function view_recycle_popup($id)
		 {
		  $sql=$this->db->get_where('tbl_recycle_locations',array('sno'=>$id));
		  return $sql->result();
		 }
		 
		 //------------------ RECYCLE BIN LOCATIONS END HERE----------------//
		 
		 
		 //------------------ INQUIRY FORM START HERE----------------//
		 
		 function inquiry_count()
		 {
		  $sql=$this->db->get('tbl_enquiry_form');
		  return $sql->num_rows();
		 }
		 
		 function manage_inquiry($limit,$start)
		 {
		  $this->db->order_by('sno','desc');
		  $this->db->limit($limit,$start);
		  $sql=$this->db->get('tbl_enquiry_form');
		  return $sql->result();
		 }
		 
		 function view_inquiry_popup($id)
		 {
		  $sql=$this->db->get_where('tbl_enquiry_form',array('sno'=>$id));
		  return $sql->result();
		 }
		 
		 //------------------ INQUIRY FORM  END HERE----------------//
		 
		 
		 
		  //------------------ AREA START HERE----------------//
		  
		  
	function add_area()
	{
		$data['category']=$this->input->post('category');
		$data['url']=url_title($this->input->post('name'));
		$data['name']=$this->input->post('name');
		$data['date']=date('Y-m-d',time());
		$data['content']=addslashes($this->input->post('content'));
		$this->db->insert('tbl_area',$data);
		return true;
	}
	
	
	function area_count()
	{
		$sql=$this->db->get('tbl_area');
		return $sql->num_rows();
	}
	
	
	function select_area($limit,$start)
	{
		$this->db->limit($limit,$start);
		$this->db->order_by('sno','desc');
		$sql=$this->db->get('tbl_area');
		return $sql->result();
	}
	
	function area_area_view($id)
	{
		$sql=$this->db->get_where('tbl_area',array('sno'=>$id));
		return $sql->result();
	}
	
	function edit_area()
	{
	$id=$this->input->post('id');
	$data['category']=$this->input->post('category');
	$data['url']=url_title($this->input->post('name'));
	$data['name']=$this->input->post('name');
	$data['content']=addslashes($this->input->post('content'));
	$this->db->update('tbl_area',$data,array('sno'=>$id));
	return true;
    }
	
	function view_area_popup($id)
	{
		$sql=$this->db->get_where('tbl_area',array('sno'=>$id));
		return $sql->result();
	}
		   //------------------ AREA END HERE----------------//
		   
		   
		   
		   //------------------ AREA ADDRESS START HERE----------------//
		  
		
		function view_services()
	    {
		$sql=$this->db->get('tbl_awards');
		return $sql->result();
	    }
	
		
	function get_area()
	{
		//$this->db->order_by('sno','desc');
		$sql=$this->db->get('tbl_area');
		return $sql->result();
	}
	
	
	function add_address()
	{
		/*$cat_id=$this->input->post('cat_id');
		$sql=$this->db->get_where('tbl_awards',array('sno'=>$cat_id));
		$result=$sql->row_array();
		$data['cat_id']=$cat_id;
		$data['category']=$result['name'];*/
		
		 $config['upload_path']='public/address/';
		 $config['max_size']='9000';
		 $config['allowed_types']='jpg|png|jpeg|gif';
		 $config['encrypt_name']=true;
		 $this->load->library('upload',$config);
		 $this->load->library('image_lib');
	     $this->upload->do_upload('banner');
		 $upload_data = $this->upload->data();
		 $img=$upload_data['file_name'];
		 $data['image']=$img;
		
		$data['name']=$this->input->post('name');
		$data['url']=url_title($this->input->post('name'));
		$data['from_date']=$this->input->post('from_date');
     	$data['to_date']=$this->input->post('to_date');
    	$data['content']=addslashes($this->input->post('content'));
		//$data['area']=$this->input->post('area');
		$this->db->insert('tbl_address',$data);
		return true;
	}
	
	
	function address_count()
	{
		$sql=$this->db->get('tbl_address');
		return $sql->num_rows();
	}
	
	
	function select_address($limit,$start)
	{
		$this->db->limit($limit,$start);
		$this->db->order_by('sno','desc');
		$sql=$this->db->get('tbl_address');
		return $sql->result();
	}
	
	function edit_address_view($id)
	{
		$sql=$this->db->get_where('tbl_address',array('sno'=>$id));
		return $sql->result();
	}
	
	function edit_address()
	{
	$id=$this->input->post('id');
	
	/*$cat_id=$this->input->post('cat_id');
	$sql=$this->db->get_where('tbl_awards',array('sno'=>$cat_id));
	$result=$sql->row_array();
	$data['cat_id']=$cat_id;
	$data['category']=$result['name'];*/
	
	
	 $id=$this->input->post('id');
	 $old_img=$this->input->post('old_image');
	 $new_img=$_FILES['banner']['name'];
	 if($new_img!='')
	 {
		 if($old_img!='') {
	 $path="public/address/".$old_img;
	 unlink($path);
		 }
	 $config['upload_path']='public/address/';
	  $config['max_size']='9000';
	 $config['allowed_types']='jpg|png|jpeg|gif';
	 $config['encrypt_name']=true;
	 $this->load->library('upload',$config);
	 $this->upload->do_upload('banner');
	 $file_data=$this->upload->data();
	 $img=$file_data['file_name'];
	 }
	 else
	{
	$img=$old_img;
	}
	$data['image']=$img;
		
	//$data['area']=$this->input->post('area');
	$data['name']=$this->input->post('name');
	$data['url']=url_title($this->input->post('name'));
	$data['from_date']=$this->input->post('from_date');
	$data['to_date']=$this->input->post('to_date');
	$data['content']=addslashes($this->input->post('content'));
	$this->db->update('tbl_address',$data,array('sno'=>$id));
	return true;
    }
	
	function get_area_name($id)
	{
		$sql=$this->db->get_where('tbl_area',array('sno'=>$id));
		return $sql->result();
	}
		   //------------------ AREA ADDRESS END HERE----------------//
		   
		   
		   
		    //------------------ AREA ADDRESS START HERE----------------//
		  
		
		
	function get_address()
	{
		//$this->db->order_by('sno','desc');
		$sql=$this->db->get('tbl_address');
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
	
	
	function add_locations()
	{
		$data['category']=addslashes($this->input->post('category'));
		$data['area']=$this->input->post('area');
		$data['address']=$this->input->post('address');
		$this->db->insert('tbl_bin_locations',$data);
		return true;
	}
	
	
	function location_count()
	{
		$sql=$this->db->get('tbl_bin_locations');
		return $sql->num_rows();
	}
	
	
	function select_bin_locations($limit,$start)
	{
		$this->db->limit($limit,$start);
		$this->db->order_by('sno','desc');
		$sql=$this->db->get('tbl_bin_locations');
		return $sql->result();
	}
	
	function edit_location_view($id)
	{
		$sql=$this->db->get_where('tbl_bin_locations',array('sno'=>$id));
		return $sql->result();
	}
	
	function edit_location()
	{
	$id=$this->input->post('id');
	$data['category']=addslashes($this->input->post('category'));
	$data['area']=$this->input->post('area');
	$data['address']=$this->input->post('address');
	$this->db->update('tbl_bin_locations',$data,array('sno'=>$id));
	return true;
    }
	
	function get_address_name($id)
	{
		$sql=$this->db->get_where('tbl_address',array('sno'=>$id));
		return $sql->result();
	}
	
	function get_address_name_id($id)
	{
		$sql=$this->db->get_where('tbl_address',array('area'=>$id));
		return $sql->result();
	}
	
		   //------------------ AREA ADDRESS END HERE----------------//
		   
		   
		   //------------------PROJECTS APARTMENTS START HERE----------------------------------------------//
	
	
	  function add_apartments($img)
	   {
		$data['image']=$img;
		
		 $new_file=$_FILES['pdf']['name'];
		 if($new_file!='') {
		 $config['upload_path']='public/apartments/';
		 $config['max_size']='9000';
		 $config['allowed_types']='jpg|png|jpeg|gif';
		 $config['encrypt_name']=true;
		 $this->load->library('upload',$config);
		 $this->load->library('image_lib');
	     $this->upload->do_upload('pdf');
		 $pdf_data = $this->upload->data();
		 
		
		 $pdf=$pdf_data['file_name'];
		 $data['pdf']=$pdf;
		 }
		 
		//$data['project_date']=$this->input->post('project_date');
		$data['location']=$this->input->post('location');
		$data['name']=$this->input->post('name');
		$data['url']=url_title($this->input->post('name'));
		$data['bedrooms']=$this->input->post('bedrooms');
		$data['bathrooms']=$this->input->post('bathrooms');
		$data['feet']=$this->input->post('feet');
		$data['content']=addslashes($this->input->post('content'));
		$date=date('Y-m-d',time());
		$data['date']=$date;
		$this->db->insert('tbl_apartments',$data);
		return true;
	   }
	   
	   function apartments_count()
	   {
		  $sql=$this->db->get('tbl_apartments');
		  return $sql->num_rows(); 
	   }
	   
	   function select_apartments($limit,$start)
	   {
		  $this->db->limit($limit,$start);
		//  $this->db->order_by('sno','desc');
		  $sql=$this->db->get('tbl_apartments');
		  return $sql->result(); 
	   }
	   
	  

	   
	   function edit_apartments_view($id)
	   {
		  $sql=$this->db->get_where('tbl_apartments',array('sno'=>$id));
		  return $sql->result(); 
	   }
	   
	   function edit_apartments()
	   {
	     $id=$this->input->post('id');
	     $old_img=$this->input->post('old_image');
	     $new_img=$_FILES['banner']['name'];
	     if($new_img!='')
	     {
			 if($old_img!='') {
		 $path="public/apartments/".$old_img;
		 unlink($path);
			 }
		 $config['upload_path']='public/apartments/';
		  $config['max_size']='9000';
		 $config['allowed_types']='jpg|png|jpeg|gif';
		 $config['encrypt_name']=true;
		 $this->load->library('upload',$config);
	     $this->upload->do_upload('banner');
		 $file_data=$this->upload->data();
		 $img=$file_data['file_name'];
	     }
	     else
	    {
		$img=$old_img;
	    }
		$data['image']=$img;
		
		 $old_pdf=$this->input->post('old_pdf');
	     $new_pdf=$_FILES['pdf']['name'];
	     if($new_pdf!='')
	     {
			 if($old_pdf!='') {
		 $path1="public/apartments/".$old_pdf;
		 unlink($path1);
			 }
		 $config['upload_path']='public/apartments/';
		 $config['max_size']='9000';
		 $config['allowed_types']='jpg|png|jpeg|gif';
		 $config['encrypt_name']=true;
		 $this->load->library('upload',$config);
	     $this->upload->do_upload('pdf');
		 $pdf_data=$this->upload->data();
		 $pdf=$pdf_data['file_name'];
	     }
	     else
	    {
		$pdf=$old_pdf;
	    }
	    $data['pdf']=$pdf;
		
		//$data['project_date']=$this->input->post('project_date');
		$data['location']=$this->input->post('location');
		$data['name']=$this->input->post('name');
		$data['url']=url_title($this->input->post('name'));
		$data['bedrooms']=$this->input->post('bedrooms');
		$data['bathrooms']=$this->input->post('bathrooms');
		$data['feet']=$this->input->post('feet');
		$data['content']=addslashes($this->input->post('content'));
		$date=date('Y-m-d',time());
		$data['date']=$date;
	    $this->db->update('tbl_apartments',$data,array('sno'=>$id));
	    return true;
	   }

		
       function view_apartments_popup($id)
	   {
		  $sql=$this->db->get_where('tbl_apartments',array('sno'=>$id));
		  return $sql->result(); 
	   }
	   
	   
	//------------------PROJECTS APARTMENTS END HERE----------------------------------------------//
	
	
	 //------------------CHANNEL PARTNER ENQUIRY START HERE----------------------------------------------//
	 
	 
	 function chennel_count()
	 {
		 $sql=$this->db->get('tbl_chammel_partner');
		 return $sql->num_rows();
	 }
	 
	 function manage_channel_enquiry($limit,$start)
	 {
		 $this->db->limit($limit,$start);
		 $this->db->order_by('sno','desc');
		 $sql=$this->db->get('tbl_chammel_partner');
		 return $sql->result();
	 }
	 
	 //------------------CHANNEL PARTNER ENQUIRY END HERE----------------------------------------------//
	 
	 //------------------AGENCY REGISTRATION START HERE----------------------------------------------//
	 
	 
	 function agency_count()
	 {
		 $sql=$this->db->get('tbl_vender_registration');
		 return $sql->num_rows();
	 }
	 
	 function manage_agency_registration($limit,$start)
	 {
		 $this->db->limit($limit,$start);
		 $this->db->order_by('sno','desc');
		 $sql=$this->db->get('tbl_vender_registration');
		 return $sql->result();
	 }
	 
	 //------------------AGENCY REGISTRATION END HERE----------------------------------------------//
	 
	 
	 //------------------PROPERTY DEVELOPMENT START HERE----------------------------------------------//
	 
	 
	 function property_count()
	 {
		 $sql=$this->db->get('tbl_agency');
		 return $sql->num_rows();
	 }
	 
	 function manage_property_development($limit,$start)
	 {
		 $this->db->limit($limit,$start);
		 $this->db->order_by('sno','desc');
		 $sql=$this->db->get('tbl_agency');
		 return $sql->result();
	 }
	 
	 //------------------PROPERTY DEVELOPMENT END HERE----------------------------------------------//
	 
	 
	 //------------------BANNERS START HERE----------------------------------------------//
	 
	 
	   function view_scrolling_category()
	   {
		   $this->db->order_by('category');
		   $sql=$this->db->get('tbl_area');
		   return $sql->result();
	   }
	   
	   
	   
       function add_scrolling($img)
	   {
		
		
		 $config['upload_path']='public/scrolling/';
		 $config['max_size']='9000';
		 $config['allowed_types']='jpg|png|jpeg|gif|pdf|doc|docx';
		 $config['encrypt_name']=true;
		 $this->load->library('upload',$config);
		 $this->load->library('image_lib');
	     $this->upload->do_upload('pdf');
		 $pdf_data = $this->upload->data();
		 
		
		 $pdf=$pdf_data['file_name'];
		 
		/*$cat_id=$this->input->post('cat_id');
		$sql=$this->db->get_where('tbl_area',array('sno'=>$cat_id));
		$result=$sql->row_array();
		$data['cat_id']=$cat_id;
		$data['category']=$result['category'];*/
		
		
		$data['name']=$this->input->post('name');
		$data['url']=url_title($this->input->post('name'));
		//$data['link']=$this->input->post('link');
		//$data['price']=$this->input->post('price');
		$data['content']=addslashes($this->input->post('content'));
		$data['image']=$img;
		$data['pdf']=$pdf;
		$data['status']='y';
		$this->db->insert('tbl_scrolling',$data);
		return true;
	   }
	   
	   function scrolling_count()
	   {
		  $sql=$this->db->get('tbl_scrolling');
		  return $sql->num_rows(); 
	   }
	   
	   function select_scrolling($limit,$start)
	   {
		  $this->db->limit($limit,$start); 
		  $this->db->order_by('sno','desc');
		  $sql=$this->db->get('tbl_scrolling');
		  return $sql->result(); 
	   }
	   
	  

	   
	   function edit_scrolling_view($id)
	   {
		  $sql=$this->db->get_where('tbl_scrolling',array('sno'=>$id));
		  return $sql->result(); 
	   }
	   
	   function edit_scrolling()
	   {
	     $id=$this->input->post('id');
	     $old_img=$this->input->post('old_image');
	     $new_img=$_FILES['banner']['name'];
	     if($new_img!='')
	     {
			 if($old_img!='') {
		 $path="public/scrolling/".$old_img;
		 unlink($path);
			 }
		 $config['upload_path']='public/scrolling/';
		  $config['max_size']='9000';
		 $config['allowed_types']='jpg|png|jpeg|gif|pdf|doc|docx';
		 $config['encrypt_name']=true;
		 $this->load->library('upload',$config);
	     $this->upload->do_upload('banner');
		 $file_data=$this->upload->data();
		 $img=$file_data['file_name'];
	     }
	     else
	    {
		$img=$old_img;
	    }
	    $data['image']=$img;
		
		
		 $old_pdf=$this->input->post('old_pdf');
	     $new_pdf=$_FILES['pdf']['name'];
	     if($new_pdf!='')
	     {
			 if($old_pdf!='') {
		 $path1="public/scrolling/".$old_pdf;
		 unlink($path1);
			 }
		 $config['upload_path']='public/scrolling/';
		 $config['max_size']='9000';
		 $config['allowed_types']='jpg|png|jpeg|gif|pdf|doc|docx';
		 $config['encrypt_name']=true;
		 $this->load->library('upload',$config);
	     $this->upload->do_upload('pdf');
		 $pdf_data=$this->upload->data();
		 $pdf=$pdf_data['file_name'];
	     }
	     else
	    {
		$pdf=$old_pdf;
	    }
	    $data['pdf']=$pdf;
		
		/*$cat_id=$this->input->post('cat_id');
		$sql=$this->db->get_where('tbl_area',array('sno'=>$cat_id));
		$result=$sql->row_array();
		$data['cat_id']=$cat_id;
		$data['category']=$result['category'];*/
		
		
		$data['status']='y';
		$data['name']=$this->input->post('name');
		$data['url']=url_title($this->input->post('name'));
		//$data['link']=$this->input->post('link');
		//$data['price']=$this->input->post('price');
		$data['content']=addslashes($this->input->post('content'));
	    $this->db->update('tbl_scrolling',$data,array('sno'=>$id));
	    return true;
	   }
	   
	   
	   function view_scrolling_popup($id)
	   {
		  $sql=$this->db->get_where('tbl_scrolling',array('sno'=>$id));
		  return $sql->result(); 
	   }

	//------------------BANNERS END HERE----------------------------------------------//
	
	
	//------------------------------PRODUCTS  START HERE----------------------------------------------//
	
	
	function view_product_category()
	{
		$this->db->order_by('sno','desc');
		$sql=$this->db->get('tbl_area');
		return $sql->result();
	}
	
	function add_products($img)
	{
		//$data['link']=$this->input->post('link');
		/*$cat_id=$this->input->post('category');
		$sql=$this->db->get_where('tbl_area',array('sno'=>$cat_id));
		$result=$sql->row_array();
		$data['cat_id']=$cat_id;
		$data['category']=$result['category'];
		$data['url_cat']=url_title($result['category']);*/
		
		 $config['upload_path']='public/products/';
		 $config['max_size']='9000';
		 $config['allowed_types']='jpg|png|jpeg|gif';
		 $config['encrypt_name']=true;
		 $this->load->library('upload',$config);
		 $this->load->library('image_lib');
	     $this->upload->do_upload('pdf');
		 $pdf_data = $this->upload->data();
		 
		
		 $pdf=$pdf_data['file_name'];
		 
		$data['name']=$this->input->post('name');
		$data['url']=url_title($this->input->post('name'));
		$data['content']=addslashes($this->input->post('content'));
		$data['content1']=addslashes($this->input->post('content1'));
		$data['content2']=addslashes($this->input->post('content2'));
		$data['image']=$img;
		$data['pdf']=$pdf;
		$data['status']='y';
		$date=date('Y-m-d',time());
		$data['date']=$date;
		$this->db->insert('tbl_products',$data);
		return true;
	}
	
	function products_count()
	{
		$sql=$this->db->get('tbl_products');
		return $sql->num_rows(); 
	}
	
	function select_products($limit,$start)
	{
		$this->db->limit($limit,$start); 
		$this->db->order_by('sno','desc');
		$sql=$this->db->get('tbl_products');
		return $sql->result(); 
	}
	
	function edit_products_view($id)
	{
		$sql=$this->db->get_where('tbl_products',array('sno'=>$id));
		return $sql->result(); 
	}
	
	function edit_products()
	{
		$id=$this->input->post('id');
	     $old_img=$this->input->post('old_image');
	     $new_img=$_FILES['banner']['name'];
	     if($new_img!='')
	     {
			 if($old_img!="")
			 {
		 $path="public/products/".$old_img;
		 $path1="public/products/thumb/".$old_img;
		 unlink($path);
		  unlink($path1);
			 }
		 $config['upload_path']='public/products/';
		  $config['max_size']='9000';
		 $config['allowed_types']='jpg|png|jpeg|gif';
		 $config['encrypt_name']=true;
		 $this->load->library('upload',$config);
		 $this->load->library('image_lib');
	     $this->upload->do_upload('banner');
		 $file_data=$this->upload->data();
		 
		 $resize_conf = array(
		'source_image' => $file_data['full_path'],
		'new_image' => $file_data['file_path'].'thumb/'.$file_data['file_name'],
		'encrypt_name' =>true,
		'width' => 200,
		'height' => 190
		);
		$this->image_lib->initialize($resize_conf);
		if ( ! $this->image_lib->resize())
		{
		$error['resize'][]= $this->image_lib->display_errors();
		}
		else
		{
		$success[] = $file_data;
		}
		 
		 $img=$file_data['file_name'];
	     }
	     else
	    {
		$img=$old_img;
	    }
		
		
		 $old_pdf=$this->input->post('old_pdf');
	     $new_pdf=$_FILES['pdf']['name'];
	     if($new_pdf!='')
	     {
			 if($old_pdf!='') {
		 $path1="public/products/".$old_pdf;
		 unlink($path1);
			 }
		 $config['upload_path']='public/products/';
		 $config['max_size']='9000';
		 $config['allowed_types']='jpg|png|jpeg|gif';
		 $config['encrypt_name']=true;
		 $this->load->library('upload',$config);
	     $this->upload->do_upload('pdf');
		 $pdf_data=$this->upload->data();
		 $pdf=$pdf_data['file_name'];
	     }
	     else
	    {
		$pdf=$old_pdf;
	    }
	    $data['pdf']=$pdf;
		
		/*$cat_id=$this->input->post('category');
		$sql=$this->db->get_where('tbl_area',array('sno'=>$cat_id));
		$result=$sql->row_array();
		$data['category']=$result['category'];
		$data['url_cat']=url_title($result['category']);
		
	    //$data['link']=$this->input->post('link');
		$data['cat_id']=$cat_id;*/
		$data['name']=$this->input->post('name');
		$data['url']=url_title($this->input->post('name'));
		$data['content']=addslashes($this->input->post('content'));
		$data['content1']=addslashes($this->input->post('content1'));
		$data['content2']=addslashes($this->input->post('content2'));
		$data['image']=$img;
		$data['status']='y';
		$date=date('Y-m-d',time());
		$data['date']=$date;
	    $this->db->update('tbl_products',$data,array('sno'=>$id));
	    return true;
	}
	
	function view_products_popup($id)
	{
		$sql=$this->db->get_where('tbl_products',array('sno'=>$id));
		return $sql->result(); 
	}
	
	
	function select_product_images($id)
	{
		$this->db->order_by('sno','desc');
		$sql=$this->db->get_where('tbl_products_img',array('product_id'=>$id));
		return $sql->result(); 
	}
	
	function add_images()
		{
			
		   $images=$_FILES['banner']['name'];
	$this->load->library('upload');
	$this->load->library('image_lib');
	$upload_conf = array(
	'upload_path' => realpath('public/pdoducts_img'),
	'allowed_types' => '*',
	'max_size' => '30000',
	'encrypt_name' =>true,
	);
	$this->upload->initialize( $upload_conf );
	foreach($_FILES['banner'] as $key=>$val)
	{
	$i = 1;
	foreach($val as $v)
	{
	$field_name = "file_".$i;
	$_FILES[$field_name][$key] = $v;
	$i++;
	}
	}
	  
	unset($_FILES['banner']);
	$error = array();
	$success = array();
	foreach($_FILES as $field_name => $file)
	{
	if ( !$this->upload->do_upload($field_name))
	{
	$error['upload'][] = $this->upload->display_errors();
	}
	else
	{
	$upload_data = $this->upload->data();
	/*$resize_conf = array(
	'source_image' => $upload_data['full_path'],
	'new_image' => $upload_data['file_path'].'thumb/'.$upload_data['file_name'],
	'encrypt_name' =>true,
	'width' => 500,
	'height' => 300
	);
	$this->image_lib->initialize($resize_conf);
	if ( ! $this->image_lib->resize())
	{
	$error['resize'][]= $this->image_lib->display_errors();
	}
	else
	{
	$success[] = $upload_data;
	}*/
		$data['image']=$upload_data['file_name'];	
		
		   /*$config['upload_path']='public/pdoducts_img/';
		   $config['max_size']='9000';
		   $config['allowed_types']='jpg|png|jpeg|gif|pdf';
		   $config['encrypt_name']=true;
		   $this->load->library('upload',$config);
		   $this->load->library('image_lib');
		   $this->upload->do_upload('banner');
		   $upload_data = $this->upload->data();
		   $img=$upload_data['file_name'];*/
		 
			$id=$this->input->post('id');
			//$data['name']=$this->input->post('name');
			$data['product_id']=$id;
			//$data['image']=$img;
			$date=date('Y-m-d',time());
			$data['date']=$date;
			$this->db->insert('tbl_products_img',$data);
	}
	}
			return true;
		}
		
		
		function edit_products_images_view($id)
		{
			$sql=$this->db->get_where('tbl_products_img',array('sno'=>$id));
			return $sql->result();
		}
		
		function edit_products_images()
		{
			$id=$this->input->post('id');
			$old_img=$this->input->post('old_img');
			 $new_img=$_FILES['banner']['name'];
			 if($new_img!='')
			 {
			 $path="public/pdoducts_img/".$old_img;
			 unlink($path);
			 $config['upload_path']='public/pdoducts_img/';
			 $config['max_size']='9000';
			 $config['allowed_types']='jpg|png|jpeg|gif|';
			 $config['encrypt_name']=true;
			 $this->load->library('upload',$config);
			 $this->upload->do_upload('banner');
			 $file_data=$this->upload->data();
			 $img=$file_data['file_name'];
			 }
			 else
			{
			$img=$old_img;
			}
			//$data['name']=$this->input->post('name');
			$data['image']=$img;
			$date=date('Y-m-d',time());
			$data['date']=$date;
			$this->db->update('tbl_products_img',$data,array('sno'=>$id));
			return true;
		}
	
	//------------------------------PRODUCTS  END HERE----------------------------------------------//
	
	
	 //------------------ USERS REGISTRATION START HERE----------------//
		  
		  
	function add_users()
	{
		$data['name']=$this->input->post('name');
		$data['username']=$this->input->post('username');
		$data['password']=$this->input->post('password');
		$data['email']=$this->input->post('email');
		$data['mobile']=$this->input->post('mobile');
		$data['city']=$this->input->post('city');
		$data['address']=addslashes($this->input->post('address'));
		$data['created_date']=date('Y-m-d',time());
		//$data['content']=addslashes($this->input->post('content'));
		$this->db->insert('tbl_users_registration',$data);
		return true;
	}
	
	
	function registartion_count()
	{
		$sql=$this->db->get('tbl_users_registration');
		return $sql->num_rows();
	}
	
	
	function manage_user_registration($limit,$start)
	{
		$this->db->limit($limit,$start);
		$this->db->order_by('sno','desc');
		$sql=$this->db->get('tbl_users_registration');
		return $sql->result();
	}
	
	function edit_users_registration_view($id)
	{
		$sql=$this->db->get_where('tbl_users_registration',array('sno'=>$id));
		return $sql->result();
	}
	
	function edit_user_ragistration()
	{
	$id=$this->input->post('id');
	$data['name']=$this->input->post('name');
	//$data['username']=$this->input->post('username');
	$data['password']=$this->input->post('password');
	$data['email']=$this->input->post('email');
	$data['mobile']=$this->input->post('mobile');
	$data['city']=$this->input->post('city');
	$data['address']=addslashes($this->input->post('address'));
	$data['updated_date']=date('Y-m-d',time());
	$this->db->update('tbl_users_registration',$data,array('sno'=>$id));
	return true;
    }
		   //------------------ USERS REGISTRATION END HERE----------------//
}
?>