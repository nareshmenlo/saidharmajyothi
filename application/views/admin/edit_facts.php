<?php
include("includes/header.php");
?>
	<!-- END BEGIN STYLE CUSTOMIZER --> 
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							Edit Images	 
                          
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
							<li><a href="">Edit Images</a></li>
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
								<h4><i class="icon-edit"></i>Edit Images</h4>
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
                                
                             <form action="<?php echo base_url(); ?>admin/edit_facts" method="post" class="form-horizontal" enctype="multipart/form-data" >
                                   
                                     <?php
									 foreach($edit_banner as $rec)
									 {
									 ?>
                                     
                                     
                                    <!-- <div class="control-group">
                                       <label class="control-label">Select Category </label>
                                       <div class="controls">
                                         <select name="category"  id="category" class="medium m-wrap" value="<?php echo set_value('type'); ?>" required onChange="getaddress(this.value)">
                                       <option selected="selected" value="">[Select]</option>
                                       <?php
									   foreach($view_category as $row)
									   {
										    if($row->sno==$rec->cat_id)
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
                                       <div style="color:#F00"><?php echo form_error('category'); ?></div>
                                       </div>
                                    </div>-->
                                    
                                    <!--<div id="state">
                                    <div class="control-group">
                                       <label class="control-label">Select Subcaregory </label>
                                       <div class="controls">
                                         <select name="address"  id="category" class="medium m-wrap" value="<?php echo set_value('type'); ?>">
                                       <option selected="selected" value="">[Select]</option>
                                       <?php
									   $result=$this->admin_model->get_address_name_id($rec->cat_id);
									   foreach($result as $add)
									   {
										   if($add->sno==$rec->sub_id)
										   {
											   $st="selected";
										   }
										   else
										   {
											   $st="";
										   }
									   ?>
                                       <option value="<?php echo $add->sno; ?>" <?php echo $st; ?>><?php echo $add->category; ?></option>
                                                <?php } ?>
                                               </select>
                                       <div style="color:#F00"><?php echo form_error('type'); ?></div>
                                       </div>
                                    </div>
                                    </div>-->
                                    
                                    
                                     
                                <div class="control-group">
                                       <label class="control-label"> Title</label>
                                       <div class="controls">
                                         <input type="text" name="name" value="<?php echo $rec->name; ?>" class="m-wrap medium" />
                                       </div>
                                       </div>    
                                     
                                    
                         <?php if($rec->image!='')  { ?>
                                     <label class="control-label">Old Image</label>
                                    <div class="controls">
                                    
								<div class="thumbnail" style="width: 291px; height: 170px;">
                                
					<img src="<?php echo base_url(); ?>public/facts/<?php echo $rec->image; ?>" style="width:200px; height:120px;" alt="" />
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
					  <input type="file" class="" name="banner" value="<?php echo $rec->image; ?>" id="logo1"   onchange="Checkfiles()"/>
                                                                          
																		</span>
																		<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
																	</div>
																</div>
                                                                
                                                                
                                                                 <?php /*?> <?php                
                         $data=explode('.',$rec->pdf);
					     $name=$data[0];
					     $ext=$data[1];
						 ?>
                         <?php if($rec->pdf!='' && $rec->pdf!='0' && $ext!='pdf')  { ?>
                                     <label class="control-label">Old Image/pdf</label>
                                    <div class="controls">
                                    
								<div class="thumbnail" style="width: 291px; height: 170px;">
                                
					<img src="<?php echo base_url(); ?>public/facts/<?php echo $rec->pdf; ?>" width="231" height='140' alt="" />
													</div>
													</div>
                                                    
                                   <div class="space10"></div>
                                   <?php } ?>
                                      
																<div class="fileupload fileupload-new" data-provides="fileupload">
                                                                <label class="control-label">New pdf</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																	<div class="input-append">
																		<div class="uneditable-input">
																			<i class="icon-file fileupload-exists"></i> 
																			<span class="fileupload-preview"></span>

																		</div>
																		<span class="btn btn-file">
																		<span class="fileupload-new">Select file</span>
																		<span class="fileupload-exists">Change</span>
								 <input type="file" class="" name="pdf" value="<?php echo $rec->pdf; ?>" id="logo2" onchange="Checkpdf()"/>
                                                                          <input type="hidden" name="id" value="<?php echo $rec->sno; ?>">
                                                                         <input type="hidden" name="old_image" value="<?php echo $rec->image; ?>">
                                                                         <input type="hidden" name="old_pdf" value="<?php echo $rec->pdf; ?>">
																		</span>
																		<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
																	</div>
																</div>
																<div class="clearfix"></div>
																<div class="controls">
												
                                                
                                                 					
																	
																</div>
																<div class="space10"></div><?php */?>
                                                                
                                                                <!--<div class="control-group">
                                       <label class="control-label"> Description</label>
                                       <div class="controls">
                                           <textarea  name="content" ><?php echo stripslashes($rec->content); ?></textarea>
                                       </div>
                                       </div>-->
                                       
                                    </div>
                                    <div class="form-actions">
                                   <input type="hidden" name="id" value="<?php echo $rec->sno; ?>">
                                   <input type="hidden" name="old_image" value="<?php echo $rec->image; ?>">
                                       <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                    <a href="<?php echo base_url(); ?>admin/select_facts"><button type="button" class="btn">Cancel</button></a>
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


<script>
function getaddress(sid)
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
   obj.open("post","<?php echo base_url(); ?>admin/getaddress?val="+sid,true);
   obj.send();
     obj.onreadystatechange=function()
  //function fun2()
{


  if(obj.readyState==4)
  {
  document.getElementById('state').innerHTML=obj.responseText;
  }
  else
  {
	    document.getElementById('state').innerHTML="";

  }
}

	 
}

</script>	


<script language="javascript">
function Checkfiles()
{
var fup = document.getElementById('logo1');
var fileName = fup.value;
var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
if(ext == "gif" || ext == "GIF" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG" || ext == "png" || ext == "PNG")
{
return true;
} 
else
{
alert("Upload Gif or Jpg or Jpeg or Png images only");
fup.focus();
return false;
}
}
</script>


<script language="javascript">
function Checkpdf()
{
var fup = document.getElementById('logo2');
var fileName = fup.value;
var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
if(ext == "dox" || ext == "docx" || ext == "pdf")
{
return true;
} 
else
{
alert("Upload pdf or doc or docx  Formats only");
fup.focus();
return false;
}
}
</script>