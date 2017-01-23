<?php
include("includes/header.php");
?>
	<!-- END BEGIN STYLE CUSTOMIZER --> 
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							Edit Projects  OverView
                          
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
							<li><a href="">Edit OverView</a></li>
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
		
        						<h4><i class="icon-edit"></i>Edit OverView</h4>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<!--<a href="#portlet-config" data-toggle="modal" class="config"></a>-->
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body">
								     <?php
									 foreach($edit_banner as $row)
									 {
									 ?>
								<div class="tab-content">
                              <div class="tab-pane active" id="portlet_tab1">
                                 <!-- BEGIN FORM-->
                                
                             <form action="<?php echo base_url(); ?>admin/edit_overview" method="post" class="form-horizontal" enctype="multipart/form-data">
                                   
                                  
                                  
                                  <div class="control-group">
                                       <label class="control-label">Select  Type </label>
                                       <div class="controls">
                                         <select name="type"  id="" class="medium m-wrap" value="<?php echo set_value('type'); ?>" required/>
                                         
                                       <option selected="selected" value="">[Select]</option>
                                       <?php
									   foreach($view_type as $rec)
									   {
										   if($rec->type==$row->type)
										   {
											   $st="selected";
										   }
										   else
										   {
											   $st="";
										   }
									   ?>
                                       <option value="<?php echo $rec->type; ?>" <?php echo $st; ?>><?php echo $rec->type; ?></option>
                                                <?php } ?>
                                               </select>
                                       <div style="color:#F00"><?php echo form_error('type'); ?></div>
                                       </div>
                                    </div>
                                    
                                    
                                       
                                       <div class="control-group">
                                       <label class="control-label"> BHK</label>
                                       <div class="controls">
                                         <input type="text" name="bhk" class="m-wrap medium" value="<?php echo $row->bhk; ?>" />
                                       </div>
                                       </div>
                                       
                                       <div class="control-group">
                                       <label class="control-label"> Size (sq. ft.)</label>
                                       <div class="controls">
                                       <input  type="text" name="size" class="m-wrap medium" value="<?php echo $row->size; ?>"/>
                                       </div>
                                       </div>
                                       
                                       
                                    
                                    <div class="control-group">
                                       <label class="control-label"> Price (Rs.)</label>
                                       <div class="controls">
                                         <input type="text" name="price"  class="m-wrap medium" value="<?php echo $row->price; ?>"/>
                                       </div>
                                       </div>
                                    
                                    
                                     
                                    <div class="control-group">
                                       <label class="control-label"> Tower</label>
                                       <div class="controls">
                                         <input type="text" name="tower"  class="m-wrap medium" value="<?php echo $row->tower; ?>" />
                                       </div>
                                       </div>
                                    </div>
                                    
                                  
                                    <div class="form-actions">
                                   
                                       <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                       <input type="hidden" name="id" value="<?php echo $row->sno; ?>" />
                                       <input type="hidden" name="id_pro" value="<?php echo $sno; ?>" />
                                     <a href="<?php echo base_url(); ?>admin/project_over_view/<?php echo $sno; ?>"><button type="button" class="btn">Cancel</button></a>
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


