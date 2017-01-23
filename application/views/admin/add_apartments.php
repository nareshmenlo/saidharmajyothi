<?php
include("includes/header.php");
?>
	<!-- END BEGIN STYLE CUSTOMIZER --> 
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							Add Telugu Content Pages 
                          
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
							<li><a href="">Add Telugu Content Pages</a></li>
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
								<h4><i class="icon-edit"></i>Add Telugu Content Pages</h4>
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
                                
                             <form action="<?php echo base_url(); ?>admin/add_apartments" method="post" class="form-horizontal" enctype="multipart/form-data">
                                   
                                  
                                  
                                  <!--<div class="control-group">
                                       <label class="control-label">Select Project Type </label>
                                       <div class="controls">
                                         <select name="type"  id="category" class="medium m-wrap" value="<?php echo set_value('type'); ?>" required/>
                                         
                                       <option selected="selected" value="">[Select]</option>
                                       <?php
									   foreach($view_type as $rec)
									   {
									   ?>
                                       <option value="<?php echo $rec->sno; ?>"><?php echo $rec->type; ?></option>
                                                <?php } ?>
                                               </select>
                                       <div style="color:#F00"><?php echo form_error('type'); ?></div>
                                       </div>
                                    </div>-->
                                    
                                   <!-- <div class="control-group">
                                       <label class="control-label">Apartment Location </label>
                                       <div class="controls">
                                         <select name="location"  id="" class="medium m-wrap" value="" required/>
                                         
                                       <option selected="selected" value="">[Select]</option>
                                       <?php
									   foreach($view_location as $loc)
									   {
									   ?>
                                       <option value="<?php echo $loc->name; ?>"><?php echo $loc->name; ?></option>
                                                <?php } ?>
                                               </select>
                                       </div>
                                    </div>-->
                                    
                                     
                                  <!-- <div class="control-group">
                                       <label class="control-label"> Upcoming Project Date</label>
                                       <div class="controls">
                                         <input type="text" name="project_date" value="" class="m-wrap medium"  id="datetimepicker_mask" required/>
                                       </div>
                                       </div>-->
                                       
                                       <div class="control-group">
                                       <label class="control-label"> Name</label>
                                       <div class="controls">
                                         <input type="text" name="name" class="m-wrap medium" value="" required/>
                                       </div>
                                       </div>
                                       
                                        <div class="control-group">
                                       <label class="control-label">Side Image</label>
                                       <div class="controls">
                                         <input type="file" name="pdf" />
                                       </div>
                                       </div>
                                       
                                       
                                      <div class="control-group">
                                       <label class="control-label">Content Image</label>
                                       <div class="controls">
                                         <input type="file" name="banner" value="" required/>
                                       </div>
                                       </div>
                                       
                                        <!--<div class="control-group">
                                       <label class="control-label"> Bedrooms</label>
                                       <div class="controls">
                                         <input type="text" name="bedrooms" class="m-wrap medium" value="" required/>
                                       </div>
                                       </div>
                                       
                                        <div class="control-group">
                                       <label class="control-label"> Bathrooms</label>
                                       <div class="controls">
                                         <input type="text" name="bathrooms" class="m-wrap medium" value="" required/>
                                       </div>
                                       </div>
                                       
                                        <div class="control-group">
                                       <label class="control-label"> Sq Ft</label>
                                       <div class="controls">
                                         <input type="text" name="feet" class="m-wrap medium" value="" required/>
                                       </div>
                                       </div>-->
                                       
                                       <!--<div class="control-group">
                                       <label class="control-label">Description</label>
                                       <div class="controls">
                                       <textarea type="text" name="content" /></textarea>
                                       </div>
                                       </div>-->
                                       
                                       
                                    
                                    
                                    </div>
                                    <div class="form-actions">
                                   
                                       <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                      <a href="<?php echo base_url(); ?>admin/select_apartments"><button type="button" class="btn">Cancel</button></a>
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

