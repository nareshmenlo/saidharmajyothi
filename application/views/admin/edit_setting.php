<?php
include("includes/header.php");
?>
	<!-- END BEGIN STYLE CUSTOMIZER --> 
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							Edit Settings
                          
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
							<li><a href="<?php echo base_url(); ?>settings_view">Edit Settings
                          </a></li>
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
								<h4><i class="icon-edit"></i>Edit Settings
                          </h4>
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
                                    <div style="color:red;"><?php echo $this->session->flashdata("msg");?></div>
                                    <?php foreach($view_setting as $key=>$row);?>
<form action="<?php echo base_url();?>admin/edit_settings/<?php echo $row['setting_id']?>" method="post" enctype="multipart/form-data" name="frm">                                 
                                   
                                     
                                    <div class="control-group">
                                       <label class="control-label">Company Url</label>
                                       <div class="controls">
                                         <input type="text" name="company_title"  id="event" class="medium m-wrap" value="<?php echo $row['company_title']?>">
                                       </div>
                                    </div>
                                    
                                    <div class="control-group">
                                       <label class="control-label">Default Email</label>
                                       <div class="controls">
                                         <input type="text" name="default_email"  id="event" class="medium m-wrap" value="<?php echo $row['default_email']?>">
                                       </div>
                                    </div>
                                    
                                    <div class="control-group">
                                       <label class="control-label">Contact Mobile Numbers</label>
                                       <div class="controls">
                                         <input type="text" name="mobile"  id="event" class="medium m-wrap" value="<?php echo $row['mobile']?>">
                                       </div>
                                    </div>
                                    
                                    
                                      <div class="control-group">
                                       <label class="control-label">Participant Email </label>
                                       <div class="controls">
                                         <input type="text" name="instagram"  id="event" class="medium m-wrap" value="<?php echo $row['instagram']?>">
                                       </div>
                                    </div>
                                    
                                 <!--   <div class="control-group">
                                       <label class="control-label">Default Address</label>
                                       <div class="controls">
                                     <textarea name="default_address"><?php echo $row['default_address']?></textarea>
                                       </div>
                                    </div>-->
                                    
                                    
                                 <!--<div class="control-group">
                                       <label class="control-label">Address</label>
                                       <div class="controls">
                                         <input type="text" name="meta_desc"  id="event" class="medium m-wrap" value="<?php echo $row['meta_desc']?>">
                                       </div>
                                    </div>-->
                                    
                                    <div class="control-group">
                                       <label class="control-label">Trust</label>
                                       <div class="controls">
                                         <input type="text" name="meta_title"  id="event" class="medium m-wrap" value="<?php echo $row['meta_title']?>">
                                       </div>
                                    </div>
                                    
                                    <div class="control-group">
                                       <label class="control-label">Branch</label>
                                       <div class="controls">
                                         <input type="text" name="meta_keywords"  id="event" class="medium m-wrap" value="<?php echo $row['meta_keywords']?>">
                                       </div>
                                    </div>
                                    
                                    <div class="control-group">
                                       <label class="control-label">Account Number</label>
                                       <div class="controls">
                                         <input type="text" name="meta_desc"  id="event" class="medium m-wrap" value="<?php echo $row['meta_desc']?>">
                                       </div>
                                    </div>
                                    
                                     <div class="control-group">
                                       <label class="control-label">IFSC Code</label>
                                       <div class="controls">
                                         <input type="text" name="Pinterestt"  id="event" class="medium m-wrap" value="<?php echo $row['Pinterestt']?>">
                                       </div>
                                    </div>
                                    
                                     
                                  <!--  <div class="control-group">
                                       <label class="control-label">Our CEO Name</label>
                                       <div class="controls">
                                         <input type="text" name="meta_title"  id="event" class="medium m-wrap" value="<?php echo $row['meta_title']?>">
                                       </div>
                                    </div>-->
                                    
                                   <!-- <div class="control-group">
                                       <label class="control-label">Face Book Link</label>
                                       <div class="controls">
                                         <input type="text" name="facebook"  id="event" class="medium m-wrap" value="<?php echo $row['fblink']?>">
                                       </div>
                                    </div>
                                    
                                    <div class="control-group">
                                       <label class="control-label">Twitter Link</label>
                                       <div class="controls">
                                         <input type="text" name="twitter"  id="event" class="medium m-wrap" value="<?php echo $row['twitter']?>">
                                       </div>
                                    </div>
                                    
                                     <div class="control-group">
                                       <label class="control-label">Linkedin Link</label>
                                       <div class="controls">
                                         <input type="text" name="Linkedin_link"  id="event" class="medium m-wrap" value="<?php echo $row['Linkedin_link']?>">
                                       </div>
                                    </div>
                                    
                                <div class="control-group">
                                       <label class="control-label">Google Link</label>
                                       <div class="controls">
                                         <input type="text" name="google_link"  id="event" class="medium m-wrap" value="<?php echo $row['google_link']?>">
                                       </div>
                                    </div>
                                    
                                    
                               
                                    <div class="control-group">
                                       <label class="control-label">You Tube Link</label>
                                       <div class="controls">
                                         <input type="text" name="you_tube"  id="event" class="medium m-wrap" value="<?php echo $row['you_tube']?>">
                                       </div>
                                    </div>-->
                                    
                                    
                                    
                                    
                                    
                                 <!--<div class="control-group">
                                       <label class="control-label">Meta Title</label>
                                       <div class="controls">
                                         <input type="text" name="meta_title"  id="event" class="medium m-wrap" value="<?php echo $row['meta_title']?>">
                                       </div>
                                    </div>-->
                                    
                                    
                                    
                                    <!--<div class="control-group">
                                       <label class="control-label">Meta Keywords</label>
                                       <div class="controls">
                                         <input type="text" name="meta_keywords"  id="event" class="medium m-wrap" value="<?php echo $row['meta_keywords']?>">
                                       </div>
                                    </div>-->
                                    
                                       
                                    
                                    
                                    </div>
                                    <div class="form-actions">
                                   
                                       <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                       <a href="<?php echo base_url(); ?>admin/settings_view"><button type="button" class="btn">Cancel</button></a>
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

