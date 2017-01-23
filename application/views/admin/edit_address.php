<?php
include("includes/header.php");
?>
	<!-- END BEGIN STYLE CUSTOMIZER --> 
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							Edit Events
                          
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
							<li><a href="">Edit Events</a></li>
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
								<h4><i class="icon-edit"></i>Edit Events</h4>
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
                                
                             <form action="<?php echo base_url(); ?>admin/edit_address" method="post" class="form-horizontal" enctype="multipart/form-data">
                                   <?php
								   foreach($view_category as $rec)
								   ?>
                                   
                                   <?php /*?><div class="control-group">
                                       <label class="control-label">Select Category </label>
                                       <div class="controls">
                                         <select name="area"  id="category" class="medium m-wrap" value="<?php echo set_value('type'); ?>">
                                       <option selected="selected" value="">[Select]</option>
                                       <?php
									   foreach($view_data as $row)
									   {
										   if($row->sno==$rec->area)
										   {
											   $st="selected";
										   }
										   else
										   {
											   $st="";
										   }
									   ?>
                                       <option value="<?php echo $row->sno; ?>" <?php echo $st; ?>><?php echo $row->category; ?></option>
                                                <?php } ?>
                                               </select>
                                       <div style="color:#F00"><?php echo form_error('type'); ?></div>
                                       </div>
                                    </div><?php */?>
                                    
                                    
                                     <!--<div class="control-group">
                                       <label class="control-label">Select Service </label>
                                       <div class="controls">
                                         <select name="cat_id"  id="category" class="medium m-wrap" >
                                       <option selected="selected" value="">[Select]</option>
                                       <?php
									   foreach($view_services as $cat)
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
                                       <option value="<?php echo $cat->sno; ?>" <?php echo $st; ?>><?php echo $cat->name; ?></option>
                                                <?php } ?>
                                               </select>
                                       <div style="color:#F00"><?php echo form_error('type'); ?></div>
                                       </div>
                                    </div>-->
                                    
                                     
                                    <div class="control-group">
                                       <label class="control-label">Name</label>
                                       <div class="controls">
                           <input type="text" name="name" placeholder="Name" class="m-wrap medium" value="<?php echo $rec->name; ?>" />
                               <div style="color:#F00"><?php echo form_error('name'); ?></div>  
                                       </div>
                                       </div>
                                       
                                       <div class="control-group">
                                       <label class="control-label">From Date</label>
                                       <div class="controls">
                       <input type="text" id="datetimepicker_mask" name="from_date" placeholder="Name" class="m-wrap medium" value="<?php echo $rec->from_date; ?>" />
                               <div style="color:#F00"><?php echo form_error('from_date'); ?></div>  
                                       </div>
                                       </div>
                                       
                                       
                                        <div class="control-group">
                                       <label class="control-label">To Date</label>
                                       <div class="controls">
                           <input type="text" id="datetimepicker_to" name="to_date" placeholder="Name" class="m-wrap medium" value="<?php echo $rec->to_date; ?>" />
                               <div style="color:#F00"><?php echo form_error('to_date'); ?></div>  
                                       </div>
                                       </div>
                                       
                                       
                                        <?php
											if($rec->image!='')
											{
											?>
                                        <label class="control-label">Old  Image</label>
                                    <div class="controls">
                                    
								<div class="thumbnail" style="width: 291px; height: 170px;">
                                
					<img src="<?php echo base_url(); ?>public/address/<?php echo $rec->image; ?>" style="width:200px; height:100px;" alt="" />
													</div>
													</div>
                                                    <?php } ?>
                                                    
                                    
                                      <div class="control-group">
                                       <label class="control-label">New  Image</label>
                                       <div class="controls">
                                         <input type="file" name="banner"  id="logo1" onchange="Checkfilesdd()"/>
                                       </div>
                                       </div>
                                       
                                       
                                       
                                       <div class="control-group">
                                       <label class="control-label">Venue Address</label>
                                       <div class="controls">
                                      <textarea class="medium m-wrap" name="content"><?php echo stripslashes($rec->content); ?></textarea> 
                                       <div style="color:#F00"><?php echo form_error('content'); ?></div> 
                                    </div>
                                    </div>
                                       
                                       
                                    </div>
                                    <div class="form-actions">
                                    <input type="hidden" name="old_image" value="<?php echo $rec->image; ?>">
                                       <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                       <input type="hidden" name="id" value="<?php echo $rec->sno; ?>">
                                      <a href="<?php echo base_url(); ?>admin/select_address"><button type="button" class="btn">Cancel</button></a>
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
	
    
    <script src="<?php echo base_url(); ?>public/datetimepicker-master/jquery.datetimepicker.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>public/datetimepicker-master/jquery.datetimepicker.css" type="text/css" media="screen"/>
<script>
jQuery('#datetimepicker_mask').datetimepicker({
lang:'de',
i18n:{
de:{
months:[
'January','February','March','April',
'May','June','July','August',
'September','Octomber','November','December',
],
dayOfWeek:[
"Sun", "Mon", "Tue", "Wed", 
"Thu", "Fri", "Sat",
]
}
},
timepicker:true,
format:'Y-m-d H:i'
}); 
</script> 


<script>
jQuery('#datetimepicker_to').datetimepicker({
lang:'de',
i18n:{
de:{
months:[
'January','February','March','April',
'May','June','July','August',
'September','Octomber','November','December',
],
dayOfWeek:[
"Sun", "Mon", "Tue", "Wed", 
"Thu", "Fri", "Sat",
]
}
},
timepicker:true,
format:'Y-m-d H:i'
}); 
</script> 