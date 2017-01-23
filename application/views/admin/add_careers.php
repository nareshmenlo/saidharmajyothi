<?php
include("includes/header.php");
?>
	<!-- END BEGIN STYLE CUSTOMIZER --> 
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							Add Careers
                          
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
							<li><a href="">Add Careers</a></li>
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
								<h4><i class="icon-edit"></i>Add Careers</h4>
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
                                
                             <form action="<?php echo base_url(); ?>admin/add_careers" method="post" class="form-horizontal" enctype="multipart/form-data">
                             
                             
                             
                             <div class="control-group">
                                       <label class="control-label">Select Category</label>
                                       <div class="controls">
                                         <select name="category"  id="category" class="medium m-wrap" value="<?php echo set_value('category'); ?>">
                                       <option selected="selected" value="">[Select]</option>
                                       <?php
									   foreach($view_category as $rec)
									   {
									   ?>
                                       <option value="<?php echo $rec->category; ?>"><?php echo $rec->category; ?></option>
                                                <?php } ?>
                                               </select>
                                       <div style="color:#F00"><?php echo form_error('category'); ?></div>
                                       </div>
                                    </div>
                                    
                                    
                             <div class="control-group">
                                       <label class="control-label">Job Title </label>
                                       <div class="controls">
                           <input name="title" placeholder="Title" type="text" class="m-wrap medium"  value="<?php echo set_value('title'); ?>">
                               <div style="color:#F00"><?php echo form_error('title'); ?></div>  
                                       </div>
                                       </div>
                                       
                                   
                                     
                                    <div class="control-group">
                                       <label class="control-label">Job Location </label>
                                       <div class="controls">
                           <input type="text" name="location" placeholder="Location" class="m-wrap medium" value="<?php echo set_value('location'); ?>" />
                               <div style="color:#F00"><?php echo form_error('location'); ?></div>  
                                       </div>
                                       </div>
                                       
                                      
                                       
                                    <div class="control-group">
                                       <label class="control-label">Details</label>
                                       <div class="controls">
                           <textarea name="address" placeholder=""s class="m-wrap medium"><?php echo set_value('address'); ?></textarea>
                               <div style="color:#F00"><?php echo form_error('address'); ?></div>  
                                       </div>
                                       </div>   
                                       
                                       
                                    </div>
                                    <div class="form-actions">
                                   
                                       <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                      <a href="<?php echo base_url(); ?>admin/select_careers_job"><button type="button" class="btn">Cancel</button></a>
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
	