<?php
include("includes/header.php");
?>
	<!-- END BEGIN STYLE CUSTOMIZER --> 
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							Edit Amentics
                          
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
							<li><a href="">Edit  Amentics</a></li>
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
		
        						<h4><i class="icon-edit"></i>Edit  Amentics</h4>
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
									 foreach($edit_banner as $row)
									 {
									 ?>
                             <form action="<?php echo base_url(); ?>admin/edit_amentics" method="post" class="form-horizontal" enctype="multipart/form-data">
                                   
                    
                                     
                                    <div class="control-group">
                                       <label class="control-label"> Amentics Content</label>
                                       <div class="controls">
                                         <textarea  name="content" /><?php echo stripslashes($row->content); ?></textarea>
                                       </div>
                                       </div>
                                    </div>
                                    
                                  
                                    <div class="form-actions">
                                   
                                       <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                       <input type="hidden" name="id" value="<?php echo $row->sno; ?>" />
                                       <input type="hidden" name="id_pro" value="<?php echo $sno; ?>" />
                                      <a href="<?php echo base_url(); ?>admin/amentics/<?php echo $sno; ?>"><button type="button" class="btn">Cancel</button></a>
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


