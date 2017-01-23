<?php
include("includes/header.php");
?>
	<!-- END BEGIN STYLE CUSTOMIZER --> 
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							Edit Audio Gallery 
                          
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
							<li><a href="">Edit Audio Gallery</a></li>
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
								<h4><i class="icon-edit"></i>Edit Audio Gallery</h4>
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
                                
                             <form action="<?php echo base_url(); ?>admin/edit_testimonial" method="post" class="form-horizontal" enctype="multipart/form-data">
                                   
                                     <?php
									 foreach($edit_banner as $rec)
									 {
									 ?>
                                     
                                      <div class="control-group">
                                       <label class="control-label">Select Language</label>
                                       <div class="controls">
                                       <select name="lan_id"  id="category" class="medium m-wrap"  required>
                                       <option selected="selected" value="">[Select]</option>
                                       <option value="1" <?php if($rec->lan_id==1) { ?> selected <?php } ?>>English</option>
                                       <option value="2" <?php if($rec->lan_id==2) { ?> selected <?php } ?>>Telugu</option>
                                       </select>
                                       </div>
                                    </div>
                                     
                                     <div class="control-group">
                                       <label class="control-label">Name</label>
                                       <div class="controls">
                                         <input type="text" name="name" value="<?php echo $rec->name; ?>" class="medium m-wrap" />
                                       </div>
                                       </div>
                                       
                                      <!--  <div class="control-group">
                                       <label class="control-label"> Qualification</label>
                                       <div class="controls">
                                         <input type="text" name="qualification" value="<?php echo $rec->qualification; ?>" class="medium m-wrap" />
                                         <div style="color:#F00"><?php echo form_error('name'); ?></div>
                                       </div>
                                       </div>-->
                                       
                                       
                                      <!--   <div class="control-group">
                                       <label class="control-label"> Upload Pdf</label>
                                       <div class="controls">
                                         <input type="file" name="banner" id="logo1"   onchange="Checkfiles()"/>
                                         <div style="color:#F00"><?php echo form_error('banner'); ?></div>
                                       </div>
                                       </div>-->
                                       
                                       <div class="control-group">
                                       <label class="control-label">Id</label>
                                       <div class="controls">
                                         <input type="text" name="link" value="<?php echo $rec->link; ?>" class="medium m-wrap" Placeholder="17360861"/>
                                       </div>
                                       </div>
                                    
                                 <?php /*?>   <?php
									if($rec->image!="")
									{
									?>
                                     <label class="control-label">Old Image</label>
                                    <div class="controls">
                                    
								<div class="thumbnail" style="width: 291px; height: 170px;">
                                
					<img src="<?php echo base_url(); ?>public/testimonial/<?php echo $rec->image; ?>" width="231" height='140' alt="" />
													</div>
													</div>
                                                    <?php } ?>
                                                    
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
                                                                          
																		</span>
																		<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
																	</div>
																</div>
																<div class="clearfix"></div>
																<div class="controls">
																	
																	
																</div>
																<div class="space10"></div><?php */?>
                                                                
                                      <!-- <div class="control-group">
                                       <label class="control-label"> Description</label>
                                       <div class="controls">
                                         <textarea name="content"  /><?php echo stripslashes($rec->content); ?></textarea>
                                       </div>
                                       </div>-->
                                       
                                       
                                    </div>
                                    <div class="form-actions">
                                   <input type="hidden" name="id" value="<?php echo $rec->sno; ?>">
                                    <input type="hidden" name="old_image" value="<?php echo $rec->image; ?>">
                                       <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                    <a href="<?php echo base_url(); ?>admin/select_testimonials"><button type="button" class="btn">Cancel</button></a>
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