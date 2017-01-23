<?php
include("includes/header.php");
?>
	<!-- END BEGIN STYLE CUSTOMIZER --> 
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							Add Videos 
                          
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
							<li><a href=""> Videos</a></li>
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
								<h4><i class="icon-edit"></i>Add Videos</h4>
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
                                
                             <form action="<?php echo base_url(); ?>admin/add_video" method="post" class="form-horizontal" enctype="multipart/form-data">
                                   
                                   
                                <!--   <div class="control-group">
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
                                    </div>
                                    
                                    
                                    -->
                                    
                                    <!--<div class="control-group">
                                       <label class="control-label">Select Album </label>
                                       <div class="controls">
                                         <select name="cat_id"  id="category" class="medium m-wrap" value="<?php echo set_value('cat_id'); ?>">
                                       <option selected="selected" value="">[Select]</option>
                                       <?php
									   foreach($view_category as $cat)
									   {
									   ?>
                                       <option value="<?php echo $cat->sno; ?>"><?php echo $cat->category; ?></option>
                                                <?php } ?>
                                               </select>
                                       <div style="color:#F00"><?php echo form_error('cat_id'); ?></div>
                                       </div>
                                    </div>-->
                                   
                                  <div class="control-group">
                                       <label class="control-label">Video Title</label>
                                       <div class="controls">
                                          <input type="text" name="name" placeholder="Name" class="m-wrap medium"  value="<?php echo set_value('name'); ?>"/>
                                        <div style="color:#F00"><?php echo form_error('name'); ?></div>  
                                       </div>
                                       </div>
                                       
                                       
                                    
                                    <!--<div class="control-group">
                                       <label class="control-label">Select Year </label>
                                       <div class="controls">
                                         <select name="year"  id="category" class="medium m-wrap" value="<?php echo set_value('year'); ?>">
                                       <option selected="selected" value="">[Select]</option>
                                       <?php
									  // foreach($view_month as $mon)
									   $sy=date('Y')-1;
									  $cy=date('Y');
									  for($i=$sy;$i<=$cy;$i++)
									   {
									   ?>
                                       <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                <?php } ?>
                                               </select>
                                       <div style="color:#F00"><?php echo form_error('year'); ?></div>
                                       </div>
                                    </div>-->
                                       
                                       <div class="control-group">
                                       <label class="control-label">Video URL</label>
                                       <div class="controls">
                                          <input type="text" name="link" placeholder="https://www.youtube.com/watch?v=3KxawpyQhlI" class="m-wrap medium"  value="<?php echo set_value('link'); ?>"/>
                                        <div style="color:#F00"><?php echo form_error('link'); ?></div>  
                                       </div>
                                       </div>
                                    
                                    
                                    </div>
                                    <div class="form-actions">
                                   
                                       <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                      <a href="<?php echo base_url(); ?>admin/select_video"><button type="button" class="btn">Cancel</button></a>
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
	