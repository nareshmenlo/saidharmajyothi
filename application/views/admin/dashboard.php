<?php
if($this->session->userdata('logged_in'))
{
	$session_data =$this->session->userdata('logged_in');
	
?>
<?php
include('includes/header.php');
?>
<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							Dashboard	
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
							<li><a href="">Dashboard</a></li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
                
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->

	<div class="tab-pane profile-classic row-fluid" id="tab_1_2">
    <div style="color:#F00;font-size:14px;margin-bottom:10px;">
     </div></div>
   
    <h2>welcome To <?php echo $session_data['username']; ?></h2>
    </div>
    </div>
    <?php
	include('includes/footer.php');
	?>
	<?php } else {
		redirect('admin','refresh');
	}
    
	 ?>