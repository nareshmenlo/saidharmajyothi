<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0 ">
<title>Contact Us</title>
<?php include 'headstyles.php' ?>
</head>
<body>
<!-- wrapper -->
<div id="wrapper">
  <!-- header -->
  <header id="header">
    <!-- topbar -->
    <?php include 'header.php' ?>
  </header>
 <section id="page-info" class="container-fluid">
			<div class="row">
				<div class="img-area">
					<div class="holder"><img src="<?php echo base_url(); ?>public/images/subpagebanner5.jpg" width="1600" height="264" alt="" />
					</div>
				</div>
				<div class="textholder">
					<div class="container textblock">
						<div class="block">							
							<div class="page-title">
								<div class="holder">
									<h1>Contact Us</h1>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
  <!-- main -->
  <main id="main" role="main" class="home">
    <!-- sermon -->    
    <div class="container topmargpad">
      <div class="col-xs-12" id="Contact-form">
						<div class="row">
                        	<?php include 'contactleft.php' ?>
							<div class="col-md-5 col-sm-5 col-xs-12">
								<form role="form" class="form-widget" method="post" action="<?php echo base_url(); ?>contactus/contact_form">
									<div class="form-group">
										<div class="label-area">
											<span class="required">Required</span>
											<label for="name">Name</label>
										</div>
										<input type="text" class="form-control" name="name" value="<?php echo set_value('name'); ?>">
                                       <div style="color:#F00;"><?php echo form_error('name'); ?></div>
									</div>
									<div class="form-group">
										<div class="label-area">
											<span class="required">Required</span>
											<label for="email">Email Address</label>
										</div>
										<input type="email" class="form-control" name="email" value="<?php echo set_value('email'); ?>">
                                         <div style="color:#F00;"><?php echo form_error('email'); ?></div>
									</div>
									<div class="form-group">
										<div class="label-area">
											<label for="name">pHONE nuMBER</label>
										</div>
										<input type="text" class="form-control" name="mobile" value="<?php echo set_value('mobile'); ?>">
                                         <div style="color:#F00;"><?php echo form_error('mobile'); ?></div>
									</div>
                                    
                                    
                                    
                                    
                                    
									<div class="form-group">
										<div class="label-area">
											<label for="name">Enter Your Message</label>
										</div>
										<textarea class="form-control" name="message"><?php echo set_value('message'); ?></textarea>
                                         <div style="color:#F00;"><?php echo form_error('message'); ?></div>
									</div>
                                    
                                    <div class="form-group">
										<div class="label-area">
											<label for="name">Captcha Code</label>
										</div>
										 <img src="<?php echo base_url(); ?>signup/get_captcha" />
									</div>
                                    
                                    <div class="form-group">
										<div class="label-area">
											<label for="name">Enter Code</label>
										</div>
										<input type="text" class="form-control" name="captcha" value="<?php echo set_value('captcha'); ?>">
                                         <div style="color:#F00;"><?php echo form_error('captcha'); ?></div>
									</div>
                                    
                                    
									<button type="submit" class="btn btn-primary">Submit</button>
								</form><br>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div>
									<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d7659.395484564212!2d80.37055308518063!3d16.287254676942197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sSri+Sri+Abhyasiddhi+Sairama+mandiram%2C+Vengalayapalam%2C+Guntur!5e0!3m2!1sen!2sin!4v1432206794364" width="100%" height="380" frameborder="0" style="border:0"></iframe>
								</div>
							</div>
						</div>
					</div>
    </div>
  </main>
  <!-- footer -->
  <script src="<?php echo base_url(); ?>public/js/jquery.min.1.10.1.js"></script>
  <?php include 'footer.php' ?>
</body>
</html>
