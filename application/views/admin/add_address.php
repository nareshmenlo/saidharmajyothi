<?php
include("includes/header.php");
?>
	<!-- END BEGIN STYLE CUSTOMIZER --> 
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							Add Events
                          
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
							<li><a href="">Add  Events</a></li>
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
								<h4><i class="icon-edit"></i>Add Events</h4>
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
                                
                             <form action="<?php echo base_url(); ?>admin/add_address" method="post" class="form-horizontal" enctype="multipart/form-data">
                                   
                                   
                                   <!--<div class="control-group">
                                       <label class="control-label">Select Category </label>
                                       <div class="controls">
                                         <select name="area"  id="category" class="medium m-wrap" value="<?php echo set_value('area'); ?>">
                                       <option selected="selected" value="">[Select]</option>
                                       <?php
									   foreach($view_data as $rec)
									   {
									   ?>
                                       <option value="<?php echo $rec->sno; ?>"><?php echo $rec->category; ?></option>
                                                <?php } ?>
                                               </select>
                                       <div style="color:#F00"><?php echo form_error('area'); ?></div>
                                       </div>
                                    </div>-->
                                    
                                    
                                     <!--<div class="control-group">
                                       <label class="control-label">Select Service </label>
                                       <div class="controls">
                                         <select name="cat_id"  id="category" class="medium m-wrap" required>
                                       <option selected="selected" value="">[Select]</option>
                                       <?php
									   foreach($view_services as $cat)
									   {
									   ?>
                                       <option value="<?php echo $cat->sno; ?>"><?php echo $cat->name; ?></option>
                                                <?php } ?>
                                               </select>
                                       <div style="color:#F00"><?php echo form_error('area'); ?></div>
                                       </div>
                                    </div>-->
                                    
                                     
                                    <div class="control-group">
                                       <label class="control-label">Name</label>
                                       <div class="controls">
                           <input type="text" name="name" placeholder="Name" class="m-wrap medium" value="<?php echo set_value('name'); ?>" />
                               <div style="color:#F00"><?php echo form_error('name'); ?></div>  
                                       </div>
                                       </div>
                                       
                                       <div class="control-group">
                                       <label class="control-label">From Date Time</label>
                                       <div class="controls">
                           <input type="text" id="datetimepicker_mask" name="from_date" placeholder="" class="m-wrap medium" required />
                               <div style="color:#F00"><?php echo form_error('name'); ?></div>  
                                       </div>
                                       </div>
                                       
                                       
                                        <div class="control-group">
                                       <label class="control-label">To Date Time</label>
                                       <div class="controls">
                           <input type="text" id="datetimepicker_to" name="to_date" placeholder="" class="m-wrap medium" required />
                               <div style="color:#F00"><?php echo form_error('name'); ?></div>  
                                       </div>
                                       </div>
                                       
                                         <div class="control-group">
                                       <label class="control-label">Image</label>
                                       <div class="controls">
                                         <input type="file" name="banner" value="" required/>
                                       </div>
                                       </div>
                                       
                                       <div class="control-group">
                                       <label class="control-label">Venue Address</label>
                                       <div class="controls">
                                      <textarea class="medium m-wrap" name="content" value="<?php echo set_value('content'); ?>"></textarea> 
                                       <div style="color:#F00"><?php echo form_error('content'); ?></div> 
                                    </div>
                                    </div>
                                    
                                       
                                       
                                    </div>
                                    <div class="form-actions">
                                   
                                       <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
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