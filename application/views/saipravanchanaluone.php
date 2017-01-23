<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0 ">
<title>Audio Gallery</title>
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
					<div class="holder"><img src="<?php echo base_url(); ?>public/images/subpagebanner9.jpg" width="1600" height="264" alt="" />
					</div>
				</div>
				<div class="textholder">
					<div class="container textblock">
						<div class="block">							
							<div class="page-title">
								<div class="holder">
									<h1><?php echo $view_saipravanchanalu['name']; ?></h1>
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
        <?php //include 'leftblock.php' ?>
        <!-- blogs -->
        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 midcontent">        
			<div>
						<div id="content">
                        	<div class="row">
                            	<div class="col-md-4 col-md-offset-4 midcontent">                            	
                                	   <iframe src="//yourlisten.com/embed/html5?<?php echo $view_saipravanchanalu['link']; ?>" frameborder="0" style='width:100%;'></iframe>                            
                            	</div>
                            </div>
                            
                        </div>
					</div>
      </div>
        <!-- upcoming events -->
      </div>
    </div>
  </main>
  <!-- footer -->
<script src="<?php echo base_url(); ?>public/js/jquery.min.1.10.1.js"></script>  
  <?php include 'footer.php' ?>
</body>
</html>
