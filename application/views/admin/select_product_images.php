<?php
include("includes/header.php");
?>

	<!-- END BEGIN STYLE CUSTOMIZER --> 
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							View Images		
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
							<li><a href=""> Images</a></li>
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
								<h4><i class="icon-edit"></i> Images</h4>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<!--<a href="#portlet-config" data-toggle="modal" class="config"></a>-->
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
                           
							<div class="portlet-body">
								<div class="clearfix">
                                <div class="btn-group">
										<a href="<?php echo base_url(); ?>admin/add_images_view/<?php echo $sno; ?>"><button id="sample_editable_1_new" class="btn green">
										Add New <i class="icon-plus"></i>
										</button></a>
									</div>
                                    
                                    <div class="btn-group" style="float:right;">
										<a href="<?php echo base_url(); ?>admin/select_products"><button id="sample_editable_1_new" class="btn green">
										Back
										</button></a>
									</div>
									<div style="color:#F00;font-size:14px;margin-bottom:10px;">
                                     <?php echo $this->session->flashdata('msg'); ?></div>
									
								</div>
                                
                               

								<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
									<thead>
										<tr>
											<th>Sno</th>
                                         <!--   <th>Name</th>-->
                                           <th>Product Images</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                           
										</tr>
									</thead>
									<tbody>
                                    
                                      <?php
									  $i=1;
										foreach($view_data as $row)
										{
											//$date=$rec->project_date;
											//$get=date('d-F-Y',strtotime($date));
											//echo $post_rec->Job_Title;
											/*$ext=$row->image; 
											$explode=explode('.',$ext);
											$data=$explode[1];*/
										?>
											<td><?php echo $i; ?></td>
                                           <!-- <td><?php echo $row->name; ?></td>-->
                                             <?php
											//if($data=='pdf')
											{
											?>
                                            <!--<td><a class="vimeo" href="<?php echo base_url(); ?>public/pdoducts_img/<?php echo $row->image; ?>" >
                                            <img src="<?php echo base_url(); ?>public/img/pdf.jpg" height="80" width="200"></a></td>-->
                                            <?php //} else { ?>
                                            <td><a class="group4" href="<?php echo base_url(); ?>public/pdoducts_img/<?php echo $row->image; ?>" target="_blank"><img src="<?php echo base_url(); ?>public/pdoducts_img/<?php echo $row->image; ?>" height="80" width="200"></a></td>
                                            <?php } ?>
                                           <td><a class="edit" href="<?php echo base_url(); ?>admin/edit_products_images_view/<?php echo $row->sno; ?>/<?php echo $sno;  ?>">Edit</a></td>
										    <td><a onclick="return confirm('Are You Sure')" class="delete"
                                             href="<?php echo base_url(); ?>admin/delete_products_images/<?php echo $row->sno; ?>/<?php echo $sno;  ?>">Delete</a></td>
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
<?php
include('includes/footer.php');
?>
<!--<script src="<?php echo base_url(); ?>public/js/jquery.js"></script>
-->
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