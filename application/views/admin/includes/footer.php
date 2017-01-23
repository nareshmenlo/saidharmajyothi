   
                                <div class="footer">
		2015 &copy; Admin Panel.
		<div class="span pull-right">
			
		</div>
	</div>
    
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS -->
	<!-- Load javascripts at bottom, this will reduce page load time -->
	<script src="<?php echo base_url(); ?>public/assets/js/jquery-1.8.3.min.js"></script>			
	<script src="<?php echo base_url(); ?>public/assets/breakpoints/breakpoints.js"></script>			
	<script src="<?php echo base_url(); ?>public/assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js"></script>	
	<script src="<?php echo base_url(); ?>public/assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>public/assets/js/jquery.blockui.js"></script>
	<script src="<?php echo base_url(); ?>public/assets/js/jquery.cookie.js"></script>
	<script src="<?php echo base_url(); ?>public/assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public/assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public/assets/uniform/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public/assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>	
	<script type="text/javascript" src="<?php echo base_url(); ?>public/assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/assets/assets/data-tables/jquery.dataTables.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public/assets/assets/data-tables/DT_bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/assets/gritter/js/jquery.gritter.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public/assets/js/jquery.pulsate.min.js"></script>
	<!-- ie8 fixes -->
	<!--[if lt IE 9]>
	<script src="assets/js/excanvas.js"></script>
	<script src="assets/js/respond.js"></script>
	<![endif]-->
	<script src="<?php echo base_url(); ?>public/assets/js/app.js"></script>		
	<script>
		jQuery(document).ready(function() {			
			// initiate layout and plugins
			App.setPage('calendar');
			App.init();
		});
	</script>
    <script>
		jQuery(document).ready(function() {			
			// initiate layout and plugins
			App.setPage("table_editable");
			App.init();
		});
	</script>