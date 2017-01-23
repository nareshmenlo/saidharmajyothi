<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0 ">
<title>సాయి ధర్మ జ్యోతి</title>
<?php include 't-headerstyles.php' ?>
</head>
<body>
<!-- wrapper -->
<div id="wrapper">
  <!-- header -->
  <header id="header">
    <!-- topbar -->
    <?php include 't-header.php'?>
  </header>
 <section id="page-info" class="container-fluid">
			<div class="row">
				<div class="img-area">
					<div class="holder"><img src="<?php echo base_url(); ?>public/images/subpagebanner7.jpg" width="1600" height="196" alt="" />
					</div>
				</div>
				<div class="textholder">
					<div class="container textblock">
						<div class="block">							
							<div class="page-title">
								<div class="holder">
									<h1>సాయి ధర్మ జ్యోతి</h1>
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
      <div class="row">
        <section class="col-lg-3 col-xs-12 col-sm-6 media"> 
        <img src="<?php echo base_url(); ?>public/apartments/<?php echo $view_image1['pdf']; ?>" class="img-responsive" alt=""><br>
        <?php include 't-leftblock.php' ?>                        
        </section>
        <!-- blogs -->
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 midcontent">
        	<img src="<?php echo base_url(); ?>public/apartments/<?php echo $view_image1['image']; ?>" alt="" class="telimgresp"><br>
			<img src="<?php echo base_url(); ?>public/apartments/<?php echo $view_image2['image']; ?>" alt="" class="telimgresp"><br>
            <img src="<?php echo base_url(); ?>public/apartments/<?php echo $view_image3['image']; ?>" alt="" class="telimgresp">
      	</div>
        <!-- upcoming events -->
      </div>
    </div>
  </main>
  <!-- footer -->
  <script src="<?php echo base_url(); ?>public/js/jquery.min.1.10.1.js"></script>
  <?php include 't-footer.php' ?>
</body>
</html>