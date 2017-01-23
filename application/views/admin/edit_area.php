<?php
include("includes/header.php");
?>
	<!-- END BEGIN STYLE CUSTOMIZER --> 
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							Edit Category
                          
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
							<li><a href="">Edit Category</a></li>
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
								<h4><i class="icon-edit"></i>Edit Category</h4>
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
                                
                             <form action="<?php echo base_url(); ?>admin/edit_area" method="post" class="form-horizontal" enctype="multipart/form-data">
                                   <?php
								   foreach($view_category as $rec)
								   ?>
                                   
                                   <!--<div class="control-group">
                                       <label class="control-label">Select Language </label>
                                       <div class="controls">
                                         <select name="type"  id="category" class="medium m-wrap" value="<?php echo set_value('type'); ?>">
                                       <option selected="selected" value="">[Select]</option>
                                       <?php
									   //foreach($view_lng as $rec)
									   {
									   ?>
                                       <option value="<?php echo $rec->type; ?>"><?php echo $rec->type; ?></option>
                                                <?php } ?>
                                               </select>
                                       <div style="color:#F00"><?php echo form_error('type'); ?></div>
                                       </div>
                                    </div>-->
                                    
                                    
                                    
                                     
                                    <!--<div class="control-group">
                                       <label class="control-label">Category</label>
                                       <div class="controls">
                           <input type="text" name="category" placeholder="Category" class="m-wrap medium" value="<?php echo $rec->category; ?>" />
                               <div style="color:#F00"><?php echo form_error('Category'); ?></div>  
                                       </div>
                                       </div>-->
                                       
                                          <div class="control-group">
                                       <label class="control-label">Name</label>
                                       <div class="controls">
             <input type="text" name="name" placeholder="Name" value="<?php echo $rec->name; ?>" class="m-wrap medium"/>
                               <div style="color:#F00"><?php echo form_error('name'); ?></div>  
                                       </div>
                                       </div>
                                       
                                       <!--<div class="control-group">
                                       <label class="control-label">Description</label>
                                       <div class="controls">
                           <textarea name="content"  class="m-wrap medium"  /><?php echo stripslashes($rec->content); ?></textarea>
                               <div style="color:#F00"><?php echo form_error('category'); ?></div>  
                                       </div>
                                       </div>-->
                                       
                                    </div>
                                    <div class="form-actions">
                                   
                                       <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                       <input type="hidden" name="id" value="<?php echo $rec->sno; ?>">
                                      <a href="<?php echo base_url(); ?>admin/select_area"><button type="button" class="btn">Cancel</button></a>
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
	