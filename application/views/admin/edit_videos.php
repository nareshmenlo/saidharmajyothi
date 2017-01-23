<?php
include("includes/header.php");
?>
	<!-- END BEGIN STYLE CUSTOMIZER --> 
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							Edit Videos 
                          
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
							<li><a href="">Edit Videos</a></li>
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
								<h4><i class="icon-edit"></i>Edit Videos</h4>
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
                                
                             <form action="<?php echo base_url(); ?>admin/edit_video" method="post" class="form-horizontal" enctype="multipart/form-data">
                                   
                                     <?php
									 foreach($edit_video as $rec)
									 {
									 ?>
                                     
                                     
<!--                                      <div class="control-group">
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
                                    </div>-->
                                    
                                    
                                    <!--<div class="control-group">
                                       <label class="control-label">Select Album </label>
                                       <div class="controls">
                                         <select name="cat_id"  id="category" class="medium m-wrap" value="<?php echo set_value('cat_id'); ?>">
                                       <option selected="selected" value="">[Select]</option>
                                       <?php
									   foreach($view_category as $cat)
									   {
										    if($cat->sno==$rec->cat_id)
										   {
											   $st="selected";
										   }
										   else
										   {
											   $st="";
										   }
									   ?>
                                       <option value="<?php echo $cat->sno; ?>" <?php echo $st; ?>><?php echo $cat->category; ?></option>
                                                <?php } ?>
                                               </select>
                                       <div style="color:#F00"><?php echo form_error('cat_id'); ?></div>
                                       </div>
                                    </div>-->
                                     
                                     
                                     
                                       <div class="control-group">
                                       <label class="control-label">Video Title</label>
                                       <div class="controls">
                                          <input type="text" name="name" placeholder="Name" class="m-wrap medium"  value="<?php echo $rec->name; ?>"/>
                                       </div>
                                       </div>
                                       
                                      <?php /*?> <div class="control-group">
                                       <label class="control-label">Select Month </label>
                                       <div class="controls">
                                         <select name="month"  id="category" class="medium m-wrap" value="<?php echo set_value('month'); ?>">
                                       <option selected="selected" value="">[Select]</option>
                                       <?php
									   foreach($view_month as $mon)
									   {
										  if($mon->month==$rec->month)
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
                                    </div><?php */?>
                                       
                                       <?php
									//echo $rec->vidio;
                                   $a=$rec->link;
								   
									$embed=preg_replace('/.+(\?|&)v=([a-zA-Z0-9-_]+).*/', 'http://youtube.com/watch?v=$2', $a);
									//echo $embed;exit;
									$st1=explode('v=',$embed);
									$st2=explode('&amp;',$st1[1]);
									$vidID = $st2[0];
									$vidID= explode('&',$vidID);
									//echo $vidID[0]; 
                                    ?>
                                    
                                       <div class="control-group">
                                       <label class="control-label">Old Video </label>
                                       <div class="controls">
                                           <iframe longdesc="http://img.youtube.com/vi/<?php echo $vidID[0]; ?>/2.jpg" width="300" height="200"  src="http://www.youtube.com/v/<?php echo $vidID[0]; ?>&autoplay=0&loop=1" wmode="transparent" frameborder="0" allowfullscreen></iframe>
                                       </div>
                                       </div>
                                       
                                       <div class="control-group">
                                       <label class="control-label">Video Link</label>
                                       <div class="controls">
                                          <input type="text" name="link" placeholder="Link" class="m-wrap medium"  value="<?php echo $rec->link; ?>"/>
                                       </div>
                                       </div>
                                    
                                     
                                    <input type="hidden" name="id" value="<?php echo $rec->sno; ?>">
                                                    
                                   
                                      
																
																<div class="clearfix"></div>
																<div class="controls">
																	
																	
																</div>
																<div class="space10"></div>
                                    </div>
                                    <div class="form-actions">
                                   
                                       <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                    <a href="<?php echo base_url(); ?>admin/select_video"><button type="button" class="btn">Cancel</button></a>
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
	