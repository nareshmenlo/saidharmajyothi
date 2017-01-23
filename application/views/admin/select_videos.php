<?php
include("includes/header.php");
?>

	<!-- END BEGIN STYLE CUSTOMIZER --> 
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							Videos		
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
							<li><a href="">Videos</a></li>
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
								<h4><i class="icon-edit"></i> Videos </h4>
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
										<a href="<?php echo base_url(); ?>admin/add_videos_view"><button id="sample_editable_1_new" class="btn green">
										Add New <i class="icon-plus"></i>
										</button></a>
									</div>
									<div style="color:#F00;font-size:14px;margin-bottom:10px;">
                                     <?php echo $this->session->flashdata('msg'); ?></div>
									
								</div>
								<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
									<thead>
										<tr>
											<th>Sno</th>
                                           <!-- <th>Category</th>-->
                                            <th>Video Title</th>
                                          <!-- <th>Month</th>
                                           <th>Year</th>-->
											<th>Video</th>
                                            <th>Created Date</th>
                                           <!-- <th>View</th>-->
											<th>Edit</th>
											<th>Delete</th>
                                           
										</tr>
									</thead>
									<tbody>
                                      <?php
									  $i=$page+1;
										foreach($view_banner as $rec)
										{
											//echo $post_rec->Job_Title;
										?>
											<td><?php echo $i; ?></td>
                                           <!-- <td><?php echo $rec->category; ?></td>-->
                                            <td><?php echo $rec->name; ?></td>
                                            <!--<td><?php echo $rec->month; ?></td>
                                            <td><?php echo $rec->year; ?></td>-->
                                            <td> <?php
									//echo $rec->vidio;
                                   $a=$rec->link;
								   
									$embed=preg_replace('/.+(\?|&)v=([a-zA-Z0-9-_]+).*/', 'http://youtube.com/watch?v=$2', $a);
									//echo $embed;exit;
									$st1=explode('v=',$embed);
									$st2=explode('&amp;',$st1[1]);
									$vidID = $st2[0];
									$vidID= explode('&',$vidID);
									//echo $vidID[0]; 
                                    ?>
                                    <iframe longdesc="http://img.youtube.com/vi/<?php echo $vidID[0]; ?>/2.jpg" width="300" height="200"  src="http://www.youtube.com/v/<?php echo $vidID[0]; ?>&autoplay=0&loop=1" wmode="transparent" frameborder="0" allowfullscreen></iframe>

                                    

                                            </td>
                                            <!--<td><?php echo $rec->content; ?></td>-->
                                            
                                            <td><?php echo $rec->date; ?></td>
                                            
                                             
                             <td><a class="edit" href="<?php echo base_url(); ?>admin/edit_video_view/<?php echo $rec->sno;  ?>">Edit</a></td>
										<td><a onclick="return confirm('Are You Sure')" class="delete"
                                             href="<?php echo base_url(); ?>admin/delete_video/<?php echo  $rec->sno; ?>">Delete</a></td>
									 </tbody>
                                     <?php $i++;  } ?>
								     </table>
                                     <?php echo $links; ?>
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

		