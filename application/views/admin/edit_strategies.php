<?php
include("includes/header.php");
?>
	<!-- END BEGIN STYLE CUSTOMIZER --> 
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							Edit Important Points
                            <small>user profile sample</small>
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
							<li><a href="">Edit Important Points </a></li>
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
								<h4><i class="icon-edit"></i>Edit Important Points </h4>
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
                                 <?php
								 foreach($edit_content as $content)
								 {
								 ?>
                   <form action="<?php echo base_url(); ?>admin/edit_services_india" method="post" class="form-horizontal" enctype="multipart/form-data">
                                    
                                    <?php /*?><div class="control-group">
                                       <label class="control-label">Service Category</label>
                                       <div class="controls">
                                         <select name="Service"  id="category" class="medium m-wrap" >
                                       <option selected="selected" value="">[Select]</option>
                                       <?php
									   foreach($service_name as $cat)
									   {
										   if($cat->sno==$content->service_id)
										   {
											   $st="selected";
										   }
										   else
										   {
											   $st="";
										   }
									   ?>
                                       <option value="<?php echo $cat->sno; ?>" <?php echo $st; ?>><?php echo $cat->name; ?></option>
                                                <?php } ?>
                                               </select>
                                       
                                       </div>
                                    </div><?php */?>
                                    
                                    
                                    <div class="control-group">
                                       <label class="control-label">Name</label>
                                       <div class="controls">
                                <input type="text" name="name" placeholder="Name" class="m-wrap medium"  value="<?php echo $content->strategies_name; ?>"/>
                                       </div>
                                       </div>
                                       
                                       
                                    <!--<div class="control-group">
                                       <label class="control-label">Content</label>
                                       <div class="controls">
                                        <textarea class="medium m-wrap" name="Content"><?php echo stripslashes($content->content); ?></textarea></div>  
                                      
                                      
                                       </div>-->
                                    </div>
                                    <div class="form-actions">
                                    <input type="hidden" name="id" value="<?php echo $content->id; ?>">
                                       <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                    <a href="<?php echo base_url(); ?>admin/select_services_india"><button type="button" class="btn">Cancel</button></a>
                                    </div>
                                     
                                 </form>
                                 <?php } ?>
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
	 