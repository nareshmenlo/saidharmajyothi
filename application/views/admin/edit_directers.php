<?php
include("includes/header.php");
?>
	<!-- END BEGIN STYLE CUSTOMIZER --> 
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							Edit Directers 
                          
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
							<li><a href="">Edit Directers</a></li>
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
								<h4><i class="icon-edit"></i>Edit Directers</h4>
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
                                
                             <form action="<?php echo base_url(); ?>admin/edit_directers" method="post" class="form-horizontal" enctype="multipart/form-data">
                                   
                                     <?php
									 foreach($edit_banner as $rec)
									 {
									 ?>
                                     
                                     <div class="control-group">
                                       <label class="control-label">Select Language </label>
                                       <div class="controls">
                                         <select name="type"  id="category" class="medium m-wrap" value="<?php echo set_value('type'); ?>">
                                       <option selected="selected" value="">[Select]</option>
                                       <?php
									   foreach($view_lng as $lng)
									   {
										   if($lng->type==$rec->type)
										   {
											   $st="selected";
										   }
										   else
										   {
											   $st="";
										   }
									   ?>
                                       <option value="<?php echo $lng->type; ?>" <?php echo $st; ?>><?php echo $lng->type; ?></option>
                                                <?php } ?>
                                               </select>
                                       </div>
                                    </div>
                                     
                                     <div class="control-group">
                                       <label class="control-label">Directer Name </label>
                                       <div class="controls">
                                         <input name="name" type="text"  id="image"  value="<?php echo $rec->name; ?>">
                                       </div>
                                       </div>
                                       
                                       <div class="control-group">
                                       <label class="control-label">Directer Position </label>
                                       <div class="controls">
                                         <input name="position" type="text"  id="image"  value="<?php echo $rec->position; ?>">
                                       </div>
                                       </div>
                                       
                                    
                                     <label class="control-label">Old Photo</label>
                                    <div class="controls">
                                    
								<div class="thumbnail" style="width: 291px; height: 170px;">
                                
					<img src="<?php echo base_url(); ?>public/derecters/<?php echo $rec->image; ?>" width="231" height='140' alt="" />
													</div>
													</div>
                                                    
                                   <div class="space10"></div>
                                      
																<div class="fileupload fileupload-new" data-provides="fileupload">
                                                                <label class="control-label">New Photo</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																	<div class="input-append">
																		<div class="uneditable-input">
																			<i class="icon-file fileupload-exists"></i> 
																			<span class="fileupload-preview"></span>

																		</div>
																		<span class="btn btn-file">
																		<span class="fileupload-new">Select file</span>
																		<span class="fileupload-exists">Change</span>
																		<input type="file" class="" name="banner" value="<?php echo $rec->image; ?>"/>
                                                                          <input type="hidden" name="id" value="<?php echo $rec->sno; ?>">
                                                                         <input type="hidden" name="old_img" value="<?php echo $rec->image; ?>">
																		</span>
																		<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
																	</div>
																</div>
																<div class="clearfix"></div>
																<div class="controls">
																	
																	
																</div>
																<div class="space10"></div>
                                    </div>
                                    <div class="form-actions">
                                   
                                       <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                    <a href="<?php echo base_url(); ?>admin/select_directers"><button type="button" class="btn">Cancel</button></a>
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
	