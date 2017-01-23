<?php
include("includes/header.php");
?>
	<!-- END BEGIN STYLE CUSTOMIZER --> 
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							Add Our Programes
                          
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
							<li><a href="">Add Our Programes
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
								<h4><i class="icon-edit"></i>Add Our Programes
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
                                
                             <form action="<?php echo base_url(); ?>admin/add_products" method="post" class="form-horizontal" enctype="multipart/form-data">
                                   
                                     
                                     
                                     
                                      <!--<div class="control-group">
                                       <label class="control-label">Category</label>
                                       <div class="controls">
                                         <select name="category"  id="category" class="medium m-wrap" required>
                                       <option selected="selected" value="">[Select]</option>
                                       <?php
									   foreach($view_category as $rec)
									   {
									   ?>
                                       <option value="<?php echo $rec->sno; ?>"><?php echo $rec->category; ?></option>
                                                <?php } ?>
                                               </select>
                                       
                                       </div>
                                    </div>-->
                                    
                                    
                                    <div class="control-group">
                                       <label class="control-label">Name</label>
                                       <div class="controls">
                                         <input type="text" name="name"  id="event" class="medium m-wrap" required>
                                       </div>
                                    </div>
                                    
                                    <!--<div class="control-group">
                                       <label class="control-label">Product Link</label>
                                       <div class="controls">
                                         <input type="text" name="link"  id="event" class="medium m-wrap" required>
                                       </div>
                                    </div>-->
                                    
                                    <div class="control-group">
                                       <label class="control-label">Banner Image</label>
                                       <div class="controls">
                                         <input type="file" name="pdf" required/>
                                       </div>
                                       </div>
                                    
                                    <div class="control-group">
                                       <label class="control-label">Image</label>
                                       <div class="controls">
                                         <input type="file" name="banner" required/>
                                       </div>
                                       </div>
                                       
                                       
                                    <div class="control-group">
                                       <label class="control-label">Content</label>
                                       <div class="controls">
                                      <textarea class="medium m-wrap" name="content" ><?php echo set_value('content'); ?></textarea>
                                      <div style="color:#F00"><?php echo form_error('content'); ?></div>
                                       </div>
                                    </div>
                                    
                                   <!-- <div class="control-group">
                                       <label class="control-label">Applications</label>
                                       <div class="controls">
                                      <textarea class="medium m-wrap" name="content1" ></textarea>
                                      <div style="color:#F00"><?php echo form_error('content1'); ?></div>
                                       </div>
                                    </div>
                                    
                                    <div class="control-group">
                                       <label class="control-label">Operation</label>
                                       <div class="controls">
                                      <textarea class="medium m-wrap" name="content2" ></textarea>
                                      <div style="color:#F00"><?php echo form_error('content2'); ?></div>
                                       </div>
                                    </div>-->
                                    
                                    </div>
                                    <div class="form-actions">
                                   
                                       <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                       <a href="<?php echo base_url(); ?>admin/select_products"><button type="button" class="btn">Cancel</button></a>
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

