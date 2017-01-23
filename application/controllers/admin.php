<?php
session_start();  
class Admin extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('admin_model','',TRUE);
		$this->load->model('login_model','',TRUE);
		
	
	}
	public function index()
	{
	  $this->load->view('admin/login1');
	}
	
	function getpriority()
  {
	  $qs=$_REQUEST['val'];
	  $sql="select * from `tbl_projects` where `priority`='$qs'";
	  $query=$this->db->query($sql);
	  //return $query->result();
	  echo $query->num_rows();
	  
  }
  
  function getpriority_arabic()
  {
	  $qs=$_REQUEST['val'];
	  $sql="select * from `tbl_banner` where `type`='Arabic' and `priority`='$qs'";
	  $query=$this->db->query($sql);
	  //return $query->result();
	  echo $query->num_rows();
  }

	//------------------DASHBOARD START HERE----------------//
	
	
	
	function cmoon()
	{
		 $this->load->view('admin/login');
	}
	
	function dashboard()
	{
	  if($this->session->userdata('logged_in'))
		   {
			 $session_data = $this->session->userdata('logged_in');
			 $data['username'] = $session_data['username'];
			 $this->load->view('admin/dashboard',$data);
		   }
		   else
		   {
			 redirect('admin/', 'refresh');
		   }
	}
	
	
	//------------------DASHBOARD END HERE----------------//
	
	//------------------LOGOUT START HERE----------------//
	
	
	function login()
	{
		 $this->load->view('admin/login');
	}
	
	 function logout()
 	{
			 
	 	$this->session->unset_userdata('logged_in');
	   	session_destroy();
	   	redirect('admin/cmoon','refresh');
	  	//$this->session->sess_destroy();
		// session_destroy();
		
			  
 	}
 
 //------------------LOGOUT START HERE----------------//
 
 //------------------CONTENT START HERE----------------//
 
    function add_content_view()
	{
		if($this->session->userdata('logged_in'))
		{
			$this->load->view('admin/add_content');
		}
		else
		{
			redirect('admin/login','refresh');
		}
	}
	
	function add_content()
	{
	    $this->form_validation->set_rules('name', 'Name','required|trim');
	    $this->form_validation->set_rules('Content', 'Content English','required|trim');
		//$this->form_validation->set_rules('content_arabic', 'Content Arabic','required|trim');
	    if($this->form_validation->run()==false)
		{
		$this->load->view('admin/add_content');
		}
		else
		{
		$result=$this->admin_model->add_content();
		if($result==true)
		{
			//echo "insert";
			$this->session->set_flashdata('msg','Content Inserted Successfully');
			redirect('admin/select_content','refresh');
		}
		else
		{
			echo "not";
		}
	}
	}
	
	function select_content()
	{
		if($this->session->userdata('logged_in'))
		   {
		$data['view_content']=$this->admin_model->select_content();
		$this->load->view('admin/select_content',$data);
	}
	else
	{
		redirect('admin/login','refresh');
	}
	}
	
	function delete_content($id)
	{
		if($this->session->userdata('logged_in'))
		 {
			 $sql=$this->db->get_where('tbl_content',array('content_id'=>$id));
			 $row=$sql->row_array();
				 if($row['image']!='')
				 {
					 $path1="public/content/".$row['image'];
					 //$path2="public/banner/thumb/".$row['image'];
					 @unlink($path1);
					 //@unlink($path2);
				 }
			 $this->db->delete('tbl_content',array('content_id'=>$id));
			 $this->session->set_flashdata('msg','Record deletted successfully! ');
			 redirect('admin/select_content/', 'refresh');
		  }
		  else
		  {
			 redirect('admin/login','refresh');
		  }
	}
	
	function edit_content_view($id)
	{
	$data['edit_content']=$this->admin_model->edit_content_view($id);
	$this->load->view('admin/edit_content',$data);
	}
	
	function edit_content()
	{
		if($this->session->userdata('logged_in'))
	{
		$result=$this->admin_model->edit_content();
		$this->session->set_flashdata('msg','Updatted values Successfully');
			redirect('admin/select_content','refresh');
	}
	else
	{
		$this->session->set_flashdata('msg','please Login!');
			redirect('admin/login','refresh');
	}
	}
	
	function view_content_popup($id)
	{
		$data['edit_content']=$this->admin_model->view_content_popup($id);
	    $this->load->view('admin/select_content_popup',$data);
	}
	
	function view_content_arabic_popup($id)
	{
		$data['edit_content']=$this->admin_model->view_content_arabic_popup($id);
	    $this->load->view('admin/select_arabic_content_popup',$data);
	}
	
	 //------------------CONTENT END HERE----------------//
	 
	//------------------BANNERS START HERE----------------------------------------------//
	
	
	function add_banners_view()
	{
		if($this->session->userdata('logged_in'))
		{
			$this->load->view('admin/add_banners');
		}
		else
		{
			redirect('admin/login','refresh');
		}
	    }
		function add_banner()
		{
		 $config['upload_path']='public/banner/';
		 $config['max_size']='9000';
		 $config['allowed_types']='jpg|png|jpeg|gif';
		 $config['encrypt_name']=true;
		 $this->load->library('upload',$config);
		 $this->load->library('image_lib');
	     $this->upload->do_upload('banner');
		 $upload_data = $this->upload->data();
		 
		
		 $img=$upload_data['file_name'];
		
		 $result=$this->admin_model->add_banner($img);
		 if($result==true)
		 {
			//echo "insert";
			$this->session->set_flashdata('msg','Inserted Values Successfully');
			redirect('admin/select_banner','refresh');
		 }
		 
		 else
		 {
			echo "not";
		 }

		 }
		 
		 
		 function handle_upload()
         {
         if(count($_FILES['banner']['name'] < 2))
         {
         // throw an error because nothing was uploaded
         $this->form_validation->set_message('handle_upload', "You must attach files!");
         return false;
         }
         else
         {
         return TRUE;
         }
         }
		 
		 function select_banner()
		 {
	     if($this->session->userdata('logged_in'))
		 {
		 $data['view_banner']=$this->admin_model->view_banner();
		 $this->load->view('admin/select_banner',$data);
	     }
	     else
	    {
		redirect('admin/login','refresh');
	    } 
		}
		
		function delete_baneer($id)
		{
			  if($this->session->userdata('logged_in'))
		 {
			 $sql=$this->db->get_where('tbl_banner',array('sno'=>$id));
			 $row=$sql->row_array();
				 if($row['image']!='')
				 {
					 $path1="public/banner/".$row['image'];
					 //$path2="public/banner/thumb/".$row['image'];
					 @unlink($path1);
					 //@unlink($path2);
				 }
			 $this->db->delete('tbl_banner',array('sno'=>$id));
			 $this->session->set_flashdata('msg','Record deletted successfully! ');
			 redirect('admin/select_banner/','refresh');
		  }
		  else
		  {
			 redirect('admin/login', 'refresh');
		  }
		}
		
		function edit_baneer_view($id)
		{
			$data['edit_banner']=$this->admin_model->edit_baneer_view($id);
	        $this->load->view('admin/edit_banner',$data);
		}
		
		function edit_banner()
		{
		   if($this->session->userdata('logged_in'))
	       {
		   $result=$this->admin_model->edit_banner();
		   $this->session->set_flashdata('msg','Updatted values Successfully');
		   redirect('admin/select_banner','refresh');
	       }
	       else
	       {
		   $this->session->set_flashdata('msg','please Login!');
		   redirect('admin/login','refresh');
	       }
		}
		
		function view_banner_popup($id)
		{
		if($this->session->userdata('logged_in'))
		 {
		 $data['view_banner_popup']=$this->admin_model->view_banner_popup($id);
		 $this->load->view('admin/select_banner_popup',$data);
	     }
	     else
	    {
		redirect('admin/login','refresh');
	    } 
		}
			//------------------BANNERS END HERE----------------------------------------------//
			
			
			
			//------------------TESTIMONIALS START HERE----------------------------------------------//
	
	
	function add_testimonials_view()
	{
		if($this->session->userdata('logged_in'))
		{
			$this->load->view('admin/add_testimonials');
		}
		else
		{
			redirect('admin/login','refresh');
		}
	    }
		function add_testimonials()
		{
		 
		  $this->form_validation->set_rules('name', ' Name','required|trim');
		  $this->form_validation->set_rules('link', 'Id','required|trim');
		  //$this->form_validation->set_rules('content', 'Description','required|trim');
		  if($this->form_validation->run()==false)
		  {
			  $this->load->view('admin/add_testimonials');
		  }
		  else
		  {
	     $config['upload_path']='public/testimonial/';
		 $config['max_size']='9000';
		 $config['allowed_types']='jpg|png|jpeg|gif';
		 $config['encrypt_name']=true;
		 $this->load->library('upload',$config);
		 $this->load->library('image_lib');
	     $this->upload->do_upload('banner');
		 $upload_data = $this->upload->data();
		 
		
		 $img=$upload_data['file_name'];
		 $result=$this->admin_model->add_testimonials($img);
		 if($result==true)
		 {
			//echo "insert";
			$this->session->set_flashdata('msg','Inserted Values Successfully');
			$lan_id=$this->input->post('lan_id');
			if($lan_id==1) {
			redirect('admin/select_testimonials','refresh');
			}
			else
			{
				redirect('admin/select_testimonials_telugu','refresh');
			}
		 }
		 
		 else
		 {
			echo "not";
		 }

		 }
		}
		 
		
		 
		 function select_testimonials()
		 {
	     if($this->session->userdata('logged_in'))
		 {
			$this->load->library("pagination");
			$config = array();
			$config["base_url"] = base_url() . "admin/select_testimonials";
			$config["total_rows"] = $this->admin_model->testimonial_count(1);
			$config["per_page"] = 10;
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);
			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$data['page']=$page;
			$data['view_banner']=$this->admin_model->select_testimonials(1,$config["per_page"],$page);
			$data["links"] = $this->pagination->create_links();
			$data["pagination_helper"]   = $this->pagination;
			$this->load->view('admin/select_testimonials',$data);
		 
	     }
	     else
	    {
		redirect('admin/login','refresh');
	    } 
		}
		
		
		
		function select_testimonials_telugu()
		 {
	     if($this->session->userdata('logged_in'))
		 {
			$this->load->library("pagination");
			$config = array();
			$config["base_url"] = base_url() . "admin/select_testimonials_telugu";
			$config["total_rows"] = $this->admin_model->testimonial_count(2);
			$config["per_page"] = 10;
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);
			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$data['page']=$page;
			$data['view_banner']=$this->admin_model->select_testimonials(2,$config["per_page"],$page);
			$data["links"] = $this->pagination->create_links();
			$data["pagination_helper"]   = $this->pagination;
			$this->load->view('admin/select_testimonials',$data);
		 
	     }
	     else
	    {
		redirect('admin/login','refresh');
	    } 
		}
		
		function delete_testimonial($id)
		{
			  if($this->session->userdata('logged_in'))
		 {
			 $sql=$this->db->get_where('tbl_testimonials',array('sno'=>$id));
			 $row=$sql->row_array();
			 $lan_id=$row['lan_id'];
				 if($row['image']!='')
				 {
					 $path1="public/testimonial/".$row['image'];
					 //$path2="public/banner/thumb/".$row['image'];
					 @unlink($path1);
					 //@unlink($path2);
				 }
			 $this->db->delete('tbl_testimonials',array('sno'=>$id));
			 $this->session->set_flashdata('msg','Record deletted successfully! ');
			 if($lan_id==1) {
			 redirect('admin/select_testimonials/','refresh');
			 }
			 else
			 {
				  redirect('admin/select_testimonials_telugu/','refresh');
			 }
		 }
		  else
		  {
			 redirect('admin/login', 'refresh');
		  }
		}
		
		function edit_testimonial_view($id)
		{
			$data['edit_banner']=$this->admin_model->edit_testimonial_view($id);
	        $this->load->view('admin/edit_testimonials',$data);
		}
		
		function edit_testimonial()
		{
		   if($this->session->userdata('logged_in'))
	       {
		   $result=$this->admin_model->edit_testimonial();
		   $this->session->set_flashdata('msg','Updatted values Successfully');
		   
		   $id=$this->input->post('id');
		   $sql=$this->db->get_where('tbl_testimonials',array('sno'=>$id));
		   $row=$sql->row_array();
		   $lan_id=$row['lan_id'];
		   
		   if($lan_id==1) {
		   redirect('admin/select_testimonials','refresh');
		   }
		   else
		   {
			    redirect('admin/select_testimonials_telugu','refresh');
		   }
		   }
	       else
	       {
		   $this->session->set_flashdata('msg','please Login!');
		   redirect('admin/login','refresh');
	       }
		}
		
		function view_testimonial_popup($id)
		{
		if($this->session->userdata('logged_in'))
		 {
		 $data['view_banner_popup']=$this->admin_model->view_testimonial_popup($id);
		 $this->load->view('admin/view_testimonial_popup',$data);
	     }
	     else
	    {
		redirect('admin/login','refresh');
	    } 
		}
			//------------------TESTIMONIALS END HERE----------------------------------------------//
			
			
			//------------------AWARDS START HERE----------------------------------------------//
	
	
	function add_awards_view()
	{
		if($this->session->userdata('logged_in'))
		{
			$this->load->view('admin/add_awards');
		}
		else
		{
			redirect('admin/login','refresh');
		}
	    }
		function add_awards()
		{
		 $config['upload_path']='public/awards/';
		 $config['max_size']='9000';
		 $config['allowed_types']='jpg|png|jpeg|gif|';
		 $config['encrypt_name']=true;
		 $this->load->library('upload',$config);
		 $this->load->library('image_lib');
	     $this->upload->do_upload('banner');
		 $upload_data = $this->upload->data();
		 
		
		 $img=$upload_data['file_name'];
		 
		  /*$this->form_validation->set_rules('content', 'Awards Description','required|trim');
		  if($this->form_validation->run()==false)
		  {
			  $this->load->view('admin/add_awards');
		  }
		  else
		  {*/
		 $result=$this->admin_model->add_awards($img);
		 if($result==true)
		 {
			//echo "insert";
			$this->session->set_flashdata('msg','Inserted Values Successfully');
			redirect('admin/select_awards','refresh');
		 }
		 
		 else
		 {
			echo "not";
		 }

		 }
		
		 
		
		 
		 function select_awards()
		 {
	     if($this->session->userdata('logged_in'))
		 {
			$this->load->library("pagination");
			$config = array();
			$config["base_url"] = base_url() . "admin/select_awards";
			$config["total_rows"] = $this->admin_model->awards_count();
			$config["per_page"] = 10;
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);
			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$data['page']=$page;
			$data['view_banner']=$this->admin_model->select_awards($config["per_page"],$page);
			$data["links"] = $this->pagination->create_links();
			$data["pagination_helper"]   = $this->pagination;
			$this->load->view('admin/select_awards',$data);
		 
	     }
	     else
	    {
		redirect('admin/login','refresh');
	    } 
		}
		
		function delete_awards($id)
		{
			  if($this->session->userdata('logged_in'))
		 {
			 $sql=$this->db->get_where('tbl_awards',array('sno'=>$id));
			 $row=$sql->row_array();
				 if($row['image']!='')
				 {
					 $path1="public/awards/".$row['image'];
					 //$path2="public/banner/thumb/".$row['image'];
					 @unlink($path1);
					 //@unlink($path2);
				 }
			 $this->db->delete('tbl_awards',array('sno'=>$id));
			 $this->session->set_flashdata('msg','Record deletted successfully! ');
			 redirect('admin/select_awards/','refresh');
		  }
		  else
		  {
			 redirect('admin/login', 'refresh');
		  }
		}
		
		function edit_awards_view($id)
		{
			$data['edit_banner']=$this->admin_model->edit_awards_view($id);
	        $this->load->view('admin/edit_awards',$data);
		}
		
		function edit_awards()
		{
		   if($this->session->userdata('logged_in'))
	       {
		   $result=$this->admin_model->edit_awards();
		   $this->session->set_flashdata('msg','Updatted values Successfully');
		   redirect('admin/select_awards','refresh');
	       }
	       else
	       {
		   $this->session->set_flashdata('msg','please Login!');
		   redirect('admin/login','refresh');
	       }
		}
		
		/*function view_testimonial_popup($id)
		{
		if($this->session->userdata('logged_in'))
		 {
		 $data['view_banner_popup']=$this->admin_model->view_testimonial_popup($id);
		 $this->load->view('admin/view_testimonial_popup',$data);
	     }
	     else
	    {
		redirect('admin/login','refresh');
	    } 
		}*/
			//------------------AWARDS END HERE----------------------------------------------//
			
			
			
			
			//------------------PROJECTS START HERE----------------------------------------------//
			
	
	
	function add_projects_view()
	{
		if($this->session->userdata('logged_in'))
		{
			$data['view_vategory']=$this->admin_model->view_vategory();
			$data['view_type']=$this->admin_model->view_project_type();
			$data['view_priority']=$this->admin_model->view_priority();
			$data['view_location']=$this->admin_model->view_project_location();
			$this->load->view('admin/add_projects',$data);
		}
		else
		{
			redirect('admin/login','refresh');
		}
	    }
		function add_projects()
		{
		
		 $config['upload_path']='public/project/';
		 $config['max_size']='9000';
		 $config['allowed_types']='jpg|png|jpeg|gif|mp3';
		 $config['encrypt_name']=true;
		 $this->load->library('upload',$config);
		 $this->load->library('image_lib');
	     $this->upload->do_upload('banner');
		 $upload_data = $this->upload->data();
		 
		
		 $img=$upload_data['file_name'];
		
		 $result=$this->admin_model->add_projects($img);
		 if($result==true)
		 {
			//echo "insert";
			$this->session->set_flashdata('msg','Inserted Values Successfully');
			redirect('admin/select_projects','refresh');
		 }
		 
		 else
		 {
			echo "not";
		 }

		 }
		 
		 
		 function select_projects()
		 {
	        $this->load->library("pagination");
			$config = array();
			$config["base_url"] = base_url() . "admin/select_projects";
			$config["total_rows"] = $this->admin_model->projects_count();
			$config["per_page"] = 10;
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);
			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$data['page']=$page;
			$data['view_banner']=$this->admin_model->select_projects($config["per_page"],$page);
			$data["links"] = $this->pagination->create_links();
			$data["pagination_helper"]   = $this->pagination;
			$this->load->view('admin/select_projects',$data);
		}
		
		function delete_projects($id)
		{
			  if($this->session->userdata('logged_in'))
		 {
			 $sql=$this->db->get_where('tbl_projects',array('sno'=>$id));
			 $row=$sql->row_array();
				 if($row['image']!='')
				 {
					 $path1="public/project/".$row['image'];
					 //$path2="public/banner/thumb/".$row['image'];
					 @unlink($path1);
					 //@unlink($path2);
				 }
				 
				/* $sql_slide=$this->db->get_where('tbl_slider',array('project_id'=>$id));
			     $row_sql_s=$sql_slide->result_array();
				 foreach($row_sql_s as $row_sql)
				 {
				 if($row_sql['image']!='')
				 {
					 $path2="public/slider/".$row_sql['image'];
					 //$path2="public/banner/thumb/".$row['image'];
					 @unlink($path2);
					 //@unlink($path2);
				 }
				 }
				 
				 $sql_loc=$this->db->get_where('tbl_location_map',array('project_id'=>$id));
			     $row_lloc=$sql_loc->result_array();
				 foreach($row_lloc as $row_loc)
				 {
				 if($row_loc['image']!='')
				 {
					 $path3="public/location_map/".$row_loc['image'];
					 //$path2="public/banner/thumb/".$row['image'];
					 @unlink($path3);
					 //@unlink($path2);
				 }
				 }
				 
				 $sql_lay=$this->db->get_where('tbl_layout',array('project_id'=>$id));
			     $row_lay_l=$sql_lay->result_array();
				 foreach($row_lay_l as $row_lay)
				 {
				 if($row_lay['image']!='')
				 {
					 $path4="public/layout/".$row_lay['image'];
					 //$path2="public/banner/thumb/".$row['image'];
					 @unlink($path4);
					 //@unlink($path2);
				 }
				 }
				 
				 $sql_floor=$this->db->get_where('tbl_floor_planes',array('project_id'=>$id));
			     $row_floor_f=$sql_floor->result_array();
				 foreach($row_floor_f as $row_floor_f)
				 {
				 if($row_floor['image']!='')
				 {
					 $path5="public/floor_plans/".$row_floor['image'];
					 //$path2="public/banner/thumb/".$row['image'];
					 @unlink($path5);
					 //@unlink($path2);
				 }
				 }*/
				 
				 
				 
			 $this->db->delete('tbl_projects',array('sno'=>$id));
			 
			 //$this->db->delete('tbl_project_details',array('project_id'=>$id));
			// $this->db->delete('tbl_over_view',array('project_id'=>$id));
			// $this->db->delete('tbl_amentics',array('project_id'=>$id));
			 //$this->db->delete('tbl_brochure',array('project_id'=>$id));
			 //$this->db->delete('tbl_floor_planes',array('project_id'=>$id));
			 //$this->db->delete('tbl_layout',array('project_id'=>$id));
			 //$this->db->delete('tbl_location_map',array('project_id'=>$id));
			 //$this->db->delete('tbl_slider',array('project_id'=>$id));
			// $this->db->delete('tbl_specifications',array('project_id'=>$id));
			 //$this->db->delete('tbl_why_ramky',array('project_id'=>$id));
			 //exit;
			 $this->session->set_flashdata('msg','Record deletted successfully! ');
			 redirect('admin/select_projects/','refresh');
		  }
		  else
		  {
			 redirect('admin/login', 'refresh');
		  }
		}
		
		function edit_projects_view($id)
		{
			$data['view_vategory']=$this->admin_model->view_vategory();
			$data['view_priority']=$this->admin_model->view_priority();
			$data['view_type']=$this->admin_model->view_project_type();
			$data['edit_banner']=$this->admin_model->edit_projects_view($id);
	        $this->load->view('admin/edit_projects',$data);
		}
		
		function edit_projects()
		{
		   if($this->session->userdata('logged_in'))
	       {
		   $result=$this->admin_model->edit_projects();
		   $this->session->set_flashdata('msg','Updatted values Successfully');
		   redirect('admin/select_projects','refresh');
	       }
	       else
	       {
		   $this->session->set_flashdata('msg','please Login!');
		   redirect('admin/login','refresh');
	       }
		}
		
		function view_projet_popup($id)
		{
			$data['view_banner_popup']=$this->admin_model->view_projet_popup($id);
	        $this->load->view('admin/view_projet_popup',$data);
		}
		
		
		
		//-------------------------PROJECTS OVER VIEW START HERE------------------------------//
		function project_over_view($id)
		{
			$data['view_banner']=$this->admin_model->project_over_view_id($id);
			$data['view_data']=$this->admin_model->project_over_view($id);
	        $this->load->view('admin/project_over_view',$data);
		}
		
		function add_over_view($id)
		{
			$data['id']=$id;
			$data['view_type']=$this->admin_model->project_view_type();
	        $this->load->view('admin/add_over_view',$data);
		}
		
		function add_overview()
		{
			if($this->session->userdata('logged_in'))
	       {
		   $id=$this->input->post('id');
		   $result=$this->admin_model->add_overview();
		   $this->session->set_flashdata('msg','Inserted Values Successfully');
		   redirect('admin/project_over_view/'.$id,'refresh');
	       }
	       else
	       {
		   $this->session->set_flashdata('msg','please Login!');
		   redirect('admin/login','refresh');
	       }
		}
		
		function delete_projects_overview($id,$sno)
		{
			if($this->session->userdata('logged_in'))
		    {
			 $this->db->delete('tbl_over_view',array('sno'=>$id));
			 $this->session->set_flashdata('msg','Record deletted successfully! ');
			 redirect('admin/project_over_view/'.$sno,'refresh');
		  }
		  else
		  {
			 redirect('admin/login','refresh');
		  }
		}
		
		function edit_projects_overview($id,$sno)
		{
			$data['sno']=$sno;
			$data['view_type']=$this->admin_model->project_view_type();
			$data['edit_banner']=$this->admin_model->edit_projects_overview($id);
	        $this->load->view('admin/edit_over_view',$data);
		}
		
		function edit_overview()
		{
			
		   if($this->session->userdata('logged_in'))
	       {
		   $id=$this->input->post('id_pro');
		   $result=$this->admin_model->edit_overview();
		   $this->session->set_flashdata('msg','Updated Values Successfully');
		   redirect('admin/project_over_view/'.$id,'refresh');
	       }
	       else
	       {
		   $this->session->set_flashdata('msg','please Login!');
		   redirect('admin/login','refresh');
	       }
		}
		
		//-------------------------PROJECTS OVER VIEW START HERE------------------------------//
		
		
		
		//-------------------------PROJECTS WHY RAMKY START HERE------------------------------//
		
		function why_ramky($id)
		{
			$data['sno']=$id;
			$data['view_banner']=$this->admin_model->project_over_view_id($id);
			$data['view_data']=$this->admin_model->why_ramky($id);
	        $this->load->view('admin/why_ramky',$data);
		}
		
		function add_why_ramky_view($id)
		{
			$data['id']=$id;
	        $this->load->view('admin/add_why_ramky_view',$data);
		}
		
		function add_why_ramky()
		{
			if($this->session->userdata('logged_in'))
	       {
		   $id=$this->input->post('id');
		   $result=$this->admin_model->add_why_ramky();
		   $this->session->set_flashdata('msg','Inserted Values Successfully');
		   redirect('admin/why_ramky/'.$id,'refresh');
	       }
	       else
	       {
		   $this->session->set_flashdata('msg','please Login!');
		   redirect('admin/login','refresh');
	       }
		}
		
		function delete_projects_whyramky($id,$sno)
		{
			if($this->session->userdata('logged_in'))
		    {
			 $this->db->delete('tbl_why_ramky',array('sno'=>$id));
			 $this->session->set_flashdata('msg','Record deletted successfully! ');
			 redirect('admin/why_ramky/'.$sno,'refresh');
		  }
		  else
		  {
			 redirect('admin/login','refresh');
		  }
		}
		
		function edit_whyramky_view($id,$sno)
		{
			$data['sno']=$sno;
			$data['edit_banner']=$this->admin_model->edit_whyramky_view($id);
	        $this->load->view('admin/edit_whyramky',$data);
		}
		
		function edit_why_ramky()
		{
			 if($this->session->userdata('logged_in'))
	       {
		   $id=$this->input->post('id_pro');
		   $result=$this->admin_model->edit_why_ramky();
		   $this->session->set_flashdata('msg','Updated Values Successfully');
		   redirect('admin/why_ramky/'.$id,'refresh');
	       }
	       else
	       {
		   $this->session->set_flashdata('msg','please Login!');
		   redirect('admin/login','refresh');
	       }
		}
		
		//-------------------------PROJECTS WHY RAMKY END HERE------------------------------//
		
		
		//-------------------------PROJECTS AMENTICS START HERE------------------------------//
		
		function amentics($id)
		{
			$data['sno']=$id;
			$data['view_banner']=$this->admin_model->project_over_view_id($id);
			$data['view_data']=$this->admin_model->amentics($id);
	        $this->load->view('admin/amentics',$data);
		}
		
		function add_amentics_view($id)
		{
			$data['id']=$id;
	        $this->load->view('admin/add_amentics',$data);
		}
		
		function add_amentics()
		{
			if($this->session->userdata('logged_in'))
	       {
		   $id=$this->input->post('id');
		   $result=$this->admin_model->add_amentics();
		   $this->session->set_flashdata('msg','Inserted Values Successfully');
		   redirect('admin/amentics/'.$id,'refresh');
	       }
	       else
	       {
		   $this->session->set_flashdata('msg','please Login!');
		   redirect('admin/login','refresh');
	       }
		}
		
		function delete_projects_amentics($id,$sno)
		{
			if($this->session->userdata('logged_in'))
		    {
			 $this->db->delete('tbl_amentics',array('sno'=>$id));
			 $this->session->set_flashdata('msg','Record deletted successfully! ');
			 redirect('admin/amentics/'.$sno,'refresh');
		  }
		  else
		  {
			 redirect('admin/login','refresh');
		  }
		}
		
		function edit_amentics_view($id,$sno)
		{
			$data['sno']=$sno;
			$data['edit_banner']=$this->admin_model->edit_amentics_view($id);
	        $this->load->view('admin/edit_amentics',$data);
		}
		
		function edit_amentics()
		{
			 if($this->session->userdata('logged_in'))
	       {
		   $id=$this->input->post('id_pro');
		   $result=$this->admin_model->edit_amentics();
		   $this->session->set_flashdata('msg','Updated Values Successfully');
		   redirect('admin/amentics/'.$id,'refresh');
	       }
	       else
	       {
		   $this->session->set_flashdata('msg','please Login!');
		   redirect('admin/login','refresh');
	       }
		}
		
		//-------------------------PROJECTS AMENTICS END HERE------------------------------//
		
		
		//-------------------------PROJECTS SPECIFICATIONS START HERE------------------------------//
		
		function specifications($id)
		{
			$data['sno']=$id;
			$data['view_banner']=$this->admin_model->project_over_view_id($id);
			$data['view_data']=$this->admin_model->specifications($id);
	        $this->load->view('admin/specifications',$data);
		}
		
		function add_specifications_view($id)
		{
			$data['id']=$id;
	        $this->load->view('admin/add_specifications',$data);
		}
		
		function add_specifications()
		{
			if($this->session->userdata('logged_in'))
	       {
		   $id=$this->input->post('id');
		   $result=$this->admin_model->add_specifications();
		   $this->session->set_flashdata('msg','Inserted Values Successfully');
		   redirect('admin/specifications/'.$id,'refresh');
	       }
	       else
	       {
		   $this->session->set_flashdata('msg','please Login!');
		   redirect('admin/login','refresh');
	       }
		}
		
		function delete_projects_specifications($id,$sno)
		{
			if($this->session->userdata('logged_in'))
		    {
			 $this->db->delete('tbl_specifications',array('sno'=>$id));
			 $this->session->set_flashdata('msg','Record deletted successfully! ');
			 redirect('admin/specifications/'.$sno,'refresh');
		  }
		  else
		  {
			 redirect('admin/login','refresh');
		  }
		}
		
		function edit_specifications_view($id,$sno)
		{
			$data['sno']=$sno;
			$data['edit_banner']=$this->admin_model->edit_specifications_view($id);
	        $this->load->view('admin/edit_specifications',$data);
		}
		
		function edit_specifications()
		{
			 if($this->session->userdata('logged_in'))
	       {
		   $id=$this->input->post('id_pro');
		   $result=$this->admin_model->edit_specifications();
		   $this->session->set_flashdata('msg','Updated Values Successfully');
		   redirect('admin/specifications/'.$id,'refresh');
	       }
	       else
	       {
		   $this->session->set_flashdata('msg','please Login!');
		   redirect('admin/login','refresh');
	       }
		}
		
		//-------------------------PROJECTS SPECIFICATIONS END HERE------------------------------//
		
		
		//-------------------------PROJECTS PROJECT DETAILS START HERE------------------------------//
		
		function project_details($id)
		{
			$data['sno']=$id;
			$data['view_banner']=$this->admin_model->project_over_view_id($id);
			$data['view_data']=$this->admin_model->project_details($id);
	        $this->load->view('admin/project_details',$data);
		}
		
		function add_project_details_view($id)
		{
			$data['id']=$id;
	        $this->load->view('admin/add_project_details',$data);
		}
		
		function add_project_details()
		{
			if($this->session->userdata('logged_in'))
	       {
		   $id=$this->input->post('id');
		   $result=$this->admin_model->add_project_details();
		   $this->session->set_flashdata('msg','Inserted Values Successfully');
		   redirect('admin/project_details/'.$id,'refresh');
	       }
	       else
	       {
		   $this->session->set_flashdata('msg','please Login!');
		   redirect('admin/login','refresh');
	       }
		}
		
		function delete_project_details($id,$sno)
		{
			if($this->session->userdata('logged_in'))
		    {
				$sql=$this->db->get_where('tbl_project_details',array('sno'=>$id));
			    $row=$sql->row_array();
				 if($row['image']!='')
				 {
					 $path1="public/brochure/".$row['image'];
					 //$path2="public/banner/thumb/".$row['image'];
					 @unlink($path1);
					 //@unlink($path2);
				 }
				 
			 $this->db->delete('tbl_project_details',array('sno'=>$id));
			 $this->session->set_flashdata('msg','Record deletted successfully! ');
			 redirect('admin/project_details/'.$sno,'refresh');
		  }
		  else
		  {
			 redirect('admin/login','refresh');
		  }
		}
		
		function edit_project_details_view($id,$sno)
		{
			$data['sno']=$sno;
			$data['edit_banner']=$this->admin_model->edit_project_details_view($id);
	        $this->load->view('admin/edit_project_details',$data);
		}
		
		function edit_project_details()
		{
			 if($this->session->userdata('logged_in'))
	       {
		   $id=$this->input->post('id_pro');
		   $result=$this->admin_model->edit_project_details();
		   $this->session->set_flashdata('msg','Updated Values Successfully');
		   redirect('admin/project_details/'.$id,'refresh');
	       }
	       else
	       {
		   $this->session->set_flashdata('msg','please Login!');
		   redirect('admin/login','refresh');
	       }
		}
		
		//-------------------------PROJECTS PROJECT DETAILS END HERE------------------------------//
		
		
		//-------------------------PROJECTS E-BROCHURE START HERE------------------------------//
		
		function e_brochure($id)
		{
			$data['sno']=$id;
			$data['view_banner']=$this->admin_model->project_over_view_id($id);
			$data['view_data']=$this->admin_model->e_brochure($id);
	        $this->load->view('admin/e_brochure',$data);
		}
		
		function add_brochure_view($id)
		{
			$data['id']=$id;
	        $this->load->view('admin/add_e_brochure',$data);
		}
		
		function add_brochure()
		{
			if($this->session->userdata('logged_in'))
	       {
		   $id=$this->input->post('id');
		   $result=$this->admin_model->add_brochure();
		   $this->session->set_flashdata('msg','Inserted Values Successfully');
		   redirect('admin/e_brochure/'.$id,'refresh');
	       }
	       else
	       {
		   $this->session->set_flashdata('msg','please Login!');
		   redirect('admin/login','refresh');
	       }
		}
		
		function delete_projects_brochure($id,$sno)
		{
			if($this->session->userdata('logged_in'))
		    {
				$sql=$this->db->get_where('tbl_brochure',array('sno'=>$id));
			    $row=$sql->row_array();
				 if($row['image']!='')
				 {
					 $path1="public/brochure/".$row['image'];
					 //$path2="public/banner/thumb/".$row['image'];
					 @unlink($path1);
					 //@unlink($path2);
				 }
			 $this->db->delete('tbl_brochure',array('sno'=>$id));
			 $this->session->set_flashdata('msg','Record deletted successfully! ');
			 redirect('admin/e_brochure/'.$sno,'refresh');
		  }
		  else
		  {
			 redirect('admin/login','refresh');
		  }
		}
		
		function edit_brochure_view($id,$sno)
		{
			$data['sno']=$sno;
			$data['edit_banner']=$this->admin_model->edit_brochure_view($id);
	        $this->load->view('admin/edit_e_brochure',$data);
		}
		
		function edit_brochure()
		{
			 if($this->session->userdata('logged_in'))
	       {
		   $id=$this->input->post('id_pro');
		   $result=$this->admin_model->edit_brochure();
		   $this->session->set_flashdata('msg','Updated Values Successfully');
		   redirect('admin/e_brochure/'.$id,'refresh');
	       }
	       else
	       {
		   $this->session->set_flashdata('msg','please Login!');
		   redirect('admin/login','refresh');
	       }
		}
		
		//-------------------------PROJECTS E-BROCHURE END HERE------------------------------//
		
		
		//-------------------------PROJECTS LOCATION MAP START HERE------------------------------//
		
		function location_map($id)
		{
			$data['sno']=$id;
			$data['view_banner']=$this->admin_model->project_over_view_id($id);
			$data['view_data']=$this->admin_model->location_map($id);
	        $this->load->view('admin/location_map',$data);
		}
		
		function add_location_map_view($id)
		{
			$data['id']=$id;
	        $this->load->view('admin/add_location_map',$data);
		}
		
		function add_location_map()
		{
			if($this->session->userdata('logged_in'))
	       {
		   $id=$this->input->post('id');
		   $result=$this->admin_model->add_location_map();
		   $this->session->set_flashdata('msg','Inserted Values Successfully');
		   redirect('admin/location_map/'.$id,'refresh');
	       }
	       else
	       {
		   $this->session->set_flashdata('msg','please Login!');
		   redirect('admin/login','refresh');
	       }
		}
		
		function delete_projects_location_map($id,$sno)
		{
			if($this->session->userdata('logged_in'))
		    {
				$sql=$this->db->get_where('tbl_projects',array('sno'=>$id));
			    $row=$sql->row_array();
				 if($row['image']!='')
				 {
					 $path1="public/location_map/".$row['image'];
					 //$path2="public/banner/thumb/".$row['image'];
					 @unlink($path1);
					 //@unlink($path2);
				 }
			 $this->db->delete('tbl_location_map',array('sno'=>$id));
			 $this->session->set_flashdata('msg','Record deletted successfully! ');
			 redirect('admin/location_map/'.$sno,'refresh');
		  }
		  else
		  {
			 redirect('admin/login','refresh');
		  }
		}
		
		function edit_location_map_view($id,$sno)
		{
			$data['sno']=$sno;
			$data['edit_banner']=$this->admin_model->edit_location_map_view($id);
	        $this->load->view('admin/edit_location_map',$data);
		}
		
		function edit_location_map()
		{
			 if($this->session->userdata('logged_in'))
	       {
		   $id=$this->input->post('id_pro');
		   $result=$this->admin_model->edit_location_map();
		   $this->session->set_flashdata('msg','Updated Values Successfully');
		   redirect('admin/location_map/'.$id,'refresh');
	       }
	       else
	       {
		   $this->session->set_flashdata('msg','please Login!');
		   redirect('admin/login','refresh');
	       }
		}
		
		//-------------------------PROJECTS LOCATION MAP END HERE------------------------------//
		
		
		
		//-------------------------PROJECTS LAYOUT START HERE------------------------------//
		
		function layout($id)
		{
			$data['sno']=$id;
			$data['view_banner']=$this->admin_model->project_over_view_id($id);
			$data['view_data']=$this->admin_model->layout($id);
	        $this->load->view('admin/layout',$data);
		}
		
		function add_layout_view($id)
		{
			$data['id']=$id;
	        $this->load->view('admin/add_layout',$data);
		}
		
		function add_layout()
		{
			if($this->session->userdata('logged_in'))
	       {
		   $id=$this->input->post('id');
		   $result=$this->admin_model->add_layout();
		   $this->session->set_flashdata('msg','Inserted Values Successfully');
		   redirect('admin/layout/'.$id,'refresh');
	       }
	       else
	       {
		   $this->session->set_flashdata('msg','please Login!');
		   redirect('admin/login','refresh');
	       }
		}
		
		function delete_projects_layout($id,$sno)
		{
			if($this->session->userdata('logged_in'))
		    {
				$sql=$this->db->get_where('tbl_layout',array('sno'=>$id));
			    $row=$sql->row_array();
				 if($row['image']!='')
				 {
					 $path1="public/layout/".$row['image'];
					 //$path2="public/banner/thumb/".$row['image'];
					 @unlink($path1);
					 //@unlink($path2);
				 }
			 $this->db->delete('tbl_layout',array('sno'=>$id));
			 $this->session->set_flashdata('msg','Record deletted successfully! ');
			 redirect('admin/layout/'.$sno,'refresh');
		  }
		  else
		  {
			 redirect('admin/login','refresh');
		  }
		}
		
		function edit_layout_view($id,$sno)
		{
			$data['sno']=$sno;
			$data['edit_banner']=$this->admin_model->edit_layout_view($id);
	        $this->load->view('admin/edit_layout',$data);
		}
		
		function edit_layout()
		{
			 if($this->session->userdata('logged_in'))
	       {
		   $id=$this->input->post('id_pro');
		   $result=$this->admin_model->edit_layout();
		   $this->session->set_flashdata('msg','Updated Values Successfully');
		   redirect('admin/layout/'.$id,'refresh');
	       }
	       else
	       {
		   $this->session->set_flashdata('msg','please Login!');
		   redirect('admin/login','refresh');
	       }
		}
		
		//-------------------------PROJECTS LAYOUT END HERE------------------------------//
		
		
		//-------------------------PROJECTS FLOOR PLANS START HERE------------------------------//
		
		function floor_planes($id)
		{
			$data['sno']=$id;
			$data['view_banner']=$this->admin_model->project_over_view_id($id);
			$data['view_data']=$this->admin_model->floor_planes($id);
	        $this->load->view('admin/floor_planes',$data);
		}
		
		function add_floor_view($id)
		{
			$data['id']=$id;
	        $this->load->view('admin/add_floor_planes',$data);
		}
		
		function add_floor_planes()
		{
			if($this->session->userdata('logged_in'))
	       {
		   $id=$this->input->post('id');
		   $result=$this->admin_model->add_floor_planes();
		   $this->session->set_flashdata('msg','Inserted Values Successfully');
		   redirect('admin/floor_planes/'.$id,'refresh');
	       }
	       else
	       {
		   $this->session->set_flashdata('msg','please Login!');
		   redirect('admin/login','refresh');
	       }
		}
		
		function delete_projects_floor_plans($id,$sno)
		{
			if($this->session->userdata('logged_in'))
		    {
				$sql=$this->db->get_where('tbl_floor_planes',array('sno'=>$id));
			    $row=$sql->row_array();
				 if($row['image']!='')
				 {
					 $path1="public/floor_plans/".$row['image'];
					 //$path2="public/banner/thumb/".$row['image'];
					 @unlink($path1);
					 //@unlink($path2);
				 }
			 $this->db->delete('tbl_floor_planes',array('sno'=>$id));
			 $this->session->set_flashdata('msg','Record deletted successfully! ');
			 redirect('admin/floor_planes/'.$sno,'refresh');
		  }
		  else
		  {
			 redirect('admin/login','refresh');
		  }
		}
		
		function edit_floor_planes_view($id,$sno)
		{
			$data['sno']=$sno;
			$data['edit_banner']=$this->admin_model->edit_floor_planes_view($id);
	        $this->load->view('admin/edit_floor_planes',$data);
		}
		
		function edit_floor_plans()
		{
			 if($this->session->userdata('logged_in'))
	       {
		   $id=$this->input->post('id_pro');
		   $result=$this->admin_model->edit_floor_plans();
		   $this->session->set_flashdata('msg','Updated Values Successfully');
		   redirect('admin/floor_planes/'.$id,'refresh');
	       }
	       else
	       {
		   $this->session->set_flashdata('msg','please Login!');
		   redirect('admin/login','refresh');
	       }
		}
		
		//-------------------------PROJECTS FLOOR PLANS END HERE------------------------------//
		
		
		//-------------------------PROJECTS SLIDER IMAGES START HERE------------------------------//
		
		function slider($id)
		{
			$data['sno']=$id;
			$data['view_banner']=$this->admin_model->project_over_view_id($id);
			$data['view_data']=$this->admin_model->slider($id);
	        $this->load->view('admin/slider',$data);
		}
		
		function add_slider_view($id)
		{
			$data['id']=$id;
	        $this->load->view('admin/add_slider',$data);
		}
		
		function add_slider()
		{
			if($this->session->userdata('logged_in'))
	       {
		   $id=$this->input->post('id');
		   $result=$this->admin_model->add_slider();
		   $this->session->set_flashdata('msg','Inserted Values Successfully');
		   redirect('admin/slider/'.$id,'refresh');
	       }
	       else
	       {
		   $this->session->set_flashdata('msg','please Login!');
		   redirect('admin/login','refresh');
	       }
		}
		
		function delete_projects_slider($id,$sno)
		{
			if($this->session->userdata('logged_in'))
		    {
				$sql=$this->db->get_where('tbl_slider',array('sno'=>$id));
			    $row=$sql->row_array();
				 if($row['image']!='')
				 {
					 $path1="public/slider/".$row['image'];
					 //$path2="public/banner/thumb/".$row['image'];
					 @unlink($path1);
					 //@unlink($path2);
				 }
			 $this->db->delete('tbl_slider',array('sno'=>$id));
			 $this->session->set_flashdata('msg','Record deletted successfully! ');
			 redirect('admin/slider/'.$sno,'refresh');
		  }
		  else
		  {
			 redirect('admin/login','refresh');
		  }
		}
		
		function edit_slider_view($id,$sno)
		{
			$data['sno']=$sno;
			$data['edit_banner']=$this->admin_model->edit_slider_view($id);
	        $this->load->view('admin/edit_slider',$data);
		}
		
		function edit_slider()
		{
			 if($this->session->userdata('logged_in'))
	       {
		   $id=$this->input->post('id_pro');
		   $result=$this->admin_model->edit_slider();
		   $this->session->set_flashdata('msg','Updated Values Successfully');
		   redirect('admin/slider/'.$id,'refresh');
	       }
	       else
	       {
		   $this->session->set_flashdata('msg','please Login!');
		   redirect('admin/login','refresh');
	       }
		}
		
		//-------------------------PROJECTS SLIDER IMAGES END HERE------------------------------//
		
		
			
			//------------------PROJECTS END HERE----------------------------------------------//
			
			
			
	//------------------PROJECTS START HERE----------------------------------------------//
	
	function add_facts_view()
	{
		if($this->session->userdata('logged_in'))
		{
			$data['view_category']=$this->admin_model->view_vategory();
			$this->load->view('admin/add_facts',$data);
		}
		else
		{
			redirect('admin/login','refresh');
		}
	    }
		function add_facts()
		{
			
		 $config['upload_path']='public/facts/';
		 $config['max_size']='9000';
		 $config['allowed_types']='jpg|png|jpeg|gif|pdf';
		 $config['encrypt_name']=true;
		 $this->load->library('upload',$config);
		 $this->load->library('image_lib');
	     $this->upload->do_upload('banner');
		 $upload_data = $this->upload->data();
		 
		
		 $img=$upload_data['file_name'];
		 
		  $config['upload_path']='public/facts/';
		 $config['max_size']='9000';
		 $config['allowed_types']='jpg|png|jpeg|gif|pdf|';
		 $config['encrypt_name']=true;
		 $this->load->library('upload',$config);
		 //$this->load->library('image_lib');
	     $this->upload->do_upload('pdf');
		 $pdf_data = $this->upload->data();
		 
		
		 $pdf=$pdf_data['file_name'];
		
		 $result=$this->admin_model->add_facts($img,$pdf);
		 if($result==true)
		 {
			//echo "insert";
			$this->session->set_flashdata('msg','Inserted Values Successfully');
			redirect('admin/select_facts','refresh');
		 }
		 
		 else
		 {
			echo "not";
		 }

		 }
		 
		 
		 function select_facts()
		 {
	        $this->load->library("pagination");
			$config = array();
			$config["base_url"] = base_url() . "admin/select_facts";
			$config["total_rows"] = $this->admin_model->facts_count();
			$config["per_page"] = 10;
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);
			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$data['page']=$page;
			$data['view_banner']=$this->admin_model->select_facts($config["per_page"],$page);
			$data["links"] = $this->pagination->create_links();
			$data["pagination_helper"]   = $this->pagination;
			$this->load->view('admin/select_facts',$data);
		}
		
		function delete_facts($id)
		{
			  if($this->session->userdata('logged_in'))
		 {
			 $sql=$this->db->get_where('tbl_facts',array('sno'=>$id));
			 $row=$sql->row_array();
				 if($row['image']!='')
				 {
					 $path1="public/facts/".$row['image'];
					 //$path2="public/banner/thumb/".$row['image'];
					 @unlink($path1);
					 //@unlink($path2);
				 }
				 
				  if($row['pdf']!='')
				 {
					 $path2="public/facts/".$row['pdf'];
					 //$path2="public/banner/thumb/".$row['image'];
					 @unlink($path2);
					 //@unlink($path2);
				 }
			 $this->db->delete('tbl_facts',array('sno'=>$id));
			 $this->session->set_flashdata('msg','Record deletted successfully! ');
			 redirect('admin/select_facts/','refresh');
		  }
		  else
		  {
			 redirect('admin/login', 'refresh');
		  }
		}
		
		function edit_facts_view($id)
		{
			$data['view_category']=$this->admin_model->view_vategory();
			$data['edit_banner']=$this->admin_model->edit_facts_view($id);
	        $this->load->view('admin/edit_facts',$data);
		}
		
		function edit_facts()
		{
		   if($this->session->userdata('logged_in'))
	       {
		   $result=$this->admin_model->edit_facts();
		   $this->session->set_flashdata('msg','Updatted values Successfully');
		   redirect('admin/select_facts','refresh');
	       }
	       else
	       {
		   $this->session->set_flashdata('msg','please Login!');
		   redirect('admin/login','refresh');
	       }
		}
		
		
		function view_facts_popup($id)
		{
			$data['view_banner_popup']=$this->admin_model->view_facts_popup($id);
			$this->load->view('admin/view_facts_popup',$data);
		}
		
			
			//------------------PROJECTS END HERE----------------------------------------------//
			
			
			
			   //------------------GALLERY START HERE----------------//

           function add_gallery_view()
		   {
			   if($this->session->userdata('logged_in'))
		{
			$data['view_category']=$this->admin_model->view_gallery_category();
			$this->load->view('admin/add_gallery',$data);
		}
		else
		{
			redirect('admin/login','refresh');
		} 
		   }
		   
		   function add_gallery()
		   {
		   $result=$this->admin_model->add_gallery();
		   if($result==true)
		   {
			//echo "insert";
			//$this->session->set_flashdata('msg','Inserted Values Successfully');
			redirect('admin/select_gallery','refresh');
		   }
		   else
		   {
			echo "not";
		   }
		   }
		   
		   function select_gallery()
		   {
			   if($this->session->userdata('logged_in'))
		{
			$this->load->library("pagination");
			$config = array();
			$config["base_url"] = base_url() . "admin/select_gallery";
			$config["total_rows"] = $this->admin_model->gallery_count();
			$config["per_page"] = 10;
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);
			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$data['page']=$page;
			$data['view_gallery']=$this->admin_model->select_gallery($config["per_page"],$page);
			$data["links"] = $this->pagination->create_links();
			$data["pagination_helper"]   = $this->pagination;
			$this->load->view('admin/select_gallery',$data);
		}
		else
		{
			$this->session->set_flashdata('msg','Please Login !');
			redirect('admin/index', 'refresh');
		}
		   }
		   
		   function delete_gallery($id)
		   {
			    if($this->session->userdata('logged_in'))
		 {
			 $sql=$this->db->get_where('tbl_gallery',array('sno'=>$id));
			 $row=$sql->row_array();
				 if($row['images']!='')
				 {
					 $path1="public/gallery/".$row['images'];
					  $path2="public/gallery/thumb/".$row['images'];
					 @unlink($path1);
					 @unlink($path2);
				 }
			 $this->db->delete('tbl_gallery',array('sno'=>$id));
			 $this->session->set_flashdata('msg','Record deletted successfully! ');
			 redirect('admin/select_gallery/','refresh');
		  }
		  else
		  {
			 redirect('admin/login', 'refresh');
		  }
		   }
		   
		   
		   function edit_gallery_view($id)
		{
			$data['view_category']=$this->admin_model->view_gallery_category();
			$data['edit_gallery']=$this->admin_model->edit_gallery_view($id);
	        $this->load->view('admin/edit_gallery',$data);
		}
		
		
		function edit_gallery()
		{
		   if($this->session->userdata('logged_in'))
	       {
		   $result=$this->admin_model->edit_gallery();
		   $this->session->set_flashdata('msg','Updatted values Successfully');
		   redirect('admin/select_gallery','refresh');
	       }
	       else
	       {
		   $this->session->set_flashdata('msg','please Login!');
		   redirect('admin/login','refresh');
	       }
		}
		   
		  //------------------GALLERY END HERE----------------//
		  
		  
			  
			  
		  
		   //------------------CLIENTS START HERE----------------//
		  
		 function add_clients_view()
		 {
			if($this->session->userdata('logged_in'))
		{
			$data['view_category']=$this->admin_model->view_category_client();
			$this->load->view('admin/add_clients',$data);
		}
		else
		{
			redirect('admin/login','refresh');
		} 
		 }
		 
		 function add_clients()
		 {
		 
		 $result=$this->admin_model->add_clients();
		if($result==true)
		{
			//echo "insert";
			$this->session->set_flashdata('msg','Inserted Values Successfully');
			redirect('admin/select_clients','refresh');
		}
		else
		{
			echo "not";
		}
		 }
		 
		 
		 function select_clients()
		 {
		  if($this->session->userdata('logged_in'))
		  {
		    $this->load->library("pagination");
			$config = array();
			$config["base_url"] = base_url() . "admin/select_clients";
			$config["total_rows"] = $this->admin_model->clients_count();
			$config["per_page"] = 10;
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);
			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$data['page']=$page;
			$data['view_clients']=$this->admin_model->select_clients($config["per_page"],$page);
			$data["links"] = $this->pagination->create_links();
			$data["pagination_helper"]   = $this->pagination;
			$this->load->view('admin/select_clients',$data);
		  
	      }
	      else
	      {
		  redirect('admin/login','refresh');
	      }
		  }
		 
		 function delete_clients($id)
		 {
			  if($this->session->userdata('logged_in'))
		 {
			 $sql=$this->db->get_where('tbl_clients',array('sno'=>$id));
			 $row=$sql->row_array();
				 if($row['image']!='')
				 {
					 $path1="public/clients/".$row['image'];
					  $path2="public/clients/thumb/".$row['image'];
					 @unlink($path1);
					 @unlink($path2);
				 }
			 $this->db->delete('tbl_clients',array('sno'=>$id));
			 $this->session->set_flashdata('msg','Record deletted successfully! ');
			 redirect('admin/select_clients/','refresh');
		  }
		  else
		  {
			 redirect('admin/login', 'refresh');
		  }
		 }
		 
		function edit_clients_view($id)
		{
			$data['edit_clients']=$this->admin_model->edit_clients_id($id);
		$data['view_category']=$this->admin_model->view_category_client();
	        $this->load->view('admin/edit_clients',$data);
		}
		
		function edit_clients()
		{
		   if($this->session->userdata('logged_in'))
	       {
		   $result=$this->admin_model->edit_clients();
		   //exit;
		   $this->session->set_flashdata('msg','Updatted values Successfully');
		   redirect('admin/select_clients','refresh');
	       }
	       else
	       {
		   $this->session->set_flashdata('msg','please Login!');
		   redirect('admin/login','refresh');
	       }
		}

	 
		  //------------------CLIENTS END HERE----------------//
		  
		   //------------------NEWS START HERE----------------//
		  
		 function add_news_view()
		 {
			if($this->session->userdata('logged_in'))
		{
			$this->load->view('admin/add_news');
		}
		else
		{
			redirect('admin/login','refresh');
		} 
		 }
		 
		 function add_news()
		 {
			 //$this->form_validation->set_rules('name', 'Name','required|trim');
	         $this->form_validation->set_rules('Content', 'Content','required|trim');
			 if($this->form_validation->run()==false)
	        {
				$this->load->view('admin/add_news');
			}
			else
			{
			 $result=$this->admin_model->add_news();
		if($result==true)
		{
			//echo "insert";
			$this->session->set_flashdata('msg','Inserted Values Successfully');
			redirect('admin/select_news','refresh');
		}
		else
		{
			echo "not";
		}
		 }
		 }
		 
		 function select_news()
		 {
		   if($this->session->userdata('logged_in'))
		   {
		    $this->load->library("pagination");
			$config = array();
			$config["base_url"] = base_url() . "admin/select_news";
			$config["total_rows"] = $this->admin_model->news_count();
			$config["per_page"] = 5;
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);
			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$data['page']=$page;
			$data['view_news']=$this->admin_model->select_news($config["per_page"],$page);
			$data["links"] = $this->pagination->create_links();
			$data["pagination_helper"]   = $this->pagination;
			$this->load->view('admin/select_news',$data);
	}
	else
	{
		redirect('admin/login','refresh');
	}
		 }
		 
		 function delete_news($id)
		 {
			  if($this->session->userdata('logged_in'))
		 {
			 $sql=$this->db->get_where('tbl_news',array('sno'=>$id));
			 /*$row=$sql->row_array();
				 if($row['image']!='')
				 {
					 $path1="public/news/".$row['image'];
					  $path2="public/news/thumb/".$row['image'];
					 @unlink($path1);
					 @unlink($path2);
				 }*/
			 $this->db->delete('tbl_news',array('sno'=>$id));
			 $this->session->set_flashdata('msg','Record deletted successfully! ');
			 redirect('admin/select_news/','refresh');
		  }
		  else
		  {
			 redirect('admin/login', 'refresh');
		  }
		 }
		 
		function edit_news_view($id)
		{
			$data['edit_news']=$this->admin_model->edit_news_id($id);
	        $this->load->view('admin/edit_news',$data);
		}
		
		function edit_news()
		{
		   if($this->session->userdata('logged_in'))
	       {
		   $result=$this->admin_model->edit_news();
		   //exit;
		   $this->session->set_flashdata('msg','Updatted values Successfully');
		   redirect('admin/select_news','refresh');
	       }
	       else
	       {
		   $this->session->set_flashdata('msg','please Login!');
		   redirect('admin/login','refresh');
	       }
		}

	 
		  //------------------NEWS END HERE----------------//
		  
		  //------------------STRATEGIES START HERE----------------//
 
    function add_services_india_view()
	{
		if($this->session->userdata('logged_in'))
		{
			$data['service_name']=$this->admin_model->service_name();
			$this->load->view('admin/add_strategies',$data);
		}
		else
		{
			redirect('admin/login','refresh');
		}
	}
	
	function add_services_india()
	{
		//$this->form_validation->set_rules('Service', 'Service','required|trim');
	    $this->form_validation->set_rules('name', 'Name','required|trim');
	    //$this->form_validation->set_rules('Content','Content','required|trim');
	    if($this->form_validation->run()==false)
	    {
			$data['service_name']=$this->admin_model->service_name();
			$this->load->view('admin/add_strategies',$data);
		}
		else
		{
		$result=$this->admin_model->add_strategies();
		if($result==true)
		{
			//echo "insert";
			$this->session->set_flashdata('msg','Content Inserted Successfully');
			redirect('admin/select_services_india','refresh');
		}
		else
		{
			echo "not";
		}
	}
	}
	
	function select_services_india()
	{
		if($this->session->userdata('logged_in'))
		   {
			   
	    $this->load->library("pagination");
		$config = array();
		$config["base_url"] = base_url() . "admin/select_services_india";
		$config["total_rows"] = $this->admin_model->services_indiacount();
		$config["per_page"] = 10;
		$config["uri_segment"] = 3;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['page']=$page;
		$data['view_content']=$this->admin_model->select_strategies($config["per_page"],$page);
		$data["links"] = $this->pagination->create_links();
		$data["pagination_helper"]   = $this->pagination;
		//$data['view_content']=$this->admin_model->select_strategies();
		$this->load->view('admin/select_strategies',$data);
	}
	else
	{
		redirect('admin/index','refresh');
	}
	}
	
	function delete_services_india($id)
	{
		if($this->session->userdata('logged_in'))
		 {
			 $sql=$this->db->get_where('tbl_strategies',array('id'=>$id));
			 $this->db->delete('tbl_strategies',array('id'=>$id));
			 $this->session->set_flashdata('msg','Record deletted successfully! ');
			 redirect('admin/select_services_india/', 'refresh');
		  }
		  else
		  {
			 redirect('admin/login','refresh');
		  }
	}
	
	function edit_services_india_view($id)
	{
    $data['service_name']=$this->admin_model->service_name();
	$data['edit_content']=$this->admin_model->edit_strategies_view($id);
	$this->load->view('admin/edit_strategies',$data);
	}
	
	function edit_services_india()
	{
		if($this->session->userdata('logged_in'))
	{
		$result=$this->admin_model->edit_strategies();
		$this->session->set_flashdata('msg','Updatted values Successfully');
			redirect('admin/select_services_india','refresh');
	}
	else
	{
		$this->session->set_flashdata('msg','please Login!');
			redirect('admin/login','refresh');
	}
	}
	
	function view_services_popup($id)
	{
		
	$data['view_banner_popup']=$this->admin_model->view_services_popup($id);
	$this->load->view('admin/view_services_popup',$data);
	}
	
	 //------------------STRATEGIES END HERE----------------//
	 
	 		  //------------------CAREERS START HERE----------------//

    function select_careers()
	{
		if($this->session->userdata('logged_in'))
		   {
		    $this->load->library("pagination");
			$config = array();
			$config["base_url"] = base_url() . "admin/select_careers";
			$config["total_rows"] = $this->admin_model->careers_count();
			$config["per_page"] = 12;
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);
			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$data['page']=$page;
			$data['view_cereers']=$this->admin_model->select_careers($config["per_page"],$page);
			$data["links"] = $this->pagination->create_links();
			$data["pagination_helper"]   = $this->pagination;
			$this->load->view('admin/select_cereers',$data);
		
	}
	else
	{
		redirect('admin/index','refresh');
	}
	}
	
	function select_careers_arabic()
	{
		if($this->session->userdata('logged_in'))
		   {
		    $this->load->library("pagination");
			$config = array();
			$config["base_url"] = base_url() . "admin/select_careers_arabic";
			$config["total_rows"] = $this->admin_model->careers_count_arabic();
			$config["per_page"] = 12;
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);
			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$data['page']=$page;
			$data['view_cereers']=$this->admin_model->select_careers_arabic($config["per_page"],$page);
			$data["links"] = $this->pagination->create_links();
			$data["pagination_helper"]   = $this->pagination;
			$this->load->view('admin/select_cereers',$data);
		
	}
	else
	{
		redirect('admin/index','refresh');
	}
	}
	
	function view_career_popup($id)
	{
		$data['view_career_popup']=$this->admin_model->view_career_popup($id);
		$this->load->view('admin/select_career_popup',$data);
	}
	
	function delete_carrer($id)
	{
		if($this->session->userdata('logged_in'))
		 {
			 $sql=$this->db->get_where('tbl_careers',array('sno'=>$id));
			 $this->db->delete('tbl_careers',array('sno'=>$id));
			 $this->session->set_flashdata('msg','Record deletted successfully! ');
			 redirect('admin/select_careers/', 'refresh');
		  }
		  else
		  {
			 redirect('admin/login','refresh');
		  }
	}
	
	
//------------------CAREERS END HERE----------------//

	 
	 //------------------SETTINGS START HERE----------------//

	 
	 function settings_view()
	{
		if($this->session->userdata('logged_in'))
		   {
		$data['view_setting']=$this->admin_model->settings_view();
		$this->load->view('admin/edit_setting',$data);
		  }
	   else
		   {
			 redirect('login', 'refresh');
		   }
	}
	function edit_settings($id)
	{ 
		if($this->session->userdata('logged_in'))
		   {
		$this->admin_model->edit_settings($id);
		redirect('admin/settings_view/'.$id, 'refresh');
		  }
	   else
		   {
			 redirect('login', 'refresh');
		   }
	}
    
		 //------------------SETTINGS END HERE----------------//
 
 
 		 //------------------CHANGE PASSWORD START HERE----------------//

 
  function Change_password()
  {
		  $session_data=$this->session->userdata('logged_in');
		  $id=$session_data['maven_id'];
		  $this->form_validation->set_rules('old_password', 'Password','required|callback_check_username|trim');
	$this->form_validation->set_rules('new_password', 'New Password','required|');
	$this->form_validation->set_rules('confirm', 'Confirm Password','required|matches[new_password]|trim');
			if ($this->form_validation->run()== FALSE)
			{
				 //$data['view_profile']=$this->admin_model->view_profile($id);
				$this->load->view('admin/change_password');
			}
			else
			{
	  $result=$this->admin_model->change_pass($id);
	  if($result==true)
	  {
		  $this->session->set_flashdata('msg','Password has been changed successfully');
		  redirect('admin/Change_password','refresh');
		// echo "Password has been changed successfully";
	  }
	  else
	  {
		  $this->session->set_flashdata('msg','You Are Entered Password Wrong');
		  redirect('admin/Change_password','refresh');
	  }
	  // $this->load->view('index');
	//$this->load->view('index');
	}
	
  }
  
    //------------------CHANGE PASSWORD END HERE----------------//
	
	
	    //------------------FORGOT PASSWORD START HERE----------------//

	function Forgotpassword()
	{
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
	    $this->form_validation->set_rules('email', 'Email','required|valid_email|');
	    if ($this->form_validation->run()== FALSE)
		{
		$this->load->view('admin/login');
		//echo "hellow welcome";
	    }
	    else
	    {
	    $result=$this->admin_model->Forgotpassword();
	    if($result==true)
	    {
        foreach($result as $rec)
		  {
			 // echo $rec->email;
		  
		 
		  $this->session->set_flashdata('msg','Password has been reset and has been sent to Your Email');
		 // redirect('dashboard','refresh');
		// exit;
		        redirect('admin/','refresh');
		 		// echo "Password has been reset and has been sent to email id:";
	  }
	  }
	  else
	  {
		  $this->session->set_flashdata('msg','The email id you entered not found on our database Please Check');
		 //echo "The email id you entered not found on our database";
		 exit;
		  redirect('admin/','refresh');
	  }
	}

	}


    //------------------FORGOT PASSWORD END HERE----------------//
	
	
	
	
	//-----------------VIDEOS START HERE--------------------------//
	
	function add_videos_view()
	{
		if($this->session->userdata('logged_in'))
		{
			$data['view_category']=$this->admin_model->view_scrolling_category();
			$this->load->view('admin/add_videos',$data);
		}
		else
		{
			redirect('admin/login','refresh');
		}
	}
	
	function add_video()
	{
		//$this->form_validation->set_rules('name', 'Name','required|trim');
	    $this->form_validation->set_rules('link', 'Video Link','required|trim');
		//$this->form_validation->set_rules('cat_id', 'Category','required|trim');
	    if($this->form_validation->run()==false)
		{
		//$data['view_month']=$this->admin_model->view_month();
		//$data['view_lng']=$this->admin_model->view_language_type();
		$data['view_category']=$this->admin_model->view_scrolling_category();
		$this->load->view('admin/add_videos',$data);
		}
		else
		{
		$result=$this->admin_model->add_video();
		if($result==true)
		{
			//echo "insert";
			
			$this->session->set_flashdata('msg','Record Inserted Successfully');
			redirect('admin/select_video','refresh');
			
		}
		else
		{
			echo "not";
		}
	}
	}
	
	function select_video()
	{
		$this->load->library("pagination");
		$config = array();
		$config["base_url"] = base_url() . "admin/select_video";
		$config["total_rows"] = $this->admin_model->video_count();
		$config["per_page"] = 10;
		$config["uri_segment"] = 3;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['page']=$page;
		$data['view_banner']=$this->admin_model->select_video($config["per_page"],$page);
		$data["links"] = $this->pagination->create_links();
		$data["pagination_helper"]   = $this->pagination;
		$this->load->view('admin/select_videos',$data);
	}
	
	
	function select_video_arabic()
	{
		$this->load->library("pagination");
		$config = array();
		$config["base_url"] = base_url() . "admin/select_video_arabic";
		$config["total_rows"] = $this->admin_model->video_count_arabic();
		$config["per_page"] = 10;
		$config["uri_segment"] = 3;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['page']=$page;
		$data['view_banner']=$this->admin_model->select_video_arabic($config["per_page"],$page);
		$data["links"] = $this->pagination->create_links();
		$data["pagination_helper"]   = $this->pagination;
		$this->load->view('admin/select_video_arabic',$data);
	}
	
	function delete_video($id)
	{
		if($this->session->userdata('logged_in'))
		 {
			 $this->db->delete('tbl_video',array('sno'=>$id));
			$this->session->set_flashdata('msg','Record deletted successfully!');
			redirect('admin/select_video','refresh');
			 }
		  else
		  {
			 redirect('admin/login','refresh');
		  }
	}
	
	
	function edit_video_view($id)
	{
		if($this->session->userdata('logged_in'))
		{
			$data['view_category']=$this->admin_model->view_scrolling_category();
			//$data['view_month']=$this->admin_model->view_month();
		    $data['edit_video']=$this->admin_model->edit_video_view($id);
			//$data['view_lng']=$this->admin_model->view_language_type();
			$this->load->view('admin/edit_videos',$data);
		}
		else
		{
			redirect('admin/login','refresh');
		}
	}
	
	function edit_video()
	{
		if($this->session->userdata('logged_in'))
	{
		$result=$this->admin_model->edit_video();
		
		
			$this->session->set_flashdata('msg','Updatted values Successfully');
			redirect('admin/select_video','refresh');
			
		
	}
	else
	{
		$this->session->set_flashdata('msg','please Login!');
			redirect('admin/login','refresh');
	}
	}
	
	//-----------------VIDEOS END HERE---------------------------------------//
	
	
	
	
		  
		  
		  //------------------MANAGE UPLOADS START HERE----------------------------------------------//
	
	
	function add_upload_view()
	{
		if($this->session->userdata('logged_in'))
		{
			$this->load->view('admin/add_uploads');
		}
		else
		{
			redirect('admin/add','refresh');
		}
	    }
		function add_uploads()
		{
		 //$path=base_url().'public/uploads/'; exit;
	     $config['upload_path']='public/uploads/'; 
		 $config['max_size']='9000';
		 $config['allowed_types']='jpg|png|jpeg|gif';
		 $config['encrypt_name']=true;
		 $this->load->library('upload',$config);
		 $this->load->library('image_lib');
	     $this->upload->do_upload('banner');
		 $file_data = $this->upload->data();
		// exit;
		 $resize_conf = array(
		'source_image' => $file_data['full_path'],
		'new_image' => $file_data['file_path'].'thumb/'.$file_data['file_name'],
		'encrypt_name' =>true,
		'width' => 300,
		'height' =>200
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
		 $result=$this->admin_model->add_uploads($img);
		 if($result==true)
		 {
			//echo "insert";
			$this->session->set_flashdata('msg','Inserted Values Successfully');
			redirect('admin/select_uploads','refresh');
		 }
		 else
		 {
			echo "not";
		 }
		 }
		 
	     
		 
		 function select_uploads()
		 {
	     if($this->session->userdata('logged_in'))
		 {
		 $this->load->library("pagination");
			$config = array();
			$config["base_url"] = base_url() . "admin/select_uploads";
			$config["total_rows"] = $this->admin_model->uploads_count();
			$config["per_page"] = 10;
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);
			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$data['view_banner']=$this->admin_model->select_uploads($config["per_page"],$page);
			$data["links"] = $this->pagination->create_links();
			$data["pagination_helper"]   = $this->pagination;	 
		 //$data['view_banner']=$this->admin_model->select_uploads();
		 $this->load->view('admin/select_uploads',$data);
	     }
	     else
	    {
		redirect('admin/add','refresh');
	    } 
		}
		
		function delete_uploads($id)
		{
			  if($this->session->userdata('logged_in'))
		 {
			 $sql=$this->db->get_where('tbl_uploads',array('sno'=>$id));
			 $row=$sql->row_array();
				 if($row['image']!='')
				 {
					 $path1="public/uploads/".$row['image'];
					 $path2="public/uploads/thumb/".$row['image'];
					 @unlink($path1);
					 @unlink($path2);
				 }
			 $this->db->delete('tbl_uploads',array('sno'=>$id));
			 $this->session->set_flashdata('msg','Record deletted successfully! ');
			 redirect('admin/select_uploads/','refresh');
		  }
		  else
		  {
			 redirect('admin/add', 'refresh');
		  }
		}
		
	
		
		function edit_upload_view($id)
		{
			$data['edit_banner']=$this->admin_model->edit_upload_view($id);
	        $this->load->view('admin/edit_uploads',$data);
		}
		
		function edit_uploads()
		{
		   if($this->session->userdata('logged_in'))
	       {
		   $result=$this->admin_model->edit_uploads();
		   $this->session->set_flashdata('msg','Updatted values Successfully');
		   redirect('admin/select_uploads','refresh');
	       }
	       else
	       {
		   $this->session->set_flashdata('msg','please Login!');
		   redirect('admin/add','refresh');
	       }
		}
			//------------------MANAGE UPLOADS END HERE----------------------------------------------//
			
			
			


//-----------------VIDEOS FEATURED START HERE--------------------------//
	
	function add_feavideos_view()
	{
		if($this->session->userdata('logged_in'))
		{
			$data['view_month']=$this->admin_model->view_month();
			$data['view_lng']=$this->admin_model->view_language_type();
			$this->load->view('admin/add_fea_videos',$data);
		}
		else
		{
			redirect('admin/login','refresh');
		}
	}
	
	function add_feavideo()
	{
		$this->form_validation->set_rules('name', 'Name','required|trim');
	    $this->form_validation->set_rules('link', 'Video Link','required|trim');
		$this->form_validation->set_rules('type', 'Language Type','required|trim');
	    if($this->form_validation->run()==false)
		{
		$data['view_month']=$this->admin_model->view_month();
		$data['view_lng']=$this->admin_model->view_language_type();
		$this->load->view('admin/add_fea_videos',$data);
		}
		else
		{
		$result=$this->admin_model->add_feavideo();
		if($result==true)
		{
			//echo "insert";
			$this->session->set_flashdata('msg','Record Inserted Successfully');
			redirect('admin/select_feavideo','refresh');
		}
		else
		{
			echo "not";
		}
	}
	}
	
	function select_feavideo()
	{
		$this->load->library("pagination");
		$config = array();
		$config["base_url"] = base_url() . "admin/select_feavideo";
		$config["total_rows"] = $this->admin_model->feavideo_count();
		$config["per_page"] = 10;
		$config["uri_segment"] = 3;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['page']=$page;
		$data['view_banner']=$this->admin_model->select_fea_videos($config["per_page"],$page);
		$data["links"] = $this->pagination->create_links();
		$data["pagination_helper"]   = $this->pagination;
		$this->load->view('admin/select_fea_videos',$data);
	}
	
	
	
	function edit_feavideo_view($id)
	{
		if($this->session->userdata('logged_in'))
		{
			//$data['view_month']=$this->admin_model->edit_feavideo_view();
		    $data['edit_video']=$this->admin_model->edit_feavideo_view($id);
			//$data['view_lng']=$this->admin_model->view_language_type();
			$this->load->view('admin/edit_fea_videos',$data);
		}
		else
		{
			redirect('admin/login','refresh');
		}
	}
	
	function edit_feavideo()
	{
		if($this->session->userdata('logged_in'))
	{
		$result=$this->admin_model->edit_feavideo();
		$this->session->set_flashdata('msg','Updatted values Successfully');
			redirect('admin/select_feavideo','refresh');
	}
	else
	{
		$this->session->set_flashdata('msg','please Login!');
			redirect('admin/login','refresh');
	}
	}
	
	//-----------------VIDEOS FEATURED HERE---------------------------------------//
	
	
	//----------------NEWS LETTER START HERE--------------------------------------//
	
	
	function select_newsletterdetails()
	{
		$this->load->library("pagination");
		$config = array();
		$config["base_url"] = base_url() . "admin/select_newsletterdetails";
		$config["total_rows"] = $this->admin_model->letter_count();
		$config["per_page"] = 10;
		$config["uri_segment"] = 3;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['page']=$page;
		$data['view_banner']=$this->admin_model->select_newsletterdetails($config["per_page"],$page);
		$data["links"] = $this->pagination->create_links();
		$data["pagination_helper"]   = $this->pagination;
		$this->load->view('admin/select_newsletter',$data);
	}
	
	function delete_newsletter($id)
	{
		 $this->db->delete('tbl_newsletter',array('sno'=>$id));
		 $this->session->set_flashdata('msg','Record deletted successfully! ');
	     redirect('admin/select_newsletterdetails/','refresh');
	}
	
	//----------------NEWS LETTER END HERE--------------------------------------//
	
	
	
	//----------------GOOGLE ANALYTICS CODE START HERE--------------------------------------//
	function add_analytics_code_view()
	{
		if($this->session->userdata('logged_in'))
		{
			$data['view_month']=$this->admin_model->view_month();
			$data['view_lng']=$this->admin_model->view_language_type();
			$this->load->view('admin/add_google_analytics_code',$data);
		}
		else
		{
			redirect('admin/login','refresh');
		}
    }
	
	
	function add_analytics_code()
	{
		$result=$this->admin_model->add_analytics_code();
		if($result==true)
		{
			//echo "insert";
			$this->session->set_flashdata('msg','Record Inserted Successfully');
			redirect('admin/select_google','refresh');
		}
		else
		{
			echo "not";
		}
    }
	
	function select_google()
	{
		$data['view_month']=$this->admin_model->select_google();
		$this->load->view('admin/select_google',$data);
	}
	
	function edit_google_view($id)
	
	{
		$data['view_month']=$this->admin_model->edit_google_view($id);
		$this->load->view('admin/edit_google',$data);
	}
	
	function edit_analytics_code()
	{
		$result=$this->admin_model->edit_analytics_code();
		if($result==true)
		{
			//echo "insert";
			$this->session->set_flashdata('msg','Record Updated Successfully');
			redirect('admin/select_google','refresh');
		}
		else
		{
			echo "not";
		}
	}
	
	
	//----------------GOOGLE ANALYTICS CODE END HERE--------------------------------------//
	
	//------------------ CORPORATE OFFICE START HERE----------------//

	
	function add_corpate_view()
	{
		if($this->session->userdata('logged_in'))
		{
			$this->load->view('admin/add_corporate');
		}
		else
		{
			redirect('admin/login','refresh');
		}
	}
	
	function add_corpate()
	{
		$this->form_validation->set_rules('phone', 'Phone Number','required|trim');
		$this->form_validation->set_rules('fax', 'Fax Number ','required|trim');
		$this->form_validation->set_rules('address', 'Address','required|trim');
		  if($this->form_validation->run()==false)
	      {
			  $this->load->view('admin/add_corporate');
		  }
		  else
		  {
		$result=$this->admin_model->add_corporate();
		if($result==true)
		{
			//echo "insert";
			$this->session->set_flashdata('msg','Inserted Values Successfully');
			redirect('admin/select_corporate','refresh');
		}
		else
		{
			echo "not";
		}
	}
	}
	
	
	function select_corporate()
	{
		if($this->session->userdata('logged_in'))
		   {
		$data['view_category']=$this->admin_model->select_corporate();
		$this->load->view('admin/select_corporate',$data);
	}
	else
	{
		redirect('admin/login','refresh');
	}
	}
	
	function edit_corporate_view($id)
	{
		$data['view_category']=$this->admin_model->edit_corporate_view($id);
		$this->load->view('admin/edit_corpate',$data);
	}
	
	function edit_corpate()
	{
		 if($this->session->userdata('logged_in'))
	       {
		   $result=$this->admin_model->edit_corpate();
		   $this->session->set_flashdata('msg','Updatted values Successfully');
		   redirect('admin/select_corporate','refresh');
	       }
	       else
	       {
		   $this->session->set_flashdata('msg','please Login!');
		   redirect('admin/add','refresh');
	       }
	}
	
	
			  //------------------ CORPORATE OFFICE END HERE----------------//
			  
			  
			    //------------------ GROUP  OFFICE START HERE----------------//

	
	function add_group_view()
	{
		if($this->session->userdata('logged_in'))
		{
			//$data['view_lng']=$this->admin_model->view_language_type();
			$this->load->view('admin/add_group');
		}
		else
		{
			redirect('admin/login','refresh');
		}
	}
	
	function add_group()
	{
		
		$this->form_validation->set_rules('type', 'Language','required|trim');
		$this->form_validation->set_rules('name', 'Name','required|trim');
		$this->form_validation->set_rules('phone', 'Phone Number','required|trim');
		$this->form_validation->set_rules('fax', 'Fax Number ','required|trim');
		$this->form_validation->set_rules('address', 'Address','required|trim');
		
		  if($this->form_validation->run()==false)
	      {
			  //$data['view_lng']=$this->admin_model->view_language_type();
			  $this->load->view('admin/add_group',$data);
		  }
		  else
		  {
		$result=$this->admin_model->add_group();
		if($result==true)
		{
			//echo "insert";
			
			
			$this->session->set_flashdata('msg','Inserted Values Successfully');
			redirect('admin/select_group','refresh');
			
			}
			
		
		else
		{
			echo "not";
		}
	}
	}
	
	
	function select_group()
	{
		if($this->session->userdata('logged_in'))
		   {
		$data['view_category']=$this->admin_model->select_group();
		$this->load->view('admin/select_group',$data);
	}
	else
	{
		redirect('admin/login','refresh');
	}
	}
	
	
	function select_group_arabic()
	{
		if($this->session->userdata('logged_in'))
		   {
		$data['view_category']=$this->admin_model->select_group_arabic();
		$this->load->view('admin/select_group',$data);
	}
	else
	{
		redirect('admin/login','refresh');
	}
	}
	
	function delete_group($id)
	{
		 $this->db->delete('tbl_support',array('sno'=>$id));
		    $sql=$this->db->get_where('tbl_group',array('sno'=>$id));
			$res=$sql->row_array();
			if($res['type']=='English')
			{
			$this->session->set_flashdata('msg','Record deletted successfully!');
			redirect('admin/select_group','refresh');
			}
			else
			{
			$this->session->set_flashdata('msg','Record deletted successfully!');
			redirect('admin/select_group_arabic','refresh');
			}
		 
	}
	
	function edit_group_view($id)
	{
		//$data['view_lng']=$this->admin_model->view_language_type();
		$data['view_category']=$this->admin_model->edit_group_view($id);
		$this->load->view('admin/edit_group',$data);
	}
	
	function edit_group()
	{
		 if($this->session->userdata('logged_in'))
	       {
		   $result=$this->admin_model->edit_group();
		   
		   
			$this->session->set_flashdata('msg','Updatted values Successfully');
			redirect('admin/select_group','refresh');
			
		  
	       }
	       else
	       {
		   $this->session->set_flashdata('msg','please Login!');
		   redirect('admin/add','refresh');
	       }
	}
	
	
			  //------------------ GROUP OFFICE END HERE----------------//
	
	
	 //------------------ RECYCLE BIN LOCATIONS START HERE----------------//
	
	function manage_recycle_locations()
	{
		$this->load->library("pagination");
		$config = array();
		$config["base_url"] = base_url() . "admin/manage_recycle_locations";
		$config["total_rows"] = $this->admin_model->bin_count();
		$config["per_page"] = 10;
		$config["uri_segment"] = 3;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['page']=$page;
		$data['view_banner']=$this->admin_model->manage_recycle_locations($config["per_page"],$page);
		$data["links"] = $this->pagination->create_links();
		$data["pagination_helper"]   = $this->pagination;
		$this->load->view('admin/manage_recycle_locations',$data);
	}
	
	
	function view_recycle_popup($id)
	{
		$data['view_career_popup']=$this->admin_model->view_recycle_popup($id);
		$this->load->view('admin/select_career_popup',$data);
	}
	
	
	function delete_recycle($id)
	{
		 $this->db->delete('tbl_recycle_locations',array('sno'=>$id));
		 $this->session->set_flashdata('msg','Record deletted successfully!');
		 redirect('admin/manage_recycle_locations','refresh');
	}
	
	 //------------------ RECYCLE BIN LOCATIONS END HERE----------------//
	 
	 
	  //------------------ INQUIRY FORM START HERE----------------//
	
	function manage_inquiry()
	{
		$this->load->library("pagination");
		$config = array();
		$config["base_url"] = base_url() . "admin/manage_inquiry";
		$config["total_rows"] = $this->admin_model->inquiry_count();
		$config["per_page"] = 10;
		$config["uri_segment"] = 3;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['page']=$page;
		$data['view_banner']=$this->admin_model->manage_inquiry($config["per_page"],$page);
		$data["links"] = $this->pagination->create_links();
		$data["pagination_helper"]   = $this->pagination;
		$this->load->view('admin/manage_inquiry',$data);
	}
	
	
	function view_inquiry_popup($id)
	{
		$data['view_career_popup']=$this->admin_model->view_inquiry_popup($id);
		$this->load->view('admin/select_inquiry_popup',$data);
	}
	
	
	function delete_inquiry($id)
	{
		 $this->db->delete('tbl_enquiry_form',array('sno'=>$id));
		 $this->session->set_flashdata('msg','Record deletted successfully!');
		 redirect('admin/manage_inquiry','refresh');
	}
	
	 //------------------ INQUIRY FORM  END HERE----------------//
	 
	 
	 //------------------ AREA START  HERE----------------//

	
	function add_aera_view()
	{
		if($this->session->userdata('logged_in'))
		{
			$this->load->view('admin/add_area');
		}
		else
		{
			redirect('admin/login','refresh');
		}
	}
	
	function add_area()
	{
		//$this->form_validation->set_rules('category', 'Category','required|trim');
		$this->form_validation->set_rules('name', 'Name','required|trim');
		//$this->form_validation->set_rules('content', 'Description','required|trim');
		
		  if($this->form_validation->run()==false)
	      {
			  $this->load->view('admin/add_area');
		  }
		  else
		  {
		$result=$this->admin_model->add_area();
		if($result==true)
		{
			//echo "insert";
			$this->session->set_flashdata('msg','Inserted Values Successfully');
			redirect('admin/select_area','refresh');
		}
		else
		{
			echo "not";
		}
	}
	}
	
	
	function select_area()
	{
		$this->load->library("pagination");
		$config = array();
		$config["base_url"] = base_url() . "admin/select_area";
		$config["total_rows"] = $this->admin_model->area_count();
		$config["per_page"] = 10;
		$config["uri_segment"] = 3;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['page']=$page;
		$data['view_banner']=$this->admin_model->select_area($config["per_page"],$page);
		$data["links"] = $this->pagination->create_links();
		$data["pagination_helper"]   = $this->pagination;
		$this->load->view('admin/select_area',$data);
	}
	
	
	function delete_area($id)
	{
		
		     /*$sql=$this->db->get_where('tbl_scrolling',array('cat_id'=>$id));
			 $rec=$sql->result_array();
			 foreach($rec as $row)
			 {
				 if($row['image']!='')
				 {
					 $path1="public/scrolling/".$row['image'];
					 @unlink($path1);
				 }
			 }*/
		 $this->db->delete('tbl_area',array('sno'=>$id));
		 //$this->db->delete('tbl_video',array('cat_id'=>$id));
		// $this->db->delete('tbl_scrolling',array('cat_id'=>$id));
		 $this->session->set_flashdata('msg','Record deleted successfully!');
		 redirect('admin/select_area','refresh');
	}
	
	
	function edit_area_view($id)
	{
		$data['view_category']=$this->admin_model->area_area_view($id);
		$this->load->view('admin/edit_area',$data);
	}
	
	function edit_area()
	{
		 if($this->session->userdata('logged_in'))
	       {
		   $result=$this->admin_model->edit_area();
		   $this->session->set_flashdata('msg','Updatted values Successfully');
		   redirect('admin/select_area','refresh');
	       }
	       else
	       {
		   $this->session->set_flashdata('msg','please Login!');
		   redirect('admin/add','refresh');
	       }
	}
	
	
	function view_area_popup($id)
	{
		$data['view_banner_popup']=$this->admin_model->view_area_popup($id);
		$this->load->view('admin/view_area_popup',$data);
	}
	
	
			  //------------------ AREA END HERE----------------//
			  
			  
			  //------------------ AREA ADDRESS START  HERE----------------//

	
	function add_address_view()
	{
		if($this->session->userdata('logged_in'))
		{
			$data['view_data']=$this->admin_model->get_area();
			$data['view_services']=$this->admin_model->view_services();
			$this->load->view('admin/add_address',$data);
		}
		else
		{
			redirect('admin/login','refresh');
		}
	}
	
	function add_address()
	{
		$this->form_validation->set_rules('name', 'Name','required|trim');
		//$this->form_validation->set_rules('area', 'Sub Category','required|trim');
		
		  if($this->form_validation->run()==false)
	      {
			  $data['view_services']=$this->admin_model->view_services();
			  $data['view_data']=$this->admin_model->get_area();
			  $this->load->view('admin/add_address',$data);
		  }
		  else
		  {
		$result=$this->admin_model->add_address();
		if($result==true)
		{
			//echo "insert";
			$this->session->set_flashdata('msg','Inserted Values Successfully');
			redirect('admin/select_address','refresh');
		}
		else
		{
			echo "not";
		}
	}
	}
	
	
	function select_address()
	{
		$this->load->library("pagination");
		$config = array();
		$config["base_url"] = base_url() . "admin/select_address";
		$config["total_rows"] = $this->admin_model->address_count();
		$config["per_page"] = 10;
		$config["uri_segment"] = 3;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['page']=$page;
		$data['view_banner']=$this->admin_model->select_address($config["per_page"],$page);
		$data["links"] = $this->pagination->create_links();
		$data["pagination_helper"]   = $this->pagination;
		$this->load->view('admin/select_address',$data);
	}
	
	
	function delete_address($id)
	{
		
		/*$sql=$this->db->get_where('tbl_facts',array('sub_id'=>$id));
			 $rec=$sql->result_array();
			 foreach($rec as $row)
			 {
				 if($row['image']!='')
				 {
					 $path1="public/facts/".$row['image'];
					 @unlink($path1);
				 }
			 }*/
				 
				  /*if($row['pdf']!='')
				 {
					 $path2="public/facts/".$row['pdf'];
					 @unlink($path2);
				 }*/
				 
				 $sql=$this->db->get_where('tbl_address',array('sno'=>$id));
			 $rec=$sql->result_array();
			 foreach($rec as $row)
			 {
				 if($row['image']!='')
				 {
					 $path1="public/address/".$row['image'];
					 @unlink($path1);
				 }
			 }
			 
		 $this->db->delete('tbl_address',array('sno'=>$id));
		// $this->db->delete('tbl_facts',array('sub_id'=>$id));
		 $this->session->set_flashdata('msg','Record deletted successfully!');
		 redirect('admin/select_address','refresh');
	}
	
	
	function edit_address_view($id)
	{
		$data['view_services']=$this->admin_model->view_services();
		$data['view_data']=$this->admin_model->get_area();
		$data['view_category']=$this->admin_model->edit_address_view($id);
		$this->load->view('admin/edit_address',$data);
	}
	
	function edit_address()
	{
		 if($this->session->userdata('logged_in'))
	       {
		   $result=$this->admin_model->edit_address();
		   $this->session->set_flashdata('msg','Updatted values Successfully');
		   redirect('admin/select_address','refresh');
	       }
	       else
	       {
		   $this->session->set_flashdata('msg','please Login!');
		   redirect('admin/add','refresh');
	       }
	}
	
	function getaddress()
	{
	$data['view_address']=$this->admin_model->view_address();
	$this->load->view('admin/view_address',$data);
	}
	
	
			  //------------------ AREA ADDRESS END HERE----------------//
			  
			  
			  
			   //------------------ AREA ADDRESS START  HERE----------------//

	
	function add_location_view()
	{
		if($this->session->userdata('logged_in'))
		{
			$data['view_data']=$this->admin_model->get_area();
			$data['view_address']=$this->admin_model->get_address();
			$this->load->view('admin/add_locations',$data);
		}
		else
		{
			redirect('admin/login','refresh');
		}
	}
	
	function add_locations()
	{
		$this->form_validation->set_rules('category', 'Bin Location','required|trim');
		$this->form_validation->set_rules('area', 'Area','required|trim');
		$this->form_validation->set_rules('address', 'Address','required|trim');
		
		  if($this->form_validation->run()==false)
	      {
			  $data['view_data']=$this->admin_model->get_area();
			  $data['view_address']=$this->admin_model->get_address();
			  $this->load->view('admin/add_locations',$data);
		  }
		  else
		  {
		$result=$this->admin_model->add_locations();
		if($result==true)
		{
			//echo "insert";
			$this->session->set_flashdata('msg','Inserted Values Successfully');
			redirect('admin/select_bin_locations','refresh');
		}
		else
		{
			echo "not";
		}
	}
	}
	
	
	function select_bin_locations()
	{
		$this->load->library("pagination");
		$config = array();
		$config["base_url"] = base_url() . "admin/select_bin_locations";
		$config["total_rows"] = $this->admin_model->location_count();
		$config["per_page"] = 10;
		$config["uri_segment"] = 3;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['page']=$page;
		$data['view_banner']=$this->admin_model->select_bin_locations($config["per_page"],$page);
		$data["links"] = $this->pagination->create_links();
		$data["pagination_helper"]   = $this->pagination;
		$this->load->view('admin/select_locations',$data);
	}
	
	
	function delete_locations($id)
	{
		 $this->db->delete('tbl_bin_locations',array('sno'=>$id));
		 $this->session->set_flashdata('msg','Record deletted successfully!');
		 redirect('admin/select_bin_locations','refresh');
	}
	
	
	function edit_location_view($id)
	{
		$data['view_data']=$this->admin_model->get_area();
		$data['view_address']=$this->admin_model->get_address();
		$data['view_category']=$this->admin_model->edit_location_view($id);
		$this->load->view('admin/edit_locations',$data);
	}
	
	function edit_location()
	{
		 if($this->session->userdata('logged_in'))
	       {
		   $result=$this->admin_model->edit_location();
		   $this->session->set_flashdata('msg','Updatted values Successfully');
		   redirect('admin/select_bin_locations','refresh');
	       }
	       else
	       {
		   $this->session->set_flashdata('msg','please Login!');
		   redirect('admin/login','refresh');
	       }
	}
	
	
			  //------------------ AREA ADDRESS END HERE----------------//
			  
			  
			  
			  //------------------PROJECTS APARTMENTS START HERE----------------------------------------------//
			
	
	
	function add_apartments_view()
	{
		if($this->session->userdata('logged_in'))
		{
			$data['view_type']=$this->admin_model->view_project_type();
			$data['view_location']=$this->admin_model->view_project_location();
			$this->load->view('admin/add_apartments',$data);
		}
		else
		{
			redirect('admin/login','refresh');
		}
	    }
		function add_apartments()
		{
		
		 $config['upload_path']='public/apartments/';
		 $config['max_size']='9000';
		 $config['allowed_types']='jpg|png|jpeg|gif';
		 $config['encrypt_name']=true;
		 $this->load->library('upload',$config);
		 $this->load->library('image_lib');
	     $this->upload->do_upload('banner');
		 $upload_data = $this->upload->data();
		 
		
		 $img=$upload_data['file_name'];
		
		 $result=$this->admin_model->add_apartments($img);
		 if($result==true)
		 {
			//echo "insert";
			$this->session->set_flashdata('msg','Inserted Values Successfully');
			redirect('admin/select_apartments','refresh');
		 }
		 
		 else
		 {
			echo "not";
		 }

		 }
		 
		 
		 function select_apartments()
		 {
	        $this->load->library("pagination");
			$config = array();
			$config["base_url"] = base_url() . "admin/select_apartments";
			$config["total_rows"] = $this->admin_model->apartments_count();
			$config["per_page"] = 10;
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);
			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$data['page']=$page;
			$data['view_banner']=$this->admin_model->select_apartments($config["per_page"],$page);
			$data["links"] = $this->pagination->create_links();
			$data["pagination_helper"]   = $this->pagination;
			$this->load->view('admin/select_apartments',$data);
		}
		
		function delete_apartments($id)
		{
			  if($this->session->userdata('logged_in'))
		 {
			 $sql=$this->db->get_where('tbl_apartments',array('sno'=>$id));
			 $row=$sql->row_array();
				 if($row['image']!='')
				 {
					 $path1="public/apartments/".$row['image'];
					 //$path2="public/banner/thumb/".$row['image'];
					 @unlink($path1);
					 //@unlink($path2);
				 }
				 
				 if($row['pdf']!='')
				 {
					 $path2="public/apartments/".$row['pdf'];
					 //$path2="public/banner/thumb/".$row['image'];
					 @unlink($path2);
					 //@unlink($path2);
				 }
			 $this->db->delete('tbl_apartments',array('sno'=>$id));
			 $this->session->set_flashdata('msg','Record deletted successfully! ');
			 redirect('admin/select_apartments/','refresh');
		  }
		  else
		  {
			 redirect('admin/login', 'refresh');
		  }
		}
		
		function edit_apartments_view($id)
		{
			$data['view_type']=$this->admin_model->view_project_type();
			$data['view_location']=$this->admin_model->view_project_location();
			$data['edit_banner']=$this->admin_model->edit_apartments_view($id);
	        $this->load->view('admin/edit_apartments',$data);
		}
		
		function edit_apartments()
		{
		   if($this->session->userdata('logged_in'))
	       {
		   $result=$this->admin_model->edit_apartments();
		   $this->session->set_flashdata('msg','Updatted values Successfully');
		   redirect('admin/select_apartments','refresh');
	       }
	       else
	       {
		   $this->session->set_flashdata('msg','please Login!');
		   redirect('admin/login','refresh');
	       }
		}
		
		
		function view_apartments_popup($id)
		{
			$data['view_type']=$this->admin_model->view_project_type();
			$data['view_location']=$this->admin_model->view_project_location();
			$data['view_banner_popup']=$this->admin_model->view_apartments_popup($id);
	        $this->load->view('admin/view_apartments_popup',$data);
		}
		
		  
		  
	 //------------------PROJECTS APARTMENTS END HERE----------------------------------------------//
	 
	 
	 //------------------CHANNEL PARTNER ENQUIRY START HERE----------------------------------------------//
	 
	 function manage_channel_enquiry()
	 {
		$this->load->library("pagination");
		$config = array();
		$config["base_url"] = base_url() . "admin/manage_channel_enquiry";
		$config["total_rows"] = $this->admin_model->chennel_count();
		$config["per_page"] = 10;
		$config["uri_segment"] = 3;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['page']=$page;
		$data['view_banner']=$this->admin_model->manage_channel_enquiry($config["per_page"],$page);
		$data["links"] = $this->pagination->create_links();
		$data["pagination_helper"]   = $this->pagination;
		$this->load->view('admin/manage_channel_enquiry',$data);
	}
	 
	 
	 function delete_chennel_enquiry($id)
	 {
		  if($this->session->userdata('logged_in'))
		 {
			
			 $this->db->delete('tbl_chammel_partner',array('sno'=>$id));
			 $this->session->set_flashdata('msg','Record deletted successfully! ');
			 redirect('admin/manage_channel_enquiry/','refresh');
		  }
		  else
		  {
			 redirect('admin/login', 'refresh');
		  }
	 }
	 
	 //------------------CHANNEL PARTNER ENQUIRY END HERE----------------------------------------------//
	 
	 
	 //------------------AGENCY REGISTRATION START HERE----------------------------------------------//
	 
	 function manage_agency_registration()
	 {
		$this->load->library("pagination");
		$config = array();
		$config["base_url"] = base_url() . "admin/manage_agency_registration";
		$config["total_rows"] = $this->admin_model->agency_count();
		$config["per_page"] = 10;
		$config["uri_segment"] = 3;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['page']=$page;
		$data['view_banner']=$this->admin_model->manage_agency_registration($config["per_page"],$page);
		$data["links"] = $this->pagination->create_links();
		$data["pagination_helper"]   = $this->pagination;
		$this->load->view('admin/manage_agency_registration',$data);
	}
	 
	 
	 function delete_agency_registration($id)
	 {
		  if($this->session->userdata('logged_in'))
		 {
			
			 $this->db->delete('tbl_vender_registration',array('sno'=>$id));
			 $this->session->set_flashdata('msg','Record deletted successfully! ');
			 redirect('admin/manage_agency_registration/','refresh');
		  }
		  else
		  {
			 redirect('admin/login', 'refresh');
		  }
	 }
	 
	 //------------------AGENCY REGISTRATION END HERE----------------------------------------------//
	 
	 
	 //------------------PROPERTY DEVELOPMENT START HERE----------------------------------------------//
	 
	 function manage_property_development()
	 {
		$this->load->library("pagination");
		$config = array();
		$config["base_url"] = base_url() . "admin/manage_property_development";
		$config["total_rows"] = $this->admin_model->property_count();
		$config["per_page"] = 10;
		$config["uri_segment"] = 3;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['page']=$page;
		$data['view_banner']=$this->admin_model->manage_property_development($config["per_page"],$page);
		$data["links"] = $this->pagination->create_links();
		$data["pagination_helper"]   = $this->pagination;
		$this->load->view('admin/manage_property_development',$data);
	}
	 
	 
	 function delete_property_development($id)
	 {
		  if($this->session->userdata('logged_in'))
		 {
			
			 $this->db->delete('tbl_agency',array('sno'=>$id));
			 $this->session->set_flashdata('msg','Record deletted successfully! ');
			 redirect('admin/manage_property_development/','refresh');
		  }
		  else
		  {
			 redirect('admin/login', 'refresh');
		  }
	 }
	 
	 //------------------PROPERTY DEVELOPMENT END HERE----------------------------------------------//
	 
	 
	 //------------------BANNERS START HERE----------------------------------------------//
	
	
	function add_scrolling_view()
	{
		if($this->session->userdata('logged_in'))
		{
			$data['view_category']=$this->admin_model->view_scrolling_category();
			$this->load->view('admin/add_home_slider',$data);
		}
		else
		{
			redirect('admin/login','refresh');
		}
	    }
		function add_scrolling()
		{
		 $config['upload_path']='public/scrolling/';
		 $config['max_size']='9000';
		 $config['allowed_types']='jpg|png|jpeg|gif|pdf|doc|docx';
		 $config['encrypt_name']=true;
		 $this->load->library('upload',$config);
		 $this->load->library('image_lib');
	     $this->upload->do_upload('banner');
		 $upload_data = $this->upload->data();
		 
		
		 $img=$upload_data['file_name'];
		
		 $result=$this->admin_model->add_scrolling($img);
		 if($result==true)
		 {
			//echo "insert";
			$this->session->set_flashdata('msg','Inserted Values Successfully');
			redirect('admin/select_scrolling','refresh');
		 }
		 
		 else
		 {
			echo "not";
		 }

		 }
		 
		 
		 function select_scrolling()
		 {
	     if($this->session->userdata('logged_in'))
		 {
		$this->load->library("pagination");
		$config = array();
		$config["base_url"] = base_url() . "admin/select_scrolling";
		$config["total_rows"] = $this->admin_model->scrolling_count();
		$config["per_page"] = 10;
		$config["uri_segment"] = 3;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['page']=$page;
		$data['view_banner']=$this->admin_model->select_scrolling($config["per_page"],$page);
		$data["links"] = $this->pagination->create_links();
		$data["pagination_helper"]   = $this->pagination;
		$this->load->view('admin/select_home_slider',$data);
	     }
	     else
	    {
		redirect('admin/login','refresh');
	    } 
		}
		
		function delete_scrolling($id)
		{
			  if($this->session->userdata('logged_in'))
		 {
			 $sql=$this->db->get_where('tbl_scrolling',array('sno'=>$id));
			 $row=$sql->row_array();
				 if($row['image']!='')
				 {
					 $path1="public/scrolling/".$row['image'];
					 //$path2="public/banner/thumb/".$row['image'];
					 @unlink($path1);
					 //@unlink($path2);
				 }
				 
				  if($row['pdf']!='')
				 {
					 $path2="public/scrolling/".$row['pdf'];
					 //$path2="public/banner/thumb/".$row['image'];
					 @unlink($path2);
					 //@unlink($path2);
				 }
			 $this->db->delete('tbl_scrolling',array('sno'=>$id));
			 $this->session->set_flashdata('msg','Record deletted successfully! ');
			 redirect('admin/select_scrolling/','refresh');
		  }
		  else
		  {
			 redirect('admin/login', 'refresh');
		  }
		}
		
		function edit_scrolling_view($id)
		{
			$data['view_category']=$this->admin_model->view_scrolling_category();
			$data['edit_banner']=$this->admin_model->edit_scrolling_view($id);
	        $this->load->view('admin/edit_home_slider',$data);
		}
		
		function edit_scrolling()
		{
		   if($this->session->userdata('logged_in'))
	       {
		   $result=$this->admin_model->edit_scrolling();
		   $this->session->set_flashdata('msg','Updatted values Successfully');
		   redirect('admin/select_scrolling','refresh');
	       }
	       else
	       {
		   $this->session->set_flashdata('msg','please Login!');
		   redirect('admin/login','refresh');
	       }
		}
		
		
		function view_scrolling_popup($id)
		{
			$data['view_banner_popup']=$this->admin_model->view_scrolling_popup($id);
	        $this->load->view('admin/view_scrolling_popup',$data);
		}
		
		
			//------------------BANNERS END HERE----------------------------------------------//
			
			
			
//------------------------------PRODUCTS START HERE----------------------------------------------//
	
	
	function add_products_view()
	{
		if($this->session->userdata('logged_in'))
		{
			$data['view_category']=$this->admin_model->view_product_category();
			$this->load->view('admin/add_products',$data);
		}
		else
		{
			redirect('admin/login','refresh');
		}
	}
	
	function add_products()
	{
		 $config['upload_path']='public/products/';
		 $config['max_size']='9000';
		 $config['allowed_types']='jpg|png|jpeg|gif';
		 $config['encrypt_name']=true;
		 $this->load->library('upload',$config);
		 $this->load->library('image_lib');
	     $this->upload->do_upload('banner');
		 $upload_data = $this->upload->data();
		 
		 $resize_conf = array(
		'source_image' => $upload_data['full_path'],
		'new_image' => $upload_data['file_path'].'thumb/'.$upload_data['file_name'],
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
		$success[] = $upload_data;
		}
		 
		
		 $img=$upload_data['file_name'];
		
		 $result=$this->admin_model->add_products($img);
		 if($result==true)
		 {
			$this->session->set_flashdata('msg','Inserted Values Successfully');
			redirect('admin/select_products','refresh');
		 }
		 
		 else
		 {
			echo "not";
		 }
	}
	
	
	    function select_products()
	    {
	    if($this->session->userdata('logged_in'))
	    {
		$this->load->library("pagination");
		$config = array();
		$config["base_url"] = base_url() . "admin/select_products";
		$config["total_rows"] = $this->admin_model->products_count();
		$config["per_page"] = 10;
		$config["uri_segment"] = 3;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['page']=$page;
		$data['view_banner']=$this->admin_model->select_products($config["per_page"],$page);
		$data["links"] = $this->pagination->create_links();
		$data["pagination_helper"]   = $this->pagination;
		$this->load->view('admin/select_products',$data);
	     }
	     else
	    {
		redirect('admin/login','refresh');
	    } 
		}
	
	function delete_products($id)
	{
		 if($this->session->userdata('logged_in'))
		 {
			 $sql=$this->db->get_where('tbl_products',array('sno'=>$id));
			 $row=$sql->row_array();
				 if($row['image']!='')
				 {
					 $path1="public/products/".$row['image'];
					 $path2="public/products/thumb/".$row['image'];
					 @unlink($path1);
					 @unlink($path2);
				 }
				 
				 $sql_rr=$this->db->get_where('tbl_products_img',array('product_id'=>$id));
			     $result=$sql_rr->result_array();
				 foreach($result as $rec)
				 {
					 if($rec['image']!='')
				 {
					 $path3="public/pdoducts_img/".$rec['image'];
					// $path2="public/products/thumb/".$row['image'];
					 @unlink($path3);
					 //@unlink($path2);
				 }
				 }
			 $this->db->delete('tbl_products',array('sno'=>$id));
			 $this->db->delete('tbl_products_img',array('product_id'=>$id));
			 //exit;
			 $this->session->set_flashdata('msg','Record deletted successfully!');
			 redirect('admin/select_products/','refresh');
		  }
		  else
		  {
			 redirect('admin/login', 'refresh');
		  }
	}
	
	function edit_products_view($id)
	{
		$data['view_category']=$this->admin_model->view_product_category();
		$data['edit_banner']=$this->admin_model->edit_products_view($id);
	    $this->load->view('admin/edit_products',$data);
	}
	
	function edit_products()
	{
		if($this->session->userdata('logged_in'))
	       {
		   $result=$this->admin_model->edit_products();
		   $this->session->set_flashdata('msg','Updatted values Successfully');
		   redirect('admin/select_products','refresh');
	       }
	       else
	       {
		   $this->session->set_flashdata('msg','please Login!');
		   redirect('admin/login','refresh');
	       }
	}
	
	function view_products_popup($id)
	{
		$data['view_banner_popup']=$this->admin_model->view_products_popup($id);
	    $this->load->view('admin/view_products_popup',$data);
	}
	
	
	
	function add_images_view($id)
	{
		$data['id']=$id;
		$this->load->view('admin/add_images_view',$data);
	}
	
	function add_images()
		{
			if($this->session->userdata('logged_in'))
	       {
		   $id=$this->input->post('id');
		   $result=$this->admin_model->add_images();
		   $this->session->set_flashdata('msg','Inserted Values Successfully');
		   redirect('admin/select_product_images/'.$id,'refresh');
	       }
	       else
	       {
		   $this->session->set_flashdata('msg','please Login!');
		   redirect('admin/login','refresh');
	       }
		}
		
		function select_product_images($id)
		{
			if($this->session->userdata('logged_in'))
	       {
		    $data['sno']=$id;
			$data['view_data']=$this->admin_model->select_product_images($id);
	        $this->load->view('admin/select_product_images',$data);
	       }
	       else
	       {
		   $this->session->set_flashdata('msg','please Login!');
		   redirect('admin/login','refresh');
	       }
		}
		
		function delete_products_images($id,$sno)
		{
			if($this->session->userdata('logged_in'))
		    {
				$sql=$this->db->get_where('tbl_products_img',array('sno'=>$id));
			    $row=$sql->row_array();
				 if($row['image']!='')
				 {
					 $path1="public/pdoducts_img/".$row['image'];
					 //$path2="public/banner/thumb/".$row['image'];
					 @unlink($path1);
					 //@unlink($path2);
				 }
			 $this->db->delete('tbl_products_img',array('sno'=>$id));
			 $this->session->set_flashdata('msg','Record deletted successfully! ');
			 redirect('admin/select_product_images/'.$sno,'refresh');
		  }
		  else
		  {
			 redirect('admin/login','refresh');
		  }
		}
		
		function edit_products_images_view($id,$sno)
		{
			$data['sno']=$sno;
			$data['edit_banner']=$this->admin_model->edit_products_images_view($id);
	        $this->load->view('admin/edit_products_img',$data);
		}
		
		function edit_products_images()
		{
			 if($this->session->userdata('logged_in'))
	       {
		   $id=$this->input->post('id_pro');
		   $result=$this->admin_model->edit_products_images();
		   $this->session->set_flashdata('msg','Updated Values Successfully');
		   redirect('admin/select_product_images/'.$id,'refresh');
	       }
	       else
	       {
		   $this->session->set_flashdata('msg','please Login!');
		   redirect('admin/login','refresh');
	       }
		}
			
//------------------------------PRODUCTS  END HERE----------------------------------------------//


 //------------------ USERS REGISTRATION START  HERE----------------//

	
	function add_users_view()
	{
		if($this->session->userdata('logged_in'))
		{
			$this->load->view('admin/add_users');
		}
		else
		{
			redirect('admin/login','refresh');
		}
	}
	
	function add_users()
	{
		$this->form_validation->set_rules('name', 'Name','required|trim');
		$this->form_validation->set_rules('username', 'Username','required|trim|is_unique[tbl_users_registration.username]');
		$this->form_validation->set_rules('password', 'Password','required|trim');
		$this->form_validation->set_rules('email', 'Email','required|valid_email');
		$this->form_validation->set_rules('mobile', 'Mobile','required|trim');
		  if($this->form_validation->run()==false)
	      {
			  $this->load->view('admin/add_users');
		  }
		  else
		  {
		$result=$this->admin_model->add_users();
		if($result==true)
		{
			//echo "insert";
			$this->session->set_flashdata('msg','Inserted Values Successfully');
			redirect('admin/manage_user_registration','refresh');
		}
		else
		{
			echo "not";
		}
	}
	}
	
	
	function manage_user_registration()
	{
		$this->load->library("pagination");
		$config = array();
		$config["base_url"] = base_url() . "admin/manage_user_registration";
		$config["total_rows"] = $this->admin_model->registartion_count();
		$config["per_page"] = 10;
		$config["uri_segment"] = 3;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['page']=$page;
		$data['view_banner']=$this->admin_model->manage_user_registration($config["per_page"],$page);
		$data["links"] = $this->pagination->create_links();
		$data["pagination_helper"]   = $this->pagination;
		$this->load->view('admin/manage_user_registration',$data);
	}
	
	
	function delete_user_registration($id)
	{
		 $this->db->delete('tbl_users_registration',array('sno'=>$id));
		 //$this->db->delete('tbl_address',array('area'=>$id));
		 $this->session->set_flashdata('msg','Record deletted successfully!');
		 redirect('admin/manage_user_registration','refresh');
	}
	
	
	function edit_users_registration_view($id)
	{
		$data['view_category']=$this->admin_model->edit_users_registration_view($id);
		$this->load->view('admin/edit_users',$data);
	}
	
	function edit_user_ragistration()
	{
		 if($this->session->userdata('logged_in'))
	       {
		   $result=$this->admin_model->edit_user_ragistration();
		   $this->session->set_flashdata('msg','Updatted values Successfully');
		   redirect('admin/manage_user_registration','refresh');
	       }
	       else
	       {
		   $this->session->set_flashdata('msg','please Login!');
		   redirect('admin/login','refresh');
	       }
	}
	
	
			  //------------------ USERS REGISTRATION END HERE----------------//
			  
			  
			   //------------------CATEGORY START HERE----------------//

	
	function add_category_view()
	{
		if($this->session->userdata('logged_in'))
		{
			$this->load->view('admin/add_category');
		}
		else
		{
			redirect('admin/login','refresh');
		}
	}
	
	function add_category()
	{
		$this->form_validation->set_rules('name', 'Category','required|trim');
		//$this->form_validation->set_rules('type', 'Language','required|trim');
		  if($this->form_validation->run()==false)
	      {
			  $this->load->view('admin/add_category');
		  }
		  else
		  {
		$result=$this->admin_model->add_category();
		if($result==true)
		{
			//echo "insert";
			$this->session->set_flashdata('msg','Inserted Values Successfully');
			redirect('admin/select_category','refresh');
		}
		else
		{
			echo "not";
		}
	}
	}
	
	
	function select_category()
	{
		if($this->session->userdata('logged_in'))
		   {
			   
		$this->load->library("pagination");
		$config = array();
		$config["base_url"] = base_url() . "admin/select_category";
		$config["total_rows"] = $this->admin_model->category_count();
		$config["per_page"] = 15;
		$config["uri_segment"] = 3;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['page']=$page;
		$data['view_category']=$this->admin_model->select_category($config["per_page"],$page);
		$data["links"] = $this->pagination->create_links();
		$data["pagination_helper"]   = $this->pagination;
		//$data['view_category']=$this->admin_model->select_category();
		$this->load->view('admin/select_category',$data);
	}
	else
	{
		redirect('admin/login','refresh');
	}
	}
	
	
	
	function delete_category($id)
	{
		if($this->session->userdata('logged_in'))
		 {
			 $sql=$this->db->get_where('tbl_gallery',array('cat_id'=>$id));
			 $query=$sql->result();
			 foreach($query as $rec)
			 {
				if($rec->images!='') {
				$path="public/gallery/".$rec->images;
				$path1="public/gallery/thumb/".$rec->images;
				unlink($path);
				unlink($path1);
			 }
			 }
			 $this->db->delete('tbl_category',array('sno'=>$id));
			 //$this->db->delete('tbl_news',array('cat_id'=>$id));
			 $this->db->delete('tbl_gallery',array('cat_id'=>$id));
			 $this->session->set_flashdata('msg','Records deletted successfully!');
			// exit;
			 redirect('admin/select_category/','refresh');
		  }
		  else
		  {
			 redirect('admin/login','refresh');
		  }
	}
	
	
	function edit_category_view($id)
	{
		$data['edit_banner']=$this->admin_model->edit_category_view($id);
	    $this->load->view('admin/edit_category',$data);
	}
	
	function edit_category()
	{
		 if($this->session->userdata('logged_in'))
	       {
		   $result=$this->admin_model->edit_category();
		   $this->session->set_flashdata('msg','Updated Values Successfully');
		   redirect('admin/select_category','refresh');
	       }
	       else
	       {
		   $this->session->set_flashdata('msg','please Login!');
		   redirect('admin/login','refresh');
	       }
	}
	
	
	
	
	
	
			  //------------------ CATEGORY END HERE----------------//
			  
			  
			  
			  //----------------DATABASE BACKUP START HERE--------------------------------------//
	
	
	function backup_db()
   {
             /* Store All Table name in an Array */

$this->load->database(); 
     $return="";
     $allTables = array();
             $result = mysql_query('SHOW TABLES');
            while($row = mysql_fetch_row($result))
            {
                                                     $allTables[] = $row[0];
                            }

            foreach($allTables as $table)
            {
                $result = mysql_query('SELECT * FROM '.$table);

                $num_fields = mysql_num_fields($result);

                $return.= 'DROP TABLE IF EXISTS '.$table.';';

                $row2 = mysql_fetch_row(mysql_query('SHOW CREATE TABLE '.$table));

                $return.= "\n\n".$row2[1].";\n\n";

                for ($i = 0; $i < $num_fields; $i++) 

                    {
                            while($row = mysql_fetch_row($result))
                            {
                                $return.= 'INSERT INTO '.$table.' VALUES(';
                                    for($j=0; $j<$num_fields; $j++)
                                        {
                                            $row[$j] = addslashes($row[$j]);
                                                $row[$j] = str_replace("\n","\\n",$row[$j]);

                                                if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } 
                                                else { $return.= '""'; }

                                                if ($j<($num_fields-1)) { $return.= ','; }
                                        }
                                $return.= ");\n";
                            }
                    }
$return.="\n\n";
}// Create Backup Folder

         
			 // $file_name = 'yuvadatabase.sql';
			  $date = date('d-m-Y-H-i-s', time()); 
            $filename = "Saidharmajyothi-".$date.".sql"; 
			$this->load->helper('download');
    force_download($filename, $return);

       echo "Backup of Database Taken";

 }
	
	
	//----------------DATABASE BACKUP END HERE--------------------------------------//
			  
			  
			  
}
?>