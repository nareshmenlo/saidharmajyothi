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
    
   
	<!--<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>public/favicon.ico">-->
    
    <script type="text/javascript" src="<?php echo base_url(); ?>public/tiny_mce/tiny_mce.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery.min.js"></script>	
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		//theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		//theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,
		relative_urls : false,
remove_script_host : false,
convert_urls : true,

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Style formats
		style_formats : [
			{title : 'Bold text', inline : 'b'},
			{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
			{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
			{title : 'Example 1', inline : 'span', classes : 'example1'},
			{title : 'Example 2', inline : 'span', classes : 'example2'},
			{title : 'Table styles'},
			{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
		],

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>  

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
                
                
              
                  
                  
                <li class="start">
					<a href="<?php echo base_url(); ?>admin/select_content">
					<i class="icon-th-list"></i> 
					<span class="title">CMS Content</span>
					</a>
				</li>
                
                
                 <li class="start">
					<a href="<?php echo base_url(); ?>admin/select_apartments">
					<i class="icon-th-list"></i> 
					<span class="title">Telugu Content Pages</span>
					</a>
				</li>
				  
                  
                 <li class="start">
					<a href="<?php echo base_url(); ?>admin/select_services_india">
					<i class="icon-table"></i> 
					<span class="title">Important Points</span>
					</a>
				</li>
          
                
                 <li class="start">
					<a href="<?php echo base_url(); ?>admin/select_banner">
					<i class="icon-briefcase"></i> 
					<span class="title">Banners</span>
					</a>
				</li>
                
                 
                
                
                <li class="start">
					<a href="<?php echo base_url(); ?>admin/select_news">
					<i class="icon-th-list"></i> 
					<span class="title">Latest News</span>
					</a>
				</li>
                
              <li class="start">
					<a href="<?php echo base_url(); ?>admin/select_facts">
					<i class="icon-briefcase"></i> 
					<span class="title">Lakshadeepaharati Images</span>
					</a>
				</li>
                
                
                
           <!--    <li class="has-sub ">
               <a href="javascript:;">
               <i class="icon-briefcase"></i> 
               <span class="title">Manage Projects</span>
               <span class="arrow "></span>
               </a>
                <ul class="sub">
                 <li class=""><a href="<?php echo base_url(); ?>admin/select_area">Projects Types</a></li>
                 <li><a href="<?php echo base_url(); ?>admin/select_projects">Projects</a></li>

                  </ul>
                  </li>-->
                  
                  
                      <li class="has-sub ">
               <a href="javascript:;">
               <i class="icon-briefcase"></i> 
               <span class="title">Audio Gallery</span>
               <span class="arrow "></span>
               </a>
                <ul class="sub">
                 <li class=""><a href="<?php echo base_url(); ?>admin/select_testimonials">English Audio Gallery</a></li>
                 <li><a href="<?php echo base_url(); ?>admin/select_testimonials_telugu">Telugu Audio Gallery</a></li>

                  </ul>
                  </li>
                
               <!--<li class="start">
					<a href="<?php echo base_url(); ?>admin/select_testimonials">
					<i class="icon-calendar"></i> 
					<span class="title">Audio Gallery</span>
					</a>
				</li>-->
                
                
                
                <li class="start">
					<a href="<?php echo base_url(); ?>admin/select_products">
					<i class="icon-th-list"></i> 
					<span class="title">Our Programes</span>
					</a>
				</li>
                
             <!--   <li class="has-sub ">
               <a href="javascript:;">
               <i class="icon-briefcase"></i> 
               <span class="title">Manage Products</span>
               <span class="arrow "></span>
               </a>
                <ul class="sub">
                 <li class="active"><a href="<?php echo base_url(); ?>admin/select_area">Product Category</a></li>
                 <li><a href="<?php echo base_url(); ?>admin/select_products">Products</a></li>

                  </ul>
                  </li>-->
                  
                  <!-- <li class="start">
					<a href="<?php echo base_url(); ?>admin/select_feavideo">
					<i class="icon-th-list"></i> 
					<span class="title">Home Page Video</span>
					</a>
				</li>-->
                
                
                 
                
                 <li class="start">
					<a href="<?php echo base_url(); ?>admin/select_scrolling">
					<i class="icon-th-list"></i> 
					<span class="title">Articles</span>
					</a>
				</li>
                 
               <li class="start">
					<a href="<?php echo base_url(); ?>admin/select_awards">
					<i class="icon-th-list"></i> 
					<span class="title">Nithya Acharaniya Dharmamulu</span>
					</a>
				</li>
                
              <!--   <li class="has-sub ">
               <a href="javascript:;">
               <i class="icon-briefcase"></i> 
               <span class="title">Manage Services</span>
               <span class="arrow "></span>
               </a>
                <ul class="sub">
                 <li class=""><a href="<?php echo base_url(); ?>admin/select_awards">Services</a></li>
                 <li><a href="<?php echo base_url(); ?>admin/select_address">Under Services</a></li>

                  </ul>
                  </li>-->
                 
                
                  <li class="start">
					<a href="<?php echo base_url(); ?>admin/select_address">
					<i class="icon-th-list"></i> 
					<span class="title">Events</span>
					</a>
				</li>
              
                
                <li class="has-sub ">
               <a href="javascript:;">
               <i class="icon-briefcase"></i> 
               <span class="title">Manage Gallery</span>
               <span class="arrow "></span>
               </a>
                <ul class="sub">
                 <li class=""><a href="<?php echo base_url(); ?>admin/select_category">Gallery Category</a></li>
                 <li><a href="<?php echo base_url(); ?>admin/select_gallery">Photos Gallery</a></li>

                  </ul>
                  </li>
                
                 
                <!-- <li class="start">
					<a href="<?php echo base_url(); ?>admin/select_gallery">
					<i class="icon-th-list"></i> 
					<span class="title">Photos</span>
					</a>
				</li>-->
                
                
                
               <!--<li class="has-sub ">
               <a href="javascript:;">
               <i class="icon-briefcase"></i> 
               <span class="title">Manage Videos</span>
               <span class="arrow "></span>
               </a>
                <ul class="sub">
                 <li class=""><a href="<?php echo base_url(); ?>admin/select_area">Videos Albums</a></li>
                 <li><a href="<?php echo base_url(); ?>admin/select_video">Videos</a></li>

                  </ul>
                  </li>-->
                
                <li class="start">
					<a href="<?php echo base_url(); ?>admin/select_video">
					<i class="icon-th-list"></i> 
					<span class="title">Videos</span>
					</a>
				</li>
                
                
                 <!--<li class="start">
					<a href="<?php echo base_url(); ?>admin/select_projects">
					<i class="icon-th-list"></i> 
					<span class="title">Audio Gallery</span>
					</a>
				</li>-->
                
                <li class="start">
					<a href="<?php echo base_url(); ?>admin/select_clients">
					<i class="icon-briefcase"></i> 
					<span class="title">Baba Rare Photos</span>
					</a>
				</li>
                
                
                <!-- <li class="start">
					<a href="<?php echo base_url(); ?>admin/select_newsletterdetails">
					<i class="icon-th-list"></i> 
					<span class="title">News Letter Email</span>
					</a>
				</li>-->
                
                 
                
                
                <!-- <li class="start">
					<a href="<?php echo base_url(); ?>admin/manage_user_registration">
					<i class="icon-th-list"></i> 
					<span class="title">Manage User Registration</span>
					</a>
				</li>-->
                
                <!-- <li class="start">
					<a href="<?php echo base_url(); ?>admin/manage_channel_enquiry">
					<i class="icon-th-list"></i> 
					<span class="title">Channel Partner Enquiry</span>
					</a>
				</li>-->
                
                
                <!-- <li class="start">
					<a href="<?php echo base_url(); ?>admin/manage_agency_registration">
					<i class="icon-th-list"></i> 
					<span class="title">Agency Registration</span>
					</a>
				</li>-->
                
                
                
               <!--  <li class="start">
					<a href="<?php echo base_url(); ?>admin/manage_property_development">
					<i class="icon-th-list"></i> 
					<span class="title">Property Development</span>
					</a>
				</li>-->
                
                
                
               <!--<li class="has-sub ">
               <a href="javascript:;">
               <i class="icon-briefcase"></i> 
               <span class="title">Manage Documents</span>
               <span class="arrow "></span>
               </a>
                    <ul class="sub">
                 <li class=""><a href="<?php echo base_url(); ?>admin/select_area"> Category</a></li>
                 <li><a href="<?php echo base_url(); ?>admin/select_scrolling">Legal Documents</a></li>

                  </ul>
				</li>-->
                
                
               
                
                
                
                
                 <!--<li class="has-sub ">
               <a href="javascript:;">
               <i class="icon-briefcase"></i> 
               <span class="title">What We Do</span>
               <span class="arrow "></span>
               </a>
                    <ul class="sub">
                 <li class=""><a href="<?php echo base_url(); ?>admin/select_area">Category</a></li>
                 <li><a href="<?php echo base_url(); ?>admin/select_address">Sub Category</a></li>
                 <li><a href="<?php echo base_url(); ?>admin/select_facts">Images</a></li>

                  </ul>
				</li>-->
                
                <!-- <li class="start">
					<a href="<?php echo base_url(); ?>admin/manage_recycle_locations">
					<i class="icon-th-list"></i> 
					<span class="title">Users Recycle Locations</span>
					</a>
				</li>-->
                
                <!-- <li class="start">
					<a href="<?php echo base_url(); ?>admin/manage_inquiry">
					<i class="icon-th-list"></i> 
					<span class="title">Users Inquiry Details</span>
					</a>
				</li>-->
                
              
                
               
				  
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
                
                
                <!--  <li class="has-sub ">
               <a href="javascript:;">
               <i class="icon-briefcase"></i> 
               <span class="title">Recycle Bin Locations</span>
               <span class="arrow "></span>
               </a>
                    <ul class="sub">
                 <li class="active"><a href="<?php echo base_url(); ?>admin/select_area">Areas</a></li>
                 <li><a href="<?php echo base_url(); ?>admin/select_address">Address</a></li>
                 <li><a href="<?php echo base_url(); ?>admin/select_bin_locations">Bin Locations</a></li>

                  </ul>
				</li>-->
                
                
                 
                
                
                
              
                
               
                
                <!--<li class="start">
					<a href="<?php echo base_url(); ?>admin/select_careers_job">
					<i class="icon-th-list"></i> 
					<span class="title">Add Careers(Jobs)</span>
					</a>
				</li>-->
                
                 
                
                
                
                 <!--<li class="has-sub ">
               <a href="javascript:;">
               <i class="icon-th-list"></i> 
               <span class="title">Careers Information</span>
               <span class="arrow "></span>
               </a>
                    <ul class="sub">
                 <li class="active"><a href="<?php echo base_url(); ?>admin/select_careers">Careers Information English </a></li>
                 <li><a href="<?php echo base_url(); ?>admin/select_careers_arabic">Careers Information Arabic</a></li>

                  </ul>
				</li>-->
                
                
                
                <!--<li class="start">
					<a href="<?php echo base_url(); ?>admin/select_careers">
					<i class="icon-th-list"></i> 
					<span class="title">Careers Information</span>
					</a>
				</li>-->
                
         
                
                 <li class="start">
					<a href="<?php echo base_url(); ?>admin/select_uploads">
					<i class="icon-calendar"></i> 
					<span class="title">Manage Uploads</span>
					</a>
				</li>
                
                
                <!--<li class="has-sub ">
               <a href="javascript:;">
               <i class="icon-calendar"></i> 
               <span class="title">Contact Details</span>
               <span class="arrow "></span>
               </a>
                <ul class="sub">
                 <li class="active"><a href="<?php echo base_url(); ?>admin/select_corporate">Factory Details</a></li>
                 <li><a href="<?php echo base_url(); ?>admin/select_group">Contact Office Details</a></li>

                  </ul>
                  </li>-->
                  
                  
                  <li class="start">
					<a href="<?php echo base_url(); ?>admin/backup_db">
					<i class="icon-calendar"></i> 
					<span class="title">Database Backup</span>
					</a>
				</li>
                
                <li class="start">
					<a href="<?php echo base_url(); ?>admin/settings_view">
					<i class="icon-calendar"></i> 
					<span class="title">Settings</span>
					</a>
				</li>
                 
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
 <!--<link rel="stylesheet" href="<?php echo base_url(); ?>public/style/colorbox.css" />
<script src="<?php echo base_url(); ?>public/js/jquery.colorbox.js"></script>-->
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