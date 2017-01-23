<?php
include("includes/header.php");
?>
	<!-- END BEGIN STYLE CUSTOMIZER --> 
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							Add Audio Gallery
                          
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
							<li><a href="">Add Audio Gallery</a></li>
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
								<h4><i class="icon-edit"></i>Add Audio Gallery</h4>
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
                                
                             <form action="<?php echo base_url(); ?>admin/add_testimonials" method="post" class="form-horizontal" enctype="multipart/form-data">
                                   
                                   
                                   <div class="control-group">
                                       <label class="control-label">Select Language</label>
                                       <div class="controls">
                                         <select name="lan_id"  id="category" class="medium m-wrap"  required>
                                       <option selected="selected" value="">[Select]</option>
                                       <option value="1">English</option>
                                       <option value="2">Telugu</option>
                                               </select>
                                       </div>
                                    </div>
                                    
                                    
                                   <div class="control-group">
                                       <label class="control-label"> Name</label>
                                       <div class="controls">
                                         <input type="text" name="name" value="<?php echo set_value('name'); ?>" class="medium m-wrap" />
                                         <div style="color:#F00"><?php echo form_error('name'); ?></div>
                                       </div>
                                       </div>
                                       
                                     <!--  <div class="control-group">
                                       <label class="control-label"> Qualification</label>
                                       <div class="controls">
                                         <input type="text" name="qualification" value="<?php echo set_value('qualification'); ?>" class="medium m-wrap" />
                                         <div style="color:#F00"><?php echo form_error('qualification'); ?></div>
                                       </div>
                                       </div>-->
        
                                      <div class="control-group">
                                       <label class="control-label">Id</label>
                                       <div class="controls">
                                         <input type="text" name="link" value="<?php echo set_value('link'); ?>" class="medium m-wrap" Placeholder="17360861"/>
                                         <div style="color:#F00"><?php echo form_error('link'); ?></div>
                                       </div>
                                       </div>
                                     <!--  
                                       <div class="control-group">
                                       <label class="control-label">Image</label>
                                       <div class="controls">
                                         <input type="file" name="banner" id="logo1"   onchange="Checkfiles()"  required/>
                                         <div style="color:#F00"><?php echo form_error('banner'); ?></div>
                                       </div>
                                       </div>-->
                                       
                                      <!-- <div class="control-group">
                                       <label class="control-label"> Description</label>
                                       <div class="controls">
                                         <textarea name="content" /><?php echo set_value('content'); ?></textarea>
                                         <div style="color:#F00"><?php echo form_error('content'); ?></div>
                                       </div>
                                       </div>-->
                                       
                                       
                                    </div>
                                    <div class="form-actions">
                                   
                                       <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                      <a href="<?php echo base_url(); ?>admin/select_testimonials"><button type="button" class="btn">Cancel</button></a>
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
<script language="javascript">
function Checkfiles()
{
var fup = document.getElementById('logo1');
var fileName = fup.value;
var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
if(ext == "jpg" || ext == "jpeg" || ext == "gif" || ext == "png" || ext == "JPG" || ext == "JPEG" || ext == "GIF" || ext == "PNG")
{
return true;
} 
else
{
alert("Upload jpg or gif or png or jpeg Formats only");
fup.focus();
return false;
}
}
</script>