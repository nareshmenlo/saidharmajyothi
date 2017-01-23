<?php
include("includes/header.php");
?>
	<!-- END BEGIN STYLE CUSTOMIZER --> 
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							Add Projects 
                          
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
							<li><a href="">Add Projects</a></li>
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
								<h4><i class="icon-edit"></i>Add Projects</h4>
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
                                
                             <form action="<?php echo base_url(); ?>admin/add_projects" method="post" class="form-horizontal" enctype="multipart/form-data">
                                   
                                  
                                  
                                  <!--<div class="control-group">
                                       <label class="control-label">Select Project Type </label>
                                       <div class="controls">
                                         <select name="type"  id="category" class="medium m-wrap" value="<?php echo set_value('type'); ?>" required/>
                                         
                                       <option selected="selected" value="">[Select]</option>
                                       <?php
									   foreach($view_type as $rec)
									   {
									   ?>
                                       <option value="<?php echo $rec->sno; ?>"><?php echo $rec->type; ?></option>
                                                <?php } ?>
                                               </select>
                                       <div style="color:#F00"><?php echo form_error('type'); ?></div>
                                       </div>
                                    </div>-->
                                    
                                    
                                     <div class="control-group">
                                       <label class="control-label">Select Project Type </label>
                                       <div class="controls">
                                         <select name="cat_id"  id="category" class="medium m-wrap" value="<?php echo set_value('type'); ?>" required/>
                                         
                                       <option selected="selected" value="">[Select]</option>
                                       <?php
									   foreach($view_vategory as $cat)
									   {
									   ?>
                                       <option value="<?php echo $cat->sno; ?>"><?php echo $cat->name; ?></option>
                                                <?php } ?>
                                               </select>
                                       <div style="color:#F00"><?php echo form_error('type'); ?></div>
                                       </div>
                                    </div>
                                    
                                    <!--<div class="control-group">
                                       <label class="control-label">Select Project Location </label>
                                       <div class="controls">
                                         <select name="location"  id="" class="medium m-wrap" value="" required/>
                                         
                                       <option selected="selected" value="">[Select]</option>
                                       <?php
									   foreach($view_location as $loc)
									   {
									   ?>
                                       <option value="<?php echo $loc->sno; ?>"><?php echo $loc->name; ?></option>
                                                <?php } ?>
                                               </select>
                                       </div>
                                    </div>-->
                                    
                                     
                                  <!-- <div class="control-group">
                                       <label class="control-label"> Upcoming Project Date</label>
                                       <div class="controls">
                                         <input type="text" name="project_date" value="" class="m-wrap medium"  id="datetimepicker_mask" required/>
                                       </div>
                                       </div>-->
                                       
                                       <!--<div class="control-group" onClick='checkButton()'>
                                       <label class="control-label">Top News</label>
                                       <div class="controls">
                          <input type="radio" name="top_news" placeholder="Short Title" class="m-wrap medium" value="no" checked/>No <input type="radio" name="top_news" placeholder="Short Title" class="m-wrap medium" id="hellow" value="yes" />Yes
                                        <div style="color:#F00"><?php //echo form_error('short_title'); ?></div>  
                                       </div>
                                       </div>
                                       
                                       <div class="control-group" id="order" style="display:none;">
                                       <label class="control-label">Home Page  Priority </label>
                                       <div class="controls">
                                      <select name="priority"  id="" class="medium m-wrap" value="<?php echo set_value('priority'); ?>" onchange="funget(this.value)" />
                                         
                                       <option selected="selected" value="">[Select]</option>
                                       <?php
									  foreach($view_priority as $pri)
									   {
										   
									   ?>
                                       <option value="<?php echo $pri->priority; ?>"><?php echo $pri->priority; ?></option>
                                                <?php } ?>
                                               </select>
                                               <div style="color:#F00"><?php echo form_error('priority'); ?></div>
                                       </div>
                                    </div>-->
                                       
                                       <div class="control-group">
                                       <label class="control-label"> Project Title</label>
                                       <div class="controls">
                                         <input type="text" name="name" class="m-wrap medium" value="" required/>
                                       </div>
                                       </div>
                                       
                                       <div class="control-group">
                                       <label class="control-label"> Project Description</label>
                                       <div class="controls">
                                       <textarea type="text" name="content" /></textarea>
                                       </div>
                                       </div>
                                       
                                       
                                    
                                    <div class="control-group">
                                       <label class="control-label"> Image</label>
                                       <div class="controls">
                                         <input type="file" name="banner" value="" required/>
                                       </div>
                                       </div>
                                    </div>
                                    <div class="form-actions">
                                   
                                       <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                      <a href="<?php echo base_url(); ?>admin/select_projects"><button type="button" class="btn">Cancel</button></a>
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