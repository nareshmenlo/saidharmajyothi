<?php
include("includes/header.php");
?>
	<!-- END BEGIN STYLE CUSTOMIZER --> 
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							Add Banner 
                          
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
							<li><a href="">Add Banner</a></li>
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
								<h4><i class="icon-edit"></i>Add Banner</h4>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="#portlet-config" data-toggle="modal" class="config"></a>
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body">
								
								<div class="tab-content">
                              <div class="tab-pane active" id="portlet_tab1">
                                 <!-- BEGIN FORM-->
                                
                             <form action="<?php echo base_url(); ?>admin/add_banner" method="post" class="form-horizontal" enctype="multipart/form-data">
                                   
                                  <!-- <div class="control-group">
                                       <label class="control-label">Banner Title</label>
                                       <div class="controls">
                                         <input type="text" name="name" value="" class="medium m-wrap" required Placeholder="Title"/>
                                       </div>
                                       </div>-->
                                  
                                    
                                   <!-- <div class="control-group">
                                       <label class="control-label">Link</label>
                                       <div class="controls">
                                         <input type="text" name="link" value="" class="medium m-wrap" Placeholder="http://yoursite.com"/>
                                       </div>
                                       </div>
                                       -->
                                       
                                    <div class="control-group">
                                       <label class="control-label">Banner Image</label>
                                       <div class="controls">
                                         <input type="file" name="banner" value="" required/>
                                       </div>
                                       </div>
                                       
                                       
                                       
                                       
                                       
                                        <!--<div class="control-group">
                                       <label class="control-label">Price</label>
                                       <div class="controls">
                                         <input type="text" name="price" value="" class="medium m-wrap" required/>
                                       </div>
                                       </div>-->
                                     <!--  
                                       <div class="control-group">
                                       <label class="control-label">Banner Description</label>
                                       <div class="controls">
                                         <textarea name="content"  value="" /></textarea>
                                       </div>
                                       </div>
                                       -->
                                       
                                    </div>
                                    <div class="form-actions">
                                   
                                       <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                      <a href="<?php echo base_url(); ?>admin/select_banner"><button type="button" class="btn">Cancel</button></a>
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
	