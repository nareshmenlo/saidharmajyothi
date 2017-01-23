<?php
include("includes/header.php");
?>
	<!-- END BEGIN STYLE CUSTOMIZER --> 
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							Edit Projects 
                          
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
							<li><a href="">Edit Projects</a></li>
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
								<h4><i class="icon-edit"></i>Edit Projects</h4>
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
                                
                             <form action="<?php echo base_url(); ?>admin/edit_projects" method="post" class="form-horizontal" enctype="multipart/form-data">
                                   
                                     <?php
									 foreach($edit_banner as $rec)
									 {
									 ?>
                                     
                                     <!-- <div class="control-group">
                                       <label class="control-label">Select Project Type </label>
                                       <div class="controls">
                                         <select name="type"  id="category" class="medium m-wrap" value="<?php echo set_value('type'); ?>" />
                                         
                                       <option selected="selected" value="">[Select]</option>
                                       <?php
									   foreach($view_type as $row)
									   {
										   if($row->sno==$rec->type_id)
										   {
											   $st="selected";
										   }
										   else
										   {
											   $st="";
										   }
									   ?>
                                       <option value="<?php echo $row->sno; ?>" <?php echo $st; ?>><?php echo $row->type; ?></option>
                                                <?php } ?>
                                               </select>
                                       <div style="color:#F00"><?php echo form_error('type'); ?></div>
                                       </div>
                                    </div>-->
                                    
                                    
                                    <div class="control-group">
                                       <label class="control-label">Select Project Type </label>
                                       <div class="controls">
                                         <select name="cat_id"  id="category" class="medium m-wrap" value="<?php echo set_value('type'); ?>" />
                                         
                                       <option selected="selected" value="">[Select]</option>
                                       <?php
									   foreach($view_vategory as $cat)
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
                                       <div style="color:#F00"><?php echo form_error('cat_id'); ?></div>
                                       </div>
                                    </div>
                                    
                                    
                                      <!-- <div class="control-group">
                                       <label class="control-label"> Upcoming Project Date</label>
                                       <div class="controls">
                                         <input type="text" name="project_date" value="<?php echo $rec->project_date; ?>" id="datetimepicker_mask" required/>
                                       </div>
                                       </div>-->
                                       
                                       <!-- <div class="control-group" onClick='checkButton()'>
                                       <label class="control-label">Top News</label>
                                       <div class="controls">
                          <input type="radio" name="top_news" placeholder="Short Title" class="m-wrap medium"  value="no" <?php if($rec->top_news=='no'){ ?>checked <?php } ?>/>No <input type="radio" name="top_news" placeholder="Short Title" class="m-wrap medium" id="hellow" value="yes"  <?php if($rec->top_news=='yes'){ ?>checked <?php } ?>/>Yes
                                        <div style="color:#F00"><?php echo form_error('short_title'); ?></div>  
                                       </div>
                                       </div> 
                                       
                                       <div class="control-group" id="order" <?php if($rec->top_news=='yes'){ ?>style="display:block;"<?php } else
									{ ?>style="display:none;"<?php } ?>>
                                       <label class="control-label">Home Page  Priority </label>
                                       <div class="controls">
                         <select name="priority"  id="category" class="medium m-wrap" value="<?php echo set_value('type'); ?>" onchange="funget(this.value)">
                                       <option selected="selected" value="">[Select]</option> 
                                       <?php
									   foreach($view_priority as $pri)
									   {
										   if($pri->priority==$rec->priority)
										   {
											   $st="selected";
										   }
										   else
										   {
											   $st="";
										   }
									   ?>
                                       <option value="<?php echo $pri->priority; ?>" <?php echo $st; ?>><?php echo $pri->priority; ?></option>
                                                <?php } ?>
                                               </select>
                                       </div>
                                    </div>
                                       -->
                                       <div class="control-group">
                                       <label class="control-label"> Project Title</label>
                                       <div class="controls">
                                         <input type="text" name="name" value="<?php echo $rec->name; ?>" required/>
                                       </div>
                                       </div>
                                    
                                     <label class="control-label">Old Image</label>
                                    <div class="controls">
                                    
								<div class="thumbnail" style="width: 291px; height: 170px;">
                                
					<img src="<?php echo base_url(); ?>public/project/<?php echo $rec->image; ?>" width="231" height='140' alt="" />
													</div>
													</div>
                                                    
                                   <div class="space10"></div>
                                      
																<div class="fileupload fileupload-new" data-provides="fileupload">
                                                                <label class="control-label">New Image</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
                                                                         <input type="hidden" name="old_image" value="<?php echo $rec->image; ?>">
																		</span>
																		<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
																	</div>
																</div>
																<div class="clearfix"></div>
																<div class="controls">
																	
																	
																</div>
																<div class="space10"></div>
                                                                
                                       <div class="control-group">
                                       <label class="control-label"> Project Description</label>
                                       <div class="controls">
                                       <textarea type="text" name="content" /><?php echo stripslashes($rec->content); ?></textarea>
                                       </div>
                                       </div>
                                    </div>
                                    <div class="form-actions">
                                   
                                       <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                    <a href="<?php echo base_url(); ?>admin/select_projects"><button type="button" class="btn">Cancel</button></a>
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
<script type="text/javascript">
function checkButton(){
	//alert('dfjmdm');
if(document.getElementById('hellow').checked) 
{
	document.getElementById('order').style.display="block";
//alert("Box1 is checked");

}
else
{
	//alert("Box1 not checked");
	document.getElementById('order').style.display="none";
}
}

</script>	
<script>
function funget(sid)
{
	
var obj;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  obj=new XMLHttpRequest();
 // alert(obj);
  }
else
  {// code for IE6, IE5
  obj=new ActiveXObject("Microsoft.XMLHTTP")
  // alert(obj);
  }
   obj.open("post","<?php echo base_url(); ?>admin/getpriority?val="+sid,true);
   obj.send();
     obj.onreadystatechange=function()
  //function fun2()
{
//alert('obj.readyState');

  if(obj.readyState==4)
  {
	 //alert(obj.responseText);
	 if(obj.responseText==0)
	 {
		 
	 }
	 else
	 {
		 alert('This value is already assigned. Please select another one ');
	 }
	  
 
  }
  
}

	 
}

</script>