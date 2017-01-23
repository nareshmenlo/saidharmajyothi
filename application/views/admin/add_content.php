<?php
include('includes/header.php');
?>
<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							CMS Content				
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
							<li><a href="">Content</a></li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
                
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
               <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN SAMPLE FORM PORTLET-->   
                  <div class="portlet box blue tabbable">
                     <div class="portlet-title">
                        <h4>
                           <i class="icon-reorder"></i>
                           <span class="hidden-480">Add Content</span>
                           &nbsp;
                        </h4>
                     </div>
                     <div class="portlet-body form">
                        <div class="tabbable portlet-tabs">
                           <ul class="nav nav-tabs">
                              <li><a href="#portlet_tab3" data-toggle="tab">Inline</a></li>
                              <li><a href="#portlet_tab2" data-toggle="tab">Grid</a></li>
                              <li class="active"><a href="#portlet_tab1" data-toggle="tab">Default</a></li>
                           </ul>
                          

                           <div class="tab-content">
                              <div class="tab-pane active" id="portlet_tab1">
                                 <!-- BEGIN FORM-->
                                 <form action="<?php echo base_url(); ?>admin/add_content" method="post" class="form-horizontal" enctype="multipart/form-data">
                                 
                                   <div class="control-group">
                                       <label class="control-label">Content name</label>
                                       <div class="controls">
                                         <input type="text" name="name" placeholder="Name" class="m-wrap medium"  value="<?php echo set_value('name'); ?>"/>
                                        <div style="color:#F00"><?php echo form_error('name'); ?></div>
                                       </div>
                                       </div>
                                       
                                       <div class="control-group">
                                       <label class="control-label">Image</label>
                                       <div class="controls">
                                         <input type="file" name="banner" value=""/>
                                       </div>
                                       </div>

                                    <div class="control-group">
                                       <label class="control-label">Content</label>
                                       <div class="controls">
                                      <textarea class="medium m-wrap" name="Content" value="<?php echo set_value('Content'); ?>"></textarea> 
                                    <div style="color:#F00"><?php echo form_error('Content'); ?></div>
                                      
                                       </div>
                                    </div>
                                    
                                
                                    <div class="form-actions">
                                    <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                    <a href="<?php echo base_url(); ?>admin/select_content"><button type="button" class="btn">Cancel</button></a>
                                    </div>
                                     
                                 </form>
                                 </div></div>
                                 </div>
                                 </div>
                                 </div>
                                 </div>
                                 </div>
                                 </div>
                                 </div>
                                 </div>
                                 </div>
                                 
                                
                                 <!-- END FORM--> 
    <?php
	include('includes/footer.php');
	?>
  