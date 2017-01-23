<?php
include("includes/header.php");
?>
<link href="<?php echo base_url(); ?>public/css/rstyle.css" type="text/css" rel="stylesheet" />

	<!-- END BEGIN STYLE CUSTOMIZER --> 
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							Projects 			
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
							<li><a href="">Projects </a></li>
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
								<h4><i class="icon-edit"></i> Projects   </h4>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="#portlet-config" data-toggle="modal" class="config"></a>
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
                            <?php
							foreach($view_banner as $rec)
							?>
							<div class="portlet-body">
								<div class="clearfix">
                                <div class="btn-group">
                                	<ul class="rlist">
                                   
                                    	<li>
                                <a href="<?php echo base_url(); ?>admin/project_over_view/<?php echo $rec->sno; ?>"><button id="sample_editable_1_new" class="rb">
										OVERVIEW</i>
										</button></a>
                                        </li>
                                        
                                          
                                        
                                        <li>
                                        	<a href="<?php echo base_url(); ?>admin/why_ramky/<?php echo $rec->sno; ?>"><button id="sample_editable_1_new">
								WHY RAMKY</i>
										</button></a>
                                        </li>
                                        <li>
                                        	<a href="<?php echo base_url(); ?>admin/amentics/<?php echo $rec->sno; ?>"><button id="sample_editable_1_new">
										AMENITIES
										</button></a>
                                        </li>
                                        <li>
                                        	<a href="<?php echo base_url(); ?>admin/specifications/<?php echo $rec->sno; ?>"><button id="sample_editable_1_new">
										SPECIFICATIONS
										</button></a>
                                        </li>
                                        <li>
                                        	<a href="<?php echo base_url(); ?>admin/location_map/<?php echo $rec->sno; ?>"><button id="sample_editable_1_new">
										LOCATION MAP
										</button></a>
                                        </li>
                                        <li>
                                        	<a href="<?php echo base_url(); ?>admin/layout/<?php echo $rec->sno; ?>"><button id="sample_editable_1_new">
										LAYOUT
										</button></a>
                                        </li>
                                        <li>
                                        	<a href="<?php echo base_url(); ?>admin/floor_planes/<?php echo $rec->sno; ?>"><button id="sample_editable_1_new">
										FLOOR PLANES
										</button></a>
                                        </li>
                                         <li>
                                        	<a href="<?php echo base_url(); ?>admin/e_brochure/<?php echo $rec->sno; ?>"><button id="sample_editable_1_new">
										E-BROCHURE
										</button></a>
                                        </li>
                                        
                                        <li>
                                        	<a href="<?php echo base_url(); ?>admin/slider/<?php echo $rec->sno; ?>"><button id="sample_editable_1_new">
										SLIDER IMAGES
										</button></a>
                                        </li>
                                        
                                        <li>
                                        	<a href="<?php echo base_url(); ?>admin/project_details/<?php echo $rec->sno; ?>"><button id="sample_editable_1_new" >
										PROJECT DETAILS</i>
										</button></a>
                                        </li>
                                        
                                    </ul>
                              
									</div>
                                    
                                    
									<div style="color:#F00;font-size:14px;margin-bottom:10px;">
                                     <?php echo $this->session->flashdata('msg'); ?></div>
									
								</div>
                                
                                <div style="font-size:20px;font-family:Verdana, Geneva, sans-serif;"><?php echo $rec->name; ?>:</div>
<p style="margin-top:10px;"><?php echo stripslashes($rec->content); ?></p>
<div class="btn-group">
<a href="<?php echo base_url(); ?>admin/add_over_view/<?php echo $rec->sno; ?>"><button id="sample_editable_1_new" class="btn green">Add New <i class="icon-plus"></i>
</button></a>
										
									</div>
								<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
									<thead>
										<tr>
											<th>sno</th>
                                           <th>Type</th>
                                           <th>BHK</th>
											<th>Size (sq. ft.)</th>
                                            <th>Price (Rs.)</th>
											<th>Tower</th>
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
										?>
											<td><?php echo $i; ?></td>
                                            <td><?php echo $row->type; ?></td>
                                            <td><?php echo $row->bhk; ?></td>
                                            <td><?php echo $row->size; ?></td>
                                            <td><?php echo $row->price; ?></td>
                                            <td><?php echo $row->tower; ?></td>
                                           <td><a class="edit" href="<?php echo base_url(); ?>admin/edit_projects_overview/<?php echo $row->sno; ?>/<?php echo $rec->sno;  ?>">Edit</a></td>
										    <td><a onclick="return confirm('Are You Sure')" class="delete"
                                             href="<?php echo base_url(); ?>admin/delete_projects_overview/<?php echo $row->sno; ?>/<?php echo $rec->sno;  ?>">Delete</a></td>
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
		