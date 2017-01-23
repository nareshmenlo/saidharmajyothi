<?php
include("includes/header.php");
?>
	<!-- END BEGIN STYLE CUSTOMIZER --> 
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							CMS Content				
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
							<li><a href="<?php echo base_url(); ?>admin/select_content">View Content</a></li>
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
								<h4><i class="icon-edit"></i>View Content</h4>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<!--<a href="#portlet-config" data-toggle="modal" class="config"></a>-->
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body">
								<div class="clearfix">
                                  <!--<div class="btn-group">
										<a href="<?php echo base_url(); ?>admin/add_content_view"><button id="sample_editable_1_new" class="btn green">
										Add New <i class="icon-plus"></i>
										</button></a>
									</div>-->
									<div style="color:#F00;font-size:14px;margin-bottom:10px;">
                                     <?php echo $this->session->flashdata('msg'); ?></div>
									
								</div>
								<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
									<thead>
										<tr>
											<th>Sno</th>
                                            <th>Content Name</th>
                                             <th>Image</th>
											<!--<th>content</th>-->
                                            <th>Content</th>
											<th>Edit</th>
											<!--<th>Delete</th>-->
                                           
										</tr>
									</thead>
									<tbody>
                                      <?php
									  $i=1;
										foreach($view_content as $content_rec)
										{
											//echo $post_rec->Job_Title;
										
										
										?>
										
											<td><?php echo $content_rec->content_id; ?></td>
                                            <td><?php echo $content_rec->content_name; ?></td>
                                            <?php if($content_rec->image!='') { ?>
                            <td><img src="<?php echo base_url(); ?>public/content/<?php echo $content_rec->image; ?>" style="width:200px; height:120px;"></td><?php } else { ?>
                                  <td></td><?php } ?>
											<!--<td><?php echo $content_rec->content; ?></td>-->
                                            <td><a class="vimeo" href="<?php echo base_url(); ?>admin/view_content_popup/<?php echo $content_rec->content_id; ?>"
                                             title="">View</a></td>
                                            
                             <td><a class="edit" href="<?php echo base_url(); ?>admin/edit_content_view/<?php echo $content_rec->content_id;  ?>">Edit</a></td>
										<!--<td><a onclick="return confirm('Are You Sure')" class="delete"
                                             href="<?php echo base_url(); ?>admin/delete_content/<?php echo  $content_rec->content_id; ?>">Delete</a></td>-->
									</tbody>
                                     <?php $i++;  } ?>
								</table>
							</div>
						</div>
						<!-- END EXAMPLE TABLE PORTLET-->
					</div>
				     </div>
					</div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                   
                 
<?php
include('includes/footer.php');
?>

<link rel="stylesheet" href="<?php echo base_url(); ?>public/style/colorbox.css" />
<script src="<?php echo base_url(); ?>public/js/jquery.colorbox.js"></script>
<script>
$(document).ready(function(){
//Examples of how to assign the Colorbox event to elements
$(".group1").colorbox({rel:'group1'});
$(".group2").colorbox({rel:'group2', transition:"fade"});
$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
$(".group4").colorbox({rel:'group4', slideshow:true});
$(".ajax").colorbox();
$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
$(".inline").colorbox({inline:true, width:"50%"});
$(".callbacks").colorbox({
	onOpen:function(){ alert('onOpen: colorbox is about to open'); },
	onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
	onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
	onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
	onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
});

$('.non-retina').colorbox({rel:'group5', transition:'none'})
$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});

//Example of preserving a JavaScript event for inline calls.
$("#click").click(function(){ 
	$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
	return false;
});
});
</script>