<?php
include("includes/header.php");
?>
	<!-- END BEGIN STYLE CUSTOMIZER --> 
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							Edit Corporate News Letter 
                          
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
							<li><a href="">Edit News Letter</a></li>
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
								<h4><i class="icon-edit"></i>Edit Corporate News Letter</h4>
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
                                
                             <form action="<?php echo base_url(); ?>admin/edit_services" method="post" class="form-horizontal" enctype="multipart/form-data">
                                   
                                     <?php
									 foreach($edit_services as $rec)
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
                                       <label class="control-label">Select Period</label>
                                       <div class="controls">
                                         <select name="category"  id="category" class="medium m-wrap" >
                                       <option selected="selected" value="">[Select]</option>
                                       <?php
									   foreach($view_period as $cat)
									   {
										   if($cat->period==$rec->category)
										   {
											   $st="selected";
										   }
										   else
										   {
											   $st="";
										   }
									   ?>
                                       <option value="<?php echo $cat->period; ?>" <?php echo $st; ?>><?php echo $cat->period; ?></option>
                                                <?php } ?>
                                               </select>
                                       
                                       </div>
                                    </div>
                                    
                                    
                                       <div class="control-group">
                                       <label class="control-label">Select Month </label>
                                       <div class="controls">
                                         <select name="name"  id="category" class="medium m-wrap" value="<?php echo set_value('month'); ?>">
                                       <option selected="selected" value="">[Select]</option>
                                       <?php
									   foreach($view_month as $mon)
									   {
										  if($mon->month==$rec->name)
										   {
											   $st="selected";
										   }
										   else
										   {
											   $st="";
										   }
									   ?>
                                       <option value="<?php echo $mon->month; ?>" <?php echo $st; ?>><?php echo $mon->month; ?></option>
                                                <?php } ?>
                                               </select>
                                       <div style="color:#F00"><?php echo form_error('month'); ?></div>
                                       </div>
                                    </div>
                                    
                                    <div class="control-group">
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
									   if($i==$rec->year)
									   {
										   $st="selected";
									   }
									   else
									   {
										   $st="";
									   }
									   ?>
                                       <option value="<?php echo $i; ?>"  <?php echo $st; ?>><?php echo $i; ?></option>
                                                <?php } ?>
                                               </select>
                                       <div style="color:#F00"><?php echo form_error('year'); ?></div>
                                       </div>
                                    </div>
                                    
                                       
                                    
                                    
                                   
                                     <div class="control-group">
                                       <label class="control-label">Upload English Pdf</label>
                                       <div class="controls">
                                         <input type="file" name="image" />
                                         <div style="color:#F00"><?php echo form_error('image'); ?></div>
                                       </div>
                                       </div>
                                       
                                       <div class="control-group">
                                       <label class="control-label">Upload Arabic Pdf</label>
                                       <div class="controls">
                                         <input type="file" name="arabic" />
                                         <div style="color:#F00"><?php echo form_error('arabic'); ?></div>
                                       </div>
                                       </div>
                                       <input type="hidden" name="id" value="<?php echo $rec->sno; ?>">
                                       <input type="hidden" name="old_eng" value="<?php echo $rec->image; ?>">
                                       <input type="hidden" name="old_arabic" value="<?php echo $rec->arabic; ?>">
                                    <div class="form-actions">
                                   
                                       <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                    <a href="<?php echo base_url(); ?>admin/select_newsletter"><button type="button" class="btn">Cancel</button></a>
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
	