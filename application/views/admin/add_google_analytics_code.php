<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>Admin Panel</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link href="<?php echo base_url(); ?>public/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>public/assets/css/metro.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>public/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>public/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>public/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>public/assets/bootstrap-fileupload/bootstrap-fileupload.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>public/assets/css/style.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>public/assets/css/style_responsive.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>public/assets/css/style_default.css" rel="stylesheet" id="style_color" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/chosen-bootstrap/chosen/chosen.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/uniform/css/uniform.default.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/datetimepicker-master/jquery.datetimepicker.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/data-tables/DT_bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/gritter/css/jquery.gritter.css" />
    
   
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>public/image/favicon.ico">
    
     

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
	<!-- BEGIN HEADER -->
	<div class="header navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- BEGIN LOGO -->
				
				<!-- END LOGO -->
				<!-- BEGIN RESPONSIVE MENU TOGGLER -->
				
				<!-- END RESPONSIVE MENU TOGGLER -->				
				<!-- BEGIN TOP NAVIGATION MENU -->					
				<ul class="nav pull-right">
					<!-- BEGIN NOTIFICATION DROPDOWN -->	
					
					<!-- END NOTIFICATION DROPDOWN -->
					<!-- BEGIN INBOX DROPDOWN -->
					
					<!-- END INBOX DROPDOWN -->
					<!-- BEGIN TODO DROPDOWN -->
					
					<!-- END TODO DROPDOWN -->
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<li class="dropdown user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						
						<span class="username">Wel Come To Admin</span>
						<i class="icon-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							<li class="divider"></li>
							<li><a href="<?php  echo base_url(); ?>admin/logout"><i class="icon-key"></i> Log Out</a></li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
				<!-- END TOP NAVIGATION MENU -->	
			</div>
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>
	<!-- END HEADER -->
	<!-- BEGIN CONTAINER -->	
	<div class="page-container row-fluid">
		<!-- BEGIN SIDEBAR -->
		<div class="page-sidebar nav-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->        	
			<ul>
				<li>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone"></div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				<li>
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<!--<form class="sidebar-search">
						<div class="input-box">
							<a href="javascript:;" class="remove"></a>
							<input type="text" placeholder="Search..." />				
							<input type="button" class="submit" value=" " />
						</div>
					</form>-->
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<li class="start ">
					<a href="<?php echo base_url(); ?>admin/dashboard">
					<i class="icon-home"></i> 
					<span class="title">Dashboard</span>
					</a>
				</li>
                
                
                <!--<li class="has-sub ">
               <a href="javascript:;">
               <i class="icon-th-list"></i> 
               <span class="title">Manage CMS Content</span>
               <span class="arrow "></span>
               </a>
                <ul class="sub">
                 <li class="active"><a href="<?php echo base_url(); ?>admin/select_content">Content English</a></li>
                 <li><a href="<?php echo base_url(); ?>admin/select_content">Content Arabic</a></li>

                  </ul>
                  </li>-->
                  
                  
                <li class="start">
					<a href="<?php echo base_url(); ?>admin/select_content">
					<i class="icon-th-list"></i> 
					<span class="title">CMS Content</span>
					</a>
				</li>
                
                 <!-- <li class="start">
					<a href="<?php echo base_url(); ?>admin/select_services_india">
					<i class="icon-table"></i> 
					<span class="title">Services In India</span>
					</a>
				</li>-->
                
                
                <li class="has-sub ">
               <a href="javascript:;">
               <i class="icon-briefcase"></i> 
               <span class="title">Manage News</span>
               <span class="arrow "></span>
               </a>
                    <ul class="sub">
                 <li class="active"><a href="<?php echo base_url(); ?>admin/select_category">News Category</a></li>
                 <li><a href="<?php echo base_url(); ?>admin/select_banner">News</a></li>
                

                  </ul>
				</li>
                
                
                  <!--<li class="start">
					<a href="<?php echo base_url(); ?>admin/select_banner">
					<i class="icon-th-list"></i> 
					<span class="title">News</span>
					</a>
				</li>-->
                
               
                
                
                  <!--<li class="has-sub ">
               <a href="javascript:;">
               <i class="icon-briefcase"></i> 
               <span class="title">Services</span>
               <span class="arrow "></span>
               </a>
                <ul class="sub">
                 <li class="active"><a href="<?php echo base_url(); ?>admin/select_category">Services Category</a></li>
                 <li><a href="<?php echo base_url(); ?>admin/select_services">Servises</a></li>

                  </ul>
                  </li>-->
                  
                   <li class="start">
					<a href="<?php echo base_url(); ?>admin/select_newsletter">
					<i class="icon-th-list"></i> 
					<span class="title">Corporate NewsLetter</span>
					</a>
				</li>
                
                <li class="start">
					<a href="<?php echo base_url(); ?>admin/select_feavideo">
					<i class="icon-th-list"></i> 
					<span class="title">Featured Video</span>
					</a>
				</li>
                  
                   <!--<li class="start">
					<a href="<?php echo base_url(); ?>admin/select_gallery">
					<i class="icon-th-list"></i> 
					<span class="title">Gallery</span>
					</a>
				</li>-->
                
                <li class="start">
					<a href="<?php echo base_url(); ?>admin/select_video">
					<i class="icon-th-list"></i> 
					<span class="title">Videos</span>
					</a>
				</li>
                
                 <li class="start">
					<a href="<?php echo base_url(); ?>admin/select_newsletterdetails">
					<i class="icon-th-list"></i> 
					<span class="title">News Letter Email</span>
					</a>
				</li>
				  
                <!-- <li class="has-sub ">
               <a href="javascript:;">
               <i class="icon-briefcase"></i> 
               <span class="title">Clients</span>
               <span class="arrow "></span>
               </a>
                    <ul class="sub">
                 <li class="active"><a href="<?php echo base_url(); ?>admin/select_client_category">Clients Category</a></li>
                 <li><a href="<?php echo base_url(); ?>admin/select_clients">OurClients</a></li>

                  </ul>
				</li>-->
                
                
                 <li class="has-sub ">
               <a href="javascript:;">
               <i class="icon-briefcase"></i> 
               <span class="title">Contact Details</span>
               <span class="arrow "></span>
               </a>
                    <ul class="sub">
                 <li class="active"><a href="<?php echo base_url(); ?>admin/select_corporate">Corporate Office</a></li>
                 <li><a href="<?php echo base_url(); ?>admin/select_support">Support Offices</a></li>
                 <li><a href="<?php echo base_url(); ?>admin/select_group">Group Offices</a></li>

                  </ul>
				</li>
                
                
                
               <!-- <li class="start">
					<a href="<?php echo base_url(); ?>admin/select_news">
					<i class="icon-th-list"></i> 
					<span class="title">Latest News</span>
					</a>
				</li>-->
                
                
                <li class="has-sub ">
               <a href="javascript:;">
               <i class="icon-briefcase"></i> 
               <span class="title">Post Careers(Jobs)</span>
               <span class="arrow "></span>
               </a>
                    <ul class="sub">
                 <li class="active"><a href="<?php echo base_url(); ?>admin/select_client_category">Add Category</a></li>
                 <li><a href="<?php echo base_url(); ?>admin/select_careers_job">Add Careers(Jobs)</a></li>

                  </ul>
				</li>
                
                <!--<li class="start">
					<a href="<?php echo base_url(); ?>admin/select_careers_job">
					<i class="icon-th-list"></i> 
					<span class="title">Add Careers(Jobs)</span>
					</a>
				</li>-->
                
                 <li class="start">
					<a href="<?php echo base_url(); ?>admin/select_sponsorship">
					<i class="icon-th-list"></i> 
					<span class="title">Sponsorship</span>
					</a>
				</li>
                
                <li class="start">
					<a href="<?php echo base_url(); ?>admin/select_careers">
					<i class="icon-th-list"></i> 
					<span class="title">Careers Information</span>
					</a>
				</li>
                
                
                <li class="has-sub ">
               <a href="javascript:;">
               <i class="icon-briefcase"></i> 
               <span class="title">Industry</span>
               <span class="arrow "></span>
               </a>
                <ul class="sub">
                 <li class="active"><a href="<?php echo base_url(); ?>admin/select_industry">Industry</a></li>
                 <li><a href="<?php echo base_url(); ?>admin/select_industry_category">Industry Category</a></li>

                  </ul>
                  </li>
                  
                
                <li class="start">
					<a href="<?php echo base_url(); ?>admin/select_auto_mobiles">
					<i class="icon-th-list"></i> 
					<span class="title">Automobiles</span>
					</a>
				</li>
                
                 <!--<li class="start">
					<a href="<?php echo base_url(); ?>admin/select_industry">
					<i class="icon-briefcase"></i> 
					<span class="title">Industry</span>
					</a>
				</li>-->
                
                <li class="start">
					<a href="<?php echo base_url(); ?>admin/select_real_estate">
					<i class="icon-briefcase"></i> 
					<span class="title">Real Estate</span>
					</a>
				</li>
                
                
                 <li class="start">
					<a href="<?php echo base_url(); ?>admin/select_directers">
					<i class="icon-th-list"></i> 
					<span class="title">Board Directers</span>
					</a>
				</li>
                
                 <li class="start">
					<a href="<?php echo base_url(); ?>admin/select_excutive_team">
					<i class="icon-th-list"></i> 
					<span class="title">Excutive Team</span>
					</a>
				</li>
                
                
                 <li class="start">
					<a href="<?php echo base_url(); ?>admin/select_uploads">
					<i class="icon-calendar"></i> 
					<span class="title">Manage Uploads</span>
					</a>
				</li>
                
                
                 <li class="has-sub ">
               <a href="javascript:;">
               <i class="icon-calendar"></i> 
               <span class="title">Manage Settings</span>
               <span class="arrow "></span>
               </a>
                <ul class="sub">
                 <li class="active"><a href="<?php echo base_url(); ?>admin/select_google">Google Analytic Code</a></li>
                 <li><a href="<?php echo base_url(); ?>admin/settings_view">Settings</a></li>

                  </ul>
                  </li>
                  
                
               <!-- <li class="start">
					<a href="<?php echo base_url(); ?>admin/settings_view">
					<i class="icon-calendar"></i> 
					<span class="title">Settings</span>
					</a>
				</li>-->
                 
                 <li class="start">
					<a href="<?php echo base_url(); ?>admin/Change_password">
					<i class="icon-table"></i> 
					<span class="title">Change Password</span>
					</a>
				</li>
                
                
				<li class="">
					<a href="<?php echo base_url(); ?>admin/logout">
					<i class="icon-user"></i> 
					<span class="title">Logout</span>
					</a>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
		<!-- END SIDEBAR -->
		<!-- BEGIN PAGE -->
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div id="portlet-config" class="modal hide">
				<div class="modal-header">
					<button data-dismiss="modal" class="close" type="button"></button>
					<h3>portlet Settings</h3>
				</div>
				<div class="modal-body">
					<p>Here will be a configuration form</p>
				</div>
			</div>
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN STYLE CUSTOMIZER -->
						<!--<div class="color-panel hidden-phone">
							<div class="color-mode-icons icon-color"></div>
							<div class="color-mode-icons icon-color-close"></div>
							<div class="color-mode">
								<p>THEME COLOR</p>
								<ul class="inline">
									<li class="color-black current color-default" data-style="default"></li>
									<li class="color-blue" data-style="blue"></li>
									<li class="color-brown" data-style="brown"></li>
									<li class="color-purple" data-style="purple"></li>
									<li class="color-white color-light" data-style="light"></li>
								</ul>
								<label class="hidden-phone">
								<input type="checkbox" class="header" checked value="" />
								<span class="color-mode-label">Fixed Header</span>
								</label>							
							</div>
						</div>-->
					<script src="<?php echo base_url(); ?>public/js/jquery.js"></script>

		<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1'});
				$(".group2").colorbox({rel:'group2', transition:"fade"});
				$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
				$(".group4").colorbox({rel:'group4', slideshow:true});
				$(".ajax").colorbox();
				$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
				$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
				$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
				$(".inline").colorbox({inline:true, width:"50%"});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});

				$('.non-retina').colorbox({rel:'group5', transition:'none'})
				$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>	
	<!-- END BEGIN STYLE CUSTOMIZER --> 
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							Add Google Analytics Code
                          
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="">Home</a> 
								<i class="icon-angle-right"></i>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>admin/dashboard">Admin</a>
								<i class="icon-angle-right"></i>
							</li>
							<li><a href=""> Add Google Analytics Code</a></li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
                	<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
                <div class="tab-pane" id="tab_1_4">
									
                                   <div class="row-fluid">
					<div class="span12">
						<!-- BEGIN EXAMPLE TABLE PORTLET-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<h4><i class="icon-edit"></i>Add Google Analytics Code</h4>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<!--<a href="#portlet-config" data-toggle="modal" class="config"></a>-->
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body">
								
								<div class="tab-content">
                              <div class="tab-pane active" id="portlet_tab1">
                                 <!-- BEGIN FORM-->
                                
                             <form action="<?php echo base_url(); ?>admin/add_analytics_code" method="post" class="form-horizontal" enctype="multipart/form-data">
                                   
                                   
                                   <!--<div class="control-group">
                                       <label class="control-label">Select Language </label>
                                       <div class="controls">
                                         <select name="type"  id="category" class="medium m-wrap" value="<?php echo set_value('type'); ?>">
                                       <option selected="selected" value="">[Select]</option>
                                       <?php
									   foreach($view_lng as $rec)
									   {
									   ?>
                                       <option value="<?php echo $rec->type; ?>"><?php echo $rec->type; ?></option>
                                                <?php } ?>
                                               </select>
                                       <div style="color:#F00"><?php echo form_error('type'); ?></div>
                                       </div>
                                    </div>-->
                                    
                                     
                                    <div class="control-group">
                                       <label class="control-label">Analytics Code</label>
                                       <div class="controls">
                           <textarea  name="google"  class="m-wrap medium" rows="5" cols="30"/></textarea>
                               <div style="color:#F00"><?php echo form_error('Category'); ?></div>  
                                       </div>
                                       </div>
                                    </div>
                                    <div class="form-actions">
                                   
                                       <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                      <a href="<?php echo base_url(); ?>admin/select_google"><button type="button" class="btn">Cancel</button></a>
                                    </div>
                                     
                                 </form>
                                 </div></div>
							</div>
						</div>
						<!-- END EXAMPLE TABLE PORTLET-->
					</div>
				     </div>
					</div>
                    </div>
                    </div>
                    </div>
                      <?php
	include('includes/footer.php');
	?>
	