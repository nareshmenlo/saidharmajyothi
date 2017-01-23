<?php
include("includes/header.php");
?>
	<!-- END BEGIN STYLE CUSTOMIZER --> 
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							View Contact Details			
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
							<li><a href="">View Contact Details</a></li>
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
								<h4><i class="icon-edit"></i>View Contact Details</h4>
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
										<a href="<?php echo base_url(); ?>admin/add_group_view"><button id="sample_editable_1_new" class="btn green">
										Add New <i class="icon-plus"></i>
										</button></a>
									</div>
									<div style="color:#F00;font-size:14px;margin-bottom:10px;">
                                     <?php echo $this->session->flashdata('msg'); ?></div>
									
								</div>
								<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
									<thead>
										<tr>
											<th>sno</th>
                                            <!--<th>Mobile Number</th>-->
											<th>Phone Number</th>
                                            <th>Email</th>
                                            <th>Fax Number</th>
                                            <th>Address</th>
										   <!-- <th>Delete</th>-->
											<th>Edit</th>
                                           
										</tr>
									</thead>
									<tbody>
                                      <?php
									  $i=1;
										foreach($view_category as $rec)
										{
											//echo $post_rec->Job_Title;
										
										
										?>
										
											<td><?php echo $i; ?></td>
                                            <!--<td><?php echo ($rec->name); ?></td>-->
											<td><?php echo $rec->phone; ?></td>
                                            <td><?php echo $rec->type; ?></td>
                                            <td><?php echo $rec->fax; ?></td>
                                            <td><?php echo stripslashes($rec->address); ?></td>
                                          <!--<td><a onclick="return confirm('Are You Sure')" class="delete"
                                             href="<?php echo base_url(); ?>admin/delete_group/<?php echo  $rec->sno; ?>">Delete</a></td>-->
                            
										<td><a 
                                             href="<?php echo base_url(); ?>admin/edit_group_view/<?php echo  $rec->sno; ?>">Edit</a></td>
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