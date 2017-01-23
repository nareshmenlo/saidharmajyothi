<?php
include("includes/header.php");
?>
	<!-- END BEGIN STYLE CUSTOMIZER --> 
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							Edit Articles 
                          
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
							<li><a href="">Edit Articles</a></li>
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
								<h4><i class="icon-edit"></i>Edit Articles</h4>
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
                                
                             <form action="<?php echo base_url(); ?>admin/edit_scrolling" method="post" class="form-horizontal" enctype="multipart/form-data">
                                   
                                     <?php
									 foreach($edit_banner as $rec)
									 {
										$ext=$rec->image; 
										$explode=explode('.',$ext);
										$data=$explode[1];
									 ?>
                                   
                                   
                                   <!-- <div class="control-group">
                                       <label class="control-label">Category</label>
                                       <div class="controls">
                                         <select name="cat_id"  id="category" class="medium m-wrap" >
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
                                       
                                       </div>
                                    </div>-->
                                    
                                   
                                    <div class="control-group">
                                       <label class="control-label">Name</label>
                                       <div class="controls">
                                         <input type="text" name="name"  value="<?php echo $rec->name; ?>" class="medium m-wrap" required/>
                                       </div>
                                       </div>
                                       
                                        <?php
											if($rec->pdf!='')
											{
											?>
                                        <label class="control-label">Old Banner Image</label>
                                    <div class="controls">
                                    
								<div class="thumbnail" style="width: 291px; height: 170px;">
                                
					<img src="<?php echo base_url(); ?>public/scrolling/<?php echo $rec->pdf; ?>" style="width:200px; height:100px;" alt="" />
													</div>
													</div>
                                                    <?php } ?>
                                                    
                                    
                                      <div class="control-group">
                                       <label class="control-label">Upload New Banner Image</label>
                                       <div class="controls">
                                         <input type="file" name="pdf"  id="logo1" onchange="Checkfilesdd()"/>
                                       </div>
                                       </div>
                                       
                                       
                                       
                                           <?php
											if($data!='pdf' || $rec->image!='')
											{
											?>
                                        <label class="control-label">Old Image</label>
                                    <div class="controls">
                                    
								<div class="thumbnail" style="width: 291px; height: 170px;">
                                
					<img src="<?php echo base_url(); ?>public/scrolling/<?php echo $rec->image; ?>" style="width:200px; height:100px;" alt="" />
													</div>
													</div>
                                                    <?php } ?>
                                                    
                                    
                                      <div class="control-group">
                                       <label class="control-label">Upload New Image</label>
                                       <div class="controls">
                                         <input type="file" name="banner"  id="logo1" onchange="Checkfilesdd()"/>
                                       </div>
                                       </div>
                                       
                                       
                                        <div class="control-group">
                                       <label class="control-label">Description</label>
                                       <div class="controls">
                                         <textarea name="content"  /><?php echo stripslashes($rec->content); ?></textarea>
                                       </div>
                                       </div>
                                          
                                       <!--<div class="control-group">
                                       <label class="control-label">Banner Link</label>
                                       <div class="controls">
                                         <input type="text" name="link" value="<?php echo $rec->link; ?>" class="medium m-wrap" />
                                       </div>
                                       </div>-->
                                       
                                      
                                    <!--
                                     <label class="control-label">Old Image</label>
                                    <div class="controls">
                                    
								<div class="thumbnail" style="width: 291px; height: 170px;">
                                
					<img src="<?php echo base_url(); ?>public/scrolling/<?php echo $rec->image; ?>" width="231" height='140' alt="" />
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
																<div class="space10"></div>-->
                                      
                                       
                                       
                                    </div>
                                    <div class="form-actions">
                                  <input type="hidden" name="id" value="<?php echo $rec->sno; ?>">
                                  <input type="hidden" name="old_image" value="<?php echo $rec->image; ?>">
                                  <input type="hidden" name="old_pdf" value="<?php echo $rec->pdf; ?>">
                                       <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                    <a href="<?php echo base_url(); ?>admin/select_scrolling"><button type="button" class="btn">Cancel</button></a>
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
if(ext == "doc"  || ext == "docx" || ext == "DOC"  || ext == "DOCX")
{
return true;
} 
else
{
alert("Upload Docx  Files only");
document.getElementById('logo1').value="";
fup.focus();
return false;
}
}
</script>