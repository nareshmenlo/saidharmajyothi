<?php
include("includes/header.php");
?>
	<!-- END BEGIN STYLE CUSTOMIZER --> 
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							Add Contact Details
                          
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
							<li><a href="">Add Group</a></li>
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
								<h4><i class="icon-edit"></i>Add Group</h4>
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
                                
                             <form action="<?php echo base_url(); ?>admin/add_group" method="post" class="form-horizontal" enctype="multipart/form-data">
                             
                            
                             
                                       
                                   
                                     
                                    <div class="control-group">
                                       <label class="control-label">Phone Number</label>
                                       <div class="controls">
                           <input type="text" name="phone" placeholder="Phone" class="m-wrap medium" value="<?php echo set_value('phone'); ?>" />
                               <div style="color:#F00"><?php echo form_error('phone'); ?></div>  
                                       </div>
                                       </div>
                                       
                                       <div class="control-group">
                                       <label class="control-label">Mobile Number</label>
                                       <div class="controls">
                           <input name="name" placeholder="Name" type="text" class="m-wrap medium"  value="<?php echo set_value('name'); ?>">
                               <div style="color:#F00"><?php echo form_error('name'); ?></div>  
                                       </div>
                                       </div>
                                       
                                       <div class="control-group">
                                       <label class="control-label">Fax Number</label>
                                       <div class="controls">
                           <input type="text" name="fax" placeholder="Fax" class="m-wrap medium" value="<?php echo set_value('fax'); ?>" />
                               <div style="color:#F00"><?php echo form_error('fax'); ?></div>  
                                       </div>
                                       </div>
                                       
                                       
                                        <div class="control-group">
                                       <label class="control-label">Email</label>
                                       <div class="controls">
                           <input type="text" name="type" placeholder="Email" class="m-wrap medium" value="<?php echo set_value('fax'); ?>" />
                               <div style="color:#F00"><?php echo form_error('fax'); ?></div>  
                                       </div>
                                       </div>
                                       
                                       
                                      
                                    
                                    
                                    <div class="control-group">
                                       <label class="control-label">Address</label>
                                       <div class="controls">
                           <textarea name="address" placeholder=""s class="m-wrap medium"><?php echo set_value('address'); ?></textarea>
                               <div style="color:#F00"><?php echo form_error('address'); ?></div>  
                                       </div>
                                       </div>   
                                       
                                       
                                       
                                       
                                    </div>
                                    <div class="form-actions">
                                   
                                       <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                      <a href="<?php echo base_url(); ?>admin/select_group"><button type="button" class="btn">Cancel</button></a>
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
	