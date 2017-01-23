<?php
include("includes/header.php");
?>
	<!-- END BEGIN STYLE CUSTOMIZER --> 
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							Add Articles
                          
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
							<li><a href="">Add Articles</a></li>
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
								<h4><i class="icon-edit"></i>Add Articles</h4>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="#portlet-config" data-toggle="modal" class="config"></a>
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body">
								
								<div class="tab-content">
                              <div class="tab-pane active" id="portlet_tab1">
                                 <!-- BEGIN FORM-->
                                
                             <form action="<?php echo base_url(); ?>admin/add_scrolling" method="post" class="form-horizontal" enctype="multipart/form-data">
                                   
                                   
                                   
                                   <!-- <div class="control-group">
                                       <label class="control-label">Category</label>
                                       <div class="controls">
                                         <select name="cat_id"  id="category" class="medium m-wrap" required>
                                       <option selected="selected" value="">[Select]</option>
                                       <?php
									   foreach($view_category as $cat)
									   {
									   ?>
                                       <option value="<?php echo $cat->sno; ?>"><?php echo $cat->category; ?></option>
                                                <?php } ?>
                                               </select>
                                       
                                       </div>
                                    </div>-->
                                    
                                    
                                   <div class="control-group">
                                       <label class="control-label">Name</label>
                                       <div class="controls">
                                         <input type="text" name="name"  class="medium m-wrap" required/>
                                       </div>
                                       </div>
                                       
                                    
                                    
                                     <div class="control-group">
                                       <label class="control-label"> Upload Banner Image</label>
                                       <div class="controls">
                                         <input type="file" name="pdf"  id="logo1" onchange="Checkfilessd()" required/>
                                       </div>
                                       </div>
                                       
                                       
                                    <div class="control-group">
                                       <label class="control-label"> Upload Image</label>
                                       <div class="controls">
                                         <input type="file" name="banner"  id="logo1" onchange="Checkfilessd()" required/>
                                       </div>
                                       </div>
                                       
                                       
                                       
                                       
                                        <div class="control-group">
                                       <label class="control-label">Description</label>
                                       <div class="controls">
                                         <textarea name="content"  /><?php echo set_value('content'); ?></textarea>
                                         <div style="color:#F00"><?php echo form_error('content'); ?></div>
                                       </div>
                                       </div>
                                       
                                       
                                       
                                       
                                      <!-- <div class="control-group">
                                       <label class="control-label">Banner Link</label>
                                       <div class="controls">
                                         <input type="text" name="link" value="" class="medium m-wrap" required/>
                                       </div>
                                       </div>-->
                                       
                                       
                                      
                                       
                                       
                                    </div>
                                    <div class="form-actions">
                                   
                                       <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                      <a href="<?php echo base_url(); ?>admin/select_scrolling"><button type="button" class="btn">Cancel</button></a>
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