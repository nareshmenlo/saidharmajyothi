<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0 ">
<title>రీసెంట్ యాక్టివిటీస్</title>
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
					<div class="holder"><img src="<?php echo base_url(); ?>public/images/subpagebanner10.jpg" width="1600" height="196" alt="" />
					</div>
				</div>
				<div class="textholder">
					<div class="container textblock">
						<div class="block">							
							<div class="page-title">
								<div class="holder">
									<h1>రీసెంట్ యాక్టివిటీస్</h1>
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
        <img src="<?php echo base_url(); ?>public/content/<?php echo $view_content['image']; ?>" class="img-responsive" alt=""><br>
        <?php include 't-leftblock.php' ?>                        
        </section>
        <!-- blogs -->
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 midcontent">
        	<p class="text-center"><?php echo stripslashes($view_content['content']); ?></p>
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
