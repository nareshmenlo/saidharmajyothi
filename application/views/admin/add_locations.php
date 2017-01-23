<?php
include("includes/header.php");
?>
	<!-- END BEGIN STYLE CUSTOMIZER --> 
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							Add Bin Locations
                          
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
							<li><a href="">Add Bin Locations</a></li>
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
								<h4><i class="icon-edit"></i>Add Bin Locations</h4>
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
                                
                             <form action="<?php echo base_url(); ?>admin/add_locations" method="post" class="form-horizontal" enctype="multipart/form-data">
                                   
                                   
                                   <div class="control-group">
                                       <label class="control-label">Select Area </label>
                                       <div class="controls">
                                         <select name="area"  id="category" class="medium m-wrap" value="<?php echo set_value('area'); ?>" 
                                         onchange="getaddress(this.value)">
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
                                    </div>
                                    
                                    
                                    <div id="state">
                                    </div>
                                    
                                     
                                    <div class="control-group">
                                       <label class="control-label">Bin Location</label>
                                       <div class="controls">
                           <textarea  name="category" placeholder="Address" class="m-wrap medium" ><?php echo set_value('category'); ?></textarea>
                               <div style="color:#F00"><?php echo form_error('category'); ?></div>  
                                       </div>
                                       </div>
                                    </div>
                                    <div class="form-actions">
                                   
                                       <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                      <a href="<?php echo base_url(); ?>admin/select_bin_locations"><button type="button" class="btn">Cancel</button></a>
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