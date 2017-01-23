<?php
include("includes/header.php");
?>
	<!-- END BEGIN STYLE CUSTOMIZER --> 
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							Change Password
                            <small>user profile sample</small>
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
							<li><a href="">Change Password</a></li>
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
								<h4><i class="icon-edit"></i>Change Password</h4>
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
                                
                                   
                                     
                                    <div id="tab_3-3" class="tab-pane">
                                                    
													<div style="color:#F00;"><?php echo $this->session->flashdata('msg'); ?></div>
													
														<div style="height: auto;" id="accordion3-3" class="accordion collapse">
															<form method="post" action="<?php echo base_url(); ?>admin/Change_password">
																<label class="control-label">Current Password</label>
																<input type="password" class="m-wrap span8" name="old_password" 
                                                                value="<?php echo set_value('old_password'); ?>"/>
                                                               <span class="help-inline" style="color:#F00;"><?php echo form_error('old_password'); ?></span>

																<label class="control-label">New Password</label>
																<input type="password" class="m-wrap span8" name="new_password" 
                                                                value="<?php echo set_value('new_password'); ?>"/>
                                                               <span class="help-inline" style="color:#F00;"><?php echo form_error('new_password'); ?></span>

																<label class="control-label">Re-type New Password</label>
																<input type="password" class="m-wrap span8" name="confirm" 
                                                                value="<?php echo set_value('confirm'); ?>"/>
                                                         <span class="help-inline" style="color:#F00;"><?php echo form_error('confirm'); ?></span>

																<div class="submit-btn">
																	<button type="submit" class="btn blue"><i class="icon-ok"></i> Change Password</button>
																</div>
															</form>
														</div>
													</div>
                                    </div>
                                    
                                     
                                 
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
	