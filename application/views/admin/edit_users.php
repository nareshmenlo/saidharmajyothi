<?php
include("includes/header.php");
?>
	<!-- END BEGIN STYLE CUSTOMIZER --> 
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							Edit Users Registration
                          
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
							<li><a href="">Edit Users Registration</a></li>
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
								<h4><i class="icon-edit"></i>Edit Users Registration</h4>
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
                                
                             <form action="<?php echo base_url(); ?>admin/edit_user_ragistration" method="post" class="form-horizontal" enctype="multipart/form-data">
                                   <?php
								   foreach($view_category as $rec)
								   ?>
                                   
                                   
                                  <div class="control-group">
                                       <label class="control-label"> Name</label>
                                       <div class="controls">
                           <input type="text" name="name" placeholder="Name" class="m-wrap medium" value="<?php echo $rec->name; ?>" />
                               <div style="color:#F00"><?php echo form_error('name'); ?></div>  
                                       </div>
                                       </div>
                                       
                                   <!--<div class="control-group">
                                       <label class="control-label">User Name</label>
                                       <div class="controls">
                           <input type="text" name="username" placeholder="Username" class="m-wrap medium" value="<?php echo $rec->username; ?>" />
                               <div style="color:#F00"><?php echo form_error('username'); ?></div>  
                                       </div>
                                       </div>-->
                                       
                                        <div class="control-group">
                                       <label class="control-label">Password</label>
                                       <div class="controls">
                           <input type="text" name="password" placeholder="Password" class="m-wrap medium" value="<?php echo $rec->password; ?>" />
                               <div style="color:#F00"><?php echo form_error('password'); ?></div>  
                                       </div>
                                       </div>
                                       
                                        <div class="control-group">
                                       <label class="control-label">Email</label>
                                       <div class="controls">
                           <input type="text" name="email" placeholder="Email" class="m-wrap medium" value="<?php echo $rec->email; ?>" />
                               <div style="color:#F00"><?php echo form_error('email'); ?></div>  
                                       </div>
                                       </div>
                                       
                                        <div class="control-group">
                                       <label class="control-label">Mobile</label>
                                       <div class="controls">
                           <input type="text" name="mobile" placeholder="Mobile" class="m-wrap medium" value="<?php echo $rec->mobile; ?>" />
                               <div style="color:#F00"><?php echo form_error('category'); ?></div>  
                                       </div>
                                       </div>
                                       
                                        <div class="control-group">
                                       <label class="control-label">City</label>
                                       <div class="controls">
                           <input type="text" name="city" placeholder="City" class="m-wrap medium" value="<?php echo $rec->city; ?>" />
                               <div style="color:#F00"><?php echo form_error('category'); ?></div>  
                                       </div>
                                       </div>
                                       
                                       <div class="control-group">
                                       <label class="control-label">Address</label>
                                       <div class="controls">
                          <textarea name="address"  class="m-wrap medium"  /><?php echo stripslashes($rec->address); ?></textarea>
                               <div style="color:#F00"><?php echo form_error('address'); ?></div>  
                                       </div>
                                       </div>
                                       
                                       
                                    </div>
                                    <div class="form-actions">
                                   
                                       <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                       <input type="hidden" name="id" value="<?php echo $rec->sno; ?>">
                                      <a href="<?php echo base_url(); ?>admin/manage_user_registration"><button type="button" class="btn">Cancel</button></a>
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
	